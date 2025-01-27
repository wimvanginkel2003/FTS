<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'soort_eten',
        'bedrijf',
        'punten',
        'beschrijving',
    ];



    public function users()
    {
        return $this->belongsToMany(User::class, 'user_coupons')
            ->withPivot('gebruik_datum', 'extra_informatie', 'code', 'code_verval') // Voeg de extra kolommen toe
            ->withTimestamps();
    }

}

