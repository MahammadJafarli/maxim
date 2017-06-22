<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //

    public function team(){

        return $this->hasMany(Team::class);

    }

}
