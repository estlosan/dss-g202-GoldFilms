<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Critic;
use App\User;
use App\Film;

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
}
