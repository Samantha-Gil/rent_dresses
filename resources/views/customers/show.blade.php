@extends('layouts.plantilla')
@section('title', 'Cliente: ' . $customer->name)
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="show-title">Información del cliente</h1>
        </div>
        <div class="col-12 col-md-8 col-lg-6 mx-auto">
            <div class="show-info p-4 show-details-container">
                <p><strong>Nombre: </strong> {{$customer->name}}</p>
                <p><strong>Apellido: </strong> {{$customer->surname}}</p>
                <p><strong>Email: </strong> {{$customer->email}}</p>
            </div>
        </div>
    </div>
    <div class="text-center mt-3">
        <a href="{{route('customers.index')}}" class="back-link">Ver lista de clientes</a>
    </div>
</div>
@endsection
