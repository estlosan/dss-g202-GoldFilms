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
                ['username'=> 'Pepe','password' => bcrypt('pepe1'),'email' => 'pepe@hotmail.com'],
                ['username'=> 'Jordi','password' => bcrypt('jordi1'),'email' => 'jordi@hotmail.com'],
                ['username'=> 'Agus','password' => bcrypt('agus1'),'email' => 'agus@hotmail.com'],
                ['username'=> 'Esteban','password' => bcrypt('esteban1'),'email' => 'esteban@hotmail.com'],
                ['username'=> 'Oscar','password' => bcrypt('Oscar1'),'email' => 'oscar@hotmail.com'],
                ['username'=> 'Juanfer','password' => bcrypt('Juanfer1'),'email' => 'juanfer@hotmail.com'],
                ['username'=> 'Carlos','password' => bcrypt('Carlos1'),'email' => 'carlos@hotmail.com'],
                ['username'=> 'Alejandro','password' => bcrypt('Alejandro1'),'email' => 'alejandro@hotmail.com'],
                ['username'=> 'Francisco','password' => bcrypt('Francisco1'),'email' => 'francisco@hotmail.com'],
                ['username'=> 'Julian','password' => bcrypt('Julian1'),'email' => 'julian@hotmail.com'],

            ]
        );
    }
}
