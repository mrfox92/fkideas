@section('title')
<title>Fkideas diseño y construcción S.P.A</title>
@endsection
@section('metadata')
<meta name="description" content="{{ $info->meta_description }}">
@endsection
@extends('layouts.app')
@section('content')
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
                                    <a href="#nosotros" class="btn btn-outline-white btn-lg">Ver más
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
<section class="bg-customize m-0">
    <div class="header text-center">
    <i class="far fa-lightbulb wow bounceInUp"></i>       
    <h2 class="h2-responsive text-center wow fadeInUp">"La idea es una experiencia más allá de las tendencias"</h2>
    </div>
</section>
<!-- sección mueblería retail -->
<section class="view parallax-muebleria-bg" style="background-image: url({{ asset('storage/images/parallax-img-muebleria.jpg')}});">
    <div class="mask flex-center rgba-black-light d-flex justify-content-center align-items-center">
        <div class="rgba-white-strong wow fadeInUp py-4">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <h2 class="h1-responsive font-weight-bold text-center text-dark">Mueblería retail</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center mt-2">
                <div class="col-md-8">
                    <p class="h4-responsive text-center text-dark">
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
            <p class="h5-responsive text-justify">
                Somos especialistas en proyectos mobiliarios, creamos productos que
                construyen espacios más agradables y eficientes. Nuestro objetivo es crear
                experiencias únicas en tus ambientes. Diseñamos tus espacios y te ofrecemos
                la mejor opción según tus necesidades.
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
        <div class="rgba-white-strong wow fadeInUp py-4">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <h2 class="h1-responsive font-weight-bold text-center text-dark">Aseo Industrial</h2>
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
    </div>
</section>
<section class="container-fluid bg-section-muebleria pt-4 pb-4">
    <div class="row d-flex justify-content-center align-items-center wow fadeInUp mt-5 mb-4">
        <div class="col-md-10">
            <p class="h5-responsive text-justify">
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
    <div class="rgba-white-strong wow fadeInUp py-4">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <h2 class="h1-responsive font-weight-bold text-center text-dark">Remodelación y Construcciones menores</h2>
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
<section class="container-fluid bg-section-remodelacion pt-4 pb-4">
    <div class="row d-flex justify-content-center align-items-center wow fadeInUp mt-5 mb-4">
        <div class="col-md-10">
            <p class="h5-responsive text-justify">
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
<section data-spy="scroll" data-target="#menu" data-offset="1">
    <div id="nosotros" class="view parallax-servicios-bg" style="background-image: url({{ asset('storage/images/cliente.jpeg')}});">
        <div class="mask flex-center rgba-black-light">
        </div>
    </div>
    <div class="container-fluid bg-section-nosotros text-white">
        <div class="row d-flex justify-content-center align-items-center py-2">
            <div class="col-md-10 mt-2 mb-4">
                <h2 class="h2-responsive text-center font-weight-bold wow fadeInUp mt-1 mb-5">Nuestra Empresa</h2>
                <p class="h5-responsive text-justify wow fadeInUp">
                    Somos una empresa familiar, traemos una fuerte herencia de ética y
                    constancia a partir de las experiencias personales de cada uno de
                    quienes la conforman, nuestros maestros con años de experiencia en
                    la fabricación de muebles para retail en madera-metal-acrílico, entre
                    otros y línea plana; nos ayudan a crecer cada día haciendo que nuestros
                    clientes vallan más allá de sus ideas, a la concreción de lo deseado.
                    En la Unidad de Aseo Industrial contamos con experiencia suficiente para realizar no solo aseo cotidiano, sino también finalización de obras y tratamientos especiales en pisos de diversas superficies esmaltadas, laminadas, piedra natural y alfombras.
                </p>
            </div>      
        </div>
    </div>
    <!-- inicio clientes marcas asociadas -->
    <article class="container-fluid mt-0 mb-4">
        <div class="row d-flex justify-content-center align-items-center mt-4 mb-5">
            <div class="col-md-12 mt-5 mb-4">
                <h2 class="h2-responsive text-center font-weight-bold wow fadeIn">Clientes que han confiado</h2>
                <hr class="bottom-client wow fadeInLeft">
            </div>
        </div>
        <br>
        <hr>
        <!-- logos empresas y clientes -->
        <div class="clientes-servicios-nosotros row d-flex justify-content-around align-items-center">
            <div class="col-md-2 col-sm-3 col-3 mt-3 mb-4 d-flex justify-content-around align-items-center">
                <img class="img-fluid" src="{{ asset('storage/images/jumbo.png') }}" alt="cliente fkideas jumbo">
            </div>
            <div class="col-md-2 col-sm-3 col-3 mt-3 mb-4 d-flex justify-content-around align-items-center">
                <img class="img-fluid" src="{{ asset('storage/images/bruker.png') }}" alt="cliente fkideas bruker">
            </div>
            <div class="col-md-2 col-sm-3 col-3 mt-3 mb-4 d-flex justify-content-around align-items-center">
                <img class="img-fluid" src="{{ asset('storage/images/privilege.png') }}" alt="cliente fkideas privilege">
            </div>
            <div class="col-md-2 col-sm-3 col-3 mt-3 mb-4 d-flex justify-content-around align-items-center">
                <img class="img-fluid" src="{{ asset('storage/images/skechers.png') }}" alt="cliente fkideas skechers">
            </div>
        </div>
        <!-- logos empresas y clientes -->
    </article>
    <!-- fin clientes marcas asociadas -->
</section>
@endsection