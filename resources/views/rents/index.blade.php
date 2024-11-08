@extends('layouts.plantilla')
@section('title', 'Rentas')
@section('content')
<div class="d-flex flex-column flex-md-row align-items-center justify-content-between mb-4 header-table">
    <h3>Control de rentas</h3>
    <a href="{{route('rents.create')}}" class="btn-create">Registrar renta</a>
</div>

@include('components.table', [
    'items' => $rents,
    'showRoute' => 'rents.show',
    'editRoute' => 'rents.edit',
    'deleteRoute' => 'rents.destroy',
    'hasDressname' => true
])
@endsection