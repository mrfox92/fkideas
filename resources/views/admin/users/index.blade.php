@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<div class="container-fluid content-users">
    <div class="jumbotron mt-5 bg-info">
        <header>
            <h2 class="h1-responsive text-center">Gestión usuarios</h2>
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
                                <th class="d-none d-lg-table-cell">ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $users as $user )
                            <tr>
                                <td class="d-none d-lg-table-cell">{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td >{{ $user->email }}</td>
                                <td>
                                    @can('users.show')
                                    <a class="btn btn-success btn-block mt-2 mb-2" href="{{ route('users.show', $user->id) }}" title="Ver detalle">Ver</a>
                                    @endcan
                                    @can('users.edit')
                                    <a class="btn btn-primary btn-block mt-2 mb-2" href="{{ route('users.edit', $user->id) }}" title="Editar información">Editar</a>
                                    @endcan  
                                    @can('users.destroy')
                                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-danger btn-block">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach    
                        </tbody>
                    </table>
                    {{ $users->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection