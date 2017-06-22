<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function work(){

        return $this->hasMany(Portfolio::class);

    }
}
