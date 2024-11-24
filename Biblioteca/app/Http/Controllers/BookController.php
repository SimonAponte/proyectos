<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\BookEditorial;
use App\Models\Editorial;
use App\Models\Genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('book/index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        $genres = Genre::all();
        $editorials = Editorial::all();
        return view('book/create', compact('authors', 'genres', 'editorials'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'authors' => 'required|array',
            'authors.*' => 'exists:authors,id',
            'genres' => 'required|array',
            'genres.*' => 'exists:genres,id',
            'editorial' => 'required|exists:editorials,id',

        ]);

        $book = Book::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        $book->authors()->attach($request->authors);
        $book->genres()->attach($request->genres);
        $book->editorials()->attach($request->editorial, ['edition_number' => $request->edition_number, 'url' => $request->url]);

        return redirect()->route('books')->with('success', 'Libro creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {  
        $bookEditorial = BookEditorial::where('book_id', $book->id)->get();
        return view('book/show', compact('book', 'bookEditorial'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
