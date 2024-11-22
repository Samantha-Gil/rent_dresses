@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <x-header />
    
    <x-navbar />
    <div class="container my-5">
        <div class="row g-3">
            <x-card image="images/dress2.jpg" title="Vestido de noche"
                description="Vestido largo de noche con abertura en la pierna de lado izquierdo.">
                <button class="btn btn-primary">Prueba slot</button>
            </x-card>

            <x-card image="images/d1.jpg" title="Vestido de boda"
                description="Vestido largo color blanco para boda con encaje de flores." />

            <x-card image="images/d7.jpg" title="Vestido corto"
                description="Vestido casual color blanco ideal para el día con mangas de encaje." />
        </div>
    </div>
@endsection
