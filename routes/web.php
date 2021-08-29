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


// Admin routes

Route::get('/admin', [ProductController::class, 'index'])->middleware('auth')->name('products.index');
Route::get('/admin/products', [ProductController::class, 'show'])->middleware('auth')->name('products.show');
Route::get('/admin/product/create', [ProductController::class, 'create'])->middleware('auth')->name('product.create');
Route::get('/admin/product/edit', [ProductController::class, 'edit'])->middleware('auth')->name('product.edit');
Route::post('/admin/product', [ProductController::class, 'store'])->middleware('auth')->name('product.store');

Route::get('/admin/category', [CategoryController::class, 'index'])->middleware('auth')->name('category.index');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->middleware('auth')->name('category.create');
Route::post('/admin/category', [CategoryController::class, 'store'])->name('category.store')->middleware('auth');

Route::get('/admin/customers', function () {
    return ['message' => 'page not yet created, kindly go back'];
})->name('customers.index')->middleware('auth');

Route::get('/admin/orders', function () {
    return ['message' => 'page not yet created, kindly go back'];
})->name('orders.index')->middleware('auth');

Route::get('/admin/users', function () {
    return ['message' => 'page not yet created, kindly go back'];
})->name('users.index')->middleware('auth');


// Store Front routes

Route::get('/', function () {
    return redirect('/shop');
});

Route::get('/shop', [StoreController::class, 'index'])->name('shop.index');
Route::get('/shop/cart', [CartController::class, 'show'])->name('cart.show');
Route::post('/shop/cart', [CartController::class, 'store'])->name('cart.store');
Route::get('/shop/checkout', [StoreController::class, 'show'])->name('shop.checkout');

Route::get('/my-account', function () {
    return view('store/myaccount');
})->name('myaccount');


