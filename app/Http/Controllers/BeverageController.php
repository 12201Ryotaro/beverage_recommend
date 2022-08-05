<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beverage;

class BeverageController extends Controller
{
    public function index(Beverage $beverage)
    {
        return view('beverages/index')->with(['beverages' => $beverage->getPaginateByLimit()]);
    }
}
