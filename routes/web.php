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

//# Rotta per il form di aggiunta del comic
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

//# Rotta Dettaglio comic
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

//# Rotta per il form di modifica del comic
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');

//# Rotta per salvare sul db il comic
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

//# Rotta per salvare sul db delle modifiche
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');

//# Rotta per eliminare sul db il comic
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');
