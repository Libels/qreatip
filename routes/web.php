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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
	Route::get('/', function () {
		return view('welcome');
	})->name('root');

	Route::get('/dashboard', function () {
	    return view('dashboard');
	})->name('dashboard');

	Route::get('/category', function () {
	    return view('category');
	})->name('category');

	Route::name('product.')->group(function () {
		Route::prefix('product')->group(function () {
			Route::get('/', function () {
				return view('products');
			})->name('list');

			Route::get('/view/{id}', function ($id) {
				return view('products.show', ['id' => $id]);
			})->name('view');

			Route::get('/create', function () {
				return view('products.create');
			})->name('create');

			Route::get('/edit/{product}', function ($product) {
				return view('products.edit', ['id' => $product]);
			})->name('edit');
		});
	});

	Route::name('invoice.')->group(function () {
		Route::prefix('invoice')->group(function () {
			Route::get('/', function () {
				return view('invoices');
			})->name('list');

			Route::get('/view/{id}', function ($id) {
				return view('invoices.show', ['id' => $id]);
			})->name('view');

			Route::get('/create', function () {
				return view('invoices.create');
			})->name('create');

			Route::get('/edit/{invoice}', function ($product) {
				return view('products.edit', ['id' => $product]);
			})->name('edit');
		});
	});

	Route::get('/chat/{id}', function () {
	    return view('chat');
	})->name('chat');
});
