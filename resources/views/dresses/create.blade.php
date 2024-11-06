@extends('layouts.plantilla')
@section('title', 'Registrar vestido')
@section('hide_header', true)
@section('content')
<div class="form-create">
    <h1>Nuevo vestido</h1>
    <form action="{{route('dresses.store')}}" method="POST" class="form-container">
        @csrf
        <div class="form-group">
            <label for="category_id">Categoría</label>
            <select id="category_id" name="category_id" class="form-control">
                <option hidden>Seleccione una categoría</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
            @error('category_id')
                <span class="error">{{$message}}</span>
            @enderror
        </div>

        @include('components.form',[
            'name' => 'name',
            'label' => 'Nombre',
            'type' => 'text'
        ])

        @include('components.form', [
            'name' => 'price',
            'label' => 'Precio',
            'type' => 'number'
        ])

        @include('components.form', [
            'name' => 'description',
            'label' => 'Descripción',
            'type' => 'textarea',
            'rows' => 5
        ])
        <button type="submit">Registrar</button>
    </form>
    <a href="{{route('dresses.index')}}">Ver lista de vestidos</a>
</div>
@endsection
