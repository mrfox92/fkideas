<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NosotrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //title
        $title_nosotros = "Nosotros | Fkideas";
        //metadatos
        $meta_description = "En fkideas nuestro sello es el compromiso y calidad de servicio, nuestro equipo te guiará hacia las mejores soluciones acordes a tus necesidades.";
        return view('web.nosotros.index', compact('title_nosotros', 'meta_description'));
    }
    
}
