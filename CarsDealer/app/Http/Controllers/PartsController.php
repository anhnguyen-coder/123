<?php

namespace App\Http\Controllers;

use App\Models\Parts;
use App\Models\Suppliers;
use Illuminate\Http\Request;

class PartsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parts = Parts::all();
        return view('parts.index', ['parts' => $parts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Suppliers::all();
        return view('parts.create')->with('suppliers', $suppliers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $part = new Parts();
        $part->Name = $request->input('Name');
        $part->Price = $request->input('Price');
        $part->Quantity = $request->input('Quantity');
        $part->SupplierId = $request->input('SupplierId');
        $part->save();
        return redirect()->route('parts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $part = Parts::find($id);
        return view('parts.show', ['part' => $part]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $part = Parts::find($id);
        $suppliers = Suppliers::all();
        return view('parts.edit', ['part' => $part, 'suppliers' => $suppliers]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $part = Parts::find($id);
        $part->Name = $request->input('Name');
        $part->Price = $request->input('Price');
        $part->Quantity = $request->input('Quantity');
        $part->SupplierId = $request->input('SupplierId');
        $part->save();
        return redirect()->route('parts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $part = Parts::find($id);
        $part->delete();
        return redirect()->route('parts.index');
    }
}
