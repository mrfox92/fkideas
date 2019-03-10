@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<section class="view parallax-muebleria-bg" style="background-image: url({{ asset( 'storage/images/Madera-4.jpg' )}});">
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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-ms-6 col-12 mt-4 mb-5">
            @foreach( $retail->images as $key => $image )
                @if( $key === 0 )
                    <a class="card card-image wow fadeInUp grey-text" href="{{ asset( $image->path ) }}" 
                    data-fancybox="images-preview"
                    data-thumbs='{"autoStart":true}'
                    data-caption="{{ $retail->description }}">
                        <h3 class="h3-responsive font-weight-bold text-center card-title py-4"><strong>{{ $retail->title }}</strong></h3>
                        <img class="img-fluid" src="{{ asset( $image->path ) }}" />
                    </a>
                @else
                    <div style="display: none;">
                        <a href="{{ asset( $image->path) }}" data-fancybox="images-preview"
                            data-thumb="{{ asset( $image->path ) }}"
                            data-caption="{{ $retail->description }}">
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