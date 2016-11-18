<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function gallery()
    {
        return view('gallery')->with('galerias', \App\Galeria::all());
    }

    public function viewGallery($id)
    {
        return view('view_gallery')->with('galeria', \App\Galeria::find($id));
    }

}
