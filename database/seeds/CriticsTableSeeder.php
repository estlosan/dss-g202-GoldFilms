<?php

use Illuminate\Database\Seeder;

class CriticsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $saw = DB::table('films')->where('name','Saw')->first();
        $batman = DB::table('films')->where('name','Batman Begins')->first();
        $Celda = DB::table('films')->where('name','Celda 211')->first();
        $Rock = DB::table('films')->where('name', 'RocknRolla')->first();
        $Harry = DB::table('films')->where('name', 'Harry Potter y la piedra filosofal')->first();
        $exorcista = DB::table('films')->where('name', 'El exorcista')->first();
        $ouija = DB::table('films')->where('name', 'Ouija, El origen del mal')->first();
        $norespires = DB::table('films')->where('name', 'No respires')->first();

        $lobezno = DB::table('films')->where('name', 'Lobezno 3')->first();
        $torrente = DB::table('films')->where('name', 'Torrente 5, Operación Eurovegas')->first();
        $solocasa = DB::table('films')->where('name', 'Solo en casa')->first();
        $sully = DB::table('films')->where('name', 'Sully, Hazaña en el Hudson')->first();
        $forrest = DB::table('films')->where('name', 'Forrest Gump')->first();
        $sexto = DB::table('films')->where('name', 'El sexto sentido')->first();
        $besomuerte = DB::table('films')->where('name', 'El beso de la muerte')->first();
        $hombres3 = DB::table('films')->where('name', 'Hombres de negro 3')->first();
        $pulp = DB::table('films')->where('name', 'Pulp Fiction')->first();
        
        $Caso = DB::table('films')->where('name','El caso Slevin')->first();
        $agus = DB::table('users')->where('username','Agustín')->first();
        $esteban = DB::table('users')->where('username','Esteban')->first();
        $jordi = DB::table('users')->where('username','Jordi')->first();
        $Oscar = DB::table('users')->where('username','Oscar')->first();
        $Pavel = DB::table('users')->where('username','Pavel')->first();
        $Oliver = DB::table('users')->where('username','Oliver')->first();
        $Angela = DB::table('users')->where('username','Angela')->first();
        $Darlene = DB::table('users')->where('username','Darlene')->first();
        $Tyrell = DB::table('users')->where('username','Tyrell')->first();

        DB::table('critics')->delete();
        DB::table('critics')->insert(
            [
                ['comment'=> 'Es bastante impactante,pero no me ha gustado','film_id' => $saw->id,'user_id' => $agus->id],
                ['comment'=>'Muy interesante, te mantiene atrapado durante toda la película','film_id' => $batman->id,'user_id' => $Oscar->id],
                ['comment'=> 'Muy gore todo!!','film_id' => $saw->id,'user_id' => $esteban->id],
                ['comment'=> 'La historia no tiene un buen argumento,típica de acción/superhéroes','film_id' => $batman->id,'user_id' => $agus->id],
                ['comment'=> 'Muy buen película,me ha sorprendido mucho!','film_id' => $Celda ->id,'user_id' => $Oliver->id],
                ['comment'=> 'Una trama muy extraña,sorprende','film_id' => $saw->id,'user_id' => $Tyrell->id],
                ['comment'=> 'Me ha sorprendido mucho,puesto que no soy muy de películas españolas.','film_id' => $Celda->id,'user_id' => $Angela->id],
                ['comment'=> 'Muy floja','film_id' => $Caso->id,'user_id' => $Oscar->id],
                ['comment'=> 'Peliculón!!!','film_id' => $Rock->id,'user_id' => $Oscar->id],
                ['comment'=> 'No he visto pelicula mejor en mi vida','film_id' => $Harry->id,'user_id' => $jordi->id],
                ['comment'=> 'Que gran pelicula, muy recomendable','film_id' => $Harry->id,'user_id' => $Darlene->id],
                ['comment'=> 'Fantástica','film_id' => $exorcista->id,'user_id' => $Darlene->id],
                ['comment'=> 'Que miedo he pasado!','film_id' => $ouija->id,'user_id' => $Oliver->id],
                ['comment'=> 'Te deja con ganas de más','film_id' => $exorcista->id,'user_id' => $esteban->id],
                ['comment'=> 'Sin palabras me ha dejado','film_id' => $norespires->id,'user_id' => $Pavel->id],
                ['comment'=> 'No la recomiendo....muy floja!','film_id' => $norespires->id,'user_id' => $esteban->id],
                ['comment'=> 'Una pasada','film_id' => $lobezno->id,'user_id' => $Darlene->id],
                ['comment'=> 'No puedes parar de reir en toda la pelicula','film_id' => $torrente->id,'user_id' => $jordi->id],
                ['comment'=> 'Este tipo de peliculas son lo peor','film_id' => $norespires->id,'user_id' => $Tyrell->id],
                ['comment'=> 'Una de mis peliculas favoritas','film_id' => $solocasa->id,'user_id' => $jordi->id],
                ['comment'=> 'Muy buena!!','film_id' => $norespires->id,'user_id' => $Oscar->id],
                ['comment'=> 'Solo en casa no estaba la verdad jajaja','film_id' => $norespires->id,'user_id' => $Pavel->id],                                               
                ['comment'=> 'Pelicula bastante floja..','film_id' => $sully->id,'user_id' => $Angela->id],
                ['comment'=> 'Que pelicula más bonita','film_id' => $forrest->id,'user_id' => $agus->id],
                ['comment'=> 'Que gusto de película','film_id' => $forrest->id,'user_id' => $Angela->id],
                ['comment'=> 'No me acaba de convencer','film_id' => $sexto->id,'user_id' => $Oscar->id],
                ['comment'=> 'Estas películas son las mejores','film_id' => $besomuerte->id,'user_id' => $Pavel->id],
                ['comment'=> 'Menudo tostazo','film_id' => $besomuerte->id,'user_id' => $agus->id],
                ['comment'=> 'Peliculoooon!!!','film_id' => $hombres3->id,'user_id' => $jordi->id],
                ['comment'=> 'He visto mejores','film_id' => $hombres3->id,'user_id' => $agus->id],
                ['comment'=> 'Una obra maestra','film_id' => $pulp->id,'user_id' => $Angela->id],

            ]);
    }
}
