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
            return ['message' => 'page not yet created kindly go back'];
    }

    public function show()
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

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'amount' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

 
        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('images'), $imageName);

        Product::create([
            'name' => $request->name,
            'amount' => $request->amount,
            'image' => $imageName
        ]);

        return redirect()->route('products.show')
            ->with('success', 'Product created successfully.');

    }

    public function edit(Product $product)
    {
        ddd($product);
        return view('admin/productedit', [
            'product' => Product::findOrFail($product)

        ]);
    }

    public function destroy(Product $product)
    {
        $product->delete();
    
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
