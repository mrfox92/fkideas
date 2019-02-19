<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RemodelacionConstruccionStoreRequest;
use App\Http\Requests\RemodelacionConstruccionUpdateRequest;
use Illuminate\Support\Facades\Storage;

use App\RemodelacionConstruccion;

class RemodelacionConstruccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remodelaciones_construcciones = RemodelacionConstruccion::orderBy('id', 'DESC')->paginate(10);
        return view('admin.remodelaciones_construcciones.index', compact('remodelaciones_construcciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.remodelaciones_construcciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RemodelacionConstruccionStoreRequest $request)
    {
        $remodelacion = RemodelacionConstruccion::create($request->all());

        if ($request->file('file')) {
            $path = Storage::disk('public')->putFile('storage/remodelaciones_construcciones', $request->file('file'));
            $remodelacion->fill(['file' => $path])->save();
        }

        return redirect()->route('remodelacion_construccion.edit', $remodelacion->id)
            ->with('info', 'item remodelación y construcción creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(RemodelacionConstruccion $remodelacion)
    {
        return view('admin.remodelaciones_construcciones.show', compact('remodelacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RemodelacionConstruccion $remodelacion)
    {
        return view('admin.remodelaciones_construcciones.edit', compact('remodelacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RemodelacionConstruccionUpdateRequest $request, RemodelacionConstruccion $remodelacion)
    {
        $old_path = $remodelacion->file;
        $remodelacion->fill($request->all())->save();
        if($request->file('file')){
            $path = Storage::disk('public')->putFile('storage/remodelaciones_construcciones', $request->file('file'));
            $remodelacion->fill(['file' => $path])->save();

            if(file_exists($old_path)){
                Storage::disk('public')->delete($old_path);
            }
        }

        return redirect()->route('remodelacion_construccion.edit', $remodelacion->id)
            ->with('info', 'La información ha sido actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RemodelacionConstruccion $remodelacion)
    {
        if($remodelacion->file){
            Storage::disk('public')->delete($remodelacion->file);
        }
        $remodelacion->delete();
        return back()->with('info', 'item eliminado con éxito');
    }
}
