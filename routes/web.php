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
    return view('principal');
});

//Actores
Route::get('/actors', function(){
    $actors = \App\Actor::get();
    return view('actors', ['actors' => $actors]);
});

Route::get('/actors/{id_actor}', function($id_actor){
    $actor = \App\Actor::find($id_actor);
    return view('actor',['actor' => $actor]);
});

//Peliculas
Route::get('/films','FilmsController@showAllFilms');

Route::get('/films/{id_film}', function($id_film){
    $film = \App\Film::find($id_film);
    return view('film', ['film' => $film]);
});

Route::get('/film/new', function(){
    $genres = \App\Genre::get();
    return view('create_film', ['genres' => $genres]);
});

//Generos
Route::get('/genres', function(){
    $genres = \App\Genre::get();
    return view('genres',['genres' => $genres]);
});

Route::get('/genres/{id_genre}', function($id_genre){
    $genre = \App\Genre::find($id_genre);
    return view('genre',['genre' => $genre]);
});


Route::get('/users',function(){
    $users= \App\User::get();
    return view('users',['users' => $users]);
});
Route::get('/users/{id}',function($id){
    $user=\App\User::find($id);
    return view('user',['user' => $user]);
});

