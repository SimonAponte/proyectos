<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editorials = Editorial::all();
        return view('editorial/index', compact('editorials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('editorial/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $editorial = new Editorial();
        $editorial->name = $request->name;
        $editorial->description = $request->description;
        $editorial->save();
        return redirect()->route('editorials');

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
