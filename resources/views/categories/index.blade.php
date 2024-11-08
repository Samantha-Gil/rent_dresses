@extends('layouts.plantilla')
@section('title', 'Categorias')
@section('content')
<div class="d-flex flex-column flex-md-row align-items-center justify-content-between mb-4 header-table">
    <h3>Categorías de vestidos</h3>
    <a href="{{route('categories.create')}}" class="btn-create">Crear categoría</a>
</div>

@include('components.table', [
    'items' => $categories,         
    'showRoute' => 'categories.show',
    'editRoute' => 'categories.edit', 
    'deleteRoute' => 'categories.destroy',
    'hasDescription' => true
])
@endsection
