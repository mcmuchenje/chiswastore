<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Gloudemans\Shoppingcart\Contracts\Buyable;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function getBuyableIdentifier(){
        return $this->id;
    }

    public function getBuyableDescription(){
        return $this->name;
    }

    public function getBuyablePrice(){
        return $this->price;
    }
    
    public function index()
    {
        return view('admin/products', [
            'products' => Product::all()
        ]);
    }

    public function create()
    {
        return view('admin/productcreate' , [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request) 
    {

        $validated = $request->validate([
            'name' => 'required',
            'amount' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required'
        ]);
        
        $response = cloudinary()->upload(
            $request->file('file')->getRealPath(), [
            'transformation' => [
                'gravity' => 'auto',
                'width' => 230,
                'height' => 160,
                'crop' => 'crop'
            ]
        ])->getSecurePath();
           
        $result = $request->file->storeOnCloudinary('chiswastore');

        Product::create([
            'name' => $request->name,
            'amount' => $request->amount,
            'image' => $response,
            'category_id' => $request->category,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');

    }

    public function edit(Product $product)
    {
        return view('admin/productedit', [
            'product' => $product,
            'categories' => Category::all()

        ]);
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required',
            'amount' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required'
        ]);

        $response = cloudinary()->upload(
            $request->file('file')->getRealPath(), [
            'transformation' => [
                'gravity' => 'auto',
                'width' => 230,
                'height' => 160,
                'crop' => 'crop'
            ]
        ])->getSecurePath();
           
        $result = $request->file->storeOnCloudinary('chiswastore');

        $product->update([
            'name' => $request->name,
            'amount' => $request->amount,
            'image' => $response,
            'category_id' => $request->category,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
    
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
