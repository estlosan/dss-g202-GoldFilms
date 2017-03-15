<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/actors', function(){
    return view('actors');
});

Route::get('/actors/{id_actor}', function($id_actor){
    return view('actor')->with('id_actor',$id_actor);
});

Route::get('/films', function(){
    return view('films');
});

Route::get('/films/{id_film}', function($id_film){
    return view('film')->with('id_film',$id_film);
});