@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<div class="container-fluid content-info">
    <div class="jumbotron mt-5 bg-info">
        <header>
            <h2 class="h1-responsive text-center">Detalle información empresa</h2>
        </header>
    </div>
    <div class="row d-flex justify-content-center align-item-center">
        <div class="col-md-10">
            <div class="card mt-4 mb-5">
                <div class="card-header text-center">
                    <h3 class="h3-responsive">{{ $info->title }}</h3>
                </div>
                <div class="card-body">
                    <h2 class="h4-responsive text-justify">{{ $info->location }}</h2>
                    <p class="h6-responsive text-justify">
                        {{ $info->description }}
                    </p>
                    <h2 class="h4-responsive text-justify">{{ $info->contact_number }}</h2>
                    <h2 class="h4-responsive text-justify">{{ $info->email }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection