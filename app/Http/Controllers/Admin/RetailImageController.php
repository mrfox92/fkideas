<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RetailImageStoreRequest;
use App\Http\Requests\RetailImageUpdateRequest;
use Illuminate\Support\Facades\Storage;

use App\Retail;
use App\RetailImages;

class RetailImageController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $retail = Retail::find($id);
        return view('admin.retailers.images.create', compact('retail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RetailImageStoreRequest $request)
    {
        $save_path = 'storage/retailers/'.$request->retail_id;
        $files = $request->file('file');
        foreach($files as $file){
            $fullname = $file->getClientOriginalName();
            $file_name = pathinfo($fullname, PATHINFO_FILENAME);
            $path_file = Storage::disk('public')->putFile($save_path, $file);
            $retail_image = RetailImages::create([
                'name' => $file_name,
                'path' => $path_file,
                'retail_id' => $request->retail_id,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at
            ]);
        }
        
        return redirect()->route('retail.images.index', $request->retail_id)
            ->with('info', 'item agregado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $retail = Retail::find($id);
        $retail->images= RetailImages::where('retail_id', $retail->id)->paginate(10);
        return view('admin.retailers.images.index', compact('retail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_retail, $id)
    {
        $retail = Retail::find($id_retail);
        $retail_image = RetailImages::find($id);
        return view('admin.retailers.images.edit', compact('retail_image', 'retail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RetailImageUpdateRequest $request, $id)
    {
        $retail_image = RetailImages::find($id);
        $save_path = 'storage/retailers/'.$request->retail_id;
        $fullname = $request->file->getClientOriginalName();
        $file_name = pathinfo($fullname, PATHINFO_FILENAME);
        if(file_exists($retail_image->path)){
            $file_path = Storage::disk('public')->putFile($save_path, $request->file);
            Storage::disk('public')->delete( $retail_image->path );
            $retail_image->fill([
                'name' => $file_name,
                'path' => $file_path,
                'retail_id' => $request->retail_id,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at
            ])->save();
        }

        return redirect()->route('retail.images.index', $request->retail_id)
            ->with('info', 'imagen actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $retail_image = RetailImages::find($id);
        if(file_exists($retail_image->path)){
            Storage::disk('public')->delete( $retail_image->path );
        }
        $retail_image->delete();
        return back()->with('info', 'imagen eliminada con éxito');
    }
}
