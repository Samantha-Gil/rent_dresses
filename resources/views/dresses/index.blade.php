@extends('layouts.plantilla')
@section('title', 'Vestidos')
@section('content')
<div class="d-flex flex-column flex-md-row align-items-center justify-content-between mb-4 header-table">
    <h3>Registrar vestido</h3>
    <a href="{{route('dresses.create')}}" class="btn-create">Registrar vestido</a>
</div>

@include('components.table', [
    'items' => $dresses,
    'showRoute' => 'dresses.show',
    'editRoute' => 'dresses.edit',
    'deleteRoute' => 'dresses.destroy',
    'hasPrice' => true,
    'hasCategory' => true
])
@endsection