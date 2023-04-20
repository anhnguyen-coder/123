@extends('layouts.app')
@section('title', 'Edit Part')
@section('content')
    <form action="{{ route('parts.update', $part->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="Name">Name</label>
            <input type="text" name="Name" id="Name" value="{{ $part->name }}">
        </div>
        <div>
            <label for="Price">Price</label>
            <input type="text" name="Price" id="Price" value="{{ $part->price }}">
        </div>
        <div>
            <label for="Quantity">Quantity</label>
            <input type="text" name="Quantity" id="Quantity" value="{{ $part->quantity }}">
        </div>
        <div>
            <label for="SupplierId">Supplier</label>
            <select name="SupplierId" id="SupplierId">
                @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->id }}" {{ $part->supplier_id == $supplier->id ? 'selected' : '' }}>{{ $supplier->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection