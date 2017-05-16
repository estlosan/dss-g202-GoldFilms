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

        $film_id = DB::table('films')->where('name','Harry Potter y la piedra filosofal')->first();
        $actor_id = DB::table('actors')->where('name','Daniel Radcliffe')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Rupert Grint')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Emma Watson')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','El exorcista')->first();
        $actor_id = DB::table('actors')->where('name','Linda Blair')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Ellen Burstyn')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','Ouija, El origen del mal')->first();
        $actor_id = DB::table('actors')->where('name','Annalise Basso')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Elizabeth Reaser')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','No respires')->first();
        $actor_id = DB::table('actors')->where('name','Jane Levy')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','Lobezno 3')->first();
        $actor_id = DB::table('actors')->where('name','Hugh Jackman')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Patrick Stewart')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','Torrente 5, Operación Eurovegas')->first();
        $actor_id = DB::table('actors')->where('name','Santiago Segura')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Julián Lopez')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','Solo en casa')->first();
        $actor_id = DB::table('actors')->where('name','Macaulay Culkin')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','Sully, Hazaña en el Hudson')->first();
        $actor_id = DB::table('actors')->where('name','Tom Hanks')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Aaron Eckhart')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','Forrest Gump')->first();
        $actor_id = DB::table('actors')->where('name','Tom Hanks')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','El sexto sentido')->first();
        $actor_id = DB::table('actors')->where('name','Bruce Willis')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Haley Joel Osment')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','Resident Evil, Capitulo final')->first();
        $actor_id = DB::table('actors')->where('name','Milla Jovovich')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','Hombres de negro 3')->first();
        $actor_id = DB::table('actors')->where('name','Will Smith')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Josh Brolin')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','Pulp Fiction')->first();
        $actor_id = DB::table('actors')->where('name','Bruce Willis')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','John Travolta')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Uma Thurman')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','Mechanic, Resurrection')->first();
        $actor_id = DB::table('actors')->where('name','Jason Statham')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','Fast & Furious 7')->first();
        $actor_id = DB::table('actors')->where('name','Jason Statham')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','Un monstruo viene a verme')->first();
        $actor_id = DB::table('actors')->where('name','Lewis MacDougall')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        
        $film_id = DB::table('films')->where('name','Ocho apellidos vascos')->first();
        $actor_id = DB::table('actors')->where('name','Dani Rovira')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Clara Lago')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        
        $film_id = DB::table('films')->where('name','Tengo ganas de ti')->first();
        $actor_id = DB::table('actors')->where('name','Mario Casas')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Clara Lago')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        
        $film_id = DB::table('films')->where('name','El orfanato')->first();
        $actor_id = DB::table('actors')->where('name','Belén Rueda')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','Perdiendo el norte')->first();
        $actor_id = DB::table('actors')->where('name','Julián Lopez')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);

        $film_id = DB::table('films')->where('name','Ahora o nunca')->first();
        $actor_id = DB::table('actors')->where('name','Dani Rovira')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
        $actor_id = DB::table('actors')->where('name','Clara Lago')->first();
        DB::table('actor_film')->insert(['film_id' => $film_id->id ,'actor_id' => $actor_id->id]);
    }
}
