<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\AseoIndustrialStoreRequest;
use App\Http\Requests\AseoIndustrialUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\AseoIndustrial;

class AseoIndustrialController extends Controller
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
        $aseos_industriales = AseoIndustrial::orderBy('id', 'DESC')->paginate(10);
        return view('admin.aseos_industriales.index', compact('aseos_industriales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aseos_industriales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AseoIndustrialStoreRequest $request)
    {
        $aseo = AseoIndustrial::create($request->all());
        if ($request->file('file')) {
            $path = Storage::disk('public')->putFile('storage/aseos_industriales', $request->file('file'));
            $aseo->fill(['file' => $path])->save();
        }

        return redirect()->route('aseo_industrial.edit', $aseo->id)
            ->with('info', 'item aseo industrial creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(AseoIndustrial $aseo)
    {
        return view('admin.aseos_industriales.show', compact('aseo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit(AseoIndustrial $aseo)
    { 
        return view('admin.aseos_industriales.edit', compact('aseo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AseoIndustrialUpdateRequest $request, AseoIndustrial $aseo)
    {
        $old_path = $aseo->file;
        $aseo->fill($request->all())->save();
        if($request->file('file')){
            $path = Storage::disk('public')->putFile('storage/aseos_industriales', $request->file('file'));
            $aseo->fill(['file' => $path])->save();

            if(file_exists($old_path)){
                Storage::disk('public')->delete($old_path);
            }
        }

        return redirect()->route('aseo_industrial.edit', $aseo->id)
            ->with('info', 'información actualizada con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AseoIndustrial $aseo)
    {
        if($aseo->file){
            Storage::disk('public')->delete($aseo->file);
        }
        $aseo->delete();
        return back()->with('info', 'item eliminado con éxito');
    }
}
