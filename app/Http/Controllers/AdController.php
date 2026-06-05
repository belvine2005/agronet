<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Http\Requests\StoreadRequest;
use App\Http\Requests\UpdateadRequest;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = Ad::all();

        return view('ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('ads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreadRequest $request)
    {
        //
        $request->validate([
            'heaader'=>'required|string',
            'description'=>'required|string',
            'image'=>'string',
            'adress_indication'=>'required|string',
        ]);
        
        Ad::create($request->all());
        return redirect()->route('ads.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ad $ad)
    {
        return view('ads.show', compact('ad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ad $ad)
    {
        return view('ads.edit', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateadRequest $request, Ad $ad)
    {
        $ad->update($request->all());

        return redirect()->route('ads.show', $ad);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ad $ad)
    {
        $ad->delete();

        return redirect()->route('ads.index');
    }
}
