<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/',[ProductController::class, 'index']);
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::get('/products/create', 'App\Http\Controllers\ProductController@create');
Route::resource('products', ProductController::class);

