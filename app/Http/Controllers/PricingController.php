<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pricings = Pricing::all();
        return view('backend\pages\pricing\index', compact('pricings'));
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
    public function store(Request $request)
    {
        Pricing::create($request->all());
        return back()->with('success', message('save'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return Pricing::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Pricing::findOrFail($request->id)->update($request->all());
        return back()->with('success', message('update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pricing $pricing)
    {
        $pricing->delete();
        return back()->with('success', message('delete'));
    }
}
