<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // $products = Product::all();
        // return view('products.index', compact('products'));
        // dd(Auth::user());
        

        return view('products.index', [
            'products' => DB::table('products')->paginate(3)
        ]);
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


    // \Log::info('Request data:', $request->all());
    // \Log::info('Has image:', ['has_file' => $request->hasFile('image')]);
    
    // if ($request->hasFile('image')) {
    //     \Log::info('Image details:', [
    //         'name' => $request->file('image')->getClientOriginalName(),
    //         'size' => $request->file('image')->getSize(),
    //         'valid' => $request->file('image')->isValid(),
    //     ]);
    // }
    
    



    //     $validated = $request->validated();

    //     return $request->all();
        
    //     $validated['owner_id'] = auth()->id();

    //     if ($request->hasFile('image')) {
    //         $path = $request->file('image')->store('products', 'public');
    //         $validated['image'] = $path;
    //     }

    //     Product::create($validated);


    //     return redirect()
    //         ->route('products.index')
    //         ->with('success','Produit enregistré avec succès !');

    try {
        \Log::info('=== DEBUT STORE ===');
        
        $validated = $request->validated();
        \Log::info('Validated data:', $validated);
        
        $validated['owner_id'] = 1; //auth()->id();
        \Log::info('Owner ID:', ['owner_id' => $validated['owner_id']]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            // $path = $file->store('products', 'uploads');

            $filename = time() . '_' .$file->getClientOriginalName();

            $file->move(public_path('uploads/products'), $filename);

            $validated['image'] = 'uploads/products/' . $filename;

            // $validated['image'] = $path;

            // \Log::info('Image stockée:', ['path' => $path]);

            \Log::info('Image stockée:', ['filename' => $filename]);
        } else {

            $validated['image'] = null;
        }

        \Log::info('Data avant create:', $validated);
        
        $product = Product::create($validated);
        
        \Log::info('Product créé:', $product->toArray());
        \Log::info('=== FIN STORE ===');

        return redirect()
            ->route('products.index')
            ->with('success', 'Produit enregistré avec succès !');
            
    } catch (\Exception $e) {
        \Log::error('ERREUR STORE:', [
            'message' => $e->getMessage(),
            'line' => $e->getLine(),
            'file' => $e->getFile(),
        ]);
        throw $e;
    }
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
