<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
Use DB;
class ParticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('particpContr.create');
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
                'curp' => 'required',
                'nombre' => 'required',
                'apellido_paterno' => 'required',
                'casahogar_id' => 'required',
            ));

        // store data
        DB::table('participante')->insert([
            'curp' => $request->curp,
            'nombre' => $request->nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'casahogar_id' => $request->casahogar_id,
            ]
        );

        // redirect to another page
        return redirect()->route('home');
    }

    public function store2(Request $request)
    {
        // validate data
        $this->validate($request, array(
                'curp' => 'required',
                'nombre' => 'required',
                'apellido_paterno' => 'required',
                'apellido_materno' => 'required',
                'casahogar_id' => 'required',
            ));

        // store data
        DB::table('participante')->insert([
            'curp' => $request->curp,
            'nombre' => $request->nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'casahogar_id' => $request->casahogar_id,
            ]
        );

        // redirect to another page
        return redirect()->route('home');
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
