<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Critic;
use App\Film;
use App\User;
class AssociationsTest extends TestCase
{
    /**
     * Checks the association Sponsor-Team
     *
     * @return void
     */
    public function testAssociationFilmCritic()
    {
        //Harry Potter y la piedra filosofal
        $film = new Film();
        $film->name = 'Harry Potter y la piedra filosofal';
        $film->year = 2010;
        $film->description = 'Basada en un mundo de mágia';
        $film->country = 'USA';
        $film->director = 'Brad Pitt';
        $film->actors = 'Daniel Raclif';
        $film->genre = 'Ciencia ficción';
        $film->rating = 10;
        $film->save();

        $critic = new Critic();
        $critic->comment = 'La mejor pelicula que he visto in my life';
        $critic->user_name = 'Jordi';
        $critic->film_name = 'Harry Potter y la piedra filosofal';
        $critic->user_id = 1;
        $film->critics()->save($critic);
        $this->assertEquals($critic->film->name, 'Harry Potter y la piedra filosofal');
        $this->assertEquals($film->critics[0]->comment, 'La mejor pelicula que he visto in my life');
        
        $film->delete();
        $critic->delete();
 

        //Underworld
        $film = new Film();
        $film->name = 'Underworld';
        $film->year = 2003;
        $film->description = 'Cuenta la historia de Selene, una verdugo cazadora de licántropos';
        $film->country = 'Rusia';
        $film->director = 'Len Wiseman';
        $film->actors = 'Selene';
        $film->genre = 'Acción';
        $film->rating = 9;
        $film->save();

        $critic = new Critic();
        $critic->comment = 'Una película muy recomendada';
        $critic->user_name = 'Agus';
        $critic->film_name = 'Underworld';
        $critic->user_id = 1;
        $film->critics()->save($critic);
        $this->assertEquals($critic->film->name, 'Underworld');
        $this->assertEquals($film->critics[0]->comment, 'Una película muy recomendada');

        $film->delete();
        $critic->delete();

        //El club de la lucha
        $film = new Film();
        $film->name = 'El club de la lucha';
        $film->year = 2003;
        $film->description = 'Un joven hastiado de su gris y monótona vida lucha contra el insomnio. En un viaje en avión conoce a un carismático vendedor de jabón que sostiene una teoría muy particular: el perfeccionismo es cosa de gentes débiles; sólo la autodestrucción hace que la vida merezca la pena. Ambos deciden entonces fundar un club secreto de lucha, donde poder descargar sus frustaciones y su ira, que tendrá un éxito arrollador.';
        $film->country = 'USA';
        $film->director = 'David Fincher';
        $film->actors = 'Edward Norton';
        $film->genre = 'Drama';
        $film->rating = 10;
        $film->save();

        $critic = new Critic();
        $critic->comment = 'Increible película, goazada de verla!!!!';
        $critic->user_name = 'Agus';
        $critic->film_name = 'El club de la lucha';
        $critic->user_id = 1;
        $film->critics()->save($critic);
        $this->assertEquals($critic->film->name, 'El club de la lucha');
        $this->assertEquals($film->critics[0]->comment, 'Increible película, goazada de verla!!!!');

        $film->delete();
        $critic->delete();
        

    }
    /**
     * Checks the association Team-Player
     *
     * @return void
     */

    
    public function testAssociationTeamPlayer()
    {
        $film = new Film();
        $film->name = 'Underworld';
        $film->year = 2003;
        $film->description = 'Cuenta la historia de Selene, una verdugo cazadora de licántropos';
        $film->country = 'Rusia';
        $film->director = 'Len Wiseman';
        $film->actors = 'Selene';
        $film->genre = 'Acción';
        $film->rating = 9;
        $film->save();
        $critic = new Critic();
        $critic->comment = 'Increible película, goazada de verla!!!!';
        $critic->user_name = 'Amador';
        $critic->film_name = 'Underworld';
        $critic->user_id = 1;
        $critic->film()->associate($film);
        $critic->save();
        $user = new User();
        $user->username = 'Amador';
        $user->email = 'amad1@gmail.com';
        $user->password = 'aparcao';
        $user->save();
        //$critic->user()->associate($user);
        $user->critics()->save($critic);
        
        $this->assertEquals($critic->user->username, 'Amador');
        $this->assertEquals($user->critics[0]->comment, 'Increible película, goazada de verla!!!!');

        $film->delete();
        $critic->delete();
        $user->delete();


        $film = new Film();
        $film->name = 'El Padrino';
        $film->year = 2011;
        $film->description = 'Va del padrino';
        $film->country = 'Bocairent';
        $film->director = 'Amador Ribas';
        $film->actors = 'George';
        $film->genre = 'Cine policiaco';
        $film->rating = 9;
        $film->save();
        $critic = new Critic();
        $critic->comment = 'Un toston de pelicula';
        $critic->user_name = 'El puto Agus';
        $critic->film_name = 'El Padrino';
        $critic->user_id = 1;
        $critic->film()->associate($film);
        $critic->save();
        $user = new User();
        $user->username = 'El puto Agus';
        $user->email = 'amaaaaaa1@gmail.com';
        $user->password = 'aparcao';
        $user->save();
        $user->critics()->save($critic);
        
        $this->assertEquals($critic->user->username, 'El puto Agus');
        $this->assertEquals($user->critics[0]->comment, 'Un toston de pelicula');

        $film->delete();
        $critic->delete();
        $user->delete();
        

    }
}