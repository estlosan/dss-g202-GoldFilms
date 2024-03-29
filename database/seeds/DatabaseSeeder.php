<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(GenresSeeder::class);
        $this->call(ActorsSeeder::class);
        $this->call(FilmsTableSeeder::class);
        $this->call(CriticsTableSeeder::class);
        $this->call(FilmActorSeeder::class);
    }
}
