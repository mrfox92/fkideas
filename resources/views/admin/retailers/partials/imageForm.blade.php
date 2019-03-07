{{ Form::hidden('user_id', auth()->user()->id) }}
{{ Form::hidden('retail_id', $retail->id) }}

<div class="form-group">
    {{ Form::label('file', 'Seleccione imagenes a subir') }}
    {{ Form::file('file[]', ['multiple' => 'true', 'class' => 'form-control', 'id' => 'file']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
</div>