<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        $todayTrains = Train::whereDate('orario_partenza', today())->get();
        $yesterdayTrains = Train::whereDate('orario_partenza', now()->subDay())->get();
        return view('home', compact('trains', 'todayTrains', 'yesterdayTrains'));
    }
}
