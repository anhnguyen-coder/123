<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Customers;
use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sales::all();
        return view('sales.index', ['sales' => $sales]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cars = Cars::all();
        $customers = Customers::all();
        return view('sales.create', ['cars' => $cars, 'customers' => $customers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sale = new Sales();
        $sale->Discount = $request->input('Discount');
        $sale->CarId = $request->input('CarId');
        $sale->CustomerId = $request->input('CustomerId');
        $sale->save();
        return redirect()->route('sales.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sale = Sales::find($id);
        return view('sales.show', ['sale' => $sale]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cars = Cars::all();
        $customers = Customers::all();
        $sale = Sales::find($id);
        return view('sales.edit', ['sale' => $sale, 'cars' => $cars, 'customers' => $customers]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sale = Sales::find($id);
        $sale->Discount = $request->input('Discount');
        $sale->CarId = $request->input('CarId');
        $sale->CustomerId = $request->input('CustomerId');
        $sale->save();
        return redirect()->route('sales.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sale = Sales::find($id);
        $sale->delete();
        return redirect()->route('sales.index');
    }
}
