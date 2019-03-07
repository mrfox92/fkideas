@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<div class="container-fluid content-gallery">
<div class="jumbotron mt-5 bg-info">
        <header>
            <h2 class="h2-responsive text-center">Gestión imagenes proyecto remodelación y construcción</h2>
            <h4 class="h4-responsive text-center">( {{ $remodelacion->title }} )</h4>
        </header>
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

    @if(count($errors))
    <br>
    <div class="row d-flex justify-content-center align-item-center">
        <div class="col-md-10">
            <div class="alert alert-danger">
                <ul>
                @foreach ( $errors->all() as $error )
                <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>  
        </div>
    </div>
    @endif
    <nav class="row d-flex justify-content-around align-item-center mt-4 mb-5">
        <a class="btn btn-success" href="{{ route('remodelacion_construccion.index') }}"><i class="fas fa-hand-point-left"></i> Volver</a>
        @can('remodelacion.images.create')
        <a class="btn btn-primary" href="{{ route('remodelacion_construccion.images.create', $remodelacion->id) }}">Agregar <i class="fas fa-plus"></i></a>
        @endcan
    </nav>
    <br>
    <div class="row">
        @foreach ( $remodelacion->images as $item )
        <div class="col-md-4 col-12 mt-4 mb-5">
            <div class="card">
                <img class="img-fluid" src="{{ asset($item->path) }}" alt="{{ $item->name }}">
            </div>
            <nav class="row d-flex justify-content-around align-item-center mt-4 mb-5">
                @can('remodelacion_construccion.images.destroy')
                    {!! Form::open(['route' => ['remodelacion_construccion.images.destroy', $item->id], 'method' => 'DELETE']) !!}
                        <button class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i> Eliminar
                        </button>
                    {!! Form::close() !!}
                @endcan
                @can('remodelacion_construccion.images.edit')
                    <a class="btn btn-info" href="{{ route('remodelacion_construccion.images.edit', ['project' => $remodelacion->id, 'image' => $item->id]) }}"><i class="fas fa-images"></i> Reemplazar</a>
                @endcan
            </nav>
        </div>
        @endforeach
    </div>
    {{ $remodelacion->images->render() }}
</div>
</div>
@endsection