<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
Use DB;
class VoluntarioController extends Controller
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
        $voluntarios =
          DB::table('voluntario')
              ->join('participacion_voluntariado', 'voluntario.id', '=', 'participacion_voluntariado.voluntario_id')
              ->join('evento', 'participacion_voluntariado.evento_id', '=', 'evento.id')
              ->select('voluntario.*', 'evento.id as etid','participacion_voluntariado.id as partid','evento.nombre as etnombre',
                'participacion_voluntariado.equipo as partequipo', 'participacion_voluntariado.puesto as partpuesto')
              ->get();
        return view('voluntarios_index')->with('voluntarios', $voluntarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voluntarios_create')->with('eventos', \App\Evento::pluck('nombre', 'id'));;
    }

    public function modify()
    {
        $miId = Input::get('id');
        $miEventoId = Input::get('eventoid');
        $miParticipacion = Input::get('participacionid');

        $voluntario = DB::table('voluntario')
                        ->where('voluntario.id', $miId)
                        ->join('participacion_voluntariado', 'voluntario.id', '=', 'participacion_voluntariado.voluntario_id')
                        ->join('evento', 'participacion_voluntariado.evento_id', '=', 'evento.id')
                        ->select('voluntario.*', 'participacion_voluntariado.evento_id as eventoid','participacion_voluntariado.equipo as participacionequipo',
                            'participacion_voluntariado.puesto as partpuesto')
                        ->where('evento.id', $miEventoId)
                        ->get()
                        ->first();
    
        if(is_null($voluntario))
            return $this->  index();
        else
            return view('voluntarios_modify')->with('voluntario', $voluntario)
                        ->with('eventos', \App\Evento::pluck('nombre', 'id'))
                        ->with('srcEventoId', $miEventoId)
                        ->with('srcParticipacionId', $miParticipacion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {
        $miId = Input::get('id');
        $miEventoId = Input::get('eventoid');
        $miParticipacion = Input::get('participacionid');
        $voluntario = DB::table('voluntario')
                        ->where('voluntario.id', $miId)
                        ->join('participacion_voluntariado', 'voluntario.id', '=', 'participacion_voluntariado.voluntario_id')
                        ->join('evento', 'participacion_voluntariado.evento_id', '=', 'evento.id')
                        ->select('voluntario.*', 'participacion_voluntariado.evento_id as eventoid','participacion_voluntariado.equipo as participacionequipo',
                            'participacion_voluntariado.puesto as partpuesto')
                        ->where('evento.id', $miEventoId)
                        ->get()
                        ->first();
    
        if(is_null($voluntario))
            return $this->  index();
        else
            return view('voluntarios_delete')->with('voluntario', $voluntario)
                            ->with('eventos', \App\Evento::pluck('nombre', 'id'))
                            ->with('srcEventoId', $miEventoId)
                            ->with('srcParticipacionId', $miParticipacion);
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
                'apellido_paterno' => 'required',
                'escuela' => 'required',
            ));

        // store data
        $voluntarioId = DB::table('voluntario')->insertGetId([
            'nombre' => $request->nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'escuela' => $request->escuela,
            ]
        );

        DB::table('participacion_voluntariado')->insert([
            'voluntario_id' => $voluntarioId,
            'evento_id' => $request->evento_id,
            'equipo' => $request->equipo,
            'puesto' => $request->puesto,
            ]
        );

        // redirect to another page
        return redirect()->route('voluntarios.index');
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
        ));
        // update data

        DB::table('voluntario')
            ->where('id', $request->id)
            ->update([
                'nombre' => $request->nombre,
                'apellido_paterno' => $request->apellido_paterno,
                'apellido_materno' => $request->apellido_materno,
                'escuela' => $request->escuela,
                ]);

        DB::table('participacion_voluntariado')
            ->where('id', $request->srcParticipacionId)
            ->update([
                'evento_id' => $request->evento_id,
                'equipo' => $request->equipo,
                'puesto' => $request->puesto,
            ]);

        // redirect to another page
        return redirect()->route('voluntarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DB::table('voluntario')->where('id', '=', $request->id)->delete();
        DB::table('participacion_voluntariado')->where('id', '=', $request->srcParticipacionId)->delete();
        return redirect()->route('voluntarios.index');
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

    
    
}
