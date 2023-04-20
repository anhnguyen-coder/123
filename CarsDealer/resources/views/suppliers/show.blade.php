@extends('layouts.app')
@section('title', 'Supplier Details')
@section('content')
    <h1>Supplier Details</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>IsImporter</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $supplier->name }}</td>
                <td>{{ $supplier->isImporter }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>

@endsection