@extends('layouts.app')
@section('title', 'Cars')
@section('content')
    <a href="{{ route('cars.create') }}">Create</a>
    <h1>Cars</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Make</th>
                <th>Model</th>
                <th>Travelled Distance</th>
                <th>Sale</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->make }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->travelledDistance }}</td>
                    <td>
                        @if ($car->sale)
                            <a href="{{ route('sales.show', $car->sale->id) }}">{{ $car->sale->discount }}</a>
                        @endif
                    <td>
                        <a href="{{ route('cars.show', $car->id) }}" class="btn btn-info">Details</a>
                        <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-primary">Edit</a>
                        <form method="POST" action="{{ route('cars.destroy', $car->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection