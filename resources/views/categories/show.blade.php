@extends('layouts.plantilla')
@section('title', 'Categoria: ' . $category->name)
@section('content')
    <h1>Detalles de la categoria</h1>
    <p>Nombre: {{ $category->name }}</p>
    <p>Slug: {{ $category->slug }}</p>
    <p>Descripción: {{ $category->description }}</p>
    <a href="{{route('categories.index')}}">Volver a categorias</a>
    <br>
    <a href="{{route('categories.edit', $category)}}">Modificar categoría</a>
    <br>
    <form action="{{route('categories.destroy', $category)}}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit">Eliminar categoría</button>
    </form>
@endsection
