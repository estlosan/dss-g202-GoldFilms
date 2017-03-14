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