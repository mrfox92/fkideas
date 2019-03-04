<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $remodelaciones_construcciones = RemodelacionConstruccion::orderBy('id', 'DESC')
            ->where('status', 'PUBLICADO')
            ->paginate(6);
        foreach($remodelaciones_construcciones as $remodelacion_construccion){
            $remodelacion_construccion->images = RemodelacionConstruccionImages::where('remodelacion_id', $remodelacion_construccion->id)->pluck('path')->first();
        }        
        return view('web.remodelacion_construccion.index', compact('remodelaciones_construcciones'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $remodelacion_construccion = RemodelacionConstruccion::where('slug', $slug)->first();
        if($remodelacion_construccion){
            $remodelacion_construccion->images = RemodelacionConstruccionImages::where('remodelacion_id', $remodelacion_construccion->id)->get();
            return view('web.remodelacion_construccion.show', compact('remodelacion_construccion'));
        }else{
            return view('errors.404');
        }
    }
}
