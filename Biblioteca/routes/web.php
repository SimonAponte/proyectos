<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { 
    return view('welcome');
});

Route::get('/genres',[GenreController::class , 'index'])->name('genres');
Route::get('/search',[SearchController::class, 'index'])->name('search');
