@extends('layouts.app')
@section('title', 'Parts')
@section('content')
    <div>
        <a href="{{ route('parts.create') }}">Create Part</a>
    </div>
    <div>
        <table>
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
            @foreach($parts as $part)
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
    </div>
@endsection