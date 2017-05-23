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
Route::group(['middleware' => 'auth'],function(){
    Route::get('/', 'FilmsController@showPrincipalFilms');

    Route::get('/principal', 'FilmsController@showPrincipalFilms');
    Route::get('/principal/valoradas', 'FilmsController@showValoradasFilms');
    Route::get('/principal/españolas', 'FilmsController@showEspanolasFilms');

    //Buscador
    Route::get('/search',['uses' => 'SearchController@getSearch','as' => 'search']);
    

    //Criticas
    Route::get('/critic/delete/{id}', 'CriticsController@deleteComment');
    Route::post('/critic/add', 'CriticsController@addComment');

    //Actores
    Route::get('/actors', 'ActorsController@showAllActors');
    Route::get('/actors/{id_actor}','ActorsController@showActor');
    

    //Peliculas
    Route::get('/films','FilmsController@showAllFilms');
    Route::get('/films/{id_film}', 'FilmsController@showFilm');
    
    //Generos
    Route::get('/genres','GenresController@showAllGenres');
    Route::get('/genres/{id_genre}', function($id_genre){
        $genre = \App\Genre::find($id_genre);
        return view('Genre.genre',['genre' => $genre]);
    });

    //USERS
    Route::get('/user/{id}','UsersController@showUser');
    Route::get('/users/edit_user/{id}','UsersController@EditUser');
    Route::post('/users/edit_user{id}','UsersController@EditUserValidate');
    
    Route::group(['middleware' => 'admin'],function(){
    
        //Actores ADMIN
        Route::get('/actors/delete/{id}','ActorsController@deleteActor');
        Route::get('/actor/edit_borrar', 'ActorsController@findActor');
        Route::get('/actor/new', 'ActorsController@showForm');
        Route::post('/actor/new/create', 'ActorsController@addActor');
        Route::get('/actors/edit/{id?}', 'ActorsController@editActor');
        Route::post('/actor/edit/{id}/save', 'ActorsController@saveActor');

        //Films ADMIN
        Route::get('/film/edit_borrar', 'FilmsController@findFilm');
        Route::get('/films/delete/{id}', 'FilmsController@deleteFilm');
        Route::get('/film/new', 'FilmsController@showForm');
        Route::post('/film/new/create', 'FilmsController@addFilm');
        Route::get('/films/edit/{id?}', 'FilmsController@editFilm');
        Route::post('/film/edit/{id}/save', 'FilmsController@saveFilm');

        //Genre ADMIN

        Route::get('/genre/delete', 'GenresController@findGenre');
        Route::post('/genre/delete', 'GenresController@deleteGenre');
        Route::get('/genre/new', 'GenresController@showForm');
        Route::get('/genre/edit', 'GenresController@showEdit');
        Route::post('/genre/new/create', 'GenresController@addGenre');
        Route::get('/genre/edit/{id?}', 'GenresController@editGenre');
        Route::post('/genre/edit/save', 'GenresController@saveGenre');

        //Users ADMIN
        Route::get('/users','UsersController@showUsers');
        Route::get('/users/create_user','UsersController@AddUser');
        Route::post('/users/create_user','UsersController@ValidateAddUser');
        Route::get('users/delete_user/{id}','UsersController@DeleteUser');

    });
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/condiciones', function(){
        return view('politica');
});

Route::get('/quienes_somos', function(){
        return view('quienes_somos');
});
Route::get('/quien_somos', function(){
        return view('quien_somos');
});

Route::get('/contacto','ContactoController@contacto_form' );
Route::post('/contact/new/create','ContactoController@envio_form');