@extends('layouts.plantilla')

@section('title', 'Actualizar cliente')

@section('hide_header', true)

@section('content')
    <div class="form-create">
        <h1>Actualizar cliente</h1>
        <form action="{{ route('customers.update', $customer) }}" method="POST" class="form-container">
            @csrf
            @method('PUT')
            @include('components.form', [
                'name' => 'name',
                'label' => 'Nombre',
                'type' => 'text',
                'value' => old('name', $customer->name),
            ])

            @include('components.form', [
                'name' => 'surname',
                'label' => 'Apellido',
                'type' => 'text',
                'value' => old('surname', $customer->surname),
            ])

            @include('components.form', [
                'name' => 'email',
                'label' => 'Correo electrónico',
                'type' => 'email',
                'value' => old('email', $customer->email),
            ])

            <button type="submit">Actualizar</button>
        </form>

        <a href="{{ route('customers.index') }}">Ver lista de clientes</a>
    </div>
@endsection
