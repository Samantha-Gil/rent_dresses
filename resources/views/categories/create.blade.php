@extends('layouts.plantilla')
@section('title', 'Crear categoria')
@section('content')
    <h1>Nueva categoría</h1>
    <form action="{{route('categories.store')}}" method="POST">
        @csrf
        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{old('name')}}">
        </label><br>
        <label>
            Descripción:<br>
            <textarea name="description" rows="5">{{old('description')}}</textarea>
        </label><br>
        <button type="submit">Registrar</button>
    </form>
    <a href="{{route('categories.index')}}">Volver a categorias</a>
@endsection