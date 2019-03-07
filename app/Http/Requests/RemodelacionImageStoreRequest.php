<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RemodelacionImageStoreRequest extends FormRequest
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
             'file' => 'required',
             'file.*' => 'max:1024|mimes:jpeg,jpg,png',
         ];
     }
     public function messages(){
         return [
             'file.required' => 'Debe subir a lo menos una imagen',
             'file.mimes' => 'El formato de la imagen no es vรกlido (intente con jpeg, jpg รณ png)',
             'file.*.uploaded' => 'Error al subir imagenes. cada imagen debe pesar como mรกximo 1MB'
         ];
     }
}
