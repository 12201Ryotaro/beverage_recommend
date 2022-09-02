<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beverage extends Model
{
    
    public function feature()
    {
        return $this->hasOne('App\Feature');
    }
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this::with("feature")->orderBy('id', 'asc')->paginate($limit_count);
    }
}
