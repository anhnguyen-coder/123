@extends('layouts.app')
@section('title', 'Customers')
@section('content')
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Birth Date</th>
                <th>Is Young Driver</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->Name }}</td>
                    <td>{{ $customer->BirthDate }}</td>
                    <td>{{ $customer->IsYoungDriver }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection