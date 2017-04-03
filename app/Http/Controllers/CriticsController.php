<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Film;
use App\Genre;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Input;
use App\Critic;

class CriticsController extends Controller
{
    public function deleteComment($id=null){
        $comment = Critic::find($id);
        $comment->delete();

        return Redirect::back();
    }
}
