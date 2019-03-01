<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
            'name'  => 'required',
            'email' => 'required|email',
            'subject'   => 'required',
            'message'   => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Debe completar el campo nombre',
            'email.required' => 'Debe ingresar su correo',
            'subject.required' => 'Debe indicar un motivo de contacto',
            'message.required' => 'Debe agregar un mensaje'
        ];
    }
}
