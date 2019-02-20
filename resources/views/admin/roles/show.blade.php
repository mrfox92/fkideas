@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<div class="container-fluid content-roles">
    <div class="jumbotron mt-5 bg-info">
        <header>
            <h2 class="h1-responsive text-center">Detalle role usuario</h2>
        </header>
    </div>
    <div class="row d-flex justify-content-center align-item-center">
        <div class="col-md-10">
            <div class="card mt-4 mb-5">
                <div class="card-body">
                    <h2 class="h2-responsive text-left"><strong>Nombre Role:</strong> {{ $role->name }}</h2>
                    <h2 class="h2-responsive text-left"><strong>Descripción:</strong> {{ $role->description }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection