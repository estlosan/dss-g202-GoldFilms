<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Critic;
use App\User;
use App\Film;
use App\Actor;
use App\Genre;

class DataTest extends TestCase
{
    /**
     * Checks the number and names of the films
     *
     * @return void
     */
    public function testFilmsData()
    {
        $count = Film::all()->count();
        $this->assertEquals($count, 10);

        $this->assertDatabaseHas('films', ['name' => 'Saw']);
        $this->assertDatabaseHas('films', ['name' => 'Celda 211']);
        $this->assertDatabaseHas('films', ['name' => 'Batman Begins']);
        $this->assertDatabaseHas('films', ['name' => 'Snatch. Cerdos y diamantes']);
        $this->assertDatabaseHas('films', ['name' => 'RocknRolla']);
        $this->assertDatabaseHas('films', ['name' => 'Oceans Eleven']);
        $this->assertDatabaseHas('films', ['name' => 'El caso Slevin']);
        $this->assertDatabaseHas('films', ['name' => 'Hancock']);
        $this->assertDatabaseHas('films', ['name' => 'Hijos de los hombres']);
        $this->assertDatabaseHas('films', ['name' => 'Señor de los anillos:El retorno del Rey']);
    }

    /**
     * Checks the id of the critics
     *
     * @return void
     */
    public function testCriticData()
    {
        $count = Critic::all()->count();
        $this->assertEquals($count, 10);

        $this->assertDatabaseHas('critics', ['id' => 1]);
        $this->assertDatabaseHas('critics', ['id' => 2]);
        $this->assertDatabaseHas('critics', ['id' => 3]);
        $this->assertDatabaseHas('critics', ['id' => 4]);
        $this->assertDatabaseHas('critics', ['id' => 5]);
        $this->assertDatabaseHas('critics', ['id' => 6]);
        $this->assertDatabaseHas('critics', ['id' => 7]);
        $this->assertDatabaseHas('critics', ['id' => 8]);
        $this->assertDatabaseHas('critics', ['id' => 9]);
        $this->assertDatabaseHas('critics', ['id' => 10]);
    }

    /**
     * Checks the name and email of the users
     *
     * @return void
     */
    public function testUserData()
    {
        $count = User::all()->count();
        $this->assertEquals($count, 10);

        $this->assertDatabaseHas('users', ['username' => 'Pepe', 'email' => 'pepe@hotmail.com']);
        $this->assertDatabaseHas('users', ['username' => 'Jordi', 'email' => 'jordi@hotmail.com']);
        $this->assertDatabaseHas('users', ['username' => 'Agus', 'email' => 'agus@hotmail.com']);
        $this->assertDatabaseHas('users', ['username' => 'Esteban', 'email' => 'esteban@hotmail.com']);
        $this->assertDatabaseHas('users', ['username' => 'Oscar', 'email' => 'oscar@hotmail.com']);
        $this->assertDatabaseHas('users', ['username' => 'Juanfer', 'email' => 'juanfer@hotmail.com']);
        $this->assertDatabaseHas('users', ['username' => 'Carlos', 'email' => 'carlos@hotmail.com']);
        $this->assertDatabaseHas('users', ['username' => 'Alejandro', 'email' => 'alejandro@hotmail.com']);
        $this->assertDatabaseHas('users', ['username' => 'Francisco', 'email' => 'francisco@hotmail.com']);
        $this->assertDatabaseHas('users', ['username' => 'Julian', 'email' => 'julian@hotmail.com']);
    }
     /**
     * Checks the critics associated to the films
     *
     * @return void
     */
    public function testCriticByFilm()
    {
        $films = Film::where('name', 'Saw')->first();
        $this->assertEquals($films->critics->count(),3);
        $this->assertTrue($films->critics->contains('user_name','Agus'));
        $this->assertTrue($films->critics->contains('user_name','Esteban'));

        
        $films = Film::where('name', 'Batman Begins')->first();
        $this->assertEquals($films->critics->count(),2);
        $this->assertTrue($films->critics->contains('user_name','Oscar'));
        $this->assertTrue($films->critics->contains('user_name','Agus'));

        $films = Film::where('name', 'Celda 211')->first();
        $this->assertEquals($films->critics->count(),3);
        $this->assertTrue($films->critics->contains('user_name','Jordi'));
        $this->assertTrue($films->critics->contains('user_name','Julian'));
        $this->assertTrue($films->critics->contains('user_name','Agus'));
        
        $films = Film::where('name', 'RocknRolla')->first();
        $this->assertEquals($films->critics->count(),1);
        $this->assertTrue($films->critics->contains('user_name','Oscar'));

        $films = Film::where('name', 'El caso Slevin')->first();
        $this->assertEquals($films->critics->count(),1);
        $this->assertTrue($films->critics->contains('user_name','Oscar'));  
    }

     /**
     * Checks the critics associated to the users
     *
     * @return void
     */
    public function testUserByCritic()
    {
        $users = User::where('username', 'Agus')->first();
        $this->assertEquals($users->critics->count(), 3);
        $this->assertTrue($users->critics->contains('film_id',1));
        $this->assertTrue($users->critics->contains('film_id',3));

        $users = User::where('username', 'Oscar')->first();
        $this->assertEquals($users->critics->count(), 3);
        $this->assertTrue($users->critics->contains('film_id',5));
         $this->assertTrue($users->critics->contains('film_id',7));

        $users = User::where('username', 'Esteban')->first();
        $this->assertEquals($users->critics->count(), 2);
        $this->assertTrue($users->critics->contains('film_id',1));

        $users = User::where('username', 'Jordi')->first();
        $this->assertEquals($users->critics->count(), 1);
        $this->assertTrue($users->critics->contains('film_id',2));

        $users = User::where('username', 'Julian')->first();
        $this->assertEquals($users->critics->count(), 1);
        $this->assertTrue($users->critics->contains('film_id',2));
    }

    public function testActorsData()
    {
        $count = Actor::all()->count();
        $this->assertEquals($count, 25);

        $this->assertDatabaseHas('actors', ['name' => 'Matt Damon']);
        $this->assertDatabaseHas('actors', ['name' => 'Cary Elwes']);
        $this->assertDatabaseHas('actors', ['name' => 'Leigh Whannell']);
        $this->assertDatabaseHas('actors', ['name' => 'Luis Tosar']);
        $this->assertDatabaseHas('actors', ['name' => 'Alberto Amman']);
        $this->assertDatabaseHas('actors', ['name' => 'Liam Neeson']);
        $this->assertDatabaseHas('actors', ['name' => 'Christian Bale']);
        $this->assertDatabaseHas('actors', ['name' => 'Michael Caine']);
        $this->assertDatabaseHas('actors', ['name' => 'Jason Statham']);
        $this->assertDatabaseHas('actors', ['name' => 'Stephen Graham']);
        $this->assertDatabaseHas('actors', ['name' => 'Gerard Butler']);
        $this->assertDatabaseHas('actors', ['name' => 'Tom Wilkinson']);
        $this->assertDatabaseHas('actors', ['name' => 'Thandie Newton']);
        $this->assertDatabaseHas('actors', ['name' => 'George Clooney']);
        $this->assertDatabaseHas('actors', ['name' => 'Brad Pitt']);
        $this->assertDatabaseHas('actors', ['name' => 'Julia Roberts']);
        $this->assertDatabaseHas('actors', ['name' => 'Josh Hartnett']);
        $this->assertDatabaseHas('actors', ['name' => 'Bruce Willis']);
        $this->assertDatabaseHas('actors', ['name' => 'Will Smith']);
        $this->assertDatabaseHas('actors', ['name' => 'Charlize Theron']);
        $this->assertDatabaseHas('actors', ['name' => 'Clive Owen']);
        $this->assertDatabaseHas('actors', ['name' => 'Julianne Moore']);
        $this->assertDatabaseHas('actors', ['name' => 'Viggo Mortensen']);
        $this->assertDatabaseHas('actors', ['name' => 'Orlando Bloom']);
        $this->assertDatabaseHas('actors', ['name' => 'Elijah Wood']);
    }

    public function testGenreData()
    {
        $count = Actor::all()->count();
        $this->assertEquals($count, 25);

        $this->assertDatabaseHas('genres', ['id' => 1,'genre' => 'terror']);
        $this->assertDatabaseHas('genres', ['id' => 2,'genre' => 'suspense']);
        $this->assertDatabaseHas('genres', ['id' => 3,'genre' => 'fantasía']);
        $this->assertDatabaseHas('genres', ['id' => 4,'genre' => 'acción']);
        $this->assertDatabaseHas('genres', ['id' => 5,'genre' => 'comedia']);
        $this->assertDatabaseHas('genres', ['id' => 6,'genre' => 'drama']);
        $this->assertDatabaseHas('genres', ['id' => 7,'genre' => 'crimen']);
        $this->assertDatabaseHas('genres', ['id' => 8,'genre' => 'misterio']);
        $this->assertDatabaseHas('genres', ['id' => 9,'genre' => 'documental']);
        $this->assertDatabaseHas('genres', ['id' => 10,'genre' => 'ciencia ficción']);
        $this->assertDatabaseHas('genres', ['id' => 11,'genre' => 'cine negro']);
        $this->assertDatabaseHas('genres', ['id' => 12,'genre' => 'animación']);
    }

    public function testActorsByFilm()
    {
        $film = Film::where('name', 'Saw')->first();
        $this->assertEquals($film->actors->count(), 2);
        $this->assertTrue($film->actors->contains('name', 'Cary Elwes'));
        $this->assertTrue($film->actors->contains('name', 'Leigh Whannell'));
        
        $film = Film::where('name', 'Celda 211')->first();
        $this->assertEquals($film->actors->count(), 2);
        $this->assertTrue($film->actors->contains('name', 'Luis Tosar'));
        $this->assertTrue($film->actors->contains('name', 'Alberto Amman'));

        $film = Film::where('name', 'Batman Begins')->first();
        $this->assertEquals($film->actors->count(), 3);
        $this->assertTrue($film->actors->contains('name', 'Liam Neeson'));
        $this->assertTrue($film->actors->contains('name', 'Christian Bale'));
        $this->assertTrue($film->actors->contains('name', 'Michael Caine'));

        $film = Film::where('name', 'Snatch. Cerdos y diamantes')->first();
        $this->assertEquals($film->actors->count(), 2);
        $this->assertTrue($film->actors->contains('name', 'Jason Statham'));
        $this->assertTrue($film->actors->contains('name', 'Stephen Graham'));

        $film = Film::where('name', 'RocknRolla')->first();
        $this->assertEquals($film->actors->count(), 3);
        $this->assertTrue($film->actors->contains('name', 'Gerard Butler'));
        $this->assertTrue($film->actors->contains('name', 'Tom Wilkinson'));
        $this->assertTrue($film->actors->contains('name', 'Thandie Newton'));

        $film = Film::where('name', 'Oceans Eleven')->first();
        $this->assertEquals($film->actors->count(), 4);
        $this->assertTrue($film->actors->contains('name', 'Matt Damon'));
        $this->assertTrue($film->actors->contains('name', 'George Clooney'));
        $this->assertTrue($film->actors->contains('name', 'Brad Pitt'));
        $this->assertTrue($film->actors->contains('name', 'Julia Roberts'));
        
        $film = Film::where('name', 'El caso Slevin')->first();
        $this->assertEquals($film->actors->count(), 2);
        $this->assertTrue($film->actors->contains('name', 'Josh Hartnett'));
        $this->assertTrue($film->actors->contains('name', 'Bruce Willis'));

        $film = Film::where('name', 'Hancock')->first();
        $this->assertEquals($film->actors->count(), 2);
        $this->assertTrue($film->actors->contains('name', 'Will Smith'));
        $this->assertTrue($film->actors->contains('name', 'Charlize Theron'));

        $film = Film::where('name', 'Hijos de los hombres')->first();
        $this->assertEquals($film->actors->count(), 2);
        $this->assertTrue($film->actors->contains('name', 'Clive Owen'));
        $this->assertTrue($film->actors->contains('name', 'Julianne Moore'));

        $film = Film::where('name', 'Señor de los anillos:El retorno del Rey')->first();
        $this->assertEquals($film->actors->count(), 3);
        $this->assertTrue($film->actors->contains('name', 'Viggo Mortensen'));
        $this->assertTrue($film->actors->contains('name', 'Orlando Bloom'));
        $this->assertTrue($film->actors->contains('name', 'Elijah Wood'));
    }

    public function testFilmsByGenre()
    {
        $genre = Genre::where('id', '1')->first();
        $this->assertEquals($genre->film->count(), 1);
        $this->assertTrue($genre->film->contains('name', 'Saw'));
    
        $genre = Genre::where('id', '2')->first();
        $this->assertEquals($genre->film->count(), 1);
        $this->assertTrue($genre->film->contains('name', 'Celda 211'));

        $genre = Genre::where('id', '3')->first();
        $this->assertEquals($genre->film->count(), 3);
        $this->assertTrue($genre->film->contains('name', 'Batman Begins'));
        $this->assertTrue($genre->film->contains('name', 'Hancock'));
        $this->assertTrue($genre->film->contains('name', 'Señor de los anillos:El retorno del Rey'));

        $genre = Genre::where('id', '7')->first();
        $this->assertEquals($genre->film->count(), 3);
        $this->assertTrue($genre->film->contains('name', 'Snatch. Cerdos y diamantes'));
        $this->assertTrue($genre->film->contains('name', 'RocknRolla'));
        $this->assertTrue($genre->film->contains('name', 'El caso Slevin'));

        $genre = Genre::where('id', '4')->first();
        $this->assertEquals($genre->film->count(), 1);
        $this->assertTrue($genre->film->contains('name', 'Oceans Eleven'));

        $genre = Genre::where('id', '10')->first();
        $this->assertEquals($genre->film->count(), 1);
        $this->assertTrue($genre->film->contains('name', 'Hijos de los hombres'));


    }
}
