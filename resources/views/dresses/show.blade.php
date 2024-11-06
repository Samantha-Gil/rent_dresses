@extends('layouts.plantilla')
@section('title', 'Vestido: ' . $dress->name)
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="show-title">Detalles del vestido</h1>
        </div>
        <div class="col-12 col-md-8 col-lg-6 mx-auto">
            <div class="show-info p-4 show-details-container">
                <p><strong>Categoría:</strong> {{$dress->category->name}}</p>
                <p><strong>Nombre:</strong> {{$dress->name}}</p>
                <p><strong>Slug:</strong> {{$dress->slug}}</p>
                <p><strong>Precio: $</strong>{{$dress->price}}</p>
                <p><strong>Descripción:</strong> {{$dress->description}}</p>
            </div>
        </div>
    </div>
    <div class="text-center mt-3">
        <a href="{{route('dresses.index')}}" class="back-link">Volver a vestidos</a>
    </div>
</div>
@endsection
