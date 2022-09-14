<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    protected $fillable = [
        'user_id',
        'prefer_feature',
    ];
    
    public function user()
    {
        return $this->belongsTO('App\User');
    }
    
    public function getUserPreference(int $user_id)
    {
        return $this->where('user_id', $user_id)->get();
    }
}
