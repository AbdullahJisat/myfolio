<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::with('category')->get();
        return view('backend\pages\portfolio\index', compact('portfolios'));
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
            $imageName = 'main-' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('portfolio'), $imageName);
            $image = 'portfolio/' . $imageName;
        } else {
            $image = "";
        }
        if ($request->has('file')) {
            foreach ($request->file as $key => $file) {
                $fileName = 'portfolio-' . $key++ . time() . '.' . $file->extension();
                $file->move(public_path('portfolio'), $fileName);
                $files[] = 'portfolio/' . $fileName;
            }
        } else {
            $files = "";
        }
        // $request->merge(['image' => $image, 'file' => $files]);
        $data = $request->all();
        $data['image'] = $image;
        $data['file'] = implode(',', $files);
        Portfolio::create($data);
        return back();
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
        return Portfolio::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd($request->all());
        $portfolio = Portfolio::findOrFail($request->id);
        if ($request->has('image')) {
            if (file_exists(public_path($portfolio->image))) unlink(public_path($portfolio->image));
            $imageName = 'main-' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('portfolio'), $imageName);
            $image = 'portfolio/' . $imageName;
        } else {
            $image = $portfolio->image;
        }
        if ($request->has('file')) {
            foreach (explode(",", $portfolio->file) as $file) {
                if (file_exists(public_path($file))) unlink(public_path($file));
            }
            foreach ($request->file as $key => $file) {
                $fileName = 'portfolio-' . $key++ . time() . '.' . $file->extension();
                $file->move(public_path('portfolio'), $fileName);
                $files[] = 'portfolio/' . $fileName;
            }
        }
        // $request->merge(['image' => $image, 'file' => $files]);
        $data = $request->all();
        $data['image'] = $image;
        $data['file'] = implode(',', $files);
        $portfolio->update($data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        if (file_exists(public_path($portfolio->image))) unlink(public_path($portfolio->image));
        foreach (explode(",", $portfolio->file) as $file) {
            unlink(public_path($file));
        }
        $portfolio->delete();
        return back()->with('success', message('delete'));
    }
}
