@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<div class="container-fluid content-roles">
    <div class="jumbotron mt-5 bg-info">
        <header>
            <h2 class="h1-responsive text-center">Gestión roles usuarios</h2>
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
                    @can('roles.create')
                    <a class="btn btn-primary float-right" href="{{ route('roles.create') }}">Crear nuevo</a>
                    @endcan
                </div>
                <div class="card-body">
                    <table class="table table-stripped table-hover table-responsive-sm">
                        <thead>
                            <tr class="text-center">
                                <th class="d-none d-lg-table-cell">ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $roles as $role )
                            <tr>
                                <td class="d-none d-lg-table-cell">{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td >{{ $role->description }}</td>
                                <td>
                                    @can('roles.show')
                                    <a class="btn btn-success btn-block mt-2 mb-2" href="{{ route('roles.show', $role->id) }}" title="Ver detalle"><i class="far fa-eye"></i> Ver</a>
                                    @endcan
                                    @can('roles.edit')
                                    <a class="btn btn-primary btn-block mt-2 mb-2" href="{{ route('roles.edit', $role->id) }}" title="Editar información"><i class="far fa-edit"></i> Editar</a>
                                    @endcan  
                                    @can('roles.destroy')
                                    {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-danger btn-block">
                                        <i class="far fa-trash-alt"></i> Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach    
                        </tbody>
                    </table>
                    {{ $roles->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection