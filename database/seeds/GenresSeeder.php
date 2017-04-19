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
                ['genre'=>'Terror'],
                ['genre'=>'Suspense'],
                ['genre'=>'Fantasía'],
                ['genre'=>'Acción'],
                ['genre'=>'Comedia'],
                ['genre'=>'Drama'],
                ['genre'=>'Crimen'],
                ['genre'=>'Misterio'],
                ['genre'=>'Documental'],
                ['genre'=>'Ciencia ficción'],
                ['genre'=>'Cine negro'],
                ['genre'=>'Sin género'],
        ]
        );
        
    }
}
