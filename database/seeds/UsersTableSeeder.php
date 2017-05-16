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
            [['username'=> 'Jordi','password' => bcrypt('jordi1'),'email' => 'jordi@hotmail.com'],
                ['username'=> 'Agustín','password' => bcrypt('agus1'),'email' => 'agus@hotmail.com'],
                ['username'=> 'Esteban','password' => bcrypt('esteban1'),'email' => 'esteban@hotmail.com'],
                ['username'=> 'Oscar','password' => bcrypt('Oscar1'),'email' => 'oscar@hotmail.com'],
                ['username'=> 'Angela','password' => bcrypt('Angela1'),'email' => 'angela@hotmail.com'],
                ['username'=> 'Darlene','password' => bcrypt('Darlene1'),'email' => 'darlene@hotmail.com'],
                ['username'=> 'Tyrell','password' => bcrypt('Alejandro1'),'email' => 'alejandro@hotmail.com'],
                ['username'=> 'Oliver','password' => bcrypt('Francisco1'),'email' => 'francisco@hotmail.com'],
                ['username'=> 'admin','password' => bcrypt('admin1'),'email' => 'admin@hotmail.com'],
                ['username'=> 'Pavel','password' => bcrypt('Pavel1'),'email' => 'paveltrufi@hotmail.com'],
            ]
        );
    }
}
