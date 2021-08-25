<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class StoreController extends Controller
{
    public function index() 
    {
        return view('store/store', [
            'products' => Product::all(),
            'categories' => Category::all()
        ]);
    }
    public function show() {
        return view('store/checkout');

    }
}
