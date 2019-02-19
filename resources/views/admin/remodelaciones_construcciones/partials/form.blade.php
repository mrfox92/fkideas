{{ Form::hidden('user_id', auth()->user()->id) }}
<div class="form-group">
    {{ Form::label('title', 'Ingrese título') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) }}
</div>
<div class="form-group">
    {{ Form::label('location', 'lugar o empresa donde se realizó trabajo') }}
    {{ Form::text('location', null, ['class' => 'form-control', 'id' => 'location']) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Descripción o detalle del trabajo realizado') }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description', 'rows' => 4]) }}
</div>
<div class="form-group">
    {{ Form::label('file', 'Seleccione una imagen') }}
    {{ Form::file('file', ['class' => 'form-control', 'id' => 'file']) }}
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
</div>
<div class="form-group">
    {{ Form::submit('Crear', ['class' => 'btn btn-primary']) }}
</div>
