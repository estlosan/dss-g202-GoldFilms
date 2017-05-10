<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Genre;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Input;

class GenresController extends Controller
{
    private $genres;

    public function showAllGenres(){
        $genres = DB::table('genres')->paginate(2);
        return view('Genre.genres',['genres' => $genres]);
    }

    public function findGenre(){
        $genres = DB::table('genres')->paginate(15);
        return view('Genre.delete_genre', ['genres' => $genres]);
    }
    
    public function deleteGenre(Request $request){
        if($_POST){
            $films = \App\Film::get();
            $singenero = DB::table('genres')->where('genre','Sin género')->first();
            
            foreach($request->input('generos') as $generos){
                Genre::where('id', $generos)->delete();
            }

            foreach($request->input('generos') as $generos){
                foreach($films as $film){
                    if($film->genre_id == $generos){
                        $film->genre_id = $singenero->id;
                        $film->save();
                    }
                }
            }

            return Redirect::to('/genres');
        }

    }

    public function addGenre(Request $request){
        $genre = new Genre;
        $genre->genre = $request->input('genre');
        $genre->save();

        return Redirect::to('/genres');
    }

    public function showForm(){
        $genres = \App\Genre::get();
        return view('Genre.create_genre', ['genres' => $genres]);
    }

     public function showEdit(){
        $genres = \App\Genre::get();
        return view('Genre.edit_genre', ['genres' => $genres]);
    }

    public function editGenre($id=null){
        $genre = Genre::find($id);
        return view('Genre.edit_genre', array('genre' => $genre));
    }

     public function saveGenre(Request $request,$id=NULL){
        if($_POST){
            Genre::where('id', '=', $request->input('genero'))->update(
                array('genre' => $request->input('genero_nombre')));
            return Redirect::to('/genres');
        }
     }
}
