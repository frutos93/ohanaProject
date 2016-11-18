<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
Use DB;
class EventoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth()->user()->rol == 2) {
            return view('/home');
        }

        $eventos =
        DB::table('evento')
            ->join('coordina_evento', 'evento.id', '=', 'coordina_evento.evento_id')
            ->join('coordinador', 'coordina_evento.coordinador_id', '=', 'coordinador.id')
            ->select('evento.*', DB::raw("CONCAT(coordinador.nombre, ' ', coordinador.apellido_paterno, ' ', coordinador.apellido_materno) AS coorNombre"), 'coordina_evento.*',
                'evento.id as eid','coordina_evento.id as ceid','coordinador.id as coorid')
            ->get();

        return view('evento_index')
                ->with('eventos', $eventos);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'lugar' => 'required',
                'coordinador_1' => 'required',
                'coordinador_2' => 'required'
            ));
        // store data
        $eventoID = DB::table('evento')->insertGetId([
            'nombre' => $request->nombre,
            'fecha' => $request->fecha,
            'lugar' => $request->lugar,
            'creado_por' => 2 //cambiar por id del director que hizo login
            ]
        );

        DB::table('coordina_evento')->insert([
            'evento_id' => $eventoID,
            'coordinador_id' => $request->coordinador_1
            ]
        );

        DB::table('coordina_evento')->insert([
            'evento_id' => $eventoID,
            'coordinador_id' => $request->coordinador_2
            ]
        );

        // redirect to another page
        return redirect()->route('evento.index');
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
