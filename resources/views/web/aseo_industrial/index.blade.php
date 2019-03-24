@section('title')
<title>{{ $title_aseo }}</title>
@endsection
@section('metadata')
<meta name="description" content="{{ $meta_description }}">
@endsection
@extends('layouts.app')
@section('content')
<!-- sección mueblería retail -->
<section class="view parallax-aseo-industrial-bg" style="background-image: url({{ asset('storage/images/aseo-industrial.jpg')}});">
    <div class="mask flex-center rgba-black-light d-flex justify-content-center align-items-center">
    <div class="rgba-white-strong wow fadeIn py-4">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <h1 class="h1-responsive font-weight-bold text-center text-dark">Aseo Industrial</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center mt-2">
            <div class="col-md-8">
                <p class="h4-responsive text-center text-dark">
                    Equipo capacitado en limpieza industrial hacemos entregas de obra de alta calidad.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid">
<!-- servicios aseo industrial -->
<article class="container-fluid servicios-aseo-industrial">
    <h2 class="h3-responsive text-center font-weight-bold wow fadeInUp mt-5 mb-5">Servicios Aseo Industrial</h2>
    <BR>
    <div class="row d-flex justify-content-center align-items-center">
        <!-- info aseo industrial-->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-3" aria-expanded="false" aria-controls="titulo-1 texto-1">
                <img class="iconos" src="{{ asset('storage/icons/aseo-industrial/entrega-final-obras.png') }}" alt="icono servicio aseo industrial">
            </a>
        </div>
        <!-- info aseo industrial-->
        <!-- info lavado de pisos -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="titulo-2 texto-2">
                <img class="iconos" src="{{ asset('storage/icons/aseo-industrial/lavado-pisos.png') }}" alt="icono lavado de pisos">
            </a>
        </div>
        <!-- info lavado de pisos -->
        <!-- info Lavado de alfombras -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-1" aria-expanded="false" aria-controls="titulo-3 texto-3">
                <img class="iconos" src="{{ asset('storage/icons/aseo-industrial/lavado-alfombras.png') }}" alt="icono lavado de alfombras">
            </a>
        </div>
        
        <!-- info Lavado de alfombras -->
        <!-- info Tratamiento Especial de Pisos -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-2" aria-expanded="false" aria-controls="titulo-4 texto-4">
                <img class="iconos" src="{{ asset('storage/icons/aseo-industrial/tratamiento-especial-pisos.png') }}" alt="icono tratamiento especial de pisos">
            </a>
        </div>
        <!-- info Tratamiento Especial de Pisos -->
    </div> 
        <!-- sección info desplegable íconos -->
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="collapse multi-collapse-3" id="titulo-1">
                    <div class="card-body">
                        <h2 class="h2-responsive text-center">Aseo Industrial</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="collapse multi-collapse" id="titulo-2">
                    <div class="card-body">
                        <h2 class="h2-responsive text-center">Lavado de Pisos</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="collapse multi-collapse-1" id="titulo-3">
                    <div class="card-body">
                        <h2 class="h2-responsive text-center">Lavado de Alfombras</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="collapse multi-collapse-2" id="titulo-4">
                    <div class="card-body">
                        <h2 class="h2-responsive text-center">Tratamiento Especial de Pisos</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- sección info desplegable íconos -->
</article>
<!-- servicios aseo industrial -->

<div class="container-fluid">
<!-- cards contenido aseo industrial -->
<div class="row mt-5 mb-5">
    <div class="col-md-12">
        <h2 class="h3-responsive text-center font-weight-bold wow fadeInUp mt-5 mb-5">Últimos Trabajos Realizados</h2>
    </div>
</div>
<div class="row">
    @foreach ( $aseos_industriales as $aseo_industrial)
    <div class="col-lg-4 col-md-6 mt-4 mb-5">
        <a class="card card-image wow fadeInUp grey-text" data-fancybox="gallery" data-caption="{{ $aseo_industrial->description }}" href="{{ asset( $aseo_industrial->file ) }}">
            <h3 class="h4-responsive font-weight-bold text-center card-title py-4"><strong>{{ $aseo_industrial->title }}</strong></h3>
            <img class="img-fluid" src="{{ asset( $aseo_industrial->file ) }}" alt="{{ $aseo_industrial->title }}"/>
        </a>
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