@extends('layouts.plantilla')
@section('title', 'Cliente: ' . $customer->name)
@section('content')
    <h1>Información del cliente</h1>
    <p>Nombre: {{$customer->name}}</p>
    <p>Apellido: {{$customer->surname}}</p>
    <p>Email: {{$customer->email}}</p>
    <a href="{{route('customers.index')}}">Ver lista de clientes</a>
    <br>
    <a href="{{route('customers.edit', $customer)}}">Modificar cliente</a>
    <br>
    <form action="{{route('customers.destroy', $customer)}}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit">Eliminar cliente</button>
    </form>
@endsection
