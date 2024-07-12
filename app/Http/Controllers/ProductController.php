<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
     
        $products = Product::all();

        return view('product.view', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    public function edit()
    {
        return view('product.edit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        $product = Product::create([
            'user_id' => auth()->id(), 
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
}
