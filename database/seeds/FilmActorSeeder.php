<?php

use Illuminate\Database\Seeder;

class FilmActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('actor_film')->delete();


        $film_id = DB::table('films')->where('name','Saw')->first();
        $actor_id = DB::table('actors')->where('name','Cary Elwes')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Leigh Whannell')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','Celda 211')->first();
        $actor_id = DB::table('actors')->where('name','Luis Tosar')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Alberto Amman')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','Batman Begins')->first();
        $actor_id = DB::table('actors')->where('name','Liam Neeson')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Christian Bale')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Michael Caine')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','Snatch. Cerdos y diamantes')->first();
        $actor_id = DB::table('actors')->where('name','Jason Statham')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Stephen Graham')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','RocknRolla')->first();
        $actor_id = DB::table('actors')->where('name','Gerard Butler')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Tom Wilkinson')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Thandie Newton')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','Oceans Eleven')->first();
        $actor_id = DB::table('actors')->where('name','George Clooney')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Brad Pitt')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Julia Roberts')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Matt Damon')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);



        $film_id = DB::table('films')->where('name','El caso Slevin')->first();
        $actor_id = DB::table('actors')->where('name','Josh Hartnett')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Bruce Willis')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        
        
        $film_id = DB::table('films')->where('name','Hancock')->first();
        $actor_id = DB::table('actors')->where('name','Will Smith')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Charlize Theron')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);


        $film_id = DB::table('films')->where('name','Hijos de los hombres')->first();
        $actor_id = DB::table('actors')->where('name','Clive Owen')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Julianne Moore')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);


        $film_id = DB::table('films')->where('name','Señor de los anillos,El retorno del Rey')->first();
        $actor_id = DB::table('actors')->where('name','Viggo Mortensen')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Orlando Bloom')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Elijah Wood')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        
    }
}
