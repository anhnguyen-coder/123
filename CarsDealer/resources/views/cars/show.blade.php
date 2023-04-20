@extends('layouts.app')
@section('title', 'Car Details')
@section('content')
    Make: {{ $car->make }}
    <br/>
    Model: {{ $car->model }}
    <br/>
    Travelled Distance: {{ $car->travelledDistance }}   
    <br/>
    <a href="/cars/{{ $car->id }}/edit" class="btn btn-primary">Edit</a>

    <form method="POST" action="/cars/{{ $car->id }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>

    </form>
    <h1>Related Sale</h1>
    @if ($car->sale)
        <p>Discount: {{ $car->sale->discount }}</p>
        <p>Customer: {{ $car->sale->Customer->name }}</p>
        
    @endif

    <h1>Related Parts</h1>
    <a href="{{ route('parts.create') }}">Create</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Supplier</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($car->parts as $part)
                <tr>
                    <td>{{ $part->name }}</td>
                    <td>{{ $part->price }}</td>
                    <td>{{ $part->quantity }}</td>
                    <td>{{ $part->supplier->name }}</td>
                    <td>
                        <a href="{{ route('parts.edit', $part->id) }}">Edit</a>
                        <form action="{{ route('parts.destroy', $part->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    

@endsection