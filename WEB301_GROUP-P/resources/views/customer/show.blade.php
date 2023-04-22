@extends('layouts.app')
@section('title', 'Customer Details')
@section('content')
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th> Sex</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $customer->Name }}</td>
                <td>{{ $customer->Sex }}</td>
                <td>{{ $customer->phoneNumber }}</td>
            </tr>
        </tbody>
    </table>
@endsection