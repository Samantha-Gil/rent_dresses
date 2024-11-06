@extends('layouts.plantilla')
@section('title', 'Renta: ' . $rent->id)
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="show-title">Detalles de la renta</h1>
        </div>
        <div class="col-12 col-md-8 col-lg-6 mx-auto">
            <div class="show-info p-4 show-details-container">
                <p><strong>Nombre del cliente:</strong> {{$rent->customer->name}}</p>
                <p><strong>Nombre del vestido:</strong> {{$rent->dress->name}}</p>
                <p><strong>Monto: $</strong>{{$rent->amount}}</p>
                <p><strong>Inicio de renta:</strong> {{$rent->start_date}}</p>
                <p><strong>Fin de renta:</strong> {{$rent->end_date}}</p>
            </div>
        </div>
    </div>
    <div class="text-center mt-3">
        <a href="{{route('rents.index')}}" class="back-link">Ver lista de rentas</a>
    </div>
</div>
@endsection
