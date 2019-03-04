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
        //rescatar primera imagen relacionada para cada proyecto retail
        foreach($retailers as $key => $retail){
            $retail->images = RetailImages::where('retail_id', $retail->id)->pluck('path')->first();
        }

        return view('web.retail.index', compact('retailers'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $retail = Retail::where('slug', $slug)->first();
        if($retail){
            $retail->images = RetailImages::where('retail_id', $retail->id)->get();
            return view('web.retail.show', compact('retail'));
        }else{
            return view('errors.404');
        }
    }
}
