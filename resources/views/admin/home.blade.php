@section('styles')
<!-- content style -->
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
@endsection
@extends('layouts.app')
@section('content')
<div class="container-fluid content-profile">
    <div class="jumbotron bg-info">
        <h2 class="h2-responsive text-center">Bienvenido usuario <small>{{ auth()->user()->name }}</small></h2>
    </div>
</div>
@endsection