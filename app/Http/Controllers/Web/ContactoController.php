<?php

namespace App\Http\Controllers\Web;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required',
            'contact_number'    => 'required',
            'email' => 'required|email',
            'subject'   => 'required',
            'message'   => 'required'
        ]);

        Mail::send('emails.contact-message', [
            'nombre' => $request->name,
            'contacto' => $request->contact_number,
            'direccion_correo' => $request->email,
            'motivo' => $request->subject,
            'mensaje' => $request->message,
        ], function($mail) use($request){
            $mail->from($request->email, $request->name);
            $mail->to('fkideas123@gmail.com')->subject($request->subject);
        });

        return redirect()->back()->with('info', 'Su correo ha sido enviado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
