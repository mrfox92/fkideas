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
<section class="view parallax-muebleria-bg" style="background-image: url({{ asset('storage/images/diseno.jpg')}});">
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
<article class="container-fluid servicios-remodelacion-construccion">
    <h2 class="h2-responsive text-center font-weight-bold wow fadeInUp mt-5 mb-5">Servicios Remodelación y Construcción</h2>
    <BR>
    <div class="row d-flex d-flex justify-content-around">
        <!-- info aseo industrial -->
        <div class="card col-md-4 mt-3 mb-3 wow fadeInUp d-flex d-flex justify-content-around">
            <i class="text-center card-img-top h1-responsive fas fa-rocket mt-5 mb-5"></i>
            <div class="card-header text-center">
                <a class="btn btn-link" data-toggle="collapse" href="#collapse-1" role="button" aria-expanded="false" aria-controls="collapse-1">
                    <h2 class="h2-responsive">Activaciones de Marca</h2>
                </a>
            </div>
            <div class="collapse" id="collapse-1">
                <div class="card-body">
                    <p class="text-justify">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </p>
                </div>
            </div>
        </div>
        <!-- info aseo industrial -->
        <!-- info Lavado pisos -->
        <div class="card col-md-4 mt-3 mb-3 wow fadeInUp d-flex justify-content-around">
            <i class="text-center card-img-top h1-responsive fas fa-rss mt-5 mb-5"></i>
            <div class="card-header text-center">
                <a class="btn btn-link" data-toggle="collapse" href="#collapse-2" role="button" aria-expanded="false" aria-controls="collapse-2">
                    <h2 class="h2-responsive">Marketing Digital</h2>
                </a>
            </div>
            <div class="collapse" id="collapse-2">
                <div class="card-body">
                    <p class="text-justify">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </p>
                </div>
            </div>
        </div>
        <!-- info Lavado pisos -->
    </div>
    <div class="row d-flex d-flex justify-content-around">
        <!-- info Lavado alfombras -->
        <div class="card col-md-4 mt-5 mb-5 wow fadeInUp d-flex d-flex justify-content-around">
            <i class="text-center card-img-top h1-responsive fas fa-star-half-alt mt-5 mb-5"></i>
            <div class="card-header text-center">
                <a class="btn btn-link" data-toggle="collapse" href="#collapse-3" role="button" aria-expanded="false" aria-controls="collapse-3">
                    <h2 class="h2-responsive">Producción de Eventos</h2>
                </a>
            </div>
            <div class="collapse" id="collapse-3">
                <div class="card-body">
                    <p class="text-justify">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </p>
                </div>
            </div>
        </div>
        <!-- info Lavado alfombras -->
        <!-- info Tratamiento especial pisos -->
        <div class="card col-md-4 mt-5 mb-5 wow fadeInUp d-flex d-flex justify-content-around">
            <i class="text-center card-img-top h1-responsive fas fa-laptop-code mt-5 mb-5"></i>
            <div class="card-header text-center">
                <a class="btn btn-link" data-toggle="collapse" href="#collapse-4" role="button" aria-expanded="false" aria-controls="collapse-4">
                    <h2 class="h2-responsive">Diseño Gráfico y Web</h2>
                </a>
            </div>
            <div class="collapse" id="collapse-4">
                <div class="card-body">
                    <p class="text-justify">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </p>
                </div>
            </div>
        </div>
        <!-- info Tratamiento especial pisos -->
    </div> 
</article>
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
                    <p>{{ $remodelacion_construccion->excerpt }}</p>
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