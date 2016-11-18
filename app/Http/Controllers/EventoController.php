<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
Use DB;
class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $coordinadores = DB::table('coordinador')
          ->select(DB::raw("CONCAT(nombre, ' ', apellido_paterno, ' ', apellido_materno) AS nombre, id"))
          ->pluck('nombre', 'id');
        //\App\Coordinador::all()->pluck('apellido_paterno','nombre', 'id');
        //$coordinador_nombre = \App\Coordinador::all()->pluck('nombre', 'id');
        //$coordinador_apellido = \App\Coordinador::all()->pluck('apellido_paterno', 'id');
        //$coordinadores = $coordinador_nombre . ' ' . $coordinador_apellido;
        return view('agregarEvento')->with('coordinadores', $coordinadores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate data
        $this->validate($request, array(
                'nombre' => 'required',
                'fecha' => 'required',
                'lugar' => 'required'
            ));
        // store data
        DB::table('evento')->insert([
            'nombre' => $request->nombre,
            'fecha' => $request->fecha,
            'lugar' => $request->lugar
            ]
        );

        // redirect to another page
        return redirect()->route('coordinadores');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
