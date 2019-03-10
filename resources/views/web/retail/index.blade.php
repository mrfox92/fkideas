@extends('layouts.app')
@section('content')
<!-- sección mueblería retail -->
<section class="view parallax-muebleria-bg" style="background-image: url({{ asset('storage/images/Madera3.jpg')}});">
    <div class="mask flex-center rgba-black-light d-flex justify-content-center align-items-center">
        <div class="rgba-white-strong wow fadeIn py-4">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <h1 class="h1-responsive font-weight-bold text-center text-dark">Mueblería retail</h1>
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
<section class="container-fluid pt-4 pb-4 rgba-dark-light">
<article class="container-fluid article-services-muebleria">
    <h2 class="h3-responsive text-center font-weight-bold wow fadeInUp mt-5 mb-5">Servicios Mueblería Retail</h2>
    <BR>
    <div class="row d-flex justify-content-center align-items-center">
        <!-- info mueblería retail -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-3" aria-expanded="false" aria-controls="titulo-muebleria texto-muebleria">
                <img class="iconos" src="{{ asset('storage/icons/muebleria-retail/muebleria-retail.png') }}" alt="icono mueblería retail">
            </a>
        </div>
        <!-- info mueblería retail -->
        <!-- info logo vollumétrico -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="titulo-oficina-linea-plana texto-oficina-linea-plana">
                <img class="iconos" src="{{ asset('storage/icons/muebleria-retail/muebles-de-oficina-y-linea-plana.png') }}" alt="icono muebles de oficina y linea plana">
            </a>
        </div>
        <!-- info logo vollumétrico -->
        <!-- info Acrílico y vidrio -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-1" aria-expanded="false" aria-controls="titulo-acrilico-vidrio texto-acrilico-vidrio">
                <img class="iconos" src="{{ asset('storage/icons/muebleria-retail/acrilico-y-vidrio.png') }}" alt="icono acrílico y vidrio">
            </a>
        </div>
        
        <!-- info Acrílico y vidrio -->
        <!-- info Acero inoxidable -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-2" aria-expanded="false" aria-controls="titulo-acero texto-acero">
                <img class="iconos" src="{{ asset('storage/icons/muebleria-retail/muebles-metalicos.png') }}" alt="icono muebles metálicos">
            </a>
        </div>
        <!-- info Acero inoxidable -->
        <!-- info Remodelación de locales -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-4" aria-expanded="false" aria-controls="titulo-store texto-store">
            <img class="iconos" src="{{ asset('storage/icons/muebleria-retail/remodelacion-de-locales.png') }}" alt="icono remodelación de locales">
            </a>
        </div>
        <!-- info Remodelación de locales -->
        <!-- info Remodelación de locales -->
        <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-center align-items-center wow fadeInUp">
            <a role="button" data-toggle="collapse" data-target=".multi-collapse-5" aria-expanded="false" aria-controls="titulo-stand texto-stand">
            <img class="iconos" src="{{ asset('storage/icons/muebleria-retail/stand.png') }}" alt="icono stands">
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
                <div class="collapse multi-collapse" id="titulo-oficina-linea-plana">
                    <div class="card-body">
                        <h2 class="h2-responsive text-center">Muebles de oficina y linea plana</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse" id="texto-oficina-linea-plana">
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
                        <h2 class="h2-responsive text-center">Muebles Metálicos</h2>
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
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse-5" id="titulo-stand">
                    <div class="card-body">
                        <h2 class="h2-responsive text-center">Stands</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="collapse multi-collapse-5" id="texto-stand">
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
        <h2 class="h3-responsive text-center font-weight-bold wow fadeInUp mt-5 mb-5">Últimos trabajos realizados</h2>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        @foreach ( $retailers as $id => $retail)
        <div class="col-md-4 col-ms-6 col-12 mt-4 mb-5">
            @foreach( $retail->images as $key => $image )
                @if( $key === 0 )
                    <a class="card card-image wow fadeInUp grey-text" href="{{ asset( $image->path ) }}" 
                    data-fancybox="images-preview{{ $id }}"
                    data-thumbs='{"autoStart":true}'
                    data-caption="{{ $retail->description }}">
                        <h3 class="h4-responsive font-weight-bold text-center card-title py-4"><strong>{{ $retail->title }}</strong></h3>
                        <img class="img-fluid" src="{{ asset( $image->path ) }}" />
                    </a>
                @else
                    <div style="display: none;">
                        <a href="{{ asset( $image->path) }}" data-fancybox="images-preview{{ $id }}"
                            data-thumb="{{ asset( $image->path ) }}"
                            data-caption="{{ $retail->description }}">
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
        @endforeach
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        {{ $retailers->render() }}
    </div>
</div>
<!-- card content retail -->
</section>
@endsection