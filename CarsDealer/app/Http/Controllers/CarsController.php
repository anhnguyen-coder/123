<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Parts;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Cars::all();
        // dd($cars);
        return view('cars.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parts = Parts::all();
        return view('cars.create', ['parts' => $parts]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car = new Cars();
        $car->Make = $request->input('Make');
        $car->Model = $request->input('Model');
        $car->TravelledDistance = $request->input('TravelledDistance');
        $car->save();
        $car->parts()->attach($request->input('parts'));
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Cars::find($id);
        // dd($car);
        return view('cars.show', ['car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Cars::find($id);
        $parts = Parts::all();
        return view('cars.edit', ['car' => $car, 'parts' => $parts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = Cars::find($id);
        $car->Make = $request->input('Make');
        $car->Model = $request->input('Model');
        $car->TravelledDistance = $request->input('TravelledDistance');
        $car->save();
        $car->parts()->sync($request->input('parts'));
        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Cars::find($id);
        $car->delete();
        return redirect()->route('cars.index');
    }
}
