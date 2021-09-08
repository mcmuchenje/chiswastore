<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';

Route::get('/admin', [ProductController::class, 'index'])->name('products.index');

// ADMIN Products routes

Route::get('/admin/products', [ProductController::class, 'index'])->name('products.index')->middleware(['auth']);
Route::get('/admin/products/create', [ProductController::class, 'create'])->name('products.create')->middleware(['auth']);
Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware(['auth']);
Route::post('/admin/products', [ProductController::class, 'store'])->name('products.store')->middleware(['auth']);
Route::put('/admin/products/{product}', [ProductController::class, 'update'])->name('products.update')->middleware(['auth']);
Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware(['auth']);

// ADMIN Category Routes 

Route::get('/admin/category', [CategoryController::class, 'index'])->name('category.index')->middleware(['auth']);
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('category.create')->middleware(['auth']);
Route::post('/admin/category', [CategoryController::class, 'store'])->name('category.store')->middleware(['auth']);
Route::get('/admin/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit')->middleware(['auth']);
Route::put('/admin/category/{category}', [CategoryController::class, 'update'])->name('category.update')->middleware(['auth']);
Route::delete('/admin/category/{category}', [CategoryController::class, 'destroy'])->name('category.delete')->middleware(['auth']);

// ADMIN Users routes

Route::get('/admin/customers', function () {
    return ['message' => 'page not yet created, kindly go back'];
})->name('customers.index');

Route::get('/admin/orders', function () {
    return ['message' => 'page not yet created, kindly go back'];
})->name('orders.index');

Route::get('/admin/users', function () {
    return ['message' => 'page not yet created, kindly go back'];
})->name('users.index');


// Store Front routes

Route::get('/', function () {
    return redirect('/shop');
});

Route::get('/shop', [StoreController::class, 'index'])->name('store.index');
Route::get('/shop/checkout', [StoreController::class, 'show'])->name('store.show');

// Cart Routes

Route::get('/shop/cart', [CartController::class, 'index'])->name('cart.show');
Route::post('/shop/cart', [CartController::class, 'store'])->name('cart.store');

Route::get('/my-account', function () {
    return view('store/myaccount');
})->name('myaccount');


