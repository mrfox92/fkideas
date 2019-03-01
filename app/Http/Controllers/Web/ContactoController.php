<?php

namespace App\Http\Controllers\Web;

use Mail;
use App\Mail\Contacto;
use Illuminate\Http\Request;
use App\Http\Requests\ContactUsRequest;
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
        return view('web.contacto.index');
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
            'email' => 'required|email',
            'subject'   => 'required',
            'message'   => 'required'
        ]);

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
        return redirect()->back()->with('flash_message', 'Su correo ha sido enviado con éxito');
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

    public function formSubmit(ContactUsRequest $request){
        
        /* return response()->json([$request->all()]); */
        return response()->json(null, 200);
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
