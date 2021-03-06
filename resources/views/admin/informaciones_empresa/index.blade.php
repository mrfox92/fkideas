@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<div class="container-fluid content-info">
    <div class="jumbotron mt-5 bg-info">
        <header>
            <h2 class="h1-responsive text-center">Gestión información de la empresa</h2>
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
                <div class="card-body">
                    <table class="table table-stripped table-hover table-responsive-sm">
                        <thead>
                            <tr class="text-center">
                                <th class="text-center">Título</th>
                                <th class="d-none d-lg-table-cell"><i class="far fa-file-alt"></i> Descripción</th>
                                <th class="d-none d-lg-table-cell"><i class="fas fa-envelope"></i> Email</th>
                                <th class="d-none d-lg-table-cell"><i class="fas fa-mobile-alt"></i> celular</th>
                                <th class="d-none d-lg-table-cell"><i class="fas fa-phone"></i> fijo</th>
                                <th><i class="fas fa-map-marker-alt"></i> Dirección</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $informacion_empresa as $info )
                            <tr>
                                <td>{{ $info->title }}</td>
                                <td class="d-none d-lg-table-cell">{{ $info->description }}</td>
                                <td class="d-none d-lg-table-cell">{{ $info->email }}</td>
                                <td class="d-none d-lg-table-cell">{{ $info->mobile_number }}</td>
                                <td class="d-none d-lg-table-cell">{{ $info->phone_number }}</td>
                                <td >{{ $info->location }}</td>
                                <td>
                                    @can('info.show')
                                    <a class="btn btn-success btn-block mt-2 mb-2" href="{{ route('info.show', $info->id) }}" title="Ver detalle"><i class="far fa-eye"></i> Ver</a>
                                    @endcan
                                    @can('info.edit')
                                    <a class="btn btn-primary btn-block mt-2 mb-2" href="{{ route('info.edit', $info->id) }}" title="Editar información"><i class="far fa-edit"></i> Editar</a>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection