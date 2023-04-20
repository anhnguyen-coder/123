@extends('layouts.app')
@section('title', 'Create Sale')
@section('content')
    <form method="POST" action="/sales">
        @csrf
        <div>
            <label for="CarId">Car</label>
            <select name="CarId" id="CarId">
                @foreach ($cars as $car)
                    <option value="{{ $car->id }}">{{ $car->Make }} {{ $car->Model }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="CustomerId">Customer</label>
            <select name="CustomerId" id="CustomerId">
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->Name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="Discount">Discount</label>
            <input type="text" name="Discount" id="Discount">
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
@endsection
