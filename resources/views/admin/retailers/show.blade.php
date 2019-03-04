@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<section class="view parallax-muebleria-bg" style="background-image: url({{ asset( $retail->images->first()->path )}});">
    <div class="mask flex-center rgba-black-light d-flex justify-content-center align-items-center">
        <div class="rgba-white-strong wow fadeIn py-4">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <h1 class="h1-responsive font-weight-bold text-center text-dark">{{ $retail->title }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
<article class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item h6-responsive"><a href="{{ route('retail.index') }}"><i class="fas fa-hand-point-left"></i> Volver a gestion mueblería retail</a></li>
            <li class="breadcrumb-item h6-responsive active">{{ $retail->title }} <small>(vista demo)</small></li>
        </ol>
    </nav>
    <div class="row">
        @foreach ( $retail->images as $item)
        <div class="col-md-4 mt-4 mb-5">
            <div class="card">
                <a data-fancybox="gallery" data-caption="{{ $retail->description }}" href="{{ asset( $item->path ) }}">
                    <img class="img-fluid" src="{{ asset($item->path) }}" alt="{{ $item->name }}">
                </a>
            </div>
        </div>
        @endforeach
    </div>
</article>
</section>
@endsection