<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Hall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $user = Auth::guard('admin')->user()->name;
        $halls = Hall::where('vendor', '=', $user)->pluck('id');
        
       $bookings = Booking::where('hallid', '=', $halls)->get();
        echo $bookings;
        //return view('Admin.booking', compact('bookings'));
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
        $request->validate([
            'hallid' => 'required',
            'eventdate' => 'required',
            'eventtype' => 'required',
            'fullname' => 'required',
            'phonenumber' => 'required',
            'email' => 'required',
            'bookingoption' => 'required',
        ]);

        $booking = new Booking();

        $booking->hallid = $request->input('hallid');
        $booking->eventdate = $request->input('eventdate');
        $booking->eventtype = $request->input('eventtype');
        $booking->fullname = $request->input('fullname');
        $booking->phonenumber = $request->input('phonenumber');
        $booking->email = $request->input('email');
        $booking->bookingoption = $request->input('bookingoption');
        $booking->confirmbooking = "0";

         if(Booking::where('eventdate', '=', $booking->eventdate)->where('hallid', '=', $booking->hallid)->count() > 0){
            return back()->with('danger', 'Hall Already Booked For This Date');

        }else{
            $booking->save();
            return back()->with('success', 'Hall Booked Successfully');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
