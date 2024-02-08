<?php

namespace App\Http\Controllers;

use App\Models\car;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorecarRequest;
use App\Http\Requests\UpdatecarRequest;

class CarController extends Controller
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
    public function store(StorecarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecarRequest $request, car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(car $car)
    {
        //
    }

    public function getCars()
    {
        $cars = Car::all();
        return response()->json($cars);
    }

    public function getOneCar(Request $request, $name)
    {
        $car = Car::where('name', $name)->first();

        if ($car) {
            return response()->json($car);
        } else {
            return response()->json(['error' => 'Car not found'], 404);
        }
    }

    public function addCar(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:20',
            'amount' => 'required|integer',
            'type_id' => 'required|exists:types,id',
            // ... egyéb validációk
        ]);

        $car = Car::create([
            'name' => $request->input('name'),
            'amount' => $request->input('amount'),
            'type_id' => $request->input('type_id'),
            // ... egyéb attribútumok
        ]);

        return response()->json($car, 201);
    }
}
