<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\RetailStoreRequest;
use App\Http\Requests\RetailUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Retail;

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
        $retail = Retail::create($request->all());

        if ($request->file('file')) {
            $path = Storage::disk('public')->putFile('storage/retailers', $request->file('file'));
            $retail->fill(['file' => $path])->save();
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
    {
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
        $old_path = $retail->file;
        $retail->fill($request->all())->save();
        if($request->file('file')){
            $path = Storage::disk('public')->putFile('storage/retailers', $request->file('file'));
            $retail->fill(['file' => $path])->save();

            if(file_exists($old_path)){
                Storage::disk('public')->delete($old_path);
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
        if($retail->file){
            Storage::disk('public')->delete($retail->file);
        }
        $retail->delete();
        return back()->with('info', 'item eliminado con éxito');
    }
}
