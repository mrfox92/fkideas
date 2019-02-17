@extends('layouts.app')
@section('content')
<style>
.parallax-aseo-industrial-bg,
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
<section class="view parallax-aseo-industrial-bg" style="background-image: url({{ asset('storage/images/aseo-industrial.jpg')}});">
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
<!-- servicios aseo industrial -->
<article class="container-fluid servicios-aseo-industrial">
    <h2 class="h2-responsive text-center font-weight-bold wow fadeInUp mt-5 mb-5">Servicios Aseo Industrial</h2>
    <BR>
    <div class="row d-flex justify-content-center align-items-center">
        <!-- info aseo industrial-->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-3" aria-expanded="false" aria-controls="titulo-1 texto-1">
                <i class="h1-responsive far fa-check-circle mt-5 mb-5"></i>
            </a>
        </div>
        <!-- info aseo industrial-->
        <!-- info lavado de pisos -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="titulo-2 texto-2">
                <i class="h1-responsive fas fa-broom mt-5 mb-5"></i>
            </a>
        </div>
        <!-- info lavado de pisos -->
        <!-- info Lavado de alfombras -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-1" aria-expanded="false" aria-controls="titulo-3 texto-3">
                <i class="h1-responsive fas fa-square-full mt-5 mb-5"></i>
            </a>
        </div>
        
        <!-- info Lavado de alfombras -->
        <!-- info Tratamiento Especial de Pisos -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-2" aria-expanded="false" aria-controls="titulo-4 texto-4">
                <i class="h1-responsive far fa-square mt-5 mb-5"></i>
            </a>
        </div>
        <!-- info Tratamiento Especial de Pisos -->
    </div> 
        <!-- sección info desplegable íconos -->
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse-3" id="titulo-1">
                    <div class="card-body">
                        <h2 class="h2-responsive text-center">Aseo Industrial</h2>
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
                        <h2 class="h2-responsive text-center">Lavado de Pisos</h2>
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
                        <h2 class="h2-responsive text-center">Lavado de Alfombras</h2>
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
                        <h2 class="h2-responsive text-center">Tratamiento Especial de Pisos</h2>
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
<!-- servicios aseo industrial -->

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
<!-- sección formulario de contacto -->
<section class="view parallax-contacto-bg" style="background-image: url({{ asset('storage/images/aseo-industrial.jpg')}});">
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