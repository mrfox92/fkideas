@section('title')
<title>Acceso fkideas</title>
@endsection
@extends('layouts.app')

@section('content')
 <!-- Login de acceso -->
<div class="container-fluid login">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="h3-responsive text-center blue-text font-weight-bold">{{ __('Acceso') }}</h3>
                    <hr>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="md-form">
                            <i class="fa fa-envelope prefix blue-text"></i>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            <label for="email">{{ __('Correo Electrónico') }}</label>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="md-form">
                            <i class="fas fa-key prefix blue-text"></i>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            <label for="password">{{ __('Contraseña') }}</label>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <!--  -->
                        <div class="d-flex justify-content-around">
                            <div>
                                <!-- Remember me -->
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">{{ __('Recuerdame') }}</label>
                                </div>
                            </div>
                            <div>
                                <!-- Forgot password -->
                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu Contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <!--  -->
                        <div class="md-form">
                            <button type="submit" class="btn btn-blue btn-block">
                                {{ __('Iniciar Sesión') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
