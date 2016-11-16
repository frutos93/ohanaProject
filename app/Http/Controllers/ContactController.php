<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    //

    public function create() {
      return view('contacto');
    }

    public function store(ContactFormRequest $request) {

      \Mail::send('contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('hugo.leon.ga@gmail.com');
        $message->to('hugo.leon.ga@gmail.com', 'Admin')->subject('mensaje de sitio ohana.org.mx');
    });

      return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');

    }
}
