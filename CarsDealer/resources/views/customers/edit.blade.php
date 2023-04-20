@extends('layouts.app')
@section('title', 'Edit Customer')
@section('content')
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="Name">Name</label>
            <input type="text" name="Name" id="Name" value="{{ $customer->Name }}">
        </div>
        <div>
            <label for="BirthDate">Birth Date</label>
            <input type="date" name="BirthDate" id="BirthDate" value="{{ $customer->BirthDate }}">
        </div>
        <div>
            <label for="IsYoungDriver">Is Young Driver</label>
            <input type="checkbox" name="IsYoungDriver" id="IsYoungDriver" {{ $customer->IsYoungDriver ? 'checked' : '' }}>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
@endsection