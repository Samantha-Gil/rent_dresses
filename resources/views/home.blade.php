@extends('layouts.plantilla')
@section('title', 'Home')
@section('content')
    <div class="container my-5">
        <div class="row g-3">
            <!--First image-->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('images/dress2.jpg')}}" class="card-img-top" alt="Vestido 1">
                    <div class="card-body">
                        <h5 class="card-title">Vestido de noche</h5>
                        <p class="card-text">Vestido largo de noche con abertura en la pierna de lado izquierdo.</p>
                    </div>
                </div>
            </div>
            <!--Second image-->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('images/d1.jpg')}}" class="card-img-top" alt="Vestido 2">
                    <div class="card-body">
                        <h5 class="card-title">Vestido de boda</h5>
                        <p class="card-text">Vestido largo color blanco para boda con encaje de flores.</p>
                    </div>
                </div>
            </div>
            <!--Third imagen-->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('images/d7.jpg')}}" class="card-img-top" alt="Vestido 3">
                    <div class="card-body">
                        <h5 class="card-title">Vestido corto</h5>
                        <p class="card-text">Vestido casual color blanco ideal para el día con mangas de encaje.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection