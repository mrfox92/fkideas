@extends('layouts.app')
@section('content')
<div class="container-fluid">
<div class="jumbotron bg-info">
    <h2 class="h1-responsive text-center" >Editar proyecto mueblería retail</h2>
</div>
    <div class="d-flex justify-content-center align-item-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Editar proyecto retail
                </div>
                <div class="card-body">
                    {!! Form::model($retail, ['route' => ['retail.update', $retail->id], 'method' => 'PUT', 'files' => 'true']) !!}
                        @include('admin.retailers.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection