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
use Auth;

class CriticsController extends Controller
{
    public function deleteComment($id=null){
        $comment = Critic::find($id);
        $comment->delete();

        return Redirect::back();
    }

    public function addComment(Request $request){
        if($_POST)
        {
        $comment = e($request->comment);


        Critic::insert([
            'comment' => $comment,
            'user_id' => Auth::user()->id,
            'film_id' => $request->input('film_id')
        ]);

        return Redirect::back();
        }
    }
}
