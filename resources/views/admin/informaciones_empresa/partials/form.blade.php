{{ Form::hidden('user_id', auth()->user()->id) }}
<div class="form-group">
    {{ Form::label('title', 'Ingrese título') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Descripción de lo que realiza la empresa') }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description', 'rows' => 4]) }}
</div>
<div class="form-group">
    {{ Form::label('email', 'Dirección correo electronico') }}
    {{ Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>
<div class="form-group">
    {{ Form::label('contact_number', 'N° de contacto') }}
    {{ Form::text('contact_number', null, ['class' => 'form-control', 'id' => 'contact_number']) }}
</div>
<div class="form-group">
    {{ Form::label('location', 'Dirección empresa') }}
    {{ Form::text('location', null, ['class' => 'form-control', 'id' => 'location']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
</div>
