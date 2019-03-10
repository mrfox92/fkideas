@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<section class="view parallax-muebleria-bg" style="background-image: url({{ asset('storage/images/diseno.jpg') }});">
    <div class="mask flex-center rgba-black-light d-flex justify-content-center align-items-center">
        <div class="rgba-white-strong wow fadeIn py-4">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <h1 class="h1-responsive font-weight-bold text-center text-dark">{{ $remodelacion->title }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
<article class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item h6-responsive"><a href="{{ route('remodelacion_construccion.index') }}"><i class="fas fa-hand-point-left"></i> Volver a gestión remodelación y construcción</a></li>
            <li class="breadcrumb-item h6-responsive active" aria-current="page">{{ $remodelacion->title }} <small>(Vista demo)</small></li>
        </ol>
    </nav>
    <!-- <div class="row">
        @foreach ( $remodelacion->images as $item)
        <div class="col-md-4 mt-4 mb-5">
            <div class="card">
                <a data-fancybox="gallery" data-caption="{{ $remodelacion->description }}" href="{{ asset( $item->path ) }}">
                    <img class="img-fluid" src="{{ asset($item->path) }}" alt="{{ $item->name }}">
                </a>
            </div>
        </div>
        @endforeach
    </div> -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-ms-6 col-12 mt-4 mb-5">
            @foreach( $remodelacion->images as $key => $image )
                @if( $key === 0 )
                    <a class="card card-image wow fadeInUp grey-text" href="{{ asset( $image->path ) }}" 
                    data-fancybox="images-preview"
                    data-thumbs='{"autoStart":true}'
                    data-caption="{{ $remodelacion->description }}">
                        <h3 class="h4-responsive font-weight-bold text-center card-title py-4"><strong>{{ $remodelacion->title }}</strong></h3>
                        <img class="img-fluid" src="{{ asset( $image->path ) }}" />
                    </a>
                @else
                    <div style="display: none;">
                        <a href="{{ asset( $image->path) }}" data-fancybox="images-preview"
                            data-thumb="{{ asset( $image->path ) }}"
                            data-caption="{{ $remodelacion->description }}">
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
</article>
</section>
@endsection