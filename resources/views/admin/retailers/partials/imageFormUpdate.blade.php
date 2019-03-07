{{ Form::hidden('user_id', auth()->user()->id) }}
{{ Form::hidden('retail_id', $retail->id) }}

<div class="form-group">
    {{ Form::label('file', 'Seleccione imagen a subir') }}
    {{ Form::file('file', ['class' => 'form-control', 'id' => 'file']) }}
</div>
<div class="form-group">
    {{ Form::submit('Actualizar', ['class' => 'btn btn-primary']) }}
</div>