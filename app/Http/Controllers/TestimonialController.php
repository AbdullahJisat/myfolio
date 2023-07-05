<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('backend\pages\testimonial\index', compact('testimonials'));
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
        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('client'), $imageName);
            $image = 'client/' . $imageName;
        } else {
            $image = "";
        }

        // $request->merge(['image' => $image, 'file' => $files]);
        $data = $request->all();
        $data['image'] = $image;
        Testimonial::create($data);
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
        return Testimonial::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $testimonial = Testimonial::findOrFail($request->id);
        if ($request->has('image')) {
            if (file_exists(public_path($testimonial->image))) unlink(public_path($testimonial->image));
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('client'), $imageName);
            $image = 'client/' . $imageName;
        } else {
            $image = "";
        }

        // $request->merge(['image' => $image, 'file' => $files]);
        $data = $request->all();
        $data['image'] = $image;
        $testimonial->update($data);
        return back()->with('success', message('save'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        if (file_exists(public_path($testimonial->image))) unlink(public_path($testimonial->image));
        $testimonial->delete();
        return back()->with('success', message('delete'));
    }
}
