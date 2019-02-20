@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<div class="container-fluid content-retail">
    <div class="jumbotron mt-5 bg-info">
        <header>
            <h2 class="h1-responsive text-center">Gestión proyectos mueblería retail</h2>
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
                    @can('retail.create')
                    <a class="btn btn-primary float-right" href="{{ route('retail.create') }}">Crear nuevo</a>
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
                            @foreach ( $retailers as $retail )
                            <tr>
                                <td>{{ $retail->id }}</td>
                                <td>{{ $retail->title }}</td>
                                <td class="d-none d-lg-table-cell">{{ $retail->location }}</td>
                                <td class="text-lowercase">{{ $retail->status }}</td>
                                <td>
                                    @can('retail.show')
                                    <a class="btn btn-success btn-block mt-2 mb-2" href="{{ route('retail.show', $retail->id) }}" title="Ver detalle">Ver</a>
                                    @endcan
                                    @can('retail.edit')
                                    <a class="btn btn-primary btn-block mt-2 mb-2" href="{{ route('retail.edit', $retail->id) }}" title="Editar información">Editar</a>
                                    @endcan  
                                    @can('retail.destroy')
                                    {!! Form::open(['route' => ['retail.destroy', $retail->id], 'method' => 'DELETE']) !!}
                                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-block btn-lg mt-2 mb-2', 'title' => 'Eliminar']) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach    
                        </tbody>
                    </table>
                    {{ $retailers->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection