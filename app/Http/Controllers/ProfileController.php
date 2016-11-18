<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Symfony\Component\DomCrawler\Image;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
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
        $nombre = Auth()->user()->name;
        return($nombre);
      }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'nombre' => 'required',
            'apellido_paterno' => 'required',
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
        return redirect()->route('profile.index');
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
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('profile_edit')->with('usuario', \App\User::all()->keyBy('id')->get(Auth::user()->id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (Input::file('image')) {
            $image = Input::file('image');
            $filename = Auth::user()->id . '.' . $image->getClientOriginalExtension();
            $image->move('uploads', $filename);
            $user = \App\User::all()->keyBy('id')->get(Auth::user()->id);
            $user->profile_image ='profilepics/' . $filename;
            $user->save();
        }
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
}
