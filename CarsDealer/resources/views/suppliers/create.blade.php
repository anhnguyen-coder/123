@extends('layouts.app')
@section('title', 'Create Suppliers')
@section('content')
    <form action="{{ route('suppliers.store')}}" method="post">
        @csrf
        <div>
            <label for="Name">Name</label>
            <input type="text" name="Name" id="Name">
        </div>
        <div>
            <label for="IsImporter">Is Importer</label>
            <input type="checkbox" name="IsImporter" id="IsImporter">
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
@endsection
