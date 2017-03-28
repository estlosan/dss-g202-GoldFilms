<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Film;
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

    public function addFilm(){
        $film = new Film;
        $film->name = Input::get('name');
        $film->year = Input::get('year');
        $film->description = Input::get('description');
        $film->genre = Input::get('genre');
        $film->country = Input::get('country');
        $film->rating = Input::get('rating');
        $film->save();

        return Redirect::to('/films');
    }

    public function showForm(){
        $genres = \App\Genre::get();
        $actors = \App\Actor::get();
        return view('create_film', ['genres' => $genres, 'actors' => $actors]);
    }
}
