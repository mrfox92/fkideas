{{ Form::hidden('user_id', auth()->user()->id) }}
<div class="form-group">
    {{ Form::label('name', 'Nombre role') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'Url amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Descripción role') }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) }}
</div>
<hr>
<h3 class="h3-responsive">Permiso especial</h3>
<div class="form-group">
    <label>{{ Form::radio('special', 'all-access') }} Acceso total</label>
    <label>{{ Form::radio('special', 'no-access') }} Ningún acceso</label>
</div>
<hr>
<h3 class="h3-responsive">Lista de permisos</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach( $permissions as $permission )
        <li>
            <label>
                {{ Form::checkbox('permissions[]', $permission->id, null) }}
                {{ $permission->name }}
                <em>({{ $permission->description ?: 'sin descripción' }})</em>
            </label>
        </li>   
        @endforeach
    </ul>
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
</div>
