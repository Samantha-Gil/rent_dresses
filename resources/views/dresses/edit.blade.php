@extends('layouts.plantilla')

@section('title', 'Actualizar vestido')

@section('hide_header', true)

@section('content')
    <div class="form-create">
        <h1>Actualizar vestido</h1>
        <form action="{{ route('dresses.update', $dress) }}" method="POST" class="form-container">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="category_id">Categoría</label>

                <select id="category_id" name="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $dress->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>

                @error('category_id')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            @include('components.form', [
                'name' => 'name',
                'label' => 'Nombre',
                'type' => 'text',
                'value' => old('name', $dress->name),
            ])

            <label>
                Slug:<br>
                <input type="text" disabled name="slug" value="{{ $dress->slug }}">
            </label><br>

            @include('components.form', [
                'name' => 'price',
                'label' => 'Precio',
                'type' => 'number',
                'value' => old('price', $dress->price),
            ])

            @include('components.form', [
                'name' => 'description',
                'label' => 'Descripción',
                'type' => 'textarea',
                'rows' => 5,
                'value' => old('description', $dress->description),
            ])

            <button type="submit">Actualizar</button>
        </form>

        <a href="{{ route('dresses.index') }}">Ver lista de vestidos</a>
    </div>
@endsection
