@extends('details.layouts.app')

@section('content')
<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="../images/homehall2.png" style="filter: blur(8px); -webkit-filter: blur(8px)" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home_content text-center">
                    <!-- <div class="home_title">Listings</div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Search -->

<div class="search">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="search_container">
                    <div class="search_form_container">
                        <form action="#" class="search_form" id="search_form">
                            <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                <div class="search_inputs d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                    <input type="text" class="form-control" placeholder="Search for a location e.g. Adolf" required="required">
                                    <input type="text" class="form-control" placeholder="No of guests" required="required">
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

<!-- Listing -->

<div class="listing_container">
    <div class="container">
        <div class="row">
            <div class="col">

                <!-- Image -->


                <!-- Tabs -->


                <!-- About -->
                <div class="about">
                    <div class="row">
                        <div class="col-lg-6">
                            <div><img src="../assets/images/homehall2.png"></div>
                            <div class="tag_price listing_price" style="background-color: #55407d">500 guests</div>
                        </div>
                        <div class="col-lg-6">

                                <p><label style="font-size: 18px; color: black"><b>Description</b></label><br>
                                Oceanic Events Centre is a 500+ capacity hall located just off Ijoko Road, Okokomaiko Ojo, Lagos. The center is sited on over an acre of land with the benefit of lodging, bar and restaurant facilities. There are ample parking spaces on-site and in the surrounding areas. The hall can be decorated to suit individual taste. The Event centre is powered using both NEPA / grid and Solar.</p>

                        </div>
                        <div class="col-lg-6">
                            <div class="property_info">
                                <div class="listing_name"><h1>Oceanic Event Centre</h1></div>
                                <div class="listing_location d-flex flex-row align-items-start justify-content-start">

                                    <div><i class="fa fa-map-marker" style="font-size: 22px; color: gray"><span style="font-size: 16px"> Okokomaiko, Ojo</span></i>
                                                </div>

                                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-home" style="font-size: 22px; color: gray"><span style="font-size: 16px"> Multipurpose Hall</span></i>
                                                </div>

                                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-users" style="font-size: 22px; color: gray"><span style="font-size: 16px"> 500</span></i>
                                                </div>
                                </div>
                                <!-- <div class="listing_list"> -->
                                    <!-- <ul>
                                        <li>Property ID: 643682</li>
                                        <li>Posted on: September 22, 2018</li>
                                        <li>Off plan</li>
                                    </ul> -->
                                <!-- </div>
                                <div class="prop_agent d-flex flex-row align-items-center justify-content-start"> -->
                                    <!-- <div class="prop_agent_image"><img src="images/agent_1.jpg" alt=""></div>
                                    <div class="prop_agent_name"><a href="#">Maria Smith,</a> Agent</div> -->
                                <!-- </div>
                                <div class="prop_info">
                                    <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                        <li class="d-flex flex-row align-items-center justify-content-start">




                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">


                                        </li>


                                    </ul>
                                </div> -->
                            </div>

                        </div>
                        <div class="col-lg-6"></div>

                        <div class="col-lg-6">
                            <div class="listing_features">
                                <div class="listing_title"><h3>Amenities</h3></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul>
                                            <li>200 chairs</li>
                                            <li>100 tables</li>
                                            <li>Fans</li>
                                            <li>Power Supply</li>
                                            <li>Security</li>
                                            <li>Air Conditioner</li>
                                            <li>Lightining</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul>
                                            <li>Rest Room</li>
                                            <li>Changing Room</li>
                                            <li>Parking Space</li>
                                            <li>Security</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="listing_video">
                                <div class="listing_title"><h3>Booking Form</h3></div><hr>
                                <div>
                                    <form method="">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label style="font-size: 14px">Date</label>
                                                <input type="Date" class="form-control" placeholder="dd-mm-yyyy" name="">
                                            </div>
                                            <div class="col-lg-6">
                                                <label style="font-size: 14px">Event Type</label>
                                                <select class="form-control">
                                            <option value="">Select Event Type</option>
                                            <option>Wedding Reception</option>
                                            <option>Conference</option>
                                        </select>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label style="font-size: 14px">Full Name</label>
                                                <input type="text" class="form-control" name="">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label style="font-size: 14px">Phone Number</label>
                                                <input type="Phone" class="form-control" name="">
                                            </div>
                                            <div class="col-lg-6">
                                                <label style="font-size: 14px">Email</label>
                                                <input type="Email" class="form-control" name="">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label style="font-size: 14px">Booking Option</label>
                                            <select class="form-control">
                                            <option value="">--Select--></option>
                                            <option>Instant Booking</option>
                                            <option>Virtual Booking</option>
                                        </select></div>
                                        </div><br>

                                        <button style="color: white; background-color: #55407d" class="form-control btn">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
