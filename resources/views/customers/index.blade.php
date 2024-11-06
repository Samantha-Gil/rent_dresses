@extends('layouts.plantilla')
@section('title', 'Clientes')
@section('content')
<div class="d-flex flex-column flex-md-row align-items-center justify-content-between mb-4 header-table">
    <h3>Lista de clientes</h3>
    <a href="{{route('customers.create')}}" class="btn-create">Registrar cliente</a>
</div>

@include('components.table', [
    'items' => $customers,         
    'showRoute' => 'customers.show',
    'editRoute' => 'customers.edit', 
    'deleteRoute' => 'customers.destroy'
])
@endsection
