@component('mail::message')
# {{ $datos['nombre'] }}
@if(array_key_exists('contacto', $datos))
#N° de contacto: {{ $datos['contacto'] }}
@endif
email: {{ $datos['email'] }}
mensaje:
@component('mail::panel')
    {{ $datos['mensaje'] }}
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
