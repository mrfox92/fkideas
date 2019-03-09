@extends('layouts.app')
@section('content')
<section class="view parallax-muebleria-bg" style="background-image: url({{ asset( $remodelacion_construccion->images->first()->path )}});">
    <div class="mask flex-center rgba-black-light d-flex justify-content-center align-items-center">
        <div class="rgba-white-strong wow fadeIn py-4">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <h1 class="h1-responsive font-weight-bold text-center text-dark">{{ $remodelacion_construccion->title }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
<article class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item h6-responsive"><a href="{{ route('remodelacion_construccion') }}">Remodelación y Construcción</a></li>
            <li class="breadcrumb-item h6-responsive active" aria-current="page">{{ $remodelacion_construccion->title }}</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <p class="h6-responsive text-justify mt-4 mb-4 wow fadeInUp">
                {{ $remodelacion_construccion->description }}
            </p>
        </div>
    </div>
    <div class="row mt-2 mb-2">
        <div class="col-md-12">
            <span class="h6-responsive text-justify wow fadeInUp">
                <i class="fas fa-map-marker-alt"></i> {{ $remodelacion_construccion->location }}
            </span>
        </div>
    </div>
    <div class="row">
        @foreach ( $remodelacion_construccion->images as $item)
        <div class="col-md-4 mt-4 mb-5">
            <div class="card wow fadeInUp">
                <a data-fancybox="gallery" href="{{ asset( $item->path ) }}">
                    <img class="img-fluid" src="{{ asset($item->path) }}" alt="{{ $item->name }}">
                </a>
            </div>
        </div>
        @endforeach
    </div>
</article>
</section>
@endsection