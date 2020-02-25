<!-- Home -->

<div class="home">

        <!-- Home Slider -->
        <div class="home_slider_container">
             <div class="owl-carousel owl-theme home_slider">

                 <!-- Slide -->
                 <div class="slide">
                     <div class="background_image" style="background-image:url(./assets/images/homehall1.jpg); filter: blur(5px); -webkit-filter: blur(5px)"></div>

                 </div>

                 <!-- Slide -->
                 <div class="slide">
                     <div class="background_image" style="background-image:url(./assets/images/homehall2.png); filter: blur(5px); -webkit-filter: blur(5px)"></div>

                 </div>

                 <!-- Slide -->
                 <div class="slide">
                     <div class="background_image" style="background-image:url(./assets\-images/homehall3.jpg); filter: blur(5px); -webkit-filter: blur(5px)"></div>

                 </div>

             </div>

             <!-- Home Slider Navigation -->
             <div class="home_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>

        </div>
    </div>

    <!-- Search -->

    <div class="search">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="search_container">
                        <div style="color: white; "><font style="font-size: 40px">Find and book venues in Ojo, Lagos</font><br><font style="font-size: 25px">from over {{$totalhalls->count()}} halls</font></div>
                        <div class="search_form_container">
                        <form action="{{ route('hall.search') }}" method="POST" class="search_form" id="search_form">
                            @csrf
                                <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                    <div class="search_inputs d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                        <input type="text" name="location" class="form-control" placeholder="Search for a Venue or Location" required="required">
                                        <input type="text" name="guests" class="form-control" placeholder="Number of Guests" required="required">
                                        <select class="form-control" name="eventtype" placeholder="Event type" required="required">

                                            @foreach($eventtype as $event)
                                                <option value="{{$event->eventtype}}">{{$event->eventtype}}</option>
                                            @endforeach

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
