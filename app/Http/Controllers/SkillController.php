<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();
        return view('backend.pages.skill.index', compact('skills'));
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
        Skill::create($request->all());
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
        return Skill::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Skill::findOrFail($request->id)->update($request->all());
        return back()->with('success', message('update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return back()->with('success', message('delete'));
    }
}
