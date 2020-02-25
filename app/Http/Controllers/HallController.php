<?php

namespace App\Http\Controllers;

use App\Hall;
use App\User;
use App\HallType;
use App\Location;
use App\EventType;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor = Auth::guard('admin')->user()->name;
        $halls = Hall::where('vendor', '=', $vendor)->get();

        return view('Admin.managehall', compact('halls'));

    }

    public function search(Request $request){

        $location = $request->input('location');
        $guests = $request->input('guests');
        $eventtype = $request->input('eventtype');

        $results = Hall::where('location', 'like', "%$location%")
        ->where('capacity', 'like', "%$guests%")
        ->where('eventtype', 'like', "%$eventtype%")
        ->paginate(10);
       // echo $results;
        return view('hall.searchresults', compact('results'));

    }

    public function filter(Request $request){

        $hall = $request->input('hall');
        $price = $request->input('pricetag');

        $h = explode(", ",$hall);

            $results = DB::table('halls')->where('halltype', 'like', "%".$h[0]."%")->where('halltype', 'LIKE', "%".$h[1]."%")
                        ->where('price', '<=', $price)->get();

        return response()->json([
            '$result' => $results
        ]);


       // $results = Hall::whereIn('halltype', $halltypes)->get();
       // echo $result;

       /*  $hall = new Hall;
        if($request->has('halltypes')){
            foreach($request->input('halltypes') as $halltype){
                $hall = $hall->whereIn('halltype', $halltype);
            }
        }
        $hall->get(); */
        //$results = Hall::whereIn('halltypes', $halltypes)->where('price', '<=', $price)->get();
       // return view('filter', compact('hall'));
      // echo $hall;
    }

    public function about()
    {
        return view('about');
    }

    public function listing()
    {
        $locations = Location::where('category', '=', 'High')->get();
        $moderatelocations = Location::where('category', '=', 'Moderate')->get();
        $lowlocations = Location::where('category', '=', 'Low')->get();
        $eventtype = EventType::all();

        $featured = Hall::where('eventtype', '=', 'Wedding Reception')->inRandomOrder()->take(1)->get();

        $halls = Hall::paginate(10);
        $halltypes = HallType::all();
        return view('listing', compact('eventtype', 'featured', 'halls', 'halltypes', 'locations', 'moderatelocations', 'lowlocations'));
    }

    public function contact()
    {
        return view('contact.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventtypes = EventType::all();
        $halltypes = HallType::all();
        return view('admin.uploadhall', compact('eventtypes', 'halltypes'));
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
            'hallname' => 'required',
            'location' => 'required',
            'halltype' => 'required',
            'hallcapacity' => 'required',
            'amenities' => 'required',
            'halldescription' => 'required',
            'pricetag' => 'required',
            'halladdress' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

         //$hall = new Hall();

        /* $hall->hallname = $request->input('hallname');
        $hall->location = $request->input('location');
        $hall->halltype = $request->input('halltype');
        $hall->eventtype = $request->input('eventtype');
        $hall->capacity = $request->input('capacity');
        $hall->amenities = $request->input('amenities');
        $hall->description = $request->input('halldescription');
        $hall->price = $request->input('pricetag');
        $hall->address = $request->input('halladdress');
        $hall->vendor = Auth::guard('admin')->user()->name; */
       // $service->image = $request->input('image');
        $input = $request->all();
       $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
       $input['vendor'] = Auth::guard('admin')->user()->name;
      // $hall->image = $imageName;

       $request->image->move(public_path('uploads'), $input['image']);
       /* if($request->hasfile('image')){
           $file = $request->file('image');
           $extension = $file->getClientOriginalExtension();
           $filename = time() . "." . $extension;
           $folderpath = public_path().'/uploads/'. date('Y'). $filename;
           $file->move($folderpath);
           $hall->image = $filename;
       }else{
           return $request;
           $hall->image = '';
       }
       */
       Hall::create($input);
      //$hall->save();

       //return back()->with('success', 'Hall Uploaded Successfully');
    }

    public function details(){
        return view('details.halldetails');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function show($hall)
    {
        $eventtype = EventType::all();
        $hall = Hall::find($hall);
        return view('hall.details', compact('hall', 'eventtype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function edit($hall)
    {
        $eventtypes = EventType::all();
        $halltypes = HallType::all();
        $hall = Hall::where('id', '=', $hall)->first();
        return view('Admin.edit', compact('hall', 'eventtypes', 'halltypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $hall)
    {
        $hall = Hall::where('id', '=', $hall)->first();
        $hall->update($request->all());
        return back()->with('success', 'Hall Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function destroy($hall)
    {
        $vendor = Hall::findOrFail($hall);
        $vendor->delete();
        return redirect()->route('manage')->with('success', 'Hall Deleted Successfully');
    }
}
