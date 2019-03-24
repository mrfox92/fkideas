{{ Form::hidden('user_id', auth()->user()->id) }}
<div class="form-group">
    <i class="fas fa-pencil-alt"></i>
    {{ Form::label('title', 'Ingrese título') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) }}
    @if ( $errors->has('title') )
    <div class="alert alert-danger mt-2 mb-2">
        <strong>{{ $errors->first('title', ':message') }}</strong>
    </div>
    @endif
</div>
<div class="form-group">
    <i class="fas fa-pencil-alt"></i>
    {{ Form::label('description', 'Descripción de lo que realiza la empresa') }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description', 'rows' => 4]) }}
    @if ( $errors->has('description') )
    <div class="alert alert-danger mt-2 mb-2">
        <strong>{{ $errors->first('description', ':message') }}</strong>
    </div>
    @endif
</div>
<div class="form-group">
    <i class="far fa-envelope"></i>
    {{ Form::label('email', 'Dirección correo electronico') }}
    {{ Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) }}
    @if ( $errors->has('email') )
    <div class="alert alert-danger mt-2 mb-2">
        <strong>{{ $errors->first('email', ':message') }}</strong>
    </div>
    @endif
</div>
<div class="form-group">
    <i class="fas fa-mobile-alt"></i>
    {{ Form::label('mobile_number', 'N° de contacto(celular)') }}
    {{ Form::text('mobile_number', null, ['class' => 'form-control', 'id' => 'mobile_number']) }}
    @if ( $errors->has('mobile_number') )
    <div class="alert alert-danger mt-2 mb-2">
        <strong>{{ $errors->first('mobile_number', ':message') }}</strong>
    </div>
    @endif
</div>
<div class="form-group">
    <i class="fas fa-phone"></i>
    {{ Form::label('phone_number', 'N° de contacto(red fija)') }}
    {{ Form::text('phone_number', null, ['class' => 'form-control', 'id' => 'phone_number']) }}
    @if ( $errors->has('phone_number') )
    <div class="alert alert-danger mt-2 mb-2">
        <strong>{{ $errors->first('phone_number', ':message') }}</strong>
    </div>
    @endif
</div>
<div class="form-group">
    <i class="fas fa-map-marker-alt"></i>
    {{ Form::label('location', 'Dirección empresa') }}
    {{ Form::text('location', null, ['class' => 'form-control', 'id' => 'location']) }}
    @if ( $errors->has('location') )
    <div class="alert alert-danger mt-2 mb-2">
        <strong>{{ $errors->first('location', ':message') }}</strong>
    </div>
    @endif
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
</div>
