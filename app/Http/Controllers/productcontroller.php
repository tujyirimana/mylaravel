<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Show all products
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Show the form to create a new product
    public function create()
    {
        return view('products.create');
    }

    // Store a new product in the database
    public function store(Request $request)
{
    $request->validate([
        'PName' => 'required|string|max:255',
        'PCode' => 'required|string|max:255', // Add validation for PCode
    ]);

    Product::create([
        'PName' => $request->PName,
        'PCode' => $request->PCode, // Pass PCode here
    ]);

    return redirect()->route('products.index')->with('success', 'Product created successfully.');
}


    // Show a single product
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    // Show the form to edit an existing product
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // Update a product in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'PName' => 'required|string|max:255',
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'PName' => $request->PName,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    // Delete a product from the database
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}