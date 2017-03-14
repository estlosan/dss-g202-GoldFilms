<?php

use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->delete();
        DB::table('genres')->insert (
            [
                ['genre'=>'terror'],
                ['genre'=>'suspense'],
                ['genre'=>'fantasía'],
                ['genre'=>'acción'],
                ['genre'=>'comedia'],
                ['genre'=>'drama'],
                ['genre'=>'crimen'],
                ['genre'=>'misterio'],
                ['genre'=>'documental'],
                ['genre'=>'ciencia ficción'],
                ['genre'=>'cine negro'],
                ['genre'=>'animación']
        ]
        );
        
    }
}
