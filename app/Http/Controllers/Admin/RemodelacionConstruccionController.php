<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RemodelacionConstruccionStoreRequest;
use App\Http\Requests\RemodelacionConstruccionUpdateRequest;
use Illuminate\Support\Facades\Storage;

use App\RemodelacionConstruccion;
use App\RemodelacionConstruccionImages;

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
        $slug = str_slug($request->title, '-');
        $request->merge(['slug' => $slug]);
        $remodelacion = RemodelacionConstruccion::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'description' => $request->description,
            'location' => $request->location,
            'status' => $request->status,
            'user_id' => $request->user_id,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at    
        ]);

        if ($request->file('file')) {
            //rescatamos las imagenes
            $files = $request->file('file');
            //creamos la ruta de guardado en disco
            $path_save = 'storage/remodelaciones_construcciones/'.$remodelacion->id;
            /* recorremos cada imagen de nuestra coleccion para guardar en disco y los path en
            la tabla correspondiente */
            foreach($files as $key => $file){
                $path_file = Storage::disk('public')->putFile($path_save, $file);
                $remodelacion_images = RemodelacionConstruccionImages::create([
                    'name' => $remodelacion->slug.'-'.($key+1),
                    'path' => $path_file,
                    'remodelacion_id' => $remodelacion->id,
                    'created_at' => $request->created_at,
                    'updated_at' => $request->updated_at
                ]);
            }
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
        $remodelacion->images = RemodelacionConstruccionImages::where('remodelacion_id', $remodelacion->id)->get();
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

        $slug = str_slug($request->title, '-');
        $request->merge(['slug' => $slug]);
        $remodelacion->fill($request->all())->save();
        if($request->file('file')){
            //rescatamos las imagenes que se suben en form actualizar
            $new_files = $request->file('file');
            //creamos la ruta de guardado en disco
            $path_save = 'storage/remodelaciones_construcciones/'.$remodelacion->id;
             //rescatamos las imagenes subidas anteriormente que se desean reemplazar
             $images_old = RemodelacionConstruccionImages::where('remodelacion_id', $remodelacion->id)->get();
             /* borramos los registros de las rutas de imagenes relacionadas al elemento retail
             tanto de disco, como en BD */
             if( $images_old ){
                foreach($images_old as $image){
                    Storage::disk('public')->delete($image->path);
                    $image->delete();
                }
             }
             
             /*borramos las imagenes recorremos cada imagen de nuestra coleccion para guardar en disco y los path en
             la tabla correspondiente */
             foreach($new_files as $key => $file){
                 $path_file = Storage::disk('public')->putFile($path_save, $file);
                 $remodelacion_image = RemodelacionConstruccionImages::create([
                     'name' => $remodelacion->slug.'-'.($key+1),
                     'path' => $path_file,
                     'remodelacion_id' => $remodelacion->id,
                     'created_at' => $request->created_at,
                     'updated_at' => $request->updated_at
                 ]);
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

        $remodelacion_images = RemodelacionConstruccionImages::where('remodelacion_id', $remodelacion->id)->get();
        $path_images_disk = 'storage/remodelaciones_construcciones/'.$remodelacion->id;
        if(file_exists($path_images_disk)){
            foreach($remodelacion_images as $image){
                Storage::disk('public')->delete( $image->path );
                $image->delete();
            }
        }
        $remodelacion->delete();
        return back()->with('info', 'item eliminado con éxito');
    }
}
