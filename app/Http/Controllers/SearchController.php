<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class SearchController extends BaseController {

    public function getSearch(){
        //El buscador busca por el nombre de la pelicula y por el año
        $keyword=Input::get('q');

        if($keyword != NULL){

            $films = [];
            $films2 = [];

            $films = \App\Film::where('name', 'LIKE', "%$keyword%")->paginate(20);
            
            if(sizeof($films) != 0){
                return view('search', ['films' => $films]);
            }
            else{
                $films2 = \App\Film::where('year', 'LIKE', "%$keyword%")->paginate(20);

                if(sizeof($films2) != 0){
                    return view('search', ['films' => $films2]);
                }
                else{
                    return view('error');
                }                
            }
        }
        else{
            return view('error');
        }
    }
}
?>