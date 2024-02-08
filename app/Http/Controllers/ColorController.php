<?php

namespace App\Http\Controllers;

use App\Models\color;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorecolorRequest;
use App\Http\Requests\UpdatecolorRequest;

class ColorController extends Controller
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
    public function store(StorecolorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(color $color)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecolorRequest $request, color $color)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(color $color)
    {
        //
    }
}
