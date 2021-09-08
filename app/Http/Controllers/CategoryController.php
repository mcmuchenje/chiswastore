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

        return redirect()->route('category.index')
                        ->with('success','Category created successfully');
    }

    public function edit(Category $category) 
    {
        return view('admin/categoryedit', [
            'category' => $category
        ]);
    }


    public function update(Request $request, Category $category) 
    {
        $request->validate([
            'name' => 'required'
        ]);

        $category->update($request->all());

        return redirect()->route('category.index')
                        ->with('success','Category updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index')
                        ->with('success','Category deleted successfully');
    }
}
