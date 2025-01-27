<?php

// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Het trait bevat de standaard logica voor login.
    use \Illuminate\Foundation\Auth\AuthenticatesUsers;

    // Deze functie wordt uitgevoerd na succesvolle login
    protected function authenticated(Request $request, $user)
    {
        // Roep de checkPuntenBijInloggen functie aan
        $user->checkPuntenBijInloggen();

        // Je kunt hier ook een redirect toevoegen naar een specifieke route
        return redirect()->intended('/dashboard'); // Je kunt dit aanpassen naar jouw eigen route
    }

    // Als je wilt dat de loginpagina naar een specifieke view verwijst
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Je kunt ook de standaard loginfunctionaliteit hier overschrijven als je wilt
    public function login(Request $request)
    {
        // Je kunt hier de validatie aanpassen als dat nodig is
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Probeer de gebruiker in te loggen
        if (Auth::attempt($request->only('email', 'password'))) {
            // Als inloggen succesvol is, roep dan de authenticated functie aan
            return $this->authenticated($request, Auth::user());
        }

        // Als het inloggen niet lukt, geef dan een foutmelding
        return back()->withErrors([
            'email' => 'De opgegeven gegevens zijn niet correct.',
        ]);
    }
}

