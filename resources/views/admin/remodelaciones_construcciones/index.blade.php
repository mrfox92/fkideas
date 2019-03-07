@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<div class="container-fluid content-remodelacion-construccion">
    <div class="jumbotron mt-5 bg-info">
        <header>
            <h2 class="h1-responsive text-center">Gestión Proyectos Remodelación y Construcción</h2>
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
    <div class="row d-flex justify-content-center align-item-center">
        <div class="col-md-10">
            <div class="card mt-4 mb-5">
                <div class="card-header">
                    @can('remodelacion_construccion.create')
                    <a class="btn btn-primary float-right" href="{{ route('remodelacion_construccion.create') }}">Crear nuevo</a>
                    @endcan
                </div>
                <div class="card-body">
                    <table class="table table-stripped table-hover table-responsive-sm">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Título</th>
                                <th class="d-none d-lg-table-cell">Ubicación</th>
                                <th>Estado Publicación</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $remodelaciones_construcciones as $remodelacion_construccion )
                            <tr>
                                <td>{{ $remodelacion_construccion->id }}</td>
                                <td>{{ $remodelacion_construccion->title }}</td>
                                <td class="d-none d-lg-table-cell">{{ $remodelacion_construccion->location }}</td>
                                <td class="text-lowercase">{{ $remodelacion_construccion->status }}</td>
                                <td>
                                    @can('remodelacion_construccion.show')
                                    <a class="btn btn-success btn-block mt-2 mb-2" href="{{ route('remodelacion_construccion.show', $remodelacion_construccion->id) }}" title="Ver detalle">Ver</a>
                                    @endcan
                                    @can('remodelacion_construccion.edit')
                                    <a class="btn btn-primary btn-block mt-2 mb-2" href="{{ route('remodelacion_construccion.edit', $remodelacion_construccion->id) }}" title="Editar información">Editar</a>
                                    @endcan
                                    @can('remodelacion_construccion.images.index')
                                        <a class="btn btn-info btn-block mt-2 mb-2" href="{{ route('remodelacion_construccion.images.index', $remodelacion_construccion->id) }}" title="gestion imagenes proyecto remodelacion y construccion">Imagenes</a>
                                    @endcan
                                    @can('remodelacion_construccion.destroy')
                                    {!! Form::open(['route' => ['remodelacion_construccion.destroy', $remodelacion_construccion->id], 'method' => 'DELETE']) !!}
                                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-block btn-lg mt-2 mb-2', 'title' => 'Eliminar']) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach    
                        </tbody>
                    </table>
                    {{ $remodelaciones_construcciones->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection