<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RemodelacionImageUpdateRequest extends FormRequest
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
             'file' => 'required|max:1024|mimes:jpeg,jpg,png',
         ];
     }
     public function messages(){
         return [
            'file.required' => 'Debe subir a lo menos una imagen',
            'file.uploaded' => 'Error al subir imagen. La imagen debe pesar como máximo 1MB',
            'file.mimes' => 'El formato de la imagen no es válido (intente con jpeg, jpg ó png)',
         ];
     }
}
