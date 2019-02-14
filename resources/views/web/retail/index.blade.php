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
<!-- card content retail -->
<div class="row mt-5 mb-5">
    <div class="col-md-12">
        <h2 class="h1-responsive text-center font-weight-bold wow fadeInUp">Últimos trabajos realizados</h2>
    </div>
</div>
<div class="row ">
    @foreach ( $retailers as $retail)
    <div class="col-md-4 mt-4 mb-5">
        <div class="card card-image wow fadeInUp" style="background-image: url({{ asset($retail->file) }});">
            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                    <h3 class="h3-responsive card-title pt-2"><strong>{{ $retail->title }}</strong></h3>
                    <p>{{ $retail->excerpt }}</p>
                    <a data-fancybox="gallery" data-caption="{{ $retail->excerpt }}" class="btn btn-pink" href="{{ asset( $retail->file ) }}"><i class="fas fa-clone left"></i> Ver más
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
@endsection