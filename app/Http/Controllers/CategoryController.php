<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        return view('admin/categories', [
            'categories' => Category::all()
        ]);
    }

    public function create() {
        return view('admin/categorycreate');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        Category::create($validated);
    }
}
