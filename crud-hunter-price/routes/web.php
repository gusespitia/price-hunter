<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [ProductController::class, 'index'])->name('home');

Route::resource('product', ProductController::class)->names([
    'index' => 'product.index',
    'create' => 'product.create',
    'store' => 'product.store',
    'show' => 'product.show',
    'edit' => 'product.edit',
    'update' => 'product.update',
    'destroy' => 'product.destroy',
]);

Route::resource('category', CategoryController::class)->names([
    'index' => 'category.index',
    'create' => 'category.create',
    'store' => 'category.store',
    'show' => 'category.show',
    'edit' => 'category.edit',
    'update' => 'category.update',
    'destroy' => 'category.destroy',
]);
Route::resource('store', StoreController::class)->names([
    'index' => 'store.index',
    'create' => 'store.create',
    'store' => 'store.store',
    'show' => 'store.show',
    'edit' => 'store.edit',
    'update' => 'store.update',
    'destroy' => 'store.destroy',
]);




