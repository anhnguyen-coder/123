<?php

namespace App\Http\Controllers;

use App\Models\Pitch;
use Illuminate\Http\Request;

class PitchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pitch = Pitch::all();
        return view('pitch.index',['pitch'=>$pitch]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pitch.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pitch = new Pitch();
        $pitch ->Pitch = $request->input('Pitch');
        $pitch ->Slot = $request->input('Slot');
        $pitch ->Status = $request->input('Status');
        $pitch->save();
        return redirect()->route('pitch.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $pitch = Pitch::find($id);
        return view('pitch.show',['pitch' => $pitch]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $pitch = Pitch::find($id);
        return view('pitch.edit',['pitch' => $pitch]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pitch = Pitch::find($id);
        $pitch ->Pitch = $request->input('Pitch');
        $pitch ->Status = $request->input('Status');
        $pitch->save();
        return redirect()->route('pitch.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pitch = Pitch::find($id);
        $pitch->delete();
        return redirect()->route('pitch.index');
    }
}
