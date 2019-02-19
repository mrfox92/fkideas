@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<div class="container-fluid content-info">
<div class="jumbotron bg-info">
    <h2 class="h1-responsive text-center" >Editar información de la empresa</h2>
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
            <div class="card">
                <div class="card-header">
                    edición información de la empresa
                </div>
                <div class="card-body">
                    {!! Form::model($info, ['route' => ['info.update', $info->id], 'method' => 'PUT']) !!}
                        @include('admin.informaciones_empresa.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection