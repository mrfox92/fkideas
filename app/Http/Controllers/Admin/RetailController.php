<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\RetailStoreRequest;
use App\Http\Requests\RetailUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Retail;
use App\RetailImages;

class RetailController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $retailers = Retail::orderBy('id', 'DESC')->paginate(10);
        return view('admin.retailers.index', compact('retailers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.retailers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RetailStoreRequest $request)
    {
        $slug = str_slug($request->title, '-');
        $request->merge(['slug' => $slug]);
        $retail = Retail::create([
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
            $path_save = 'storage/retailers/'.$retail->id;
            /* recorremos cada imagen de nuestra coleccion para guardar en disco y los path en
            la tabla correspondiente */
            foreach($files as $key => $file){
                $path_file = Storage::disk('public')->putFile($path_save, $file);
                $retail_image = RetailImages::create([
                    'name' => $retail->slug.'-'.($key+1),
                    'path' => $path_file,
                    'retail_id' => $retail->id,
                    'created_at' => $request->created_at,
                    'updated_at' => $request->updated_at
                ]);
            }
        }

        return redirect()->route('retail.edit', $retail->id)
            ->with('info', 'item mueblería retail creado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Retail $retail)
    {   $retail->images = RetailImages::where('retail_id', $retail->id)->get();
        return view('admin.retailers.show', compact('retail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Retail $retail)
    {
        return view('admin.retailers.edit', compact('retail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RetailUpdateRequest $request, Retail $retail)
    {
        $slug = str_slug($request->title, '-');
        $request->merge(['slug' => $slug]);
        $retail->fill($request->all())->save();
        if($request->file('file')){
            //rescatamos las imagenes que se suben en form actualizar
            $new_files = $request->file('file');
            //creamos la ruta de guardado en disco
            $path_save = 'storage/retailers/'.$retail->id;
             //rescatamos las imagenes subidas anteriormente que se desean reemplazar
             $images_old = RetailImages::where('retail_id', $retail->id)->get();
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
                 $retail_image = RetailImages::create([
                     'name' => $retail->slug.'-'.($key+1),
                     'path' => $path_file,
                     'retail_id' => $retail->id,
                     'created_at' => $request->created_at,
                     'updated_at' => $request->updated_at
                 ]);
             }
        }

        return redirect()->route('retail.edit', $retail->id)
            ->with('info', 'La información ha sido actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Retail $retail)
    {
        $retail_images = RetailImages::where('retail_id', $retail->id)->get();
        $path_images_disk = 'storage/retailers/'.$retail->id;
        if(file_exists($path_images_disk)){
            foreach($retail_images as $image){
                Storage::disk('public')->delete( $image->path );
                $image->delete();
            }
        }
        $retail->delete();
        return back()->with('info', 'item eliminado con éxito');
    }
}
