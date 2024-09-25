@extends('layouts.plantilla')
@section('title', 'Crear categoria')
@section('content')
    <h1>Nueva categoría</h1>
    <form action="{{route('categories.store')}}" method="POST">
        @csrf
        <label>
            Nombre:<br>
            <input type="text" name="name">
        </label><br>
        <label>
            Slug:<br>
            <input type="text" name="slug" required>
        </label><br>
        <label>
            Descripción:<br>
            <textarea name="description" rows="5"></textarea>
        </label><br>
        <button type="submit">Registrar</button>
    </form>
    <a href="{{route('categories.index')}}">Volver a categorias</a>
@endsection