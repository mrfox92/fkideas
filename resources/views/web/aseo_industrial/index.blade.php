@extends('layouts.app')
@section('content')
<style>
.parallax-muebleria-bg {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    height: 100vh;
    margin-top: 0px !important;
}
</style>
<!-- sección mueblería retail -->
<section class="view parallax-muebleria-bg" style="background-image: url({{ asset('storage/images/aseo-industrial.jpg')}});">
    <div class="mask flex-center rgba-black-light d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center wow fadeInUp mt-4 mb-4">
                <div class="col-md-12">
                    <h2 class="h1-responsive font-weight-bold text-center text-white mb-5">Aseo Industrial</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center mb-4">
                <div class="col-md-12">
                    <p class="h3-responsive text-justify text-white wow fadeInUp">
                        Equipo capacitado en limpieza industrial hacemos entregas de obra de alta calidad.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid">
<article class="container-fluid servicios-aseo-industrial">
    <h2 class="h2-responsive text-center font-weight-bold wow fadeInUp mt-5 mb-5">Servicios Aseo Industrial</h2>
    <BR>
    <div class="row d-flex d-flex justify-content-around">
        <!-- info aseo industrial -->
        <div class="card col-md-4 mt-3 mb-3 wow fadeInUp d-flex d-flex justify-content-around">
            <i class="text-center card-img-top h1-responsive far fa-check-circle mt-5 mb-5"></i>
            <div class="card-header">
                <h2 class="h2-responsive text-center">Aseo Industrial</h2>
            </div>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <!-- info aseo industrial -->
        <!-- info Lavado pisos -->
        <div class="card col-md-4 mt-3 mb-3 wow fadeInUp d-flex justify-content-around">
            <i class="text-center card-img-top h1-responsive fas fa-broom mt-5 mb-5"></i>
            <div class="card-header">
                <h2 class="h2-responsive text-center">Lavado de Pisos</h2>
            </div>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <!-- info Lavado pisos -->
    </div>
    <div class="row d-flex d-flex justify-content-around">
        <!-- info Lavado alfombras -->
        <div class="card col-md-4 mt-5 mb-5 wow fadeInUp d-flex d-flex justify-content-around">
            <i class="text-center card-img-top h1-responsive fas fa-square-full mt-5 mb-5"></i>
            <div class="card-header">
                <h2 class="h2-responsive text-center">Lavado de Alfombras</h2>
            </div>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <!-- info Lavado alfombras -->
        <!-- info Tratamiento especial pisos -->
        <div class="card col-md-4 mt-5 mb-5 wow fadeInUp d-flex d-flex justify-content-around">
            <i class="text-center card-img-top h1-responsive far fa-square mt-5 mb-5"></i>
            <div class="card-header">
                <h2 class="h2-responsive text-center">Tratamiento Especial de Pisos</h2>
            </div>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <!-- info Tratamiento especial pisos -->
    </div> 
</article>

<div class="container-fluid">
<!-- cards contenido aseo industrial -->
<div class="row mt-5 mb-5">
    <div class="col-md-12">
        <h2 class="h2-responsive text-center font-weight-bold wow fadeInUp mt-5 mb-5">Últimos trabajos realizados</h2>
    </div>
</div>
<div class="row">
    @foreach ( $aseos_industriales as $aseo_industrial)
    <div class="col-lg-4 col-md-6 mt-4 mb-5">
        <div class="card card-image wow fadeInUp" style="background-image: url({{ asset($aseo_industrial->file) }});">
            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                    <h3 class="h3-responsive card-title pt-2"><strong>{{ $aseo_industrial->title }}</strong></h3>
                    <p>{{ $aseo_industrial->excerpt }}</p>
                    <a data-fancybox="gallery" data-caption="{{ $aseo_industrial->description }}" class="btn btn-pink" href="{{ asset( $aseo_industrial->file ) }}"><i class="fas fa-clone left"></i> Ver más
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="row">
    <div class="col-md-12">
        {{ $aseos_industriales->render() }}
    </div>
</div>
<!-- card content retail -->
</div>

<!-- clients -->

<!-- clients -->
</section>
@endsection