<?php

namespace App\Http\Controllers;

use App\Models\catalog;
use App\Http\Requests\StorecatalogRequest;
use App\Http\Requests\UpdatecatalogRequest;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecatalogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(catalog $catalog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(catalog $catalog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecatalogRequest $request, catalog $catalog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(catalog $catalog)
    {
        //
    }
}
