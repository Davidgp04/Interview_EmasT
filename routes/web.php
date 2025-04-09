<?php

use Illuminate\Support\Facades\Route;

$productControllerRoute = "App\Http\Controllers\ProductController";
$categoryControllerRoute = "App\Http\Controllers\CategoryController";
Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [$productControllerRoute, 'index'])->name('products.index');
Route::get('/products/create', [$productControllerRoute, 'create'])->name('products.create');
Route::post('/products', [$productControllerRoute, 'store'])->name('products.store');
Route::put('/products/{id}', [$productControllerRoute, 'update'])->name('products.update');
Route::get('/products/{id}/edit', [$productControllerRoute, 'edit'])->name('products.edit');
Route::get('/products/{id}', [$productControllerRoute, 'show'])->name('products.show');
Route::delete('/products/{id}', [$productControllerRoute, 'delete'])->name('products.delete');

Route::get('/categories', [$categoryControllerRoute, 'index'])->name('category.index');
Route::get('/categories/create', [$categoryControllerRoute, 'create'])->name('category.create');
Route::post('/categories', [$categoryControllerRoute, 'save'])->name('category.save');
Route::get('/categories/{id}', [$categoryControllerRoute, 'show'])->name('category.show');
Route::get('/categories/{id}/edit', [$categoryControllerRoute, 'edit'])->name('category.edit');
Route::put('/categories/{id}', [$categoryControllerRoute, 'update'])->name('category.update');
Route::delete('/categories/{id}', [$categoryControllerRoute, 'delete'])->name('category.delete');
