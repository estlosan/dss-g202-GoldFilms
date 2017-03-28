<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FilmsController extends Controller
{
    private $films;

    public function showAllFilms(){
        $films = DB::table('films')->paginate(5);
        return view('films',['films' => $films]);
    }
}
