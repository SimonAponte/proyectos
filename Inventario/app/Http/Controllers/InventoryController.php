<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $inventories = Inventory::selectRaw('
            product_id, 
            COUNT(*) as total, 
            MIN(entry_date) as first_entry_date, 
            MAX(expiry_date) as last_expiry_date
        ')
        ->groupBy('product_id')
        ->get();

        return view('inventories.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('inventories.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inventory = new Inventory();

        $inventory->product_id = $request->product_id;
        $inventory->entry_date = $request->entry_date;
        $inventory->expiry_date = $request->expiry_date;

        $inventory->save();

        return redirect()->route('inventories.index');
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
