@extends('layouts.app')
@section('title', 'Edit Sale')
@section('content')
    <form method="POST" action="/sales/{{ $sale->id }}">
        @csrf
        @method('PUT')
        <div>
            <label for="CarId">Car</label>
            <select name="CarId" id="CarId">
                @foreach ($cars as $car)
                    <option value="{{ $car->id }}" {{ $car->id == $sale->CarId ? 'selected' : '' }}>{{ $car->Make }} {{ $car->Model }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="CustomerId">Customer</label>
            <select name="CustomerId" id="CustomerId">
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $customer->id == $sale->CustomerId ? 'selected' : '' }}>{{ $customer->Name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="Discount">Discount</label>
            <input type="text" name="Discount" id="Discount" value="{{ $sale->Discount }}">
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>    

@endsection