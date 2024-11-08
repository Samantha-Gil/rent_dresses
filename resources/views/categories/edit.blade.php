@extends('layouts.plantilla')
@section('title', 'Modificar categoria')
@section('content')
    <h1>Modificar categoría</h1>
    <form action="{{route('categories.update', $category)}}" method="POST">
        @csrf
        @method("PUT")
        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{old('name', $category->name)}}">
        </label>
        @error('name')
            <br>
            <span>{{$message}}</span>
            <br>
        @enderror
        <br>
        <label>
            Slug:<br>
            <input type="text" disabled name="slug" required value="{{$category->slug}}">
        </label><br>
        <label>
            Descripción:<br>
            <textarea name="description" rows="5">{{old('description', $category->description)}}</textarea>
        </label>
        @error('description')
            <br>
            <span>{{$message}}</span>
            <br>
        @enderror
        <br>
        <button type="submit">Modificar</button>
    </form>
    <a href="{{route('categories.index')}}">Volver a categorias</a>
@endsection
