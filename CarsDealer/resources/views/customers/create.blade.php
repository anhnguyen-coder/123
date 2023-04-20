@extends('layouts.app')
@section('title', 'Create Customer')
@section('content')
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div>
            <label for="Name">Name</label>
            <input type="text" name="Name" id="Name">
        </div>
        <div>
            <label for="BirthDate">Birth Date</label>
            <input type="date" name="BirthDate" id="BirthDate">
        </div>
        <div>
            <label for="IsYoungDriver">Is Young Driver</label>
            <input type="checkbox" name="IsYoungDriver" id="IsYoungDriver">
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
@endsection
