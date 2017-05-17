<?php

use Illuminate\Database\Seeder;

class ActorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actors')->delete();
        DB::table('actors')->insert([
            ['name'=> 'Matt Damon', 'age' =>46 ,'nacionality'=>'Estadounidense','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Matt_Damon' ],
            ['name'=> 'Cary Elwes', 'age' =>54,'nacionality'=>'Británica','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Cary_Elwes'],
            ['name'=> 'Leigh Whannell', 'age' =>40,'nacionality'=>'Australiana','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Leigh_Whannell'],
            ['name'=> 'Luis Tosar', 'age' =>45,'nacionality'=>'Española','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Luis_Tosar'],
            ['name'=> 'Alberto Amman', 'age' =>39,'nacionality'=>'Argentina','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Alberto_Ammann'],
            ['name'=> 'Liam Neeson', 'age' =>64,'nacionality'=>'Británica','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Liam_Neeson'],
            ['name'=> 'Christian Bale', 'age' =>43,'nacionality'=>'Británica','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Christian_Bale'],
            ['name'=> 'Michael Caine', 'age' =>83,'nacionality'=>'Británica','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Michael_Caine'],
            ['name'=> 'Jason Statham', 'age' =>49,'nacionality'=>'Británica','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Jason_Statham'],
            ['name'=> 'Stephen Graham', 'age' =>43,'nacionality'=>'Británica','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Stephen_Graham'],
            ['name'=> 'Gerard Butler', 'age' =>47,'nacionality'=>'Británica','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Gerard_Butler'],
            ['name'=> 'Tom Wilkinson', 'age' =>68 ,'nacionality'=>'Británica','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Tom_Wilkinson'],
            ['name'=> 'Thandie Newton', 'age' =>44 ,'nacionality'=>'Británica','gender'=>'mujer', 'biograohy' => 'https://es.wikipedia.org/wiki/Thandie_Newton'],
            ['name'=> 'George Clooney', 'age' =>55 ,'nacionality'=>'Británica','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/George_Clooney'],
            ['name'=> 'Brad Pitt', 'age' => 53 ,'nacionality'=>'Estadounidense','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Brad_Pitt'],
            ['name'=> 'Julia Roberts', 'age' =>49 ,'nacionality'=>'Estadounidense','gender'=>'mujer', 'biography' => 'https://es.wikipedia.org/wiki/Julia_Roberts'],
            ['name'=> 'Josh Hartnett', 'age' =>38 ,'nacionality'=>'Estadounidense','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Josh_Hartnett'],
            ['name'=> 'Bruce Willis', 'age' =>61 ,'nacionality'=>'Alemana','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Bruce_Willis'],
            ['name'=> 'Will Smith', 'age' =>48 ,'nacionality'=>'Estadounidense','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Will_Smith'],
            ['name'=> 'Charlize Theron', 'age' =>41 ,'nacionality'=>'Estadounidense','gender'=>'mujer', 'biography' => 'https://es.wikipedia.org/wiki/Charlize_Theron'],
            ['name'=> 'Clive Owen', 'age' =>52 ,'nacionality'=>'Británica','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Clive_Owen'],
            ['name'=> 'Julianne Moore', 'age' =>56 ,'nacionality'=>'Estadounidense','gender'=>'mujer', 'biography' => 'https://es.wikipedia.org/wiki/Julianne_Moore'],
            ['name'=> 'Viggo Mortensen', 'age' =>58 ,'nacionality'=>'Estadounidense','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Viggo_Mortensen'],
            ['name'=> 'Orlando Bloom', 'age' =>40 ,'nacionality'=>'Británica','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Orlando_Bloom'],
            ['name'=> 'Elijah Wood', 'age' =>36 ,'nacionality'=>'Estadounidense','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Elijah_Wood'],
            ['name'=> 'Daniel Radcliffe', 'age' =>27 ,'nacionality'=>'Británica','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Daniel_Radcliffe'],
            ['name'=> 'Rupert Grint', 'age' =>28 ,'nacionality'=>'Británica','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Rupert_Grint'],
            ['name'=> 'Emma Watson', 'age' =>26 ,'nacionality'=>'Británica','gender'=>'mujer', 'biography' => 'https://es.wikipedia.org/wiki/Emma_Watson'],
            ['name'=> 'Linda Blair', 'age' =>58 ,'nacionality'=>'Estadounidense','gender'=>'mujer', 'biography' => 'https://es.wikipedia.org/wiki/Linda_Blair'],
            ['name'=> 'Ellen Burstyn', 'age' =>84 ,'nacionality'=>'Estadounidense','gender'=>'mujer', 'biography' => 'https://es.wikipedia.org/wiki/Ellen_Burstyn'],
            ['name'=> 'Annalise Basso', 'age' =>18 ,'nacionality'=>'Estadounidense','gender'=>'mujer', 'biography' => 'https://es.wikipedia.org/wiki/Annalise_Basso'],
            ['name'=> 'Elizabeth Reaser', 'age' =>41 ,'nacionality'=>'Estadounidense','gender'=>'mujer', 'biography' => 'https://es.wikipedia.org/wiki/Elizabeth_Reaser'],
            ['name'=> 'Jane Levy', 'age' =>27 ,'nacionality'=>'Estadounidense','gender'=>'mujer', 'biography' => 'https://es.wikipedia.org/wiki/Jane_Levy'],
            ['name'=> 'Hugh Jackman', 'age' =>48 ,'nacionality'=>'Australiano','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Hugh_Jackman'],
            ['name'=> 'Patrick Stewart', 'age' =>76 ,'nacionality'=>'Británica','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Hugh_Jackman'],
            ['name'=> 'Santiago Segura', 'age' =>51 ,'nacionality'=>'Española','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Santiago_Segura'],
            ['name'=> 'Julián Lopez', 'age' =>38 ,'nacionality'=>'Española','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Juli%C3%A1n_L%C3%B3pez_(actor)'],
            ['name'=> 'Macaulay Culkin', 'age' =>36 ,'nacionality'=>'Estadounidense','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Macaulay_Culkin'],
            ['name'=> 'Aaron Eckhart', 'age' =>49 ,'nacionality'=>'Estadounidense','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Aaron_Eckhart'],
            ['name'=> 'Haley Joel Osment', 'age' =>28 ,'nacionality'=>'Estadounidense','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Haley_Joel_Osment'],
            ['name'=> 'Milla Jovovich', 'age' =>41 ,'nacionality'=>'Ucraniense','gender'=>'mujer', 'biography' => 'https://es.wikipedia.org/wiki/Milla_Jovovich'],
            ['name'=> 'Josh Brolin', 'age' =>49 ,'nacionality'=>'Estadounidense','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Josh_Brolin'],
            ['name'=> 'John Travolta', 'age' =>63 ,'nacionality'=>'Estadounidense','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/John_Travolta'],
            ['name'=> 'Uma Thurman', 'age' =>46 ,'nacionality'=>'Estadounidense','gender'=>'mujer', 'biography' => 'https://es.wikipedia.org/wiki/Uma_Thurman'],
            ['name'=> 'Tom Hanks', 'age' =>60 ,'nacionality'=>'Estadounidense','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Tom_Hanks'],
            ['name'=> 'Lewis MacDougall', 'age' =>14 ,'nacionality'=>'Británica','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Lewis_MacDougall'],
            ['name'=> 'Dani Rovira', 'age' =>36 ,'nacionality'=>'Española','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Dani_Rovira'],
            ['name'=> 'Clara Lago', 'age' =>27 ,'nacionality'=>'Española','gender'=>'mujer', 'biography' => 'https://es.wikipedia.org/wiki/Clara_Lago'],
            ['name'=> 'Mario Casas', 'age' =>30 ,'nacionality'=>'Española','gender'=>'hombre', 'biography' => 'https://es.wikipedia.org/wiki/Mario_Casas'],
            ['name'=> 'Belén Rueda', 'age' =>52 ,'nacionality'=>'Española','gender'=>'mujer', 'biography' => 'https://es.wikipedia.org/wiki/Bel%C3%A9n_Rueda'],
        ]);
        //
    }
}
