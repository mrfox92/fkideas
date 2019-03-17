<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\AseoIndustrial;

class AseoIndustrialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aseos_industriales = AseoIndustrial::orderBy('id', 'DESC')
            ->where('status', 'PUBLICADO')
            ->paginate(6);
        $title_aseo = "Aseo industrial";
        $meta_description = "Somos especialistas en aseo industrial, junto a nuestro personal calificado y nuestro equipamiento hacemos entregas de obra de alta calidad.";
        return view('web.aseo_industrial.index', compact('aseos_industriales', 'title_aseo', 'meta_description'));
    }
}
