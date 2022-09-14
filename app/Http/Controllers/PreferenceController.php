<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preference;
use App\User;
use Illuminate\Support\Facades\Auth;

class PreferenceController extends Controller
{
    public function select()
    {
        return view('users/selectPreference');
    }
    
    public function store(Request $request, Preference $preference)
    {
        Preference::where('user_id', Auth::user()->id)->delete();
        $features = $request['features'];
        shuffle($features);
        $i = 0;
        foreach ($features as $feature) {
            if ($i >= 6) {
                break;
            } else {
                echo $feature.'  ';
                $preference -> create(array('user_id'=>Auth::user()->id, 'prefer_feature'=>$feature));
            }
            $i += 1;
        }
        return redirect('/preference/'.Auth::user()->id);
    }
    
    public function show(Preference $preference)
    {
        $user_preference = $preference->getUserPreference(Auth::user()->id);
        return view('users/showPreference')->with(['preferences' => $user_preference]);
    }
}
