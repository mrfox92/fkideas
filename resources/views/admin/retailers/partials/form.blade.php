{{ Form::hidden('user_id', auth()->user()->id) }}
<div class="form-group">
    {{ Form::label('title', 'Ingrese título') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) }}
    @if ( $errors->has('title') )
    <div class="alert alert-danger mt-2 mb-2">
        <strong>{{ $errors->first('title', ':message') }}</strong>
    </div>
    @endif
</div>
<div class="form-group">
    {{ Form::label('location', 'lugar o empresa donde se realizó trabajo') }}
    {{ Form::text('location', null, ['class' => 'form-control', 'id' => 'location']) }}
    @if ( $errors->has('location') )
    <div class="alert alert-danger mt-2 mb-2">
        <strong>{{ $errors->first('location', ':message') }}</strong>
    </div>
    @endif
</div>
<div class="form-group">
    {{ Form::label('description', 'Descripción o detalle del trabajo realizado') }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description', 'rows' => 4]) }}
    @if ( $errors->has('description') )
    <div class="alert alert-danger mt-2 mb-2">
        <strong>{{ $errors->first('description', ':message') }}</strong>
    </div>
    @endif
</div>
<div class="form-group">
    {{ Form::label('file', 'Seleccione imagenes a subir') }}
    {{ Form::file('file[]', ['multiple' => 'true', 'class' => 'form-control', 'id' => 'file']) }}
    @if ( $errors->has('file.*') )
    <div class="alert alert-danger mt-2 mb-2">
        <strong>{{ $errors->first('file.*', ':message') }}</strong>
    </div>
    @endif
    @if ( $errors->has('file') )
    <div class="alert alert-danger mt-2 mb-2">
        <strong>{{ $errors->first('file', ':message') }}</strong>
    </div>
    @endif
</div>
<div class="form-group">
    {{ Form::label('status', 'Estado de la publicación') }}
    <BR>
    <label>
        {{ Form::radio('status', 'PUBLICADO') }} Publicado
    </label>
    <label>
        {{ Form::radio('status', 'BORRADOR') }} Borrador
    </label>
    @if ( $errors->has('status') )
    <div class="alert alert-danger mt-2 mb-2">
        <strong>{{ $errors->first('status', ':message') }}</strong>
    </div>
    @endif
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
</div>
