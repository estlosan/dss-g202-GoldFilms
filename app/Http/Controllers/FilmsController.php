<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Film;
use App\Genre;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Input;

class FilmsController extends Controller
{
    private $films;

    public function showAllFilms(){
        $films = DB::table('films')->paginate(5);
        return view('Film.films',['films' => $films]);
    }

    public function showFilm($id_film){
        $film = \App\Film::find($id_film);
        return view('Film.film', ['film' => $film]);
    }

    public function findFilm(){
        $films = DB::table('films')->paginate(8);
        return view('Film.delete-film', ['films' => $films]);
    }

    public function deleteFilm($id=null){
        $film = Film::find($id);
        $film->delete();

        return Redirect::to('/films');
    }

    public function addFilm(Request $request){
        $film = new Film;
        $film->name = $request->input('name');
        $film->year = $request->input('year');
        $film->description = $request->input('description');
        $film->country = $request->input('country');
        $film->rating = $request->input('rating');
        $film->director = $request->input('director');
        $film->genre_id = $request->input('genre');
        $film->save();

        foreach(array($request->input('actors')) as $actor) {
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
        return view('Film.edit_film', array('film' => $film));
    }

    public function saveFilm(Request $request, $id=null){
        if($_POST)
        {
            Film::where('id', '=', $request->input('film_changed'))->update(
                array(
                    'name' => $request->input('name'),
                    'year' => $request->input('year'),
                    'description' => $request->input('description'),
                    'country' => $request->input('country'),
                    'rating' => $request->input('rating'),
                    'director' => $request->input('director'),
                    'genre_id' => 1,
                )
            );

            return Redirect::to('/films');
        }
    }
}
