@extends('layouts.app')
@section('content')
<style>
.parallax-remodelacion-bg,
.parallax-contacto-bg {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    height: 100vh;
    margin-top: 0px !important;
}
</style>
<!-- sección remodelación y construcción -->
<section class="view parallax-remodelacion-bg" style="background-image: url({{ asset('storage/images/diseno.jpg')}});">
    <div class="mask flex-center rgba-black-light d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center wow fadeInUp mt-4 mb-4">
                <div class="col-md-12">
                    <h2 class="h1-responsive font-weight-bold text-center text-white mb-5">Remodelación y Construcción</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center mb-4">
                <div class="col-md-12">
                    <p class="h3-responsive text-justify text-white wow fadeInUp">
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
    <h2 class="h2-responsive text-center font-weight-bold wow fadeInUp mt-5 mb-5">Servicios Remodelación y Construcción</h2>
    <BR>
    <div class="row d-flex justify-content-center align-items-center">
        <!-- info marca -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-3" aria-expanded="false" aria-controls="titulo-1 texto-1">
                <i class="h1-responsive fas fa-rocket mt-5 mb-5"></i>
            </a>
        </div>
        <!-- info marca -->
        <!-- info marketing digital -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="titulo-2 texto-2">
                <i class="h1-responsive fas fa-rss mt-5 mb-5"></i>
            </a>
        </div>
        <!-- info marketing digital -->
        <!-- info eventos -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-1" aria-expanded="false" aria-controls="titulo-3 texto-3">
                <i class="h1-responsive fas fa-star-half-alt mt-5 mb-5"></i>
            </a>
        </div>
        
        <!-- info eventos -->
        <!-- info diseño grafico y web -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-2" aria-expanded="false" aria-controls="titulo-4 texto-4">
                <i class="h1-responsive fas fa-laptop-code mt-5 mb-5"></i>
            </a>
        </div>
        <!-- info diseño grafico y web -->
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
                <div class="collapse multi-collapse-1" id="titulo-3">
                    <div class="card-body">
                        <h2 class="h2-responsive text-center">Producción de Eventos</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse-1" id="texto-3">
                    <div class="card-body text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum dicta debitis fugit, dolorem possimus eius aut dolores perspiciatis nemo nam animi modi! Voluptas sint iusto quasi laudantium repellat modi mollitia?
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse-2" id="titulo-4">
                    <div class="card-body">
                        <h2 class="h2-responsive text-center">Diseño Gráfico y Web</h2>
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
        <h2 class="h2-responsive text-center font-weight-bold wow fadeInUp mt-5 mb-5">Últimos trabajos realizados</h2>
    </div>
</div>
<div class="row">
    @foreach ( $remodelaciones_construcciones as $remodelacion_construccion)
    <div class="col-lg-4 col-md-6 mt-4 mb-5">
        <div class="card card-image wow fadeInUp" style="background-image: url({{ asset($remodelacion_construccion->file) }});">
            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                    <h3 class="h3-responsive card-title pt-2"><strong>{{ $remodelacion_construccion->title }}</strong></h3>
                    <a data-fancybox="gallery" data-caption="{{ $remodelacion_construccion->description }}" class="btn btn-pink" href="{{ asset( $remodelacion_construccion->file ) }}"><i class="fas fa-clone left"></i> Ver más
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
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