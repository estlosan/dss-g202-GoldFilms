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

Route::get('/principal', function () {
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
Route::get('/films/actions', 'FilmsController@findFilm');
Route::get('/films/delete/{id}', 'FilmsController@deleteFilm');
Route::get('/film/new', 'FilmsController@showForm');
Route::post('/film/new/create', 'FilmsController@addFilm');
Route::get('/films/{id_film}', 'FilmsController@showFilm');
Route::get('/films/edit/{id?}', 'FilmsController@editFilm');
Route::post('/film/edit/{id}/save', 'FilmsController@saveFilm');

//Generos
Route::get('/genres/delete', 'GenresController@findGenre');
Route::get('/genres/delete/{id}', 'GenresController@deleteGenre');
Route::get('/genre/new', 'GenresController@showForm');
Route::post('/genre/new/create', 'GenresController@addGenre');

Route::get('/genres', function(){
    $genres = \App\Genre::get();
    return view('genres',['genres' => $genres]);
});

Route::get('/genres/{id_genre}', function($id_genre){
    $genre = \App\Genre::find($id_genre);
    return view('genre',['genre' => $genre]);
});


//USERS
Route::get('/users','UsersController@showUsers');


Route::get('/user/{id}','UsersController@showUser');

