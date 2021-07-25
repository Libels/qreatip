<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/category', function () {
    return view('category');
})->name('category');

Route::middleware(['auth:sanctum', 'verified'])->get('/product', function () {
    return view('products');
})->name('products');

Route::middleware(['auth:sanctum', 'verified'])->get('/product/{id}', function () {
    return view('products.show');
})->name('product');

Route::middleware(['auth:sanctum', 'verified'])->get('/chat/{id}', function () {
    return view('chat');
})->name('chat');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
