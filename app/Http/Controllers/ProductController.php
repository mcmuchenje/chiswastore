<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('test');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|unique:products|max:255',
            'amount' => 'required',
            'image' => 'required'
        ]);

        Product::create($validated);
    }
}
