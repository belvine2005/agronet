<?php

namespace App\Http\Controllers;

use App\Models\prices_market;
use App\Http\Requests\Storeprices_marketRequest;
use App\Http\Requests\Updateprices_marketRequest;

class PricesMarketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('prices-market.price');
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
    public function store(Storeprices_marketRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(prices_market $prices_market)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prices_market $prices_market)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateprices_marketRequest $request, prices_market $prices_market)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prices_market $prices_market)
    {
        //
    }
}
