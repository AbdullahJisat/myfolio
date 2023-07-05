<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('backend\pages\experience\index', compact('experiences'));
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
            $request = $request->merge(['end_date' => $end_date])->all();
        }
        Experience::create($request->all());
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
        return Experience::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Experience::findOrFail($request->id)->update($request->all());
        return back()->with('success', message('update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();
        return back()->with('success', message('delete'));
    }
}
