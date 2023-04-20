@extends('layouts.app')
@section('title', 'Edit Supplier')
@section('content')
    <form action="{{ route('suppliers.update', $supplier->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="Name">Name</label>
            <input type="text" name="Name" id="Name" value="{{ $supplier->name }}">
        </div>
        <div>
            <label for="IsImporter">Is Importer</label>
            <input type="checkbox" name="IsImporter" id="IsImporter" {{ $supplier->isImporter ? 'checked' : '' }}>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection