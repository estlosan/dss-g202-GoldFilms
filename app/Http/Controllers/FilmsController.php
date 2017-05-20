<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Film;
use App\Genre;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Input;
use App\Critic;
use App\Actor;

class FilmsController extends Controller
{
    private $films;

    public function showAllFilms(){
        $films = DB::table('films')->paginate(12);
        return view('Film.films',['films' => $films]);
    }

    public function showFilm($id_film){
        $film = \App\Film::find($id_film);
        
        $critics = \App\Critic::where('film_id','=',$id_film)->orderBy('id','desc')->get();
        
        return view('Film.film', ['film' => $film,'critics' => $critics]);
    }

    public function findFilm(){
        $films = DB::table('films')->paginate(8);
        return view('Film.delete-film', ['films' => $films]);
    }

    public function deleteFilm($id=null){
        $film = Film::find($id);
	    $film->critics()->delete();
        $film->delete();

        return Redirect::to('/films');
    }

    public function addFilm(Request $request){
 	$this->validate($request,[
                'name' => 'required|unique:films',
                'year' => 'required',
                'trailer' => 'required',
                'description' => 'required',
                'country' => 'required',
                'rating' => 'required',
                'director' => 'required',
        ]);
        $film = new Film;
        $film->name = $request->input('name');
        $film->year = $request->input('year');
        $film->trailer = $request->input('trailer');
        $film->description = $request->input('description');
        $film->country = $request->input('country');
        $film->rating = $request->input('rating');
        $film->director = $request->input('director');
        $film->genre_id = $request->input('genre');
        $film->save();

        $name       = $_FILES['fileToUpload']['name'];  
        $temp_name  = $_FILES['fileToUpload']['tmp_name'];  
        if(isset($name)){
            if(!empty($name)){
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                }
                else {
                    return view('error');//Cambiar
                }      
                $location = '../public/images/';      
                if(move_uploaded_file($temp_name, $location.$name)){
                    echo 'File uploaded successfully';
                }
            }       
        }  else {
            return view('error');//Cambiar
        }

        foreach($request->input('actors') as $actor) {
            $actors_array[] = \App\Actor::where('id', $actor)->first()->id; 
        }
        $film->actors()->attach($actors_array);

        return Redirect::to('/films');
    }

    public function showForm(){
        $genres = \App\Genre::get();
        $actors = \App\Actor::get();
        return view('Film.create_film', ['genres' => $genres, 'actors' => $actors]);
    }

    public function editFilm($id=null){
        $film = Film::find($id);
        $genres = \App\Genre::get();
        $actors = \App\Actor::orderBy('name','asc')->get();
        foreach ($actors as $actor) {
            $actor->checked = '';
            foreach ($film->actors as $film_actor) {
                if ($film_actor->id == $actor->id) {
                    $actor->checked = 'checked';
                    break;
                }
            }
        }
        return view('Film.edit_film', ['film' => $film,'genres' => $genres, 'actors' => $actors]);
    }

    public function saveFilm(Request $request, $id=null){
        if($_POST)
        {
            Film::where('id', '=', $request->input('film_changed'))->update(
                array(
                    'name' => $request->input('name'),
                    'year' => $request->input('year'),
                    'trailer' => $request->input('trailer'),
                    'description' => $request->input('description'),
                    'country' => $request->input('country'),
                    'rating' => $request->input('rating'),
                    'director' => $request->input('director'),
                    'genre_id' => $request->input('genre')
                )
            );

            $film = Film::where('id', '=', $request->input('film_changed'))->first();

            $actors_array = [];
            foreach($request->input('actors') as $actor) {
                $actors_array[] = \App\Actor::where('id', $actor)->first()->id; 
            }
            $film->actors()->sync($actors_array);

            return Redirect::to('/films');
        }
    }

    public function showPrincipalFilms(){
        $films = Film::orderBy('created_at','desc')->paginate(8);
        $count = 0;
        $films1 = [];
        $films2 = [];
        foreach($films as $film) {
            if($count < 1 ){
                $films1[] = $film; 
            }
            else{
                $films2[] = $film; 
            }
            $count++;
            
        }
        $films3 = \App\Film::where('country','=','España')->paginate(8);
        $films4 = \App\Film::orderBy('year','desc')->paginate(8);
        $films5 = \App\Film::where('rating','>=','8')->paginate(8);

        return view('principal', ['films1' => $films1, 'films2' => $films2, 'films3' => $films3, 'films4' => $films4,'films5' => $films5]);
    }

    public function showValoradasFilms(){
        $films = \App\Film::where('rating','>=','8')->get();
        $films2 = \App\Film::where('rating','>=','8')->orderBy('year','desc')->get();
        $films4 = \App\Film::where('rating','>=','8')->orderBy('year','asc')->get();
        $films3 = \App\Film::where('rating','>=','8')->orderBy('rating','desc')->get();
        $genres = \App\Genre::get();
        $films5 = \App\Film::where('rating','>=','8')->orderBy('name','asc')->get();

        return view('Film.film-valoradas',['films' => $films, 'films2' => $films2, 'films3' => $films3, 'films4' => $films4,'genres' => $genres, 'films5' => $films5]);
    }

    public function showEspanolasFilms(){
        $films = \App\Film::where('country','=','España')->get();
        $films2 = \App\Film::where('country','=','España')->orderBy('year','desc')->get();
        $films4 = \App\Film::where('country','=','España')->orderBy('year','asc')->get();
        $films3 = \App\Film::where('country','=','España')->orderBy('rating','desc')->get();
        $genres = \App\Genre::get();
        $films5 = \App\Film::where('country','=','España')->orderBy('name','asc')->get();




        return view('Film.film-espanolas',['films' => $films, 'films2' => $films2, 'films3' => $films3, 'films4' => $films4, 'genres' => $genres, 'films5' => $films5]);
    }
}
