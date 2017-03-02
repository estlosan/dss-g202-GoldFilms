<?php

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->delete();
        DB::table('films')->insert(
            [
                ['name'=> 'Saw','year' => 2004,'description' => 'Gore' ,'country' =>'USA', 'director' =>'James Wan','actors'=>'Cary Elwes, Leigh Whanell , Danny Glover','genre'=>'Terror', 'rating' => 7],
                ['name'=> 'Celda 211','year' => 2009,'description' => 'Drama','country' =>'España', 'director' =>'Daniel Monzon','actors'=>'Luis Tosar, Alberto Ammann','genre'=>'Drama','rating' => 8],
                ['name'=> 'Batman Begins','year' => 2005,'description' => 'Fantastico','country'=>'USA', 'director' =>'Christopher Nolan','actors'=>'Christian Bale, Liam Neeson','genre'=>'Fantástico', 'rating' => 9],
                ['name'=> 'Snatch. Cerdos y diamantes','year' => 2000,'description' => 'Crimen' ,'country'=>'USA', 'director' =>'Guy Ritchie','actors'=>'Jason Satatham,Brad pitt ,Stephen Graham','genre'=>'Acción', 'rating' => 9],
                ['name'=> 'RocknRolla','year' => 2008,'description' => 'Mafia ','country' =>'USA', 'director' =>'Guy Ritchie','actors'=>'Gerard Butler, Tom wilkinson','genre'=>'Mafia', 'rating' => 8],
                ['name'=> 'Oceans Eleven','year' => 2001,'description' => 'Atracos', 'country'=>'USA', 'director' =>'Steven soderbergh','actors'=>'Geroge Clooney,Julia ROberts,Matt Damon,Brad Pitt','genre'=>'Crimen', 'rating' => 7],
                ['name'=> 'El caso Slevin','year' => 2006,'description' => 'Crimen','country' =>'USA', 'director' =>'Paul McGuigan','actors'=>'Josh Harnett, Bruce Willis , Lucy Liu','genre'=>'Mafia', 'rating' => 8],
                ['name'=> 'Hancock','year' =>2008,'description' => 'Fantastico','country' =>'USA', 'director' =>'Peter Berf','actors'=>'Will Smith, Charlize Theron ,Jason Bateman','genre'=>'Fantasía', 'rating' => 8],
                ['name'=> 'Hijos de los hombres','year' => 2006,'description' => 'Ciencia Ficción','country' =>'Reino Unido', 'director' =>'Alfonso Cuaron','actors'=>'Cliven Owen, JUlianna Moore , Michael Caine','genre'=>'Ciencia ficción', 'rating' => 7],
                ['name'=> 'Señor de los anillos:El retorno del Rey','year' => 200,'description' => 'Fantasia','country' =>'USA', 'director' =>'Peter Jackson','actors'=>'Elijah Wood, Vigo Mortensen, Orlando Bloom','genre'=>'Fantasia', 'rating' => 9],
            ]
            
        );
    }
}
