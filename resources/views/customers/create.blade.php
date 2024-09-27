@extends('layouts.plantilla')
@section('title', 'Registrar cliente')
@section('content')
    <h1>Nuevo cliente</h1>
    <form action="{{route('customers.store')}}" method="POST">
        @csrf
        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{old('name')}}">
        </label><br>
        @error('name')
            <br>
            <span>{{$message}}</span>
            <br>
        @enderror
        <label>
            Apellido:<br>
            <input type="text" name="surname" value="{{old('surname')}}">
        </label><br>
        @error('surname')
            <br>
            <span>{{$message}}</span>
            <br>
        @enderror
        <label>
            Correo electrónico:<br>
            <input type="email" name="email" value="{{old('email')}}">
        </label><br>
        @error('email')
            <br>
            <span>{{$message}}</span>
            <br>
        @enderror
        <button type="submit">Registrar</button>
    </form>
    <a href="{{route('customers.index')}}">Ver lista de clientes</a>
@endsection

