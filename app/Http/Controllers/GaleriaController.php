<?php

namespace App\Http\Controllers;
use App\Imagen;
use Illuminate\Http\File;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Response;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('galeria_index')->with('galerias', \App\Galeria::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('galeria_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate data
        $this->validate($request, array(
            'nombre' => 'required'
        ));

        // store data
        $id = DB::table('galeria')->insertGetId([
                'nombre' => $request->nombre,
                'descripcion' => $request->descripcion
            ]
        );


        $files_data = $request->get('files');
        for($iter = 0 ; $iter < count(Input::file('input_files')); $iter++){
            $file = Input::file('input_files')[$iter];
            $extension = $file->extension();
            $directory = public_path() . '/uploads/';
            $filename = uniqid(time()) . ".{$extension}";
            $file->move($directory, $filename);

            Imagen::create([
                'nombre' => $files_data['name'][$iter],
                'descripcion' => $files_data['description'][$iter],
                'galeria_id' => $id,
                'url' => $filename
            ]);
        }
        die();


        
        // redirect to another page
        return redirect()->route('admin_galeria.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function uploadImage(Request $request)
    {
        dump($request);
        $file = Input::file('file');

        $extension = File::extension($file['name']);
        $directory = path('public') . 'uploads/' . sha1(time());
        $filename = sha1(time() . time()) . ".{$extension}";

        $upload_success = Input::upload('file', $directory, $filename);

        if ($upload_success) {
            return Response::json('success', 200);
        } else {
            return Response::json('error', 400);
        }
    }

}
