<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/authors', [AuthorController::class, 'index'])->name('authors');
Route::get('/author/create', [AuthorController::class, 'create'])->name('author/create');
Route::post('/author/store', [AuthorController::class, 'store'])->name('author/store');

Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/book/create', [BookController::class, 'create'])->name('book/create');
Route::post('/book/store', [BookController::class, 'store'])->name('book/store');
Route::get('/book/show/{book}', [BookController::class, 'show'])->name('book/show');

Route::get('/genres', [GenreController::class, 'index'])->name('genres');
Route::get('/genre/create', [GenreController::class, 'create'])->name('genre/create');
Route::post('/genre/store', [GenreController::class, 'store'])->name('genre/store');

Route::get('/editorials', [EditorialController::class, 'index'])->name('editorials');
Route::get('/editorial/create', [EditorialController::class, 'create'])->name('editorial/create');
Route::post('/editorial/store', [EditorialController::class, 'store'])->name('editorial/store');

Route::get('/comment/create/{edition_id}', [CommentController::class, 'create'])->name('comment/create');
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment/store');