@extends('layouts.plantilla')
@section('title', 'Modificar cliente')
@section('content')
    <h1>Modificar cliente</h1>
    <form action="{{route('customers.update', $customer)}}" method="POST">
        @csrf
        @method("PUT")
        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{old('name', $customer->name)}}">
        </label><br>
        <label>
            Apellido:<br>
            <input type="text" name="surname" value="{{old('surname', $customer->surname)}}">
        </label><br>
        <label>
            Correo electrónico:<br>
            <input type="email" name="email" value="{{old('email', $customer->email)}}">
        </label><br>
        <button type="submit">Modificar</button>
    </form>
    <a href="{{route('customers.index')}}">Ver lista de clientes</a>
@endsection
