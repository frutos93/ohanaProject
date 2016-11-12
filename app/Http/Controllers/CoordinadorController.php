<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
Use DB;
class CoordinadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('coordinadores_index')->with('coordinadores', \App\Coordinador::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coordinadores_create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function modify()
    {
        $miId = Input::get('id');
        $coord = DB::table('coordinador')->where('id', $miId)->first();
    
        if(is_null($coord))
            return $this->  index();
        else
            return view('coordinadores_modify')->with('coordinador', $coord);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {
        $miId = Input::get('id');
        $coord = DB::table('coordinador')->where('id', $miId)->first();
    
        if(is_null($coord))
            return $this->  index();
        else
            return view('coordinadores_delete')->with('coordinador', $coord);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'escuela' => 'required',
            'telefono' => 'required',
            'email' => 'required'
        ));
        // store data
        DB::table('coordinador')->insert([
                'nombre' => $request->nombre,
                'apellido_paterno' => $request->apellido_paterno,
                'apellido_materno' => $request->apellido_materno,
                'escuela' => $request->escuela,
                'telefono' => $request->telefono,
                'email' => $request->email
            ]
        );

        // redirect to another page
        return redirect()->route('coordinadores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, array(
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'escuela' => 'required',
            'telefono' => 'required',
            'email' => 'required'
        ));
        // update data

        DB::table('coordinador')
            ->where('id', $request->id)
            ->update([
                'nombre' => $request->nombre,
                'apellido_paterno' => $request->apellido_paterno,
                'apellido_materno' => $request->apellido_materno,
                'escuela' => $request->escuela,
                'telefono' => $request->telefono,
                'email' => $request->email
                ]);

        // redirect to another page
        return redirect()->route('coordinadores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DB::table('coordinador')->where('id', '=', $request->id)->delete();
        return redirect()->route('coordinadores.index');
    }
}
