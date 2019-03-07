<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\RemodelacionImageStoreRequest;
use App\Http\Requests\RemodelacionImageUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


use App\RemodelacionConstruccion;
use App\RemodelacionConstruccionImages;

class RemodelacionImagesController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $remodelacion = RemodelacionConstruccion::find($id);
        return view('admin.remodelaciones_construcciones.images.create', compact('remodelacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RemodelacionImageStoreRequest $request)
    {
        $save_path = 'storage/remodelaciones_construcciones/'.$request->remodelacion_id;
        $files = $request->file('file');
        foreach($files as $file){
            $fullname = $file->getClientOriginalName();
            $file_name = pathinfo($fullname, PATHINFO_FILENAME);
            $path_file = Storage::disk('public')->putFile($save_path, $file);
            $remodelacion_image = RemodelacionConstruccionImages::create([
                'name' => $file_name,
                'path' => $path_file,
                'remodelacion_id' => $request->remodelacion_id,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at
            ]);
        }
        
        return redirect()->route('remodelacion_construccion.images.index', $request->remodelacion_id)
            ->with('info', 'item agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $remodelacion = RemodelacionConstruccion::find($id);
        $remodelacion->images= RemodelacionConstruccionImages::where('remodelacion_id', $remodelacion->id)->paginate(10);
        return view('admin.remodelaciones_construcciones.images.index', compact('remodelacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_remodelacion, $id)
    {
        $remodelacion = RemodelacionConstruccion::find($id_remodelacion);
        $remodelacion_image = RemodelacionConstruccionImages::find($id);
        return view('admin.remodelaciones_construcciones.images.edit', compact('remodelacion_image', 'remodelacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RemodelacionImageUpdateRequest $request, $id)
    {
        $remodelacion_image = RemodelacionConstruccionImages::find($id);
        $save_path = 'storage/remodelaciones_construcciones/'.$request->remodelacion_id;
        $fullname = $request->file->getClientOriginalName();
        $file_name = pathinfo($fullname, PATHINFO_FILENAME);
        if(file_exists($remodelacion_image->path)){
            $file_path = Storage::disk('public')->putFile($save_path, $request->file);
            Storage::disk('public')->delete( $remodelacion_image->path );
            $remodelacion_image->fill([
                'name' => $file_name,
                'path' => $file_path,
                'remodelacion' => $request->remodelacion_id,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at
            ])->save();
        }

        return redirect()->route('remodelacion_construccion.images.index', $request->remodelacion_id)
            ->with('info', 'imagen actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $remodelacion_image = RemodelacionConstruccionImages::find($id);
        if(file_exists($remodelacion_image->path)){
            Storage::disk('public')->delete( $remodelacion_image->path );
        }
        $remodelacion_image->delete();
        return back()->with('info', 'imagen eliminada con éxito');
    }
}
