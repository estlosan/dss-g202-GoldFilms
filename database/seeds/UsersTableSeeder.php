<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('critics')->delete();
        DB::table('users')->delete();
        DB::table('users')->insert(
            [
                ['username'=> 'Pepe','password' => 'pepe1','email' => 'pepe@hotmail.com'],
                ['username'=> 'Jordi','password' => 'jordi1','email' => 'jordi@hotmail.com'],
                ['username'=> 'Agus','password' => 'agus1','email' => 'agus@hotmail.com'],
                ['username'=> 'Esteban','password' => 'esteban1','email' => 'esteban@hotmail.com'],
                ['username'=> 'Oscar','password' => 'Oscar1','email' => 'oscar@hotmail.com'],
                ['username'=> 'Juanfer','password' => 'Juanfer1','email' => 'juanfer@hotmail.com'],
                ['username'=> 'Carlos','password' => 'Carlos1','email' => 'carlos@hotmail.com'],
                ['username'=> 'Alejandro','password' => 'Alejandro1','email' => 'alejandro@hotmail.com'],
                ['username'=> 'Francisco','password' => 'Francisco1','email' => 'francisco@hotmail.com'],
                ['username'=> 'Julian','password' => 'Julian1','email' => 'julian@hotmail.com'],

            ]
        );
    }
}
