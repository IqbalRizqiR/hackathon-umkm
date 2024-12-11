<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productImages = Product::all();

        return view('product-images.index', compact('productImages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product-images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:3072',
            'status' => 'required|accepted:active,inactive'
        ]);

        $productImage = ProductImage::create($validatedData);

        return redirect()->route('product-images.index')->with('success', 'Product Image created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productImage = Product::findOrFail($id);

        return view('product-images.show', compact('productImage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $productImage = ProductImage::findOrFail($id);
        $products = Product::all();

        return view('product-images.edit', compact('productImage', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $productImage = ProductImage::findOrFail($id);
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:3072',
            'status' => 'required|accepted:active,inactive'
        ]);

        $productImage->update($validatedData);

        return redirect()->route('product-images.index')->with('success', 'Product Image updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productImage = ProductImage::findOrFail($id);
        $productImage->delete();

        return redirect()->route('product-images.index')->with('success', 'Product Image deleted successfully.');
    }
}

