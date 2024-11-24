<?php

namespace App\Http\Controllers;

use App\Models\BookEditorial;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($edition_id)
    {
        $users = User::all();
        return view('comment/create', compact('users', 'edition_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $edition = BookEditorial::find($request->edition_id);

       $edition->users()->attach($request->user, ['comment' => $request->comment]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
