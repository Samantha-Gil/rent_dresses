@extends('layouts.plantilla')

@section('title', 'Registrar cliente')

@section('hide_header', true)

@section('content')
    <div class="form-create">
        <h1>Nuevo cliente</h1>
        <form action="{{ route('customers.store') }}" method="POST" class="form-container">
            @csrf
            @include('components.form', [
                'name' => 'name',
                'label' => 'Nombre',
                'type' => 'text',
            ])

            @include('components.form', [
                'name' => 'surname',
                'label' => 'Apellido',
                'type' => 'text',
            ])

            @include('components.form', [
                'name' => 'email',
                'label' => 'Correo electrónico',
                'type' => 'email',
            ])

            <button type="submit">Registrar</button>
        </form>

        <a href="{{ route('customers.index') }}">Ver lista de clientes</a>
    </div>
@endsection
