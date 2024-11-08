@extends('layouts.plantilla')
@section('title', 'Modificar categoria')
@section('hide_header', true)
@section('content')
<div class="form-create">
    <h1>Actualizar categoría</h1>
    <form action="{{route('categories.update', $category)}}" method="POST" class="form-container">
        @csrf
        @method("PUT")
        @include('components.form', [
            'name' => 'name',
            'label' => 'Nombre',
            'type' => 'text',
            'value' => old('name', $category->name)
        ])
        
        <label>
            Slug:<br>
            <input type="text" disabled name="slug" required value="{{$category->slug}}">
        </label><br>

        @include('components.form', [
            'name' => 'description',
            'label' => 'Descripción',
            'type' => 'textarea',
            'rows' => 5,
            'value' => old('description', $category->description)
        ])
        <button type="submit">Modificar</button>
    </form>
    <a href="{{route('categories.index')}}">Volver a categorias</a>
</div>
@endsection
