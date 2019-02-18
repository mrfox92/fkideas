@extends('layouts.app')
@section('content')
<style>
.parallax-nosotros-header,
.parallax-contact-bg {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    height: 100vh;
    margin-top: 0px !important;
}
.parallax-servicios-bg {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    height: 60vh;
    margin-top: 0px !important;
}
</style>
<div class="view parallax-nosotros-header" style="background-image: url({{ asset('storage/images/nosotros.png')}});">
    <div class="full-bg-img">
        
    </div>
</div>
<section class="seccion-nosotros m-0">
    <div class="container-fluid jumbotron bg-dark text-white m-0">       
        <h2 class="h2-responsive text-center font-weight-bold wow fadeInUp mt-5 mb-5">Nuestra Empresa</h2>
        <p class="h5-responsive text-justify wow fadeInUp">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui reiciendis iusto sit quae
            sint, veniam laudantium sapiente quaerat dicta eaque porro vitae ipsum sed obcaecati at
            deleniti dolor ad nisi.Sed, temporibus ullam repellat blanditiis facilis earum inventore
            repudiandae ducimus placeat ea odit incidunt ipsam quam sit a distinctio quae necessitatibus
            laudantium officiis. Ea enim alias aliquid, tempora magni eligendi!
        </p>
    </div>
    <article class="view parallax-servicios-bg" style="background-image: url({{ asset('storage/images/cliente.jpeg')}});">
        <div class="mask flex-center rgba-black-light">
        </div>
    </article>    
</section>
<section class="seccion-nosotros m-0">
    <div class="container-fluid jumbotron bg-dark text-white m-0">       
        <h2 class="h2-responsive text-center font-weight-bold wow fadeInUp mt-5 mb-5">Nuestro Equipo</h2>
        <p class="h5-responsive text-justify wow fadeInUp">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui reiciendis iusto sit quae
            sint, veniam laudantium sapiente quaerat dicta eaque porro vitae ipsum sed obcaecati at
            deleniti dolor ad nisi.Sed, temporibus ullam repellat blanditiis facilis earum inventore
            repudiandae ducimus placeat ea odit incidunt ipsam quam sit a distinctio quae necessitatibus
            laudantium officiis. Ea enim alias aliquid, tempora magni eligendi!
        </p>
    </div>
    <!-- imagenes nuestro equipo -->
    <article class="container-fluid mt-4 mb-3">
        <!-- inicio cargos -->
        <div class="row d-flex justify-content-around align-items-center">
            <div class="col-md-4 col-sm-6 col-12 d-flex justify-content-around align-items-center mt-3 mb-4">
                <div class="card wow fadeInUp">
                    <img class="card-img-top" src="{{ asset('storage/images/team1.jpg') }}" alt="imagen cargo 1">
                    <div class="card-body">
                        <h5 class="h5-responsive card-title text-center">Nombre</h5>
                        <h6 class="h6-responsive card-text text-center">Cargo</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 d-flex justify-content-around align-items-center mt-3 mb-4">
                <div class="card wow fadeInUp">
                    <img class="card-img-top" src="{{ asset('storage/images/team2.jpg') }}" alt="imagen cargo 1">
                    <div class="card-body">
                        <h5 class="h5-responsive card-title text-center">Nombre</h5>
                        <h6 class="h6-responsive card-text text-center">Cargo</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 d-flex justify-content-around align-items-center mt-3 mb-4">
                <div class="card wow fadeInUp">
                    <img class="card-img-top" src="{{ asset('storage/images/team3.jpg') }}" alt="imagen cargo 1">
                    <div class="card-body">
                        <h5 class="h5-responsive card-title text-center">Nombre</h5>
                        <h6 class="h6-responsive card-text text-center">Cargo</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin cargos -->
        <!-- inicio trabajadores -->
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-12 mt-3 mb-4">
                <div class="card wow fadeInUp">
                    <img class="card-img-top" src="{{ asset('storage/images/ejemplo-4.png') }}" alt="imagen cargo 1">
                    <div class="card-body">
                        <h5 class="h5-responsive card-title text-center">Nuestros Trabajadores</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin trabajadores -->
    </article>

    <!-- inicio clientes marcas asociadas -->
    <article class="container-fluid mt-0 mb-4">
        <div class="row d-flex justify-content-center align-items-center mt-4 mb-5">
            <div class="col-md-12 mt-5 mb-4">
                <h2 class="h2-responsive text-center font-weight-bold wow fadeInUp">Clientes que han confiado</h2>
            </div>
        </div>
        <hr>
        <!-- logos empresas y clientes -->
        <div class="clientes-servicios-nosotros row d-flex justify-content-around align-items-center">
            <div class="col-md-2 col-sm-2 col-2 mt-3 mb-4 d-flex justify-content-around align-items-center">
                <i class="fab fa-soundcloud"></i>
            </div>
            <div class="col-md-2 col-sm-2 col-2 mt-3 mb-4 d-flex justify-content-around align-items-center">
                <i class="fab fa-apple"></i>
            </div>
            <div class="col-md-2 col-sm-2 col-2 mt-3 mb-4 d-flex justify-content-around align-items-center">
                <i class="fab fa-ebay"></i>
            </div>
            <div class="col-md-2 col-sm-2 col-2 mt-3 mb-4 d-flex justify-content-around align-items-center">
                <i class="fab fa-fedex"></i>
            </div>
            <div class="col-md-2 col-sm-2 col-2 mt-3 mb-4 d-flex justify-content-around align-items-center">
                <i class="fab fa-earlybirds"></i>
            </div>
            <div class="col-md-2 col-sm-2 col-2 mt-3 mb-4 d-flex justify-content-around align-items-center">
                <i class="fab fa-grav"></i>
            </div>
        </div>
        <!-- logos empresas y clientes -->
    </article>
    <!-- fin clientes marcas asociadas -->
</section>
<!-- sección formulario contacto -->
<section class="view parallax-contact-bg" style="background-image: url({{ asset('storage/images/nosotros.png')}});">
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