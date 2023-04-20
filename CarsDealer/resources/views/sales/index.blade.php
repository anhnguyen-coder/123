@extends('layouts.app')
@section('title', 'Sales')
@section('content')
    <table>
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Car Make</th>
                <th>Car Model</th>
                <th>Discount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
                <tr>
                    <td>{{ $sale->customer->Name }}</td>
                    <td>{{ $sale->car->Make }}</td>
                    <td>{{ $sale->car->Model }}</td>
                    <td>{{ $sale->Discount }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection