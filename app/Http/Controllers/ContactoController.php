<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function contacto_form(){
            return view('contacto');
    }
    public function envio_form(){
        
    }
}
