<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:128',
            'description' => 'required',
            'email' => 'required|max:128',
            'mobile_number' => 'required|max:20',
            'phone_number' => 'required|max:20',
            'location' => 'required|max:120',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Debe ingresar un título',
            'title.max' => 'El título no debe exceder los 128 caracteres, reintente',
            'location.required' => 'Por favor debe especificar una dirección para la empresa',
            'location.max' => 'El texto ingresado en dirección de la empresa no debe exceder los 128 caracteres, reintente',
            'description.required' => 'Debe ingresar una descripción',
            'email.required' => 'Debe ingresar una dirección de correo electrónico',
            'email.max' => 'Error al ingresar email, La dirección de correo no debe superar los 128 caracteres, reintente',
            'mobile_number.required' => 'Debe ingresar un número de contacto(celular)',
            'mobile_number.max' => 'Error al ingresar el número de contacto(celular), ha introducido un número demasiado largo, reintente',
            'phone_number.required' => 'Debe ingresar un número de contacto(red fija)',
            'phone_number.max' => 'Error al ingresar el número de contacto(red fija), ha introducido un número demasiado largo, reintente',
        ];
    }
}
