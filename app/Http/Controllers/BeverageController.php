<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beverage;
use App\Feature;
use Illuminate\Support\Facades\Log;

class BeverageController extends Controller
{
    public function index(Beverage $beverage)
    {
        $bev =  $beverage->getPaginateByLimit();
        return view('beverages/index')->with(['beverages' => $bev]);
    }
    
    public function show(Beverage $beverage)
    {
        return view('beverages/show')->with(['beverage' => $beverage]);
    }
}
