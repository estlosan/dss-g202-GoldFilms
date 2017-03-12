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
            ['name'=> 'Matt Damon', 'age' =>46 ,'nacionality'=>'Estadounidense','gender'=>'hombre'],
            ['name'=> 'Cary Elwes', 'age' =>54,'nacionality'=>'Británica','gender'=>'hombre'],
            ['name'=> 'Leigh Whannell', 'age' =>40,'nacionality'=>'Australiana','gender'=>'hombre'],
            ['name'=> 'Luis Tosar', 'age' =>45,'nacionality'=>'Española','gender'=>'hombre'],
            ['name'=> 'Alberto Amman', 'age' =>39,'nacionality'=>'Argentina','gender'=>'hombre'],
            ['name'=> 'Liam Neeson', 'age' =>64,'nacionality'=>'Británica','gender'=>'hombre'],
            ['name'=> 'Christian Bale', 'age' =>43,'nacionality'=>'Británica','gender'=>'hombre'],
            ['name'=> 'Michael Caine', 'age' =>83,'nacionality'=>'Británica','gender'=>'hombre'],
            ['name'=> 'Jason Statham', 'age' =>49,'nacionality'=>'Británica','gender'=>'hombre'],
            ['name'=> 'Stephen Graham', 'age' =>43,'nacionality'=>'Británica','gender'=>'hombre'],
            ['name'=> 'Gerard Butler', 'age' =>47,'nacionality'=>'Británica','gender'=>'hombre'],
            ['name'=> 'Tom Wilkinson', 'age' =>68 ,'nacionality'=>'Británica','gender'=>'hombre'],
            ['name'=> 'Thandie Newton', 'age' =>44 ,'nacionality'=>'Británica','gender'=>'mujer'],
            ['name'=> 'George Clooney', 'age' =>55 ,'nacionality'=>'Británica','gender'=>'hombre'],
            ['name'=> 'Brad Pitt', 'age' => 53 ,'nacionality'=>'Estadounidense','gender'=>'hombre'],
            ['name'=> 'Julia Roberts', 'age' =>49 ,'nacionality'=>'Estadounidense','gender'=>'mujer'],
            ['name'=> 'Josh Hartnett', 'age' =>38 ,'nacionality'=>'Estadounidense','gender'=>'hombre'],
            ['name'=> 'Bruce Willis', 'age' =>61 ,'nacionality'=>'Alemana','gender'=>'hombre'],
            ['name'=> 'Will Smith', 'age' =>48 ,'nacionality'=>'Estadounidense','gender'=>'hombre'],
            ['name'=> 'Charlize Theron', 'age' =>41 ,'nacionality'=>'Estadounidense','gender'=>'mujer'],
            ['name'=> 'Clive Owen', 'age' =>52 ,'nacionality'=>'Británica','gender'=>'hombre'],
            ['name'=> 'Julianne Moore', 'age' =>56 ,'nacionality'=>'Estadounidense','gender'=>'mujer'],
            ['name'=> 'Viggo Mortensen', 'age' =>58 ,'nacionality'=>'Estadounidense','gender'=>'hombre'],
            ['name'=> 'Orlando Bloom', 'age' =>40 ,'nacionality'=>'Británica','gender'=>'hombre'],
            ['name'=> 'Elijah Wood', 'age' =>36 ,'nacionality'=>'Estadounidense','gender'=>'hombre'],
        ]);
        //
    }
}
