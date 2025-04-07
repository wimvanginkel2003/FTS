<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BusboekenController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketBoekenController;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;

// Route: Home
Route::get('/', function () {
    return view('welcome');
});

// Route: Creëer beheerder (alleen toegankelijk voor admin)
Route::get('/creëerbeheerder', function () {
    if (Gate::denies('is-admin')) {
        abort(403, 'U hebt geen toegang tot deze pagina.');
    }
    return view('creëerbeheerder');
})->middleware(['auth', 'verified'])->name('creëerbeheerder');

// Route: Edit beheerder (alleen toegankelijk voor admin)
Route::get('/edit/{id}', [BusboekenController::class, 'edit'])
    ->middleware(['auth', 'verified'])
    ->name('editbeheerder')
    ->can('is-admin');


Route::get('/eigenticketsoverzichtklant', [TicketBoekenController::class, 'eigentickets'])
    ->middleware(['auth', 'verified'])
    ->name('eigenticketsoverzichtklant');


// Route: Overzicht beheerder (alleen toegankelijk voor admin)
Route::get('/overzichtbeheerder', [BusboekenController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('overzichtbeheerder')
    ->can('is-admin');


Route::get('/puntenklant', [CouponController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('puntenklant');

// Route om een nieuwe coupon toe te voegen (beheerder)
Route::get('/creëercouponbeheerder', [CouponController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('creëercouponbeheerder');

// Route om een coupon op te slaan
Route::post('/coupons', [CouponController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('coupons.store');

// Route om alle coupons te tonen
Route::get('/coupons', [CouponController::class, 'index'])->name('coupons.index');

// Route om een specifieke coupon te bewerken
Route::get('/coupons/{coupon}/edit', [CouponController::class, 'edit'])->name('coupons.edit');

// Route om een coupon te verwijderen
Route::delete('/coupons/{coupon}', [CouponController::class, 'destroy'])->name('coupons.destroy');


// Route: Ticketsoverzicht klant (alleen toegankelijk voor klant)
Route::get('/ticketsoverzichtklant', [BusboekenController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('ticketsoverzichtklant')
    ->can('is-customer');


Route::middleware(['auth', 'verified'])->group(function () {
    // Route om de details van de busreis te tonen (alleen voor klanten)
    Route::get('/busboeking/{bus_id}', [BusboekenController::class, 'show'])
        ->can('is-customer')
        ->name('detailpaginaticketboeken');

    // Route om de busreis te boeken (POST actie)
    Route::post('/busboeken/{bus_id}', [BusboekenController::class, 'bookBus'])
        ->name('boekBus');
});

Route::post('/coupons/{coupon}/ontgrendel', [CouponController::class, 'ontgrendelCoupon'])
    ->name('coupons.ontgrendel');


// Toon tickets van de ingelogde gebruiker
Route::get('/eigenticketsoverzichtklant', [TicketBoekenController::class, 'eigentickets'])->middleware(['auth', 'verified'])->name('eigenticketsoverzichtklant');

Route::delete('/verwijder-ticket/{busboekingId}', [TicketBoekenController::class, 'verwijderTicket'])
    ->middleware(['auth', 'verified'])
    ->name('verwijder-ticket');


// Boek een ticket voor de ingelogde gebruiker
Route::post('/boek-ticket/{busboekingId}', [TicketBoekenController::class, 'boekTicket'])
    ->middleware(['auth', 'verified'])
    ->name('boek-ticket');  // Zorg ervoor dat de naam hier is toegevoegd

Route::post('/coupons/ontgrendel/{coupon}', [CouponController::class, 'ontgrendelCoupon'])->name('ontgrendelCoupon');



// routes/web.php

// Route voor de loginpagina
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

// Route voor het inloggen
Route::post('login', [LoginController::class, 'login']);

// Als de gebruiker is ingelogd, kun je ze naar de gewenste pagina sturen
Route::get('/dashboard', function () {
    return view('dashboard'); // Je kunt dit aanpassen naar jouw eigen dashboard view
})->middleware('auth');


Route::post('/bus-ticket', [BusboekenController::class, 'store'])->name('bus-ticket.store');

// Route om een coupon bij te werken (PUT)
Route::put('/coupons/{coupon}', [CouponController::class, 'update'])->name('coupons.update');


Route::get('/busboeken/{busboeken}', [BusboekenController::class, 'show'])->name('detailpaginaticketboeken');


Route::put('/update/{id}', [BusboekenController::class, 'update'])->name('updatebeheerder');

Route::delete('/delete/{id}', [BusboekenController::class, 'destroy'])->name('deletebeheerder');


// Profile routes (alleen toegankelijk voor geauthenticeerde gebruikers)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
