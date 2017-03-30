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
        $genres = DB::table('genres')->paginate(8);
        return view('delete_genre', ['genres' => $genres]);
    }
    
    public function deleteGenre($id = null){
        $genre = Genre::find($id);
        $genre->delete();
        return Redirect::to('/genres/delete');
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

     public function saveGenre(Request $request, $id=null){
        if($_POST){
            //Genre::update('genre' => $request->input('genre'));
            return Redirect::to('/genres');
        }
     }
}
