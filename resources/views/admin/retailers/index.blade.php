@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="jumbotron mt-5 bg-info">
        <header>
            <h2 class="h1-responsive text-center">Gestión proyectos mueblería retail</h2>
        </header>
    </div>
    <div class="row d-flex justify-content-center align-item-center">
        <div class="col-md-10">
            <div class="card mt-4 mb-5">
                <div class="card-header">
                    <a class="btn btn-primary float-right" href="{{ route('retail.create') }}">Crear nuevo</a>
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
                                    <a class="btn btn-success btn-block mt-2 mb-2" href="{{ route('retail.show', $retail->id) }}" title="Ver detalle">Ver</a>
                                    <a class="btn btn-primary btn-block mt-2 mb-2" href="{{ route('retail.edit', $retail->id) }}" title="Editar información">Editar</a>
                                    {!! Form::open(['route' => ['retail.destroy', $retail->id], 'method' => 'DELETE']) !!}
                                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-block mt-2 mb-2', 'title' => 'Eliminar']) !!}
                                    {!! Form::close() !!}
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