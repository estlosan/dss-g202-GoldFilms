<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Film;
use App\Genre;
use App\Actor;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Input;

class ActorsController extends Controller
{
    public function showAllActors(){
        $actors = \App\Actor::get();
        return view('actors', ['actors' => $actors]);
    }
    
    public function showActor($id_actor){
        $actor = \App\Actor::find($id_actor);
        return view('actor',['actor' => $actor]);
    }

    public function findActor(){
        $actors = DB::table('actor');
        return view('delete-actor', ['actors' => $actors]);
    }

    public function deleteActor($id=null){
        $actor = Actor::find($id);
        $actor->delete();

        return Redirect::to('/actors');
    }

    public function showForm(){
        $films = \App\Film::get();
        $actors = \App\Actor::get();
        return view('create_actor', ['films' => $films, 'actors' => $actors]);
    }

    public function addActor(){
        $actor = new Actor;
        $actor->name = $request->input('name');
        $actor->year = $request->input('year');
        $actor->nacionality = $request->input('nacionality');
        $actor->gender = $request->input('radio_button');
        $actor->save();
        foreach(array($request->input('films')) as $film) {
            $film_array[] = \App\Film::where('id', $film)->first()->id; 
        }
        $actor->films()->attach($film_array);
        return Redirect::to('/actors');
    }

    public function editActor($id=null){
        $actor = Actor::find($id);
        return view('edit_actor', array('actor' => $actor));
    }

    public function saveActor(){
        if($_POST)
        {
            Actor::where('id', '=', $request->input('actor_changed'))->update(
                array(
                    'name' => $request->input('name'),
                    'age' => $request->input('age'),
                    'nacionality' => $request->input('nacionality'),
                )
            );

            return Redirect::to('/actors');
        }
    }
}
