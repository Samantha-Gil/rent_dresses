@extends('layouts.plantilla')
@section('title', 'Clientes')
@section('content')
    <h1>Lista de clientes</h1>
    <a href="{{route('customers.create')}}">Registrar cliente</a>
    <ul>
        @foreach ($customers as $customer)
            <li>
                <a href="{{route('customers.show', $customer->id)}}">{{$customer->name}}</a>
            </li>
        @endforeach
    </ul>
@endsection
