<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
    <link rel="shortcut icon" href="{{ asset('storage/images/icon.png') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <!-- Fancybox css -->
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-menu scrolling-navbar">
            <div class="container-fluid">
                <a class="navbar-item" href="{{ url('/') }}">
                    <img class="nav-link logo" src="{{ asset('storage/images/logo-1.png') }}" alt="logo fkideas">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav mr-auto">

                    </ul> -->
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <!-- Authentication Links -->
                        @guest
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('muebleria_retail') }}">
                                   Mueblería retail
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('aseo_industrial') }}">
                                    Aseo industrial
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('remodelacion_construccion') }}">
                                    Remodelación y construcción
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('nosotros') }}">
                                    Nosotros
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="modal" data-target="#modalContactForm">
                                    Contacto
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-user-circle"></i></a>
                            </li>

                        @else
                            
                            @can('users.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
                            </li>
                            @endcan
                            @can('roles.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
                            </li>
                            @endcan
                            @can('retail.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('retail.index') }}">Muebleria retail</a>
                            </li>
                            @endcan
                            @can('aseo_industrial.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('aseo_industrial.index') }}">Aseo Industrial</a>
                            </li>
                            @endcan
                            @can('remodelacion_construccion.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('remodelacion_construccion.index') }}">Remodelación y Construcción</a>
                            </li>
                            @endcan
                            @can('info.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('info.index') }}">Información Empresa</a>
                            </li>
                            @endcan
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/fabrikideas/" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/fabrikideas.retail/" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- modal contacto -->
        <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Contáctanos</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <contact-form></contact-form>
                </div>
            </div>
            </div>
        <!-- fin modal contacto -->
        <main class="py-0">
            @yield('content')
        </main>
<!-- Footer -->
<footer class="page-footer font-small bg-footer pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="h3-responsive text-center font-weight-bold">Enlaces</h5>

                <ul class="list-unstyled text-center">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="h3-responsive text-center font-weight-bold">Enlaces</h5>

                <ul class="list-unstyled text-center">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="h3-responsive text-center font-weight-bold">Enlaces</h5>

                <ul class="list-unstyled text-center">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="h3-responsive text-center font-weight-bold">Enlaces</h5>

                <ul class="list-unstyled text-center">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-white font-weight-bold">Todos los derechos reservados © FKideas 2019
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script>
        wow = new WOW().init();
    </script>
</body>
</html>
