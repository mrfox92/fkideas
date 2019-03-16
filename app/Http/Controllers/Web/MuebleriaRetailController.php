<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Retail;
use App\RetailImages;

class MuebleriaRetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $retailers = Retail::orderBy('id', 'DESC')->where('status', 'PUBLICADO')->paginate(6);
        foreach($retailers as $key => $retail){
            $retail->images = RetailImages::where('retail_id', $retail->id)->get();
        }
        //title
        $title_retail = "Muebleria retail";
        //metadatos
        $meta_description = "Creamos experiencias únicas en tus ambientes. Somos especialistas en proyectos mobiliarios, te ofrecemos la mejor opción según tus necesidades.";

        return view('web.retail.index', compact('retailers', 'title_retail', 'meta_description'));
    }
}
