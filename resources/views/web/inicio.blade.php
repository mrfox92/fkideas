@extends('layouts.app')
@section('content')
<style>
.cabecera {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    height: 100vh;
    margin-top: 0px !important;
}
.parallax-muebleria-bg, 
.parallax-aseo-industrial-bg, 
.parallax-remodelacion-bg,
.parallax-contact-bg{
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    height: 100vh;
    margin-top: 0px !important;
}
</style>
<div class="view cabecera" style="background-image: url({{ asset('storage/images/fondo.jpg')}});">
            <div class="full-bg-img">
                <div class="mask rgba-black-light flex-center d-flex justify-content-center align-items-center">
                    <div class="container text-center wow fadeIn">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-12 col-lg-6 text-white">
                                <h2 class="h1-responsive font-weight-bold text-left">{{ $info->title }}</h2>
                                <br>
                                <p class="h5-responsive text-justify">
                                    {{ $info->description }}
                                </p>
                                <div class="text-left mt-4">
                                    <a href="{{ route('nosotros') }}" class="btn btn-outline-white btn-lg">Ver más
                                        <i class="fa fa-play ml-2"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<section class="jumbotron bg-info m-0">
    <div class="header text-center">
    <i class="far fa-lightbulb wow bounceInUp"></i>       
    <h2 class="h2-responsive text-center wow fadeInUp">"La idea es una experiencia más allá de las tendencias"</h2>
    </div>
</section>
<!-- sección mueblería retail -->
<section class="view parallax-muebleria-bg" style="background-image: url({{ asset('storage/images/parallax-img-muebleria.jpg')}});">
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
<section class="container-fluid bg-section-muebleria pt-4 pb-4">
    <div class="row d-flex justify-content-center align-items-center wow fadeInUp mt-5 mb-4">
        <div class="col-md-10">
            <p class="h4-responsive text-justify">
                Somos especialistas en proyectos mobiliarios, creamos productos que
                construyen espacios más agradables y eficientes. Nuestro objetivo es crear
                experiencias únicas en tus ambientes. Diseñamos tus espacios y te ofrece-
                mos la mejor opción según tus necesidades.
            </p>
            <div class="text-center text-white mt-4 mb-4 wow fadeInUp">
                <a href="{{ route('muebleria_retail') }}" class="btn btn-outline-white btn-lg">Ver más
                    <i class="fa fa-play ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- sección aseo industrial -->
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
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure fugiat explicabo commodi.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid bg-section-muebleria pt-4 pb-4">
    <div class="row d-flex justify-content-center align-items-center wow fadeInUp mt-5 mb-4">
        <div class="col-md-10">
            <p class="h4-responsive text-justify">
                Ofrecemos soluciones en limpieza, contamos con equipos de excelencia y elementos
                apropiados para todo tipo de trabajos. Somos una empresa confiable, comprometida con su
                trabajo y clientes, garantizamos un servicio de calidad detallado, profesional,
                responsable y efectivo.
            </p>
            <div class="text-center text-white mt-4 mb-4 wow fadeInUp">
                <a href="{{ route('aseo_industrial') }}" class="btn btn-outline-white btn-lg">Ver más
                    <i class="fa fa-play ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- sección remodelacion y construccion -->
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
                        Ofrecemos herramientas creativas para impulsar tu marca
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid bg-section-remodelacion pt-4 pb-4">
    <div class="row d-flex justify-content-center align-items-center wow fadeInUp mt-5 mb-4">
        <div class="col-md-10">
            <p class="h4-responsive text-justify">
                Nuestra estrategia radíca en conocer cada negocio en profundidad y al detalle, nos comprometemos con tu idea. Te brindamos y garantizamos las mejores soluciones acordes a tu proyecto.
            </p>
            <div class="text-center text-white mt-4 mb-4 wow fadeInUp">
                <a href="{{ route('remodelacion_construccion') }}" class="btn btn-outline-white btn-lg">Ver más
                    <i class="fa fa-play ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- sección parallax final página -->
<section class="view parallax-contact-bg" style="background-image: url({{ asset('storage/images/fondo.jpg')}});">
    <div class="mask flex-center rgba-dark-light d-flex justify-content-center align-items-center">
    </div>
</section>
@endsection