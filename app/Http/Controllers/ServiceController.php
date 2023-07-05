<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('backend\pages\service\index', compact('services'));
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
        Service::create($request->all());
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
        return Service::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Service::find($request->service_id)->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return back();
    }
}
