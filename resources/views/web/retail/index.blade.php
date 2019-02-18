@extends('layouts.app')
@section('content')
<style>
.parallax-muebleria-bg,
.parallax-contacto-bg {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    height: 100vh;
    margin-top: 0px !important;
}
</style>
<!-- sección mueblería retail -->
<section class="view parallax-muebleria-bg" style="background-image: url({{ asset('storage/images/Madera3.jpg')}});">
    <div class="mask flex-center rgba-black-light d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center wow fadeInUp mt-4 mb-4">
                <div class="col-md-12">
                    <h2 class="h1-responsive font-weight-bold text-center text-white mb-5">Mueblería retail</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center mb-4">
                <div class="col-md-12">
                    <p class="h3-responsive text-justify text-white wow fadeInUp">
                        La mejor opción en fabricación de muebles publicitarios, de oficina y línea plana.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid pt-4 pb-4 rgba-dark-light">
<article class="container-fluid article-services-muebleria">
    <h2 class="h2-responsive text-center font-weight-bold wow fadeInUp mt-5 mb-5">Servicios Mueblería Retail</h2>
    <BR>
    <div class="row d-flex justify-content-center align-items-center">
        <!-- info mueblería retail -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-3" aria-expanded="false" aria-controls="titulo-muebleria texto-muebleria">
                <i class="h1-responsive fas fa-tools mt-5 mb-5"></i>
            </a>
        </div>
        <!-- info mueblería retail -->
        <!-- info logo vollumétrico -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="titulo-logo-volumetrico texto-logo-volumetrico">
                <i class="h1-responsive fas fa-cube mt-5 mb-5"></i>
            </a>
        </div>
        <!-- info logo vollumétrico -->
        <!-- info Acrílico y vidrio -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-1" aria-expanded="false" aria-controls="titulo-acrilico-vidrio texto-acrilico-vidrio">
                <i class="h1-responsive fas fa-table mt-5 mb-5"></i>
            </a>
        </div>
        
        <!-- info Acrílico y vidrio -->
        <!-- info Acero inoxidable -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-2" aria-expanded="false" aria-controls="titulo-acero texto-acero">
                <i class="h1-responsive fas fa-shield-alt mt-5 mb-5"></i>
            </a>
        </div>
        <!-- info Acero inoxidable -->
        <!-- info Remodelación de locales -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-4" aria-expanded="false" aria-controls="titulo-store texto-store">
                <i class="h1-responsive fas fa-store-alt mt-5 mb-5"></i>
            </a>
        </div>
        <!-- info Remodelación de locales -->
    </div> 
        <!-- sección info desplegable íconos -->
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse-3" id="titulo-muebleria">
                    <div class="card-body">
                        <h2 class="h2-responsive text-center">Mueblería Retail</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse-3" id="texto-muebleria">
                    <div class="card-body text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum dicta debitis fugit, dolorem possimus eius aut dolores perspiciatis nemo nam animi modi! Voluptas sint iusto quasi laudantium repellat modi mollitia?
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse" id="titulo-logo-volumetrico">
                    <div class="card-body">
                        <h2 class="h2-responsive text-center">Logo Volumétrico</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse" id="texto-logo-volumetrico">
                    <div class="card-body text-justify">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit voluptates recusandae quae quia aliquam quibusdam, ut quas quam iusto doloribus itaque vero assumenda cum maiores non illo delectus. Temporibus, nisi!
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse-1" id="titulo-acrilico-vidrio">
                    <div class="card-body">
                        <h2 class="h2-responsive text-center">Acrílico y Vidrio</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse-1" id="texto-acrilico-vidrio">
                    <div class="card-body text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum dicta debitis fugit, dolorem possimus eius aut dolores perspiciatis nemo nam animi modi! Voluptas sint iusto quasi laudantium repellat modi mollitia?
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse-2" id="titulo-acero">
                    <div class="card-body">
                        <h2 class="h2-responsive text-center">Acero Inoxidable</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse-2" id="texto-acero">
                    <div class="card-body text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum dicta debitis fugit, dolorem possimus eius aut dolores perspiciatis nemo nam animi modi! Voluptas sint iusto quasi laudantium repellat modi mollitia?
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse-4" id="titulo-store">
                    <div class="card-body">
                        <h2 class="h2-responsive text-center">Remodelación de locales</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse-4" id="texto-store">
                    <div class="card-body text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum dicta debitis fugit, dolorem possimus eius aut dolores perspiciatis nemo nam animi modi! Voluptas sint iusto quasi laudantium repellat modi mollitia?
                    </div>
                </div>
            </div>
        </div>
        <!-- sección info desplegable íconos -->
</article>
<!-- card content retail -->
<div class="row mt-5 mb-5">
    <div class="col-md-12">
        <h2 class="h2-responsive text-center font-weight-bold wow fadeInUp mt-5 mb-5">Últimos trabajos realizados</h2>
    </div>
</div>
<div class="row ">
    @foreach ( $retailers as $retail)
    <div class="col-md-4 mt-4 mb-5">
        <div class="card card-image wow fadeInUp" style="background-image: url({{ asset( $retail->file ) }});">
            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                    <h3 class="h3-responsive card-title pt-2"><strong>{{ $retail->title }}</strong></h3>
                    <a data-fancybox="gallery" data-caption="{{ $retail->description }}" class="btn btn-pink" href="{{ asset( $retail->file ) }}"><i class="fas fa-clone left"></i> Ver más
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="row">
    <div class="col-md-12">
        {{ $retailers->render() }}
    </div>
</div>
<!-- card content retail -->

<!-- clients -->

<!-- clients -->
</section>
<!-- sección formulario de contacto -->
<section class="view parallax-contacto-bg" style="background-image: url({{ asset('storage/images/mueblería.jpg')}});">
    <div class="mask flex-center rgba-black-light d-flex justify-content-center align-items-center">
        <div class="container wow fadeInUp">
            <div class="row d-flex justify-content-center align-items-center">
                <!-- Formulario contacto -->
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="h3-responsive text-center blue-text font-weight-bold">Contáctanos</h3>
                            <hr>
                            <form>
                                <div class="md-form">
                                    <i class="fa fa-user prefix blue-text"></i>
                                    <input class="form-control" type="text" id="nombre">
                                    <label for="nombre">Nombre:</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix blue-text"></i>
                                    <input class="form-control" type="email" id="email">
                                    <label for="email">Email:</label>
                                </div>
                                <div class="md-form">
                                    <i class="fas fa-edit prefix blue-text"></i>
                                    <textarea class="md-textarea" id="texto"></textarea>
                                    <label for="texto">Ingresa tu mensaje:</label>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-blue">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Formulario -->
            </div>
        </div>
    </div>
</section>
@endsection