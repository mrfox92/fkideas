@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<div class="container-fluid content-aseo-industrial">
    <div class="jumbotron mt-5 bg-info">
        <header>
            <h2 class="h1-responsive text-center">Gestión Proyectos Aseo Industrial</h2>
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
                    @can('aseo_industrial.create')
                    <a class="btn btn-primary float-right" href="{{ route('aseo_industrial.create') }}"><i class="fas fa-folder-plus"></i> Crear nuevo</a>
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
                            @foreach ( $aseos_industriales as $aseo_industrial )
                            <tr>
                                <td>{{ $aseo_industrial->id }}</td>
                                <td>{{ $aseo_industrial->title }}</td>
                                <td class="d-none d-lg-table-cell">{{ $aseo_industrial->location }}</td>
                                <td class="text-lowercase">{{ $aseo_industrial->status }}</td>
                                <td>
                                    @can('aseo_industrial.show')
                                    <a class="btn btn-success btn-block mt-2 mb-2" href="{{ route('aseo_industrial.show', $aseo_industrial->id) }}" title="Ver detalle"><i class="far fa-eye"></i> Ver</a>
                                    @endcan
                                    @can('aseo_industrial.edit')
                                    <a class="btn btn-primary btn-block mt-2 mb-2" href="{{ route('aseo_industrial.edit', $aseo_industrial->id) }}" title="Editar información"><i class="far fa-edit"></i> Editar</a>
                                    @endcan
                                    @can('aseo_industrial.destroy')
                                        {!! Form::open(['route' => ['aseo_industrial.destroy', $aseo_industrial->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-danger btn-block mt-2 mb-2">
                                            <i class="far fa-trash-alt"></i> Eliminar
                                        </button>
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach    
                        </tbody>
                    </table>
                    {{ $aseos_industriales->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection