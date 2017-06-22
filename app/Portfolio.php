<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function portfolio(){

        return $this->belongsTo(Work::class);

    }
}
