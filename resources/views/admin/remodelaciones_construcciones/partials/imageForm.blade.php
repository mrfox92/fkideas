{{ Form::hidden('user_id', auth()->user()->id) }}
{{ Form::hidden('remodelacion_id', $remodelacion->id) }}

<div class="form-group">
    {{ Form::label('file', 'Seleccione una o varias imagenes para subir') }}
    {{ Form::file('file[]', ['multiple' => 'true', 'class' => 'form-control', 'id' => 'file']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
</div>