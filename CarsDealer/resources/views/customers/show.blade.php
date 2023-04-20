@extends('layouts.app')
@section('title', 'Customer Details')
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
            <tr>
                <td>{{ $customer->Name }}</td>
                <td>{{ $customer->BirthDate }}</td>
                <td>{{ $customer->IsYoungDriver }}</td>
            </tr>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th>Car Make</th>
                <th>Car Model</th>
                <th>Discount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customer->sales as $sale)
                <tr>
                    <td>{{ $sale->car->Make }}</td>
                    <td>{{ $sale->car->Model }}</td>
                    <td>{{ $sale->Discount }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection