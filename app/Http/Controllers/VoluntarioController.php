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
        return view('voluntarios_index')->with('voluntarios', \App\Voluntario::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voluntarios_create');
    }

    public function modify()
    {
        $miId = Input::get('id');
        $voluntario = DB::table('voluntario')->where('id', $miId)->first();
    
        if(is_null($voluntario))
            return $this->  index();
        else
            return view('voluntarios_modify')->with('voluntario', $voluntario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {
        $miId = Input::get('id');
        $voluntario = DB::table('voluntario')->where('id', $miId)->first();
    
        if(is_null($voluntario))
            return $this->  index();
        else
            return view('voluntarios_delete')->with('voluntario', $voluntario);
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
                'apellido_materno' => 'required',
                'escuela' => 'required',
            ));

        // store data
        DB::table('voluntario')->insert([
            'nombre' => $request->nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'escuela' => $request->escuela,
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

        // redirect to another page
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DB::table('voluntario')->where('id', '=', $request->id)->delete();
        return redirect()->route('voluntarios.index');
    }
}
