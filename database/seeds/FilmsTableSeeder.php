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


        $genreterror = DB::table('genres')->where('genre','terror')->first();
        $genrefantasia = DB::table('genres')->where('genre','fantasía')->first();
        $genreaccion = DB::table('genres')->where('genre','acción')->first();
        $genrecrimen = DB::table('genres')->where('genre','crimen')->first();
        $genrecficcion = DB::table('genres')->where('genre','ciencia ficción')->first();
        $genredrama = DB::table('genres')->where('genre','drama')->first();
        $genresuspense = DB::table('genres')->where('genre','suspense')->first();




        DB::table('films')->insert(
            [
                ['name'=> 'Saw','year' => 2004,'description' => 'Gore' ,'country' =>'USA', 'director' =>'James Wan', 'rating' => 7,'genre_id'=>$genreterror->id],
                ['name'=> 'Celda 211','year' => 2009,'description' => 'Drama','country' =>'España', 'director' =>'Daniel Monzon','rating' => 8,'genre_id'=>$genresuspense->id],
                ['name'=> 'Batman Begins','year' => 2005,'description' => 'Fantastico','country'=>'USA', 'director' =>'Christopher Nolan', 'rating' => 9,'genre_id'=>$genrefantasia->id],
                ['name'=> 'Snatch. Cerdos y diamantes','year' => 2000,'description' => 'Crimen' ,'country'=>'USA', 'director' =>'Guy Ritchie', 'rating' => 9,'genre_id'=>$genrecrimen->id],
                ['name'=> 'RocknRolla','year' => 2008,'description' => 'Mafia ','country' =>'USA', 'director' =>'Guy Ritchie', 'rating' => 8,'genre_id'=>$genrecrimen->id],
                ['name'=> 'Oceans Eleven','year' => 2001,'description' => 'Atracos', 'country'=>'USA', 'director' =>'Steven soderbergh', 'rating' => 7,'genre_id'=>$genreaccion->id],
                ['name'=> 'El caso Slevin','year' => 2006,'description' => 'Crimen','country' =>'USA', 'director' =>'Paul McGuigan', 'rating' => 8,'genre_id'=>$genrecrimen->id],
                ['name'=> 'Hancock','year' =>2008,'description' => 'Fantastico','country' =>'USA', 'director' =>'Peter Berf', 'rating' => 8,'genre_id'=>$genrefantasia->id],
                ['name'=> 'Hijos de los hombres','year' => 2006,'description' => 'Ciencia Ficción','country' =>'Reino Unido', 'director' =>'Alfonso Cuaron', 'rating' => 7,'genre_id'=>$genrecficcion->id],
                ['name'=> 'Señor de los anillos:El retorno del Rey','year' => 2003,'description' => 'Fantasia','country' =>'USA', 'director' =>'Peter Jackson', 'rating' => 9,'genre_id'=>$genrefantasia->id],
            ]
            
        );
    }
}
