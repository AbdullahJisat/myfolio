<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::all();
        return view('backend\pages\education\index', compact('educations'));
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
        if ($request->till == 1) {
            $end_date = date('j F Y');
            $request = $request->merge(['end_date' => $end_date]);
        }
        Education::create($request->all());
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
        return Education::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Education::findOrFail($request->id)->update($request->all());
        return back()->with('success', message('update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();
        return back()->with('success', message('delete'));
    }
}
