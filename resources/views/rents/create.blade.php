@extends('layouts.plantilla')

@section('title', 'Registrar renta')

@section('hide_header', true)

@section('content')
    <div class="form-create">
        <h1>Registrar renta</h1>
        <form action="{{ route('rents.store') }}" method="POST" class="form-container">
            @csrf
            <div class="form-group">
                <label for="customer_id">Cliente</label>

                <select id="customer_id" name="customer_id" class="form-control">
                    <option hidden>Seleccione un cliente</option>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}" {{ old('customer_id') == $customer->id ? 'selected' : '' }}>
                            {{ $customer->name }}
                        </option>
                    @endforeach
                </select>

                @error('customer_id')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="dress_id">Vestido</label>

                <select id="dress_id" name="dress_id" class="form-control">
                    <option hidden>Seleccione un vestido</option>
                    @foreach ($dresses as $dress)
                        <option value="{{ $dress->id }}" {{ old('dress_id') == $dress->id ? 'selected' : '' }}>
                            {{ $dress->name }}
                        </option>
                    @endforeach
                </select>

                @error('dress_id')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            @include('components.form', [
                'name' => 'amount',
                'label' => 'Monto',
                'type' => 'number',
            ])

            @include('components.form', [
                'name' => 'start_date',
                'label' => 'Fecha de Inicio',
                'type' => 'date',
            ])

            @include('components.form', [
                'name' => 'end_date',
                'label' => 'Fecha de Fin',
                'type' => 'date',
            ])

            <button type="submit">Registrar Renta</button>
        </form>

        <a href="{{ route('rents.index') }}">Ver lista de rentas</a>
    </div>
@endsection
