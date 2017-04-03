<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Genre;
use Illuminate\Support\Facades\Redirect;

class GenresController extends Controller
{
    private $genres;

    public function showAllGenres(){
        $genres = DB::table('genres')->paginate(5);
        return view('genres',['genres' => $genres]);
    }

    public function findGenre(){
        $genres = DB::table('genres')->paginate(15);
        return view('delete_genre', ['genres' => $genres]);
    }
    
    public function deleteGenre(Request $request){
        if($_POST){
            foreach($request->input('generos') as $generos){
                Genre::where('id', $generos)->delete();
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
        return view('create_genre', ['genres' => $genres]);
    }

     public function showEdit(){
        $genres = \App\Genre::get();
        return view('edit_genre', ['genres' => $genres]);
    }

    public function editGenre($id=null){
        $genre = Genre::find($id);
        return view('edit_genre', array('genre' => $genre));
    }

     public function saveGenre(Request $request,$id=NULL){
        if($_POST){
            Genre::where('id', '=', $request->input('genero'))->update(
                array('genre' => $request->input('genero_nombre')));
            return Redirect::to('/genres');
        }
     }
}
