<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Beverage extends Model
{
    
    public function feature()
    {
        return $this->hasOne('App\Feature');
    }
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        $beverages = $this::with("feature")->orderBy('id', 'asc');
        return $beverages->paginate($limit_count);
    }
    
    public function getBevFeature()
    {
        $features = $this::with("feature")->get();
        return $features;
    }
    
    public function checkerBeverage()
    {
        $beverages = gettype($this::with("feature")->orderBy('id', 'asc'));
        return $beverages;
    }
}
