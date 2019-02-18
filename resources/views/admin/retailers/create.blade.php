@extends('layouts.app')
@section('content')
<div class="container-fluid">
<div class="jumbotron bg-info">
    <h2 class="h1-responsive text-center" >Nuevo proyecto mueblería retail</h2>
</div>
    <div class="d-flex justify-content-center align-item-center">
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