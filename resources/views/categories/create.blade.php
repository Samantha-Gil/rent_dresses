@extends('layouts.plantilla')

@section('title', 'Crear categoria')

@section('hide_header', true)

@section('content')
    <div class="form-create">
        <h1>Nueva categoría</h1>
        <form action="{{ route('categories.store') }}" method="POST" class="form-container">
            @csrf
            @include('components.form', [
                'name' => 'name',
                'label' => 'Nombre',
                'type' => 'text',
            ])

            @include('components.form', [
                'name' => 'description',
                'label' => 'Descripción',
                'type' => 'textarea',
                'rows' => 5,
            ])

            <button type="submit">Registrar</button>
        </form>

        <a href="{{ route('categories.index') }}">Ver lista de categorias</a>
    </div>
@endsection
