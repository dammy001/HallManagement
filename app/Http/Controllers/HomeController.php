<?php

namespace App\Http\Controllers;
use App\User;
use App\Hall;
use App\Location;
use App\EventType;
use App\HallType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public function index()
    {
        $halls = Hall::paginate(3);
        $totalhalls = Hall::all();
        $eventtype = EventType::all();

        $featured = Hall::where('eventtype', '=', 'Wedding Reception')->inRandomOrder()->take(1)->get();
        $eventtypes = EventType::where('category', '=', 'Popular')->take(3)->get();

        $toplocations = Location::where('category', '=', 'High')->take(4)->get();

        $okoko = Hall::where('location', '=', 'Okokomaiko')->count('id');
        $adolf = Hall::where('location', '=', 'Adolf')->count('id');
        $iyana = Hall::where('location', '=', 'Iyana-School')->count('id');
        return view('index', compact('toplocations', 'halls', 'totalhalls', 'eventtypes', 'eventtype', 'featured'));
    }

}
