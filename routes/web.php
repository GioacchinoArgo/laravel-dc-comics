<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Lista Comics
Route::get('/comics', function () {
    $comics = config('comics');
    return view('products.index', compact('comics'));
})->name('comics');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// Dettaglio comics
Route::get('/show/{index}', function ($index) {

    $comics = config('comics');

    $show = $comics[$index];

    return view('products.show', compact('show'));
})->name('show');
