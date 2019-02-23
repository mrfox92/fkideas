@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<div class="container-fluid content-verify">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica Tu Dirección de Correo electrónico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, consulte su correo electrónico para ver un enlace de verificación.') }}
                    {{ __('Si no ha recibido el correo electrónico.') }}, <a href="{{ route('verification.resend') }}">{{ __('haga clic aquí para solicitar otro') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
