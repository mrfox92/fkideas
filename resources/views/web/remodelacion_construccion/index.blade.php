@section('title')
<title>{{ $title_remodelacion }}</title>
@endsection
@section('metadata')
<meta name="description" content="{{ $meta_description }}">
@endsection
@extends('layouts.app')
@section('content')
<!-- sección remodelación y construcción -->
<section class="view parallax-remodelacion-bg" style="background-image: url({{ asset('storage/images/diseno.jpg') }});">
    <div class="mask flex-center rgba-black-light d-flex justify-content-center align-items-center">
        <div class="rgba-white-strong wow fadeIn py-4">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <h1 class="h1-responsive font-weight-bold text-center text-dark">Remodelación y Construcciones menores</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center mt-2">
                <div class="col-md-8">
                    <p class="h4-responsive text-center text-dark">
                        Ofrecemos las herramientas creativas que necesitas para impulsar tu marca.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid pt-4 pb-4 rgba-dark-light">
<!-- servicios remodelación y construcción -->
<article class="container-fluid servicios-remodelacion-construccion">
    <h2 class="h3-responsive text-center font-weight-bold wow fadeInUp mt-5 mb-5">Servicios Remodelación y Construcción</h2>
    <BR>
    <div class="row d-flex justify-content-center align-items-center">
        <!-- info marca -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-3" aria-expanded="false" aria-controls="titulo-1 texto-1">
                <img class="iconos" src="{{ asset('storage/icons/remodelaciones/activacion-de-marca.png') }}" alt="icono activación de marca">
            </a>
        </div>
        <!-- info marca -->
        <!-- info marketing digital -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="titulo-2 texto-2">
                <img class="iconos" src="{{ asset('storage/icons/remodelaciones/marketing-digital.png') }}" alt="icono marketing digital">
            </a>
        </div>
        <!-- info marketing digital -->
        <!-- info diseño grafico -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-2" aria-expanded="false" aria-controls="titulo-4 texto-4">
                <img class="iconos" src="{{ asset('storage/icons/remodelaciones/diseno-grafico.png') }}" alt="icono diseño gráfico">
            </a>
        </div>
        <!-- info diseño grafico -->
    </div> 
        <!-- sección info desplegable íconos -->
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse-3" id="titulo-1">
                    <div class="card-body">
                        <h2 class="h2-responsive text-center">Activaciones de Marca</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse-3" id="texto-1">
                    <div class="card-body text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum dicta debitis fugit, dolorem possimus eius aut dolores perspiciatis nemo nam animi modi! Voluptas sint iusto quasi laudantium repellat modi mollitia?
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse" id="titulo-2">
                    <div class="card-body">
                        <h2 class="h2-responsive text-center">Marketing Digital</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse" id="texto-2">
                    <div class="card-body text-justify">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit voluptates recusandae quae quia aliquam quibusdam, ut quas quam iusto doloribus itaque vero assumenda cum maiores non illo delectus. Temporibus, nisi!
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse-2" id="titulo-4">
                    <div class="card-body">
                        <h2 class="h2-responsive text-center">Diseño Gráfico</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse-2" id="texto-4">
                    <div class="card-body text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum dicta debitis fugit, dolorem possimus eius aut dolores perspiciatis nemo nam animi modi! Voluptas sint iusto quasi laudantium repellat modi mollitia?
                    </div>
                </div>
            </div>
        </div>
        <!-- sección info desplegable íconos -->
</article>
<!-- servicios remodelación y construcción -->
<div class="container-fluid">
<!-- cards contenido remodelacion y construccion -->
<div class="row mt-5 mb-5">
    <div class="col-md-12">
        <h2 class="h3-responsive text-center font-weight-bold wow fadeInUp mt-5 mb-5">Últimos trabajos realizados</h2>
    </div>
</div>
<!-- lightbox projects-->
<div class="container-fluid">
    <div class="row">
        @foreach ( $remodelaciones_construcciones as $id => $remodelacion_construccion)
        <div class="col-md-4 col-ms-6 col-12 mt-4 mb-5">
            @foreach( $remodelacion_construccion->images as $key => $image )
                @if( $key === 0 )
                    <a class="card card-image wow fadeInUp grey-text" href="{{ asset( $image->path ) }}" 
                    data-fancybox="images-preview{{ $id }}"
                    data-thumbs='{"autoStart":true}'
                    data-caption="{{ $remodelacion_construccion->description }}">
                        <h3 class="h4-responsive font-weight-bold text-center card-title py-4"><strong>{{ $remodelacion_construccion->title }}</strong></h3>
                        <img class="img-fluid" src="{{ asset( $image->path ) }}" alt="{{ $remodelacion_construccion->title }}"/>
                    </a>
                @else
                    <div style="display: none;">
                        <a href="{{ asset( $image->path) }}" data-fancybox="images-preview{{ $id }}"
                            data-thumb="{{ asset( $image->path ) }}"
                            data-caption="{{ $remodelacion_construccion->description }}">
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
        @endforeach
    </div>
</div>
<!-- fin lightbox projects -->
<div class="row">
    <div class="col-md-12">
        {{ $remodelaciones_construcciones->render() }}
    </div>
</div>
<!-- cards contenido remodelacion y construccion -->
</div>

<!-- clients -->

<!-- clients -->
</section>
@endsection