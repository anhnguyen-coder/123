@extends('layouts.app')
@section('title', 'Edit Customer')
@section('content')
    <form action="{{ route('customer.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="Name">Name</label>
            <input type="text" name="Name" id="Name" value="{{ $customer->Name }}">
        </div>
        <div>
            <label for="Sex">Sex</label>
            <input type="text" name="Sex" id="Sex" value="{{ $customer->Sex }}">
        </div>
        <div>
            <label for="phoneNumber">Phone Number</label>
            <input type="integer" name="phoneNumber" id="phoneNumber" {{ $customer->phoneNumber  }}>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
@endsection