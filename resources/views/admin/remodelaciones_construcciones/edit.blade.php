@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<div class="container-fluid content-remodelacion-construccion">
<div class="jumbotron bg-info">
    <h2 class="h1-responsive text-center" >Editar proyecto remodelación y construcción</h2>
</div>
    @if(session('info'))
    <br>
    <div class="row d-flex justify-content-center align-item-center">
        <div class="col-md-10">
            <div class="alert alert-success text-center">
                {{ session('info') }}
            </div>
        </div>
    </div>
    @endif
    <div class="row d-flex justify-content-center align-item-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Editar proyecto remodelación y construcción
                </div>
                <div class="card-body">
                    {!! Form::model($remodelacion, ['route' => ['remodelacion_construccion.update', $remodelacion->id], 'method' => 'PUT', 'files' => 'true']) !!}
                        @include('admin.remodelaciones_construcciones.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection