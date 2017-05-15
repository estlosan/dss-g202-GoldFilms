<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactoController extends Controller
{
    public function contacto_form(){
            return view('contacto');
    }
    public function envio_form(Request $request){
            
            Mail::send('contactoSend',$request->all(),function($msj){
                $msj->to('pruebadss@mail.com', 'Steve');
                $msj->subject('Form de contacto');
            });

    }
}
