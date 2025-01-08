<?php

use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\ProfileController;
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
Route::get('/editbeheerder', function () {
    if (Gate::denies('is-admin')) {
        abort(403, 'U hebt geen toegang tot deze pagina.');
    }
    return view('editbeheerder');
})->middleware(['auth', 'verified'])->name('editbeheerder');

// Route: Eigen tickets overzicht klant (alleen toegankelijk voor klant)
Route::get('/eigenticketsoverzichtklant', function () {
    if (Gate::denies('is-customer')) {
        abort(403, 'U hebt geen toegang tot deze pagina.');
    }
    return view('eigenticketsoverzichtklant');
})->middleware(['auth', 'verified'])->name('eigenticketsoverzichtklant');

// Route: Overzicht beheerder (alleen toegankelijk voor admin)
Route::get('/overzichtbeheerder', function () {
    if (Gate::denies('is-admin')) {
        abort(403, 'U hebt geen toegang tot deze pagina.');
    }
    return view('overzichtbeheer');
})->middleware(['auth', 'verified'])->name('overzichtbeheerder');

// Route: Punten klant (alleen toegankelijk voor klant)
Route::get('/puntenklant', function () {
    if (Gate::denies('is-customer')) {
        abort(403, 'U hebt geen toegang tot deze pagina.');
    }
    return view('puntenklant');
})->middleware(['auth', 'verified'])->name('puntenklant');

// Route: Ticketsoverzicht klant (alleen toegankelijk voor klant)
Route::get('/ticketsoverzichtklant', function () {
    if (Gate::denies('is-customer')) {
        abort(403, 'U hebt geen toegang tot deze pagina.');
    }
    return view('ticketsoverzichtklant');
})->middleware(['auth', 'verified'])->name('ticketsoverzichtklant');

// Route: Detailpagina ticket boeken (alleen toegankelijk voor klant)
Route::get('/detailpaginaticketboeken', function () {
    if (Gate::denies('is-customer')) {
        abort(403, 'U hebt geen toegang tot deze pagina.');
    }
    return view('detailpaginaticketboeken');
})->middleware(['auth', 'verified'])->name('detailpaginaticketboeken');

// Profile routes (alleen toegankelijk voor geauthenticeerde gebruikers)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
