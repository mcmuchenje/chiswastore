<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class StoreController extends Controller
{
    public function index() 
    {
        return view('store/store', [
            'products' => Product::all()
        ]);
    }
    public function show() {
        return view('store/cart');

    }
}
