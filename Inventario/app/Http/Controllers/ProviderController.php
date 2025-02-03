<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $providers = Provider::all();

        return view('providers.index', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('providers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $provider = new Provider();
        $provider->name = $request->name;
        $provider->natural_person = $request->has('natural_person') ? true : false;
        $provider->bank = $request->bank;
        $provider->account_number = $request->account_number;
        $provider->save();

        return redirect()->route('providers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Provider $provider)
    {
        
        $products = $provider->products;
        return view('providers.show', compact('provider', 'products'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Provider $provider)
    {
        return view('providers.edit', compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Provider $provider)
    {
        
        $provider->name = $request->name;
        $provider->natural_person = $request->has('natural_person') ? true : false;
        $provider->bank = $request->bank;
        $provider->account_number = $request->account_number;

        $provider->save();

        return redirect()->route('providers.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provider $provider)
    {

        $provider->delete();

        return redirect()->route('providers.index');

    }

    public function showAddProductForm(Provider $provider)
    {

        $products = Product::all();

        return view('providers.addProduct', compact('provider', 'products'));
    }

    public function addProductProvider(Request $request, Provider $provider){

        $provider->products()->attach($request->product_id, ['stock' => $request->stock , 'cost' => $request->cost, 'purchase_date' => $request->purchase_date]);

        return redirect()->route('providers.index');

    }

    public function removeProductProvider(Request $request, Provider $provider){

        $provider->products()->wherePivot('id', $request->pivot_id)->detach($request->product_id);

        return redirect()->route('providers.show', $provider);

    }

    public function editProductProvider(Provider $provider, $pivot_id){
        $record = $provider->products()->wherePivot('id', $pivot_id)->first();
        return view('providers.editProduct', compact('provider', 'record'));
    }

    public function updateProductProvider(Request $request, Provider $provider){

        DB::table('product_provider')
        ->where('id', $request->pivot_id)
        ->update([
            'cost' => $request->input('cost'),
            'stock' => $request->input('stock'),
            'purchase_date' => $request->input('purchase_date'),
        ]);

        return redirect()->route('providers.show', $provider->id);
    }

}
