<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/creëerbeheerder', function () {
    return view('creëerbeheerder');
})->middleware(['auth', 'verified'])->name('creëerbeheerder');

Route::get('/editbeheerder', function () {
    return view('editbeheerder');
})->middleware(['auth', 'verified'])->name('editbeheerder');

Route::get('/eigenticketsoverzichtklant', function () {
    return view('eigenticketsoverzichtklant');
})->middleware(['auth', 'verified'])->name('eigenticketsoverzichtklant');

Route::get('/overzichtbeheerder', function () {
    return view('overzichtbeheer');
})->middleware(['auth', 'verified'])->name('overzichtbeheerder');

Route::get('/puntenklant', function () {
    return view('puntenklant');
})->middleware(['auth', 'verified'])->name('puntenklant');

Route::get('/ticketsoverzichtklant', function () {
    return view('ticketsoverzichtklant');
})->middleware(['auth', 'verified'])->name('ticketsoverzichtklant');

Route::get('/detailpaginaticketboeken', function () {
    return view('detailpaginaticketboeken');
})->middleware(['auth', 'verified'])->name('detailpaginaticketboeken');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
