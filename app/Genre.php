<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function film(){
        return $this->hasMany('App\Film');
    }
}
