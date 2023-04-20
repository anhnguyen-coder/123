@extends('layouts.app')
@section('title', 'Suppliers')
@section('content')
    <h1>Suppliers</h1>
    <a href="{{ route('suppliers.create') }}" class="btn btn-primary">Create Supplier</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>IsImporter</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->Name }}</td>
                    <td>{{ $supplier->IsImporter? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection