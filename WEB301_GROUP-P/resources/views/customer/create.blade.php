@extends('layouts.app')
@section('title', 'Create Customer')
@section('content')
    <form action="{{ route('customer.store') }}" method="POST">
        @csrf
        <div>
            <label for="Name">Name</label>
            <input type="text" name="Name" id="Name">
        </div>
        <div>
            <label for="Sex">Sex</label>
            <input type="text" name="Sex" id="Sex">
        </div>
        <div>
            <label for="phoneNumber">Phone Number</label>
            <input type="integer" name="phoneNumber" id="phoneNumber">
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
@endsection
