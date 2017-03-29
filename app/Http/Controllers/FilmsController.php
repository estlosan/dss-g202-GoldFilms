<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Film;
use App\Genre;
use Illuminate\Support\Facades\Redirect;

class FilmsController extends Controller
{
    private $films;

    public function showAllFilms(){
        $films = DB::table('films')->paginate(5);
        return view('films',['films' => $films]);
    }

    public function findFilm(){
        $films = DB::table('films')->paginate(8);
        return view('delete-film', ['films' => $films]);
    }

    public function deleteFilm($id=null){
        $film = Film::find($id);
        $film->delete();

        return Redirect::to('/films/delete');
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
        return view('create_film', ['genres' => $genres, 'actors' => $actors]);
    }
}
