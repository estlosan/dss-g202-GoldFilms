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
                ['name'=> 'Saw','year' => 2004,'description' => 'Gore' ,'country' =>'USA', 'director' =>'James Wan', 'rating' => 7],
                ['name'=> 'Celda 211','year' => 2009,'description' => 'Drama','country' =>'España', 'director' =>'Daniel Monzon','rating' => 8],
                ['name'=> 'Batman Begins','year' => 2005,'description' => 'Fantastico','country'=>'USA', 'director' =>'Christopher Nolan', 'rating' => 9],
                ['name'=> 'Snatch. Cerdos y diamantes','year' => 2000,'description' => 'Crimen' ,'country'=>'USA', 'director' =>'Guy Ritchie', 'rating' => 9],
                ['name'=> 'RocknRolla','year' => 2008,'description' => 'Mafia ','country' =>'USA', 'director' =>'Guy Ritchie', 'rating' => 8],
                ['name'=> 'Oceans Eleven','year' => 2001,'description' => 'Atracos', 'country'=>'USA', 'director' =>'Steven soderbergh', 'rating' => 7],
                ['name'=> 'El caso Slevin','year' => 2006,'description' => 'Crimen','country' =>'USA', 'director' =>'Paul McGuigan', 'rating' => 8],
                ['name'=> 'Hancock','year' =>2008,'description' => 'Fantastico','country' =>'USA', 'director' =>'Peter Berf', 'rating' => 8],
                ['name'=> 'Hijos de los hombres','year' => 2006,'description' => 'Ciencia Ficción','country' =>'Reino Unido', 'director' =>'Alfonso Cuaron', 'rating' => 7],
                ['name'=> 'Señor de los anillos:El retorno del Rey','year' => 200,'description' => 'Fantasia','country' =>'USA', 'director' =>'Peter Jackson', 'rating' => 9],
            ]
            
        );
    }
}
