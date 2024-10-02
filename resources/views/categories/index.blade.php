@extends('layouts.plantilla')
@section('title', 'Categorias')
@section('content')
    <h1>Categorias de vestidos</h1>
    <a href="{{route('categories.create')}}">Crear categoria</a>
    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a>
            </li>
        @endforeach
    </ul>
@endsection
