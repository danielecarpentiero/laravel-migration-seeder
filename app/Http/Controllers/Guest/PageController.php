<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function allTrains()
    {
        $trains = Train::all();
        return view('home', compact('trains'));
    }

    public function todayTrains()
    {
        $todayTrains = Train::whereDate('orario_partenza', today())->get();
        return view('home', compact('todayTrains'));
    }
}
