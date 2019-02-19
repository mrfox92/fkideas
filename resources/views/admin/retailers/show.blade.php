@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<div class="container-fluid content-retail">
    <div class="jumbotron mt-5 bg-info">
        <header>
            <h2 class="h1-responsive text-center">Detalle trabajo mueblería retail</h2>
        </header>
    </div>
    <div class="row d-flex justify-content-center align-item-center">
        <div class="col-md-10">
            <div class="card mt-4 mb-5">
                <div class="card-header text-center">
                    <h6 class="h6-responsive text-center">Título del trabajo u obra</h6>
                    <h3 class="h3-responsive">{{ $retail->title }}</h3>
                </div>
                <div class="card-body">
                    <h2 class="h2-responsive text-center">Lugar</h2>
                    <h2 class="h4-responsive text-justify">{{ $retail->location }}</h2>
                    <h2 class="h2-responsive text-center">Descripción trabajo</h2>
                    <p class="h6-responsive text-justify">
                        {{ $retail->description }}
                    </p>
                    @if ($retail->file)
                        <h2 class="h2-responsive text-center">Imagen trabajo terminado</h2>
                        <img class="img-fluid" src="{{ asset( $retail->file ) }}" alt="{{ $retail->title }}">
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection