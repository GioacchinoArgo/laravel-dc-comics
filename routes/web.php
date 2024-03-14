<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

//# Rotta Home
Route::get('/', function () {
    return view('home');
})->name('home');

//# Rotta Movies
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

//# Rotta Lista Comics
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

//# Rotta Aggiunzione del comic
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

//# Rotta Dettaglio comic
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

//# Rotta per salvare sul db il comic
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');