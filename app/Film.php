<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public function critics() {
        return $this->hasMany('App\Critic');
    }

    public function genre(){
        return $this->belongsTo('App\Genre');
    }

    public function actors(){
        return $this->belongsToMany('App\Actor');
    }
}
