@extends('layouts.app')
@section('title', 'Create Part')
@section('content')
    <form action="{{ route('parts.store')}}" method="post">
        @csrf
        <div>
            <label for="Name">Name</label>
            <input type="text" name="Name" id="Name">
        </div>
        <div>
            <label for="Price">Price</label>
            <input type="text" name="Price" id="Price">
        </div>
        <div>
            <label for="Quantity">Quantity</label>
            <input type="text" name="Quantity" id="Quantity">
        </div>
        <div>
            <label for="SupplierId">Supplier</label>
            <select name="SupplierId" id="SupplierId">
                @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
@endsection
