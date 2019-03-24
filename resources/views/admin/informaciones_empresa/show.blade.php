@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<div class="container-fluid content-info">
    <div class="jumbotron mt-5 bg-info">
        <header>
            <h2 class="h1-responsive text-center">Detalle Información Empresa</h2>
        </header>
    </div>
    <div class="row d-flex justify-content-center align-item-center">
        <div class="col-md-10">
            <div class="card mt-4 mb-5">
                <div class="card-header text-center">
                    <h3 class="h3-responsive">{{ $info->title }}</h3>
                </div>
                <div class="card-body">
                    <p class="h6-responsive text-justify">
                    {{ $info->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center align-item-center">
        <div class="col-md-10">
            <div class="card mt-4 mb-5">
                <div class="card-header text-center">
                    <h3 class="h3-responsive">Información de contacto</h3>
                </div>
                <div class="card-body">
                    <h6 class="h4-responsive"><i class="fas fa-phone"></i> {{ $info->phone_number }}</h6>
                    <h6 class="h4-responsive"><i class="fas fa-mobile-alt"></i> {{ $info->mobile_number }}</h6>
                    <h6 class="h4-responsive text-justify"><i class="far fa-envelope"></i> {{ $info->email }}</h6>
                    <h6 class="h4-responsive text-justify"><i class="fas fa-map-marker-alt"></i> {{ $info->location }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection