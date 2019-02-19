<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\InfoUpdateRequest;
use App\Http\Controllers\Controller;

use App\Info;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informacion_empresa = Info::orderBy('id', 'DESC')->paginate(10);

        return view('admin.informaciones_empresa.index', compact('informacion_empresa'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Info $info)
    {
        return view('admin.informaciones_empresa.show', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Info $info)
    {
        return view('admin.informaciones_empresa.edit', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InfoUpdateRequest $request, Info $info)
    {
        $info->fill($request->all())->save();

        return redirect()->route('info.edit', $info->id)
            ->with('info', 'La información ha sido actualizada con éxito');
    }
}
