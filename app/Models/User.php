<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password', 'punten', 'punten_te_goed'];

    /**
     * Relatie met Busboekens.
     */
    public function busboekens(): BelongsToMany
    {
        return $this->belongsToMany(Busboeken::class, 'busboeken_user', 'user_id', 'busboeking_id');
    }

    /**
     * Relatie met Coupons.
     */
    public function coupons(): BelongsToMany
    {
        return $this->belongsToMany(Coupon::class, 'user_coupons')
            ->withPivot('gebruik_datum', 'extra_informatie', 'code', 'code_verval')
            ->withTimestamps();
    }

    /**
     * Controleer en schrijf punten over.
     */
    public function checkAndTransferPoints(): void
    {
        $now = now();
        $updated = false;

        foreach ($this->busboekens as $busboeking) {
            $vertrekTijd = Carbon::parse($busboeking->Vertrekdatum_heenreis);

            // Controleer of vertrek binnen 48 uur is en punten voldoende zijn
            if ($vertrekTijd->diffInHours($now, false) <= 48 && $this->punten_te_goed >= $busboeking->Punten) {
                // Verplaats punten_te_goed naar punten
                $this->punten += $busboeking->Punten;
                $this->punten_te_goed -= $busboeking->Punten;
                $updated = true;
            }
        }

        if ($updated) {
            $this->save();
        }
    }
}

