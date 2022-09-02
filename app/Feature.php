<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public function beverage(){
        return $this->belongsTo('App\Beverage');
    }
}
