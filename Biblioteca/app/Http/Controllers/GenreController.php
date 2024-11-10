<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
       
        $genres = Genre::all();
        $booksforgenre = [];
        $books = []; 

        foreach($genres as $genre)
        {
            foreach ($genre->books as $book) {
                $books[] = $book;
                 
            }
            $booksforgenre += [$genre->title => $books];  
        }
        
        dd($booksforgenre);
    }
}
