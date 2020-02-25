
	<!-- Featured -->

	<div class="featured">
            <div class="container">
                <div class="row">

                    <div class="section_title_container text-center">
                            <div class="section_title"><center><h4>Top Locations</h4></center></div>
                        </div>
                </div>
                    <div class="row">
                        @foreach($toplocations as $top)
                                     <div class="col-lg-3" >
                                         <div class="listing">
                            <div class="listing_image">
                                <div class="listing_image_container">
                                    <img src="./assets/images/homehall2.png" style="filter: blur(1px); -webkit-filter: blur(1px)" alt="">
                                </div>
                                <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <div class="tag tag_house"><a href="#">{{$top->location}} <br>0 venues</a></div>

                                </div>

                            </div>

                                     </div></div>
                                     @endforeach

                                 </div><hr>

                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <div class="section_subtitle">The best deals</div>
                            <div class="section_title"><h4>Featured Venues</h4></div>
                        </div>
                    </div>
                </div>
                <div class="row featured_row">

                 @foreach($halls as $hall)
                    <!-- Featured Item -->
                    <div class="col-lg-4">
                        <div class="listing">
                            <div class="listing_image">
                                <div class="listing_image_container">
                                <img src="./assets/images/{{$hall->image}}" alt="">
                                </div>
                                <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <!-- <div class="tag tag_house"><a href="listings.html">house</a></div>
                                    <div class="tag tag_sale"><a href="listings.html">for sale</a></div> -->
                                </div>
                            <div class="tag_price listing_price" style="background-color: #55407d">{{$hall->capacity}} Guests</div>
                            <div class="tag_price listing_price" style="background-color: #55407d">N{{$hall->price}}</div>
                            </div>
                            <div class="listing_content">
                                <div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
                                <a href="{{route('details.show', $hall->id)}}">{{$hall->name}}</a>
                                </div>
                                <!-- <div><img src="images/icon_1.png" alt="">
                                    <a href="single.html"> Adolf, Ojo</a></div> -->
                                <div class="listing_info">
                                    <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                        <li class="property_area d-flex flex-row align-items-center justify-content-start">
                                            <i class="fa fa-home" style="font-size: 14px"></i>
                                        <span style="font-size: 14px">{{$hall->halltype}}</span>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <i class="fa fa-users" style="font-size: 14px"></i>
                                        <span style="font-size: 14px">{{$hall->capacity}} Guests</span>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <i class="fa fa-map-marker" style="font-size: 14px"></i>
                                        <span style="font-size: 14px">{{$hall->address}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                   @endforeach
                   {{$halls->links()}}
                    <!-- Featured Item -->
                   {{--  <div class="col-lg-4">
                        <div class="listing">
                            <div class="listing_image">
                                <div class="listing_image_container">
                                    <img src="./assets/images/listing_2.jpg" alt="">
                                </div>
                                <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">

                                </div>
                                <div class="tag_price listing_price" style="background-color: #55407d">1000 guests</div>
                            </div>
                            <div class="listing_content">
                                <div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">

                                    <a href="single.html">Masterclass Event Centre</a>
                                </div>
                                <div class="listing_info">
                                    <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                        <li class="property_area d-flex flex-row align-items-center justify-content-start">
                                            <i class="fa fa-home" style="font-size: 14px"></i>
                                            <span style="font-size: 14px">Hall in an hotel</span>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <i class="fa fa-users" style="font-size: 14px"></i>
                                            <span style="font-size: 14px">1000</span>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <i class="fa fa-map-marker" style="font-size: 14px"></i>
                                            <span style="font-size: 14px">Franklass, Ojo</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Featured Item -->
                    {{-- <div class="col-lg-4">
                        <div class="listing">
                            <div class="listing_image">
                                <div class="listing_image_container">
                                    <img src="./assets/images/listing_3.jpg" alt="">
                                </div>
                                <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">

                                </div>
                                <div class="tag_price listing_price" style="background-color: #55407d">1500 guests</div>
                            </div>
                            <div class="listing_content">
                                <div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
                                    <a href="single.html">Legendary Event House</a>
                                </div>
                                <div class="listing_info">
                                    <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                        <li class="property_area d-flex flex-row align-items-center justify-content-start">
                                            <i class="fa fa-home" style="font-size: 14px"></i>
                                            <span style="font-size: 14px">Meeting Room</span>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <i class="fa fa-users" style="font-size: 14px"></i>
                                            <span style="font-size: 14px">1500</span>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <i class="fa fa-map-marker" style="font-size: 14px"></i>
                                            <span style="font-size: 14px">Okokomaiko, Ojo</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div><hr>

            <div class="container">
        <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">

                            <div class="section_title"><h4>Halls by their most Popular Events</h4></div>
                        </div>
                    </div>
                </div>
        <div class="row">
            @foreach($eventtypes as $event)
                                     <div class="col-lg-4" >
                                         <div class="listing">
                            <div class="listing_image">
                                <div class="listing_image_container">
                                <img src="./assets/images/{{$event->image}}" style="filter: blur(1px); -webkit-filter: blur(1px)" alt="">
                                </div>
                                <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                <div class="tag tag_house"><a href="listings.html">{{$event->eventtype}} <br> venues</a></div>

                                </div>

                            </div>
                                     </div></div>
            @endforeach



                                 </div><hr>
                                 <div class="row"><br>
                                     <div class="section_title_container ">
                            <div class="section_title"><h4><b>A Hall Vendor? List Your Venue, It's free!</b></h4>
                            </div><hr>
                                <form action="addlist.html">
                                    <div class="row">
                                        <div class="col-md-4"><h5>It's free and convinient, and you have total control.</h5></div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="Your Name" required="required">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="Venue Name" required="required">
                                        </div>
                                        <div class="col-md-2"><button class="btn" style="background-color: #adc867; float: right">Continue</button></div>
                                    </div>
                                </form>
                            </div>
                            </div>

                                     <div></div>
                                 </div><br>
                             </div>
