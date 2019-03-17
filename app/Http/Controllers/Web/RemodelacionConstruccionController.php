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
            $remodelacion_construccion->images = RemodelacionConstruccionImages::where('remodelacion_id', $remodelacion_construccion->id)->get();
        }        

        $title_remodelacion = "Remodelación y Construcciones menores";
        $meta_description = "En nuestros servicios de remodelación y construcción ponemos a tu disposición las herramientas creativas que necesitas para impulsar tu marca.";

        return view('web.remodelacion_construccion.index', compact('remodelaciones_construcciones', 'title_remodelacion', 'meta_description'));
    }
}
