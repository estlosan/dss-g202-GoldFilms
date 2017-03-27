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
        $Caso = DB::table('films')->where('name','El caso Slevin')->first();
        $agus = DB::table('users')->where('username','Agus')->first();
        $esteban = DB::table('users')->where('username','Esteban')->first();
        $jordi = DB::table('users')->where('username','Jordi')->first();
        $Oscar = DB::table('users')->where('username','Oscar')->first();
        $Julian = DB::table('users')->where('username','Julian')->first();
        DB::table('critics')->delete();
        DB::table('critics')->insert(
            [
                ['comment'=> 'Es bastante impactante,pero no me ha gustado','film_id' => $saw->id,'user_id' => $agus->id],
                ['comment'=>'Muy interesante, te mantiene atrapado durante toda la película','film_id' => $batman->id,'user_id' => $Oscar->id],
                ['comment'=> 'Muy gore todo!!','film_id' => $saw->id,'user_id' => $esteban->id],
                ['comment'=> 'La historia no tiene un buen argumento,típica de acción/superhéroes','film_id' => $batman->id,'user_id' => $agus->id],
                ['comment'=> 'Muy buen película,me ha sorprendido mucho!','film_id' => $Celda ->id,'user_id' => $jordi->id],
                ['comment'=> 'Una trama muy extraña,sorprende','film_id' => $saw->id,'user_id' => $esteban->id],
                ['comment'=> 'Me ha sorprendido mucho,puesto que no soy muy de películas españolas.','film_id' => $Celda->id,'user_id' => $agus->id],
                ['comment'=> 'Muy floja','film_id' => $Caso->id,'user_id' => $Oscar->id],
                ['comment'=> 'Me esperaba algo bastante peor, peor lo cierto es que es muy decente!!','film_id' => $Celda->id,'user_id' => $Julian->id],
                ['comment'=> 'Peliculón!!!','film_id' => $Rock->id,'user_id' => $Oscar->id],
            ]);
    }
}
