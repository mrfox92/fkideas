@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<div class="container-fluid content-retail">
<div class="jumbotron bg-info">
    <h2 class="h1-responsive text-center" >Nuevo proyecto mueblería retail</h2>
</div>
    @if(session('info'))
    <br>
    <div class="row d-flex justify-content-center align-item-center">
        <div class="alert alert-success text-center">
            {{ session('info') }}
        </div>
    </div>
    @endif

    <div class="row d-flex justify-content-center align-item-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Nuevo proyecto retail
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'retail.store', 'files' => 'true']) !!}
                        @include('admin.retailers.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection