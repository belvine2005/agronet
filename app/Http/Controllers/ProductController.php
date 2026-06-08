<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductRequest $request)
    {
        $request->validated([
            'name' => 'required|string',
            'type' => 'required|string',
            'status' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'selling_unit' => 'nullable|string',
            'available_quantity' => 'required|numeric'
        
        ]);

        $validated = $request->validated();

        return $request->all();
        
        $validated['owner_id'] = auth()->id();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $validated['image'] = $path;
        }

        Product::create($validated);


        return redirect()
            ->route('products.index')
            ->with('success','Produit enregistré avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproductRequest $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }

    public function prices(){
        return view('prices_market.price');
    }
}
