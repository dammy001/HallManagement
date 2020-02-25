<?php

namespace App\Http\Controllers;

use App\EventType;
use Illuminate\Http\Request;
use App\Hall;
use App\HallType;
use App\Location;

class EventTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventType  $eventType
     * @return \Illuminate\Http\Response
     */
    public function show($eventType)
    {
        $event = $eventType;
        $halls = Hall::where('eventtype', '=', $eventType)->get();
        $eventtype = EventType::all();

        $featured = Hall::where('eventtype', '=', 'Wedding Reception')->inRandomOrder()->take(1)->get();
        $locations = Location::where('category', '=', 'High')->get();
        $moderatelocations = Location::where('category', '=', 'Moderate')->get();
        $lowlocations = Location::where('category', '=', 'Low')->get();
        $halltypes = HallType::all();
        return view('hallseventtype', compact('event','halls', 'locations', 'halltypes', 'moderatelocations', 'lowlocations', 'eventtype', 'featured'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventType  $eventType
     * @return \Illuminate\Http\Response
     */
    public function edit(EventType $eventType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EventType  $eventType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventType $eventType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EventType  $eventType
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventType $eventType)
    {
        //
    }
}
