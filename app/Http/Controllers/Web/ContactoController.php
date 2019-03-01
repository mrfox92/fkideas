<?php

namespace App\Http\Controllers\Web;

use Mail;
use App\Mail\Contacto;
use Illuminate\Http\Request;
use App\Http\Requests\ContactUsRequest;
use App\Http\Controllers\Controller;

class ContactoController extends Controller
{

    public function formSubmit(ContactUsRequest $request){
        
        $formInput = [
            'nombre' => $request->input('name'),
            'email' => $request->input('email'),
            'asunto' => $request->input('subject'),
            'mensaje' => $request->input('message')
        ];

        if($request->contact_number){
            $formInput['contacto'] = $request->input('contact_number');
        }

        Mail::send(new Contacto($formInput));

        return response()->json(null, 200);
    }
}
