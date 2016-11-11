<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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
        $participantes = 
        DB::table('participante')
            ->join('participacion', 'participante.id', '=', 'participacion.participante_id')
            ->join('evento', 'participacion.evento_id', '=', 'evento.id')
            ->join('casahogar', 'participante.casahogar_id', '=', 'casahogar.id')
            ->select('participante.*', 'casahogar.nombre as chnombre','evento.nombre as etnombre',
                'evento.id as etid','participacion.id as partid','participacion.equipo as partequipo')
            ->get();

        return view('participantes_index')
                ->with('participantes', $participantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('participantes_create')
                ->with('casashogares', \App\CasaHogar::pluck('nombre', 'id'))
                ->with('eventos', \App\Evento::pluck('nombre', 'id'));
    }

    public function modify()
    {
        $miId = Input::get('id');
        $miEventoId = Input::get('eventoid');
        $miParticipacion = Input::get('participacionid');
        $participante = DB::table('participante')
                        ->where('participante.id', $miId)
                        ->join('participacion', 'participante.id', '=', 'participacion.participante_id')
                        ->join('evento', 'participacion.evento_id', '=', 'evento.id')
                        ->join('casahogar', 'participante.casahogar_id', '=', 'casahogar.id')
                        ->select('participante.*', 'participacion.evento_id as eventoid','participacion.equipo as participacionequipo')
                        ->where('evento.id', $miEventoId)
                        ->get()
                        ->first();
    
        if(is_null($participante))
            return $this->index();
        else
            return view('participantes_modify')->with('participante', $participante)
                    ->with('casashogares', \App\CasaHogar::pluck('nombre', 'id'))
                    ->with('eventos', \App\Evento::pluck('nombre', 'id'))
                    ->with('srcEventoId', $miEventoId)
                    ->with('srcParticipacionId', $miParticipacion);
    }

    public function delete()
    {
        $miId = Input::get('id');
        $miEventoId = Input::get('eventoid');
        $miParticipacion = Input::get('participacionid');
        $participante = DB::table('participante')
                        ->where('participante.id', $miId)
                        ->join('participacion', 'participante.id', '=', 'participacion.participante_id')
                        ->join('evento', 'participacion.evento_id', '=', 'evento.id')
                        ->join('casahogar', 'participante.casahogar_id', '=', 'casahogar.id')
                        ->select('participante.*', 'participacion.evento_id as eventoid','participacion.equipo as participacionequipo')
                        ->where('evento.id', $miEventoId)
                        ->get()
                        ->first();
    
        if(is_null($participante))
            return $this->  index();
        else
            return view('participantes_delete')->with('participante', $participante)
                    ->with('casashogares', \App\CasaHogar::pluck('nombre', 'id'))
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
                'curp' => 'required',
                'nombre' => 'required',
                'apellido_paterno' => 'required',
                'apellido_materno' => 'required',
                'casahogar_id' => 'required',
                'evento_id' => 'required',
                'equipo' => 'required'
            ));

        // store data
        $participanteId = DB::table('participante')->insertGetId([
            'curp' => $request->curp,
            'nombre' => $request->nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'casahogar_id' => $request->casahogar_id,
            ]
        );

        DB::table('participacion')->insert([
            'participante_id' => $participanteId,
            'evento_id' => $request->evento_id,
            'equipo' => $request->equipo,
            ]
        );

        // redirect to another page
        return redirect()->route('participantes.index');
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
            'casahogar_id' => 'required',
            'curp' => 'required',
        ));
        // update data

        DB::table('participante')
            ->where('id', $request->participanteId)
            ->update([
                'curp' => $request->curp,
                'nombre' => $request->nombre,
                'apellido_paterno' => $request->apellido_paterno,
                'apellido_materno' => $request->apellido_materno,
                'casahogar_id' => $request->casahogar_id,
            ]);

        DB::table('participacion')
            ->where('id', $request->srcParticipacionId)
            ->update([
                'evento_id' => $request->evento_id,
                'equipo' => $request->equipo,
            ]);

        // redirect to another page
        return redirect()->route('participantes.index');
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DB::table('participante')->where('id', '=', $request->id)->delete();
        DB::table('participacion')->where('id', '=', $request->srcParticipacionId)->delete();
        return redirect()->route('participantes.index');
    }
}
