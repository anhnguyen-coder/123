@extends('layouts.app')
@section('title', 'Create Car')
@section('content')
    <form method="POST" action="/cars">
        @csrf
        <div>
            <label for="Make">Make</label>
            <input type="text" name="Make" id="Make">
        </div>
        <div>
            <label for="Model">Model</label>
            <input type="text" name="Model" id="Model">
        </div>
        <div>
            <label for="TravelledDistance">Travelled Distance</label>
            <input type="text" name="TravelledDistance" id="TravelledDistance">
        </div>
        <div>
            <label for="Parts">Parts</label>
            <select name="Parts" id="Parts">
                @foreach($parts as $part)
                    <option value="{{ $part->id }}">{{ $part->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
@endsection
