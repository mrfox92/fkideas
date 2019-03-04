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
        @foreach ( $remodelacion_construccion->images as $item)
        <div class="col-md-4 mt-4 mb-5">
            <div class="card wow fadeInUp">
                <a data-fancybox="gallery" data-caption="{{ $remodelacion_construccion->description }}" href="{{ asset( $item->path ) }}">
                    <img class="img-fluid" src="{{ asset($item->path) }}" alt="{{ $item->name }}">
                </a>
            </div>
        </div>
        @endforeach
    </div>
</article>
</section>
@endsection