<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use App\Hall;
use App\EventType;
use App\Halltype;
use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function dashboard() {

        $user = Auth::guard('admin')->user()->name;
        $hallname = Auth::guard('admin')->user()->hallname;
        $halls = Hall::where('vendor', '=', "$user")->count('id');
        $bookings = Booking::where('hallid', '=', "$user")->count('id');
        $vendorbookings = Booking::where('hallid', '=', "$user")->take(5)->get();
        $pendings = Booking::where('confirmbooking', '=', '0')->where('hallid', '=', "$user")->count('id');

        return view('Admin.dashboard', compact('halls', 'bookings', 'vendorbookings', 'pendings'));
    }

    public function register(){
        $eventtype = EventType::all();

        $featured = Hall::where('eventtype', '=', 'Wedding Reception')->inRandomOrder()->take(1)->get();
        return view('register.register', compact('eventtype', 'featured'));
    }

    public function login(Request $request)
    {
       // $email = $request->email;
         if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            $user = Auth::guard('admin')->user();

            return redirect()->route('dashboard')->with('user', Auth::guard('admin')->user());
           // return view('Admin.dashboard')->with('user', Auth::user());

        }

        else
        {
            return back()->withErrors('Access denied.');
        }


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
        $this->validate(request(), [

            'hallname' => 'required|regex:/^[\pL\s\-]+$/u',
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'contact' => 'required|digits:11',
            'email' => 'required|email|min:4|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'

        ]);

        $user = new User();
        $user->hallname = request('hallname');
        $user->name = request('name');
        $user->contact = request('contact');
        $user->email= request('email');
        $user->password = bcrypt(request('password'));

        $user->save();
        return back()->with('success', 'Vendor Registered Successfully');

    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
