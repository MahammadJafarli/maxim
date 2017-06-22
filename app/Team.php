<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //

    public function position(){

        return $this->belongsTo(Position::class);

    }

}
