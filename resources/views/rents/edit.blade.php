@extends('layouts.plantilla')

@section('title', 'Actualizar renta')

@section('hide_header', true)

@section('content')
    <div class="form-create">
        <h1>Actualizar renta</h1>
        <form action="{{ route('rents.update', $rent) }}" method="POST" class="form-container">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="customer_id">Cliente</label>

                <select id="customer_id" name="customer_id" class="form-control">
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}"
                            {{ old('customer_id', $rent->customer_id) == $customer->id ? 'selected' : '' }}>
                            {{ $customer->name }}</option>
                    @endforeach
                </select>

                @error('customer_id')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="dress_id">Vestido</label>

                <select id="dress_id" name="dress_id" class="form-control">
                    @foreach ($dresses as $dress)
                        <option value="{{ $dress->id }}"
                            {{ old('dress_id', $rent->dress_id) == $dress->id ? 'selected' : '' }}>{{ $dress->name }}
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
                'value' => old('amount', $rent->amount),
            ])

            @include('components.form', [
                'name' => 'start_date',
                'label' => 'Fecha de Inicio',
                'type' => 'date',
                'value' => old('start_date', $rent->start_date),
            ])

            @include('components.form', [
                'name' => 'end_date',
                'label' => 'Fecha de Fin',
                'type' => 'date',
                'value' => old('end_date', $rent->end_date),
            ])

            <button type="submit">Actualizar</button>
        </form>

        <a href="{{ route('rents.index') }}">Ver lista de rentas</a>
    </div>
@endsection
