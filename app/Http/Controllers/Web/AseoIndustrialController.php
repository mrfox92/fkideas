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
        return view('web.aseo_industrial.index', compact('aseos_industriales'));
    }
}
