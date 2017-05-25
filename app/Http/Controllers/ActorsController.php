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
            $actors = DB::table('actors')->paginate(12);
            return view('Actor.actors', ['actors' => $actors]);
    }
    
    public function showActor($id_actor){
            $actor = \App\Actor::find($id_actor);
            return view('Actor.actor',['actor' => $actor]);
    }

    public function findActor(){
        $actors = DB::table('actors')->paginate(8);
        return view('Actor.delete-actor', ['actors' => $actors]);
    }

    public function deleteActor($id=null){
        $actor = Actor::find($id);
        $actor->delete();

        return Redirect::to('/actors');
    }

    public function showForm(){
        $films = \App\Film::get();
        $actors = \App\Actor::get();
        return view('Actor.create_actor', ['films' => $films, 'actors' => $actors]);
    }

    public function addActor(Request $request){
	$this->validate($request,[
            'name' => 'required',
            'age' => 'required',
            'nacionality' => 'required',
            'radio_button' => 'required',
            'films' => 'required',
            'biography' => 'required',
            'fileToUpload' => 'required'
            ]);
        $actor = new Actor;
        $actor->name = $request->input('name');
        $actor->age = $request->input('age');
        $actor->nacionality = $request->input('nacionality');
        $actor->gender = $request->input('radio_button');
        $actor->biography =$request->input('biography');

        $name       = $_FILES['fileToUpload']['name'];  
        $temp_name  = $_FILES['fileToUpload']['tmp_name'];  
        if(isset($name)){
            if(!empty($name)){
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    $uploadOk = 1;
                }
                else {
                    return view('error_imagen');
                }      
                $namefile = $actor->name. '.' . 'jpg';
                $location = '../public/images/Actores/';      
                if(move_uploaded_file($temp_name, $location.$namefile)){
                }
            }       
        }  else {
            return view('error_imagen');
        }

        $actor->save();

        $films_array = [];
        foreach($request->input('films') as $film) {
            $films_array[] = \App\Film::where('id', $film)->first()->id; 
        }
        $actor->films()->sync($films_array);

        return Redirect::to('/actors');
    }

    public function editActor($id=null){
        $actor = Actor::find($id);

        $films = \App\Film::orderBy('name','asc')->get();
        foreach ($films as $film) {
            $film->checked = '';
            foreach ($actor->films as $actor_film) {
                if ($actor_film->id == $film->id) {
                    $film->checked = 'checked';
                    break;
                }
            }
        }
        $actor->hombreChecked = '';
        $actor->mujerChecked = '';
        if($actor->gender == 'hombre'){
            $actor->hombreChecked = 'checked';
        }
        else{
            $actor->mujerChecked = 'checked';
        }
        return view('Actor.edit_actor',['actor' => $actor ,'films' =>$films]);
    }

    public function saveActor(Request $request, $id = null){
        $this->validate($request,[
            'name' => 'required',
            'age' => 'required',
            'nacionality' => 'required',
            'radio_button' => 'required',
            'films' => 'required',
            'biography' => 'required',
            ]);
        if($_POST)
        {
            Actor::where('id', '=', $request->input('actor_changed'))->update(
                array(
                    'name' => $request->input('name'),
                    'age' => $request->input('age'),
                    'nacionality' => $request->input('nacionality'),
                    'gender' => $request->input('radio_button'),
                    'biography' =>$request->input('biography')
                )
            );

            $actor = Actor::where('id', '=', $request->input('actor_changed'))->first();
            $films_array = [];
            foreach($request->input('films') as $film) {
                $films_array[] = \App\Film::where('id', $film)->first()->id; 
            }
            $actor->films()->sync($films_array);

            return Redirect::to('/actors');
        }
    }
}
