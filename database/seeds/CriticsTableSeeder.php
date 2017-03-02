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


                ['comment'=> 'Es bastante impactante,pero no me ha gustado','film_id' => $saw->id,'film_name'=> $saw->name,'user_id' => $agus->id,'user_name' => $agus->username],
                ['comment'=>'Muy interesante, te mantiene atrapado durante toda la película','film_id' => $batman->id,'film_name'=> $batman->name,'user_id' => $Oscar->id, 'user_name' => $Oscar->username],
                ['comment'=> 'Muy gore todo!!','film_id' => $saw->id,'film_name'=> $saw->name,'user_id' => $esteban->id, 'user_name' => $esteban->username],
                ['comment'=> 'La historia no tiene un buen argumento,típica de acción/superhéroes','film_id' => $batman->id ,'film_name'=> $batman->name,'user_id' => $agus->id,'user_name' => $agus->username],
                ['comment'=> 'Muy buen película,me ha sorprendido mucho!','film_id' => $Celda ->id,'film_name'=> $Celda->name,'user_id' => $jordi->id, 'user_name' => $jordi->username],
                ['comment'=> 'Una trama muy extraña,sorprende','film_id' => $saw->id,'film_name'=> $saw->name,'user_id' => $esteban->id,'user_name' => $esteban->username],
                ['comment'=> 'Me ha sorprendido mucho,puesto que no soy muy de películas españolas.','film_id' => $Celda->id,'film_name'=> $Celda->name,'user_id' => $agus->id,'user_name' => $agus->username],
                ['comment'=> 'Muy floja','film_id' => $Caso->id,'film_name'=> $Caso->name,'user_id' => $Oscar->id, 'user_name' => $Oscar->username],
                ['comment'=> 'Me esperaba algo bastante peor, peor lo cierto es que es muy decente!!','film_id' => $Celda->id,'film_name'=> $Celda->name,'user_id' => $Julian->id,'user_name' => $Julian->username],
                ['comment'=> 'Peliculón!!!','film_id' => $Rock->id,'film_name'=> $Rock->name,'user_id' => $Oscar->id,'user_name' => $Oscar->username],
            ]
        );
    }
}
