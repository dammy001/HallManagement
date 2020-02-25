@extends('layouts\app')
@section('title', 'myHall | About')

@section('content')
<br><br><br><br><br><br>
<div class="intro">
        <div class="container">
            <div class="row row-eq-height">

                <!-- Intro Content -->
                <div class="col-lg-6">
                    <div class="intro_content">
                        <div class="section_title_container">
                            <div class="section_subtitle">the best deals</div>
                            <div class="section_title"><h1>Who we are</h1></div>
                        </div>
                        <div class="intro_text">
                            <p style="color: black">myHALL is a hub for halls around Ojo axis of Lagos. Hall finders in this axis can make instant or visual booking of halls from this site.</p>
                        </div>
                        <div class="button intro_button"><a href="#">read more</a></div>
                    </div>
                </div>

                <!-- Intro Image -->
                <div class="col-lg-6 intro_col">
                    <div class="intro_image">
                        <div class="background_image" style="background-image:url(./assets/images/intro.jpg)"></div>
                        <img src="./assets/images/intro.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Services -->

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <div class="section_subtitle">the best deals</div>
                        <div class="section_title"><h1>Services</h1></div>
                    </div>
                </div>
            </div>
            <div class="row services_row">

                <!-- Service -->
                <div class="col-xl-4 col-md-6">
                    <div class="service">
                        <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                            <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                <img src="./assets/images/service_1.png" alt="">
                            </div>
                            <div class="service_title"><h3>Consulting</h3></div>
                        </div>
                        <div class="service_text">
                            <p style="color: black">We provide a platform where hall finders can make consultation on available halls on our well-designed and easy-to-use application in a particular location in Ojo. Hall Vendors can as well add their halls for hall finders to book.</p>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="col-xl-4 col-md-6">
                    <div class="service">
                        <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                            <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                <img src="./assets/images/service_2.png" alt="">
                            </div>
                            <div class="service_title"><h3>Real estate sales</h3></div>
                        </div>
                        <div class="service_text">
                            <p style="color: black">Aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula.</p>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="col-xl-4 col-md-6">
                    <div class="service">
                        <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                            <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                <img src="./assets/images/service_3.png" alt="">
                            </div>
                            <div class="service_title"><h3>Booking</h3></div>
                        </div>
                        <div class="service_text">
                            <p style="color: black">Hall finders can make bookings for a particular halls in a particular location in ojo, Lagos.</p>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="col-xl-4 col-md-6">
                    <div class="service">
                        <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                            <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                <img src="./assets/images/service_4.png" alt="">
                            </div>
                            <div class="service_title"><h3>Meditation</h3></div>
                        </div>
                        <div class="service_text">
                            <p style="color: black">Aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula.</p>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="col-xl-4 col-md-6">
                    <div class="service">
                        <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                            <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                <img src="./assets/images/service_5.png" alt="">
                            </div>
                            <div class="service_title"><h3>Evaluation</h3></div>
                        </div>
                        <div class="service_text">
                            <p style="color: black">Bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula.</p>
                        </div>
                    </div>
                </div>

                <!-- Service -->
                <div class="col-xl-4 col-md-6">
                    <div class="service">
                        <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                            <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                <img src="./assets/images/service_6.png" alt="">
                            </div>
                            <div class="service_title"><h3>Price Consulting</h3></div>
                        </div>
                        <div class="service_text">
                            <p style="color: black">Customers can make inquiry on pricing rate of a particular hall in Ojo, Lagos that's being listed on here.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<br><br>
@endsection
