@extends('layouts.plantilla')
@section('title', 'Categoria: ' . $category->name)
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="show-title">Detalles de la categoría</h1>
        </div>
        <div class="col-12 col-md-8 col-lg-6 mx-auto">
            <div class="show-info p-4 show-details-container">
                <p><strong>Nombre:</strong> {{$category->name}}</p>
                <p><strong>Slug:</strong> {{$category->slug}}</p>
                <p><strong>Descripción:</strong> {{$category->description}}</p>
            </div>
        </div>
    </div>
    <div class="text-center mt-3">
        <a href="{{route('categories.index')}}" class="back-link">Volver a categorías</a>
    </div>
</div>
@endsection
