@extends('layouts.app')
@section('content')
<style>
.parallax-remodelacion-bg {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    height: 100vh;
    margin-top: 0px !important;
}
</style>
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
                Nuestra estrategia radí­ca en conocer cada negocio en profundidad y al detalle,
                nos comprometemos con tu idea. Te brindamos y garantizamos las mejores soluciones 
                acordes a tu proyecto.
            </p>
            <div class="text-center text-white mt-4 mb-4 wow fadeInUp">
                <a href="{{ route('remodelacion_construccion') }}" class="btn btn-outline-white btn-lg">Ver m?s
                    <i class="fa fa-play ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection