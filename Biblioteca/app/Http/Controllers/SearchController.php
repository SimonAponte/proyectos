<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $title = $request->get('title');
        $books = Book::orderBy('id', 'DESC')
                    ->title($title)
                    ->paginate(4);
    
        return view('search', compact('books'));
    }
}
