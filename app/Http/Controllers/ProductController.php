<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

    public function show()
    {
        return view('admin/products', [
            'products' => Product::all()
        ]);
    }


    public function create()
    {
        return view('admin/productcreate');
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

    }
}
