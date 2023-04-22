<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Pitch;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $booking = Booking::all();
        return view('booking.index',['booking'=>$booking]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pitch = Pitch::all();
        return view('booking.create',['pitch'=>$pitch]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $booking = new Booking();
        $booking->pitch_id = $request->input('pitch_id');
        $booking->customer_id = $request->input('customer_id');
        $booking->booking = $request->input('booking');
        $booking->save();
        return redirect()->route('booking.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $booking = Booking::find($id);
        return view('booking.show', ['booking' => $booking]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $pitch = Pitch::all();
        $customer = Customer::all();
        $booking = Booking::find($id);
        return view('booking.edit', ['booking' => $booking, 'customer'=>$customer,'pitch'=>$pitch]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $booking = Booking::find($id);
        $booking->pitch_id = $request->input('pitch_id');
        $booking->user_id = $request->input('user_id');
        $booking->booking = $request->input('booking');
        $booking->save();
        return redirect()->route('booking.index');    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->route('booking.index');
    }
}
