<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public function critics() {
        return $this->hasMany('App\Critic');
    }
}
