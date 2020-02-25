@extends('hall.layouts.index')


@section('content')
<br><br><br><br><br><br><br><br><br><br>
<div class="search">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="search_container">
                    <div class="search_form_container">
                        <form action="#" class="search_form" id="search_form">
                            <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                <div class="search_inputs d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                    <input type="text" class="form-control" placeholder="Search for a Venue or Location" required="required">
                                    <input type="text" class="form-control" placeholder="Number of Guests" required="required">
                                    <select class="form-control" placeholder="Event type" required="required">
                                        <option value="">Select Event Type</option>
                                        <option>Wedding</option>
                                        <option>Meeting</option>
                                        <option>Conference</option>
                                    </select>
                                </div>
                                <button class="btn" style="background-color: #adc867">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="listings">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <div class="container" style="background-color: #f3f7fb;">
                    <form method="">
                    <br>
                        <div><font style="font-size: 14px"><b>Filters</b></font><button style="float: right; font-size: 12px; color: white; background-color: #55407d" class="btn">Apply Filter</button></div><hr>

                    <br>
                    <div>
                        <font style="font-size: 14px"><b>Tell us your budget</b></font>
                        <input type="text" class="form-control" placeholder="#" name="">
                    </div>
                    <hr><br>
                    <div>
                        <font style="font-size: 14px"><b>How many guests are you expecting</b></font>
                        <div class="custom-control custom-checkbox small">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="custom-control-input" id="custom50">
                    <label class="custom-control-label" for="custom50" style="font-size: 14px">50-100 guests</label></div>
                    <div class="custom-control custom-checkbox small">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="custom-control-input" id="custom100">
                    <label class="custom-control-label" for="custom100" style="font-size: 14px">100-200 guests</label></div>
                    <div class="custom-control custom-checkbox small">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="custom-control-input" id="custom200">
                    <label class="custom-control-label" style="font-size: 14px" for="custom200">200-300 guests</label></div>
                    <div class="custom-control custom-checkbox small">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="custom-control-input" id="custom300">
                    <label class="custom-control-label" style="font-size: 14px" for="custom300">300-2000 guests</label></div>

                    </div><hr>
                    <br>
                    <div>
                        <font style="font-size: 14px"><b>Hall Types</b></font>
                        <div class="custom-control custom-checkbox small">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="custom-control-input" id="customCheck">
                    <label style="font-size: 14px" class="custom-control-label" for="customCheck">Conference halls</label></div>
                    <div class="custom-control custom-checkbox small">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="custom-control-input" id="customCheck">
                    <label style="font-size: 14px" class="custom-control-label" for="customCheck">Meeting halls</label></div>
                    <div class="custom-control custom-checkbox small">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="custom-control-input" id="customCheck">
                    <label style="font-size: 14px" class="custom-control-label" for="customCheck">Wedding halls</label></div>
                    <div class="custom-control custom-checkbox small">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="custom-control-input" id="customCheck">
                    <label style="font-size: 14px" class="custom-control-label" for="customCheck">Product Launch</label></div>
                    <div class="custom-control custom-checkbox small">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="custom-control-input" id="customCheck">
                    <label style="font-size: 14px" class="custom-control-label" for="customCheck">Engagement</label></div>

                    </div><hr>
                    <div>
                        <font style="font-size: 14px"><b>Show halls with facilities</b></font><br>
                        <div class="custom-control custom-checkbox small">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="custom-control-input" id="customCheck">
                    <label style="font-size: 14px" class="custom-control-label" for="customCheck">Security</label></div>
                    <div class="custom-control custom-checkbox small">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="custom-control-input" id="customCheck">
                    <label style="font-size: 14px" class="custom-control-label" for="customCheck">Tables</label></div>
                    <div class="custom-control custom-checkbox small">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="custom-control-input" id="customCheck">
                    <label style="font-size: 14px" class="custom-control-label" for="customCheck">Chairs</label></div>
                    <div class="custom-control custom-checkbox small">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="custom-control-input" id="customCheck">
                    <label style="font-size: 14px" class="custom-control-label" for="customCheck">Air Conditioners</label></div>
                    </div><br><hr>
                    <div>
                        <a href="#">Reset</a><button style="float: right; font-size: 12px; color: white; background-color: #55407d" class="btn">Apply Filter</button><br><br><br>
                    </div>
                </form>
                </div>


            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-9">
                        <font style="font-size: 25px">{{$results->count()}} Event Centres, Halls, Locations in {{ request()->input('location') }}, Lagos</font>
                    </div>
                    <div class="col-lg-3">
                        <div >
                        <form>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #55407d">
                                    Sort-By
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Cheapest Price</a>
                                    <a class="dropdown-item" href="#">Popular Venues</a>
                                    <a class="dropdown-item" href="#">Popular Locations</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                <hr>
                <!-- row1 -->
                <div class="row">
                    @foreach ($results as $result)
                    <div class="col-lg-6">
                <div class="listing">
                    <div class="listing_image">
                        <div class="listing_image_container">
                        <img src="./assets/images/{{$result->image}}" alt="">
                        </div>
                        <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                            <!-- <div class="tag tag_house"><a href="listings.html">house</a></div>
                            <div class="tag tag_rent"><a href="listings.html">for rent</a></div> -->
                        </div>
                        <div class="tag_price listing_price" style="background-color: #55407d">{{$result->capacity}} guests</div>
                    </div>
                    <div class="listing_content">
                        <div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">

                        <a href="{{route('details.show', $result->id)}}">{{$result->name}}</a>
                        </div>
                        <div class="listing_info">
                            <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                <li class="property_area d-flex flex-row align-items-center justify-content-start">
                                    <i class="fa fa-home" style="font-size: 14px"></i>
                                <span style="font-size: 14px">{{$result->halltype}}</span>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <i class="fa fa-users" style="font-size: 14px"></i>
                                <span style="font-size: 14px">{{$result->capacity}}</span>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <i class="fa fa-map-marker" style="font-size: 14px"></i>
                                <span style="font-size: 14px">{{$result->location}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
@endforeach
{{$results->links()}}

                </div>
            </div>
    </div>
</div>
<br><br>
@endsection
