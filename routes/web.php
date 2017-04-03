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

Route::get('/actors', 'ActorsController@showAllActors');
Route::get('/actors/{id_actor}','ActorsController@showActor');
Route::get('/actors/delete/{id}','ActorsController@deleteActor');
Route::get('/actor/edit_borrar', 'ActorsController@findActor');
Route::get('/actor/new', 'ActorsController@showForm');
Route::post('/actor/new/create', 'ActorsController@addActor');
Route::get('/actors/edit/{id?}', 'ActorsController@editActor');
Route::post('/actor/edit/{id}/save', 'ActorsController@saveActor');


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
Route::get('/genres/edit', 'GenresController@showEdit');
Route::post('/genre/new/create', 'GenresController@addGenre');
Route::get('/genres/edit/{id?}', 'GenresController@editGenre');
Route::post('/genre/edit/save', 'GenresController@saveGenre');

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

