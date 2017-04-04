<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class SearchController extends BaseController {

    public function getSearch(){
        //get keywords input for search
        $keyword=Input::get('q');

        if($keyword != NULL){
            //search that student in Database
            $film = \App\Film::where('name',$keyword)->first();

            if($film != NULL){
                return view('search', ['film' => $film]);
            }
            else{
                $film = \App\Film::where('year',$keyword)->first();
                return view('search', ['film' => $film]);
            }
            
            return view('search', ['film' => $film]);
        }
        else{
            return view('error');
        }
    }
}
?>