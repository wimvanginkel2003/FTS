<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Jan Jansen',
            'email' => 'jan.jansen@example.com',
            'password' => Hash::make('janpassword'),
            'role' => 'customer',
            'punten' => 10,
            'punten_te_goed' => 5,
        ]);

        User::create([
            'name' => 'Sanne de Vries',
            'email' => 'sanne.devries@example.com',
            'password' => Hash::make('sannepassword'),
            'role' => 'customer',
            'punten' => 25,
            'punten_te_goed' => 12,
        ]);

        User::create([
            'name' => 'Pieter de Groot',
            'email' => 'pieter.degroot@example.com',
            'password' => Hash::make('pieterpassword'),
            'role' => 'customer',
            'punten' => 15,
            'punten_te_goed' => 7,
        ]);

        User::create([
            'name' => 'Laura van Dijk',
            'email' => 'laura.vandijk@example.com',
            'password' => Hash::make('laurapassword'),
            'role' => 'customer',
            'punten' => 30,
            'punten_te_goed' => 3,
        ]);

        User::create([
            'name' => 'Tom Bakker',
            'email' => 'tom.bakker@example.com',
            'password' => Hash::make('tombakker'),
            'role' => 'customer',
            'punten' => 5,
            'punten_te_goed' => 0,
        ]);

        User::create([
            'name' => 'Emma Smit',
            'email' => 'emma.smit@example.com',
            'password' => Hash::make('emmasmit'),
            'role' => 'customer',
            'punten' => 50,
            'punten_te_goed' => 20,
        ]);

        User::create([
            'name' => 'Admin Gebruiker',
            'email' => 'admin@example.com',
            'password' => Hash::make('adminpassword'),
            'role' => 'admin',
            'punten' => 0,
            'punten_te_goed' => 0,
        ]);


    }

}
