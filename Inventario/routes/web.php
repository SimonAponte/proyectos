<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});

Route::resource('/categories', CategoryController::class);
Route::get('/categories/{category}/add-product-form', [CategoryController::class, 'showAddProductForm'])->name('addProductForm');
Route::post('/categories/{category}/add-product', [CategoryController::class, 'addProduct'])->name('addProduct');
Route::delete('/categories/{category}/remove-product', [CategoryController::class, 'removeProduct'])->name('removeProduct');

Route::resource('/products', ProductController::class);

Route::resource('/providers', ProviderController::class);
Route::get('/providers/{provider}/add-product-form', [ProviderController::class, 'showAddProductForm'])->name('addProductFormProvider');
Route::post('/providers/{provider}/add-product', [ProviderController::class, 'addProductProvider'])->name('addProductProvider');
Route::delete('/providers/{provider}/remove-product', [ProviderController::class, 'removeProductProvider'])->name('removeProductProvider'); 
Route::get('/providers/{provider}/edit-product/{pivot_id}', [ProviderController::class, 'editProductProvider'])->name('editProductProvider');
Route::put('/providers/{provider}/update-product', [ProviderController::class, 'updateProductProvider'])->name('updateProductProvider'); 

Route::resource('/inventories', InventoryController::class);
Route::resource('/sales', SaleController::class);
