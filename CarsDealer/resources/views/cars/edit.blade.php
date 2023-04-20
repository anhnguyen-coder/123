@extends('layouts.app')
@section('title', 'Edit Car')
@section('content')
    <form method="POST" action="/cars/{{ $car->id }}">
        @csrf
        @method('PUT')
        <div>
            <label for="Make">Make</label>
            <input type="text" name="Make" id="Make" value="{{ $car->Make }}">
        </div>
        <div>
            <label for="Model">Model</label>
            <input type="text" name="Model" id="Model" value="{{ $car->Model }}">
        </div>
        <div>
            <label for="TravelledDistance">Travelled Distance</label>
            <input type="text" name="TravelledDistance" id="TravelledDistance" value="{{ $car->TravelledDistance }}">
        </div>
        <div>
            <label for="Parts">Parts</label>
            <select name="Parts" id="Parts">
                @foreach($parts as $part)
                    <option value="{{ $part->id }}" {{ $car->Parts->contains($part) ? 'selected' : '' }}>{{ $part->Name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection