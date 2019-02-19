<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AseoIndustrialStoreRequest extends FormRequest
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
            'location' => 'required|max:128',
            'description' => 'required',
            'file' => 'required|max:1024|mimes:jpeg,jpg,png',
            'status' => 'required',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Debe ingresar un título',
            'title.max' => 'El título no debe exceder los 128 caracteres, reintente',
            'location.required' => 'Por favor debe especificar un lugar ó empresa',
            'location.max' => 'La especificación del lugar ó empresa no debe exceder los 128 caracteres, reintente',
            'description.required' => 'Debe ingresar una descripción',
            'file.required' => 'Debe subir una imagen',
            'file.uploaded' => 'Error al subir imagen. La imagen debe pesar como máximo 1MB',
            'file.mimes' => 'El formato de la imagen no es válido (intente con jpeg, jpg ó png)',
            'status.required' => 'Debe seleccionar un estado de publicación',
        ];
    }
}
