@extends('layouts.app')
@section('title', 'Part Details')
@section('content')
    <div>
        <h1>{{ $part->name }}</h1>
        <p>Price: {{ $part->price }}</p>
        <p>Quantity: {{ $part->quantity }}</p>
        <p>Supplier: {{ $part->supplier->name }}</p>
        <p>Is Importer: {{ $part->supplier->isImporter ? 'Yes' : 'No' }}</p>
    </div>
    <div>
        <a href="{{ route('parts.edit', $part->id) }}">Edit</a>
        <form action="{{ route('parts.destroy', $part->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>

@endsection