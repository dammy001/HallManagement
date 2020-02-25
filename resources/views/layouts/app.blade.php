<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="./assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <link rel="stylesheet" type="text/css" href="./assets/styles/bootstrap-4.1.2/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/plugins/OwlCarousel2-2.3.4/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="./assets/plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="./assets/plugins/OwlCarousel2-2.3.4/animate.css">
    <link rel="stylesheet" type="text/css" href="./assets/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="./assets/styles/responsive.css">
</head>
<body>
        <div class="super_container">
                <div class="super_overlay"></div>

                <!-- Header -->

                <header class="header">

                    <!-- Header Bar -->
                    <div class="header_bar d-flex flex-row align-items-center justify-content-start">
                        <div class="header_list">
                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                <!-- Phone -->
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div><img src="./assets/images/phone-call.svg" alt=""></div>
                                    <span>+234 817 5910 526</span>
                                </li>
                                <!-- Address -->
                                <!-- <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div><img src="images/placeholder.svg" alt=""></div>
                                    <span>Main Str, no 23, New York</span>
                                </li> -->
                                <!-- Email -->
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div><img src="./assets/images/envelope.svg" alt=""></div>
                                    <span>info@myhall.com</span>
                                </li>
                            </ul>
                        </div>
                        <div class="ml-auto d-flex flex-row align-items-center justify-content-start">
                            <div class="social">
                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="log_reg d-flex flex-row align-items-center justify-content-start">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                        @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">List Your Hall</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>


                                        </li>
                                    @endguest

                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Header Content -->
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo"><i class="fa fa-home" style="color: green; font-size: 40px" aria-hidden="true"></i><a href="#" style="color: #55407d" >my<span style="; color: green">HALL</span></a></div>
                        <nav class="main_nav">
                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                <li class="active"><a href="/">Home</a></li>
                            <li><a href="{{route('about')}}">About us</a></li>
                            <li><a href="{{route('listing')}}">Venues</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </nav>

                        <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    </div>

                </header>

                <!-- Menu -->

                <div class="menu text-right">
                    <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
                    <div class="menu_log_reg">
                        <div class="log_reg d-flex flex-row align-items-center justify-content-end">
                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                    @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">List Your Hall</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                    </li>
                                @endguest
                            </ul>
                        </div>
                        <nav class="menu_nav">
                            <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About us</a></li>
                            <li><a href="{{route('listing')}}">Venues</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                @yield('content')

                <footer class="footer">
                        <div class="footer_content">
                            <div class="container">
                                <div class="row">

                                    <!-- Footer Column -->
                                    <div class="col-xl-3 col-lg-6 footer_col">
                                        <div class="footer_about">
                                            <div class="logo"><i class="fa fa-home" style="color: green; font-size: 40px" aria-hidden="true"></i><a href="#" style="color: #55407d" >my<span style="; color: green">HALL</span></a></div>
                                            <div class="footer_text">
                                                <p>myHALL is a hub for halls around Ojo axis of Lagos. Hall finders in this axis can make instant or visual booking of halls from this site.</p>
                                            </div>
                                            <div class="social">
                                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="footer_submit"><a href="#">submit</a></div>
                                        </div>
                                    </div>

                                    <!-- Footer Column -->
                                    <div class="col-xl-3 col-lg-6 footer_col">
                                        <div class="footer_column">
                                            <div class="footer_title">Information</div>
                                            <div class="footer_info">
                                                <ul>
                                                    <!-- Phone -->
                                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                                        <div><img src="./assets/images/phone-call.svg" alt=""></div>
                                                        <span>+234 817 5910 526</span>
                                                    </li>
                                                    <!-- Address -->
                                                    <!-- <li class="d-flex flex-row align-items-center justify-content-start">
                                                        <div><img src="images/placeholder.svg" alt=""></div>
                                                        <span>Main Str, no 23, New York</span>
                                                    </li> -->
                                                    <!-- Email -->
                                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                                        <div><img src="./assets/images/envelope.svg" alt=""></div>
                                                        <span>info@myhall.com</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="footer_links usefull_links">
                                                <div class="footer_title">Usefull Links</div>
                                                <ul>
                                                    <li><a href="#">Locations</a></li>
                                                    <li><a href="#">Featured Venues</a></li>
                                                <li><a href="{{route('register')}}">List your hall</a></li>
                                                <li><a href="{{route('login')}}">Login</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Footer Column -->
                                    <div class="col-xl-3 col-lg-6 footer_col">
                                        <div class="footer_links">
                                            <div class="footer_title">Events Types</div>
                                            <ul>
                                                @foreach($eventtype as $event)
                                                <li><a href="{{ route('eventtypes', $event->eventtype)}}">{{$event->eventtype}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Footer Column -->
                                    <div class="col-xl-3 col-lg-6 footer_col">
                                        <div class="footer_title">Featured Venue</div>
                                        @foreach($featured as $f)
                                        <div class="listing_small">
                                                <div class="listing_small_image">
                                                    <div>
                                                        <img src="./assets/images/{{$f->image}}" alt="">
                                                    </div>
                                                    <div class="listing_small_tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                                        <!-- <div class="listing_small_tag tag_house"><a href="listings.html">house</a></div>
                                                        <div class="listing_small_tag tag_sale"><a href="listings.html">for sale</a></div> -->
                                                    </div>
                                                    <div class="tag_price listing_price" style="background-color: #55407d">{{$f->capacity}} guests</div>
                                                </div>
                                                <div class="listing_small_content">
                                                    <div class="listing_small_location d-flex flex-row align-items-start justify-content-start">

                                                    <a href="single.html">{{$f->name}}</a>
                                                    </div>
                                                    <div class="listing_small_info">
                                                        <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                                            <li class="property_area d-flex flex-row align-items-center justify-content-start">
                                                            <i class="fa fa-home" style="font-size: 14px"></i>
                                                            <span style="font-size: 14px">{{$f->halltype}}</span>
                                                        </li>
                                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                                            <i class="fa fa-users" style="font-size: 14px"></i>
                                                        <span style="font-size: 14px">{{$f->price}}</span>
                                                        </li>
                                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                                            <i class="fa fa-map-marker" style="font-size: 14px"></i>
                                                            <span style="font-size: 14px">{{$f->location}}</span>
                                                        </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="footer_bar">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="footer_bar_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
                                            <div class="copyright order-md-1 order-2">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | MyHall  <a href="#" target="_blank">Designed and developed by Segun </a>
                </div>
                                            <nav class="footer_nav order-md-2 order-1 ml-md-auto">
                                                <ul class="d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
                                                <li><a href="{{url('/')}}">Home</a></li>
                                                <li><a href="{{route('about')}}">About us</a></li>
                                                <li><a href="{{route('listing')}}">Venues</a></li>
                                                <li><a href="{{route('contact')}}">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>



                <script src="./assets/jQuery/jquery-2.1.4.min.js"></script>
                <script src="./assets/styles/bootstrap-4.1.2/popper.js"></script>
                <script src="./assets/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
                <script src="./assets/plugins/greensock/TweenMax.min.js"></script>
                <script src="./assets/plugins/greensock/TimelineMax.min.js"></script>
                <script src="./assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
                <script src="./assets/plugins/greensock/animation.gsap.min.js"></script>
                <script src="./assets/plugins/greensock/ScrollToPlugin.min.js"></script>
                <script src="./assets/plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
                <script src="./assets/plugins/easing/easing.js"></script>
                <script src="./assets/plugins/progressbar/progressbar.min.js"></script>
                <script src="./assets/plugins/parallax-js-master/parallax.min.js"></script>
                <script src="./assets/js/custom.js"></script>

                 <script type="text/javascript">
                    $(document).ready(function(){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                        var halltypes = [];

                        $('#filter').click(function(e){
                            e.preventDefault();

                            halltypes = [];
                            var price = $('#price').val();
                           // alert(price);

                            $('input[name="halltype[]"]:checked').each(function(){
                                halltypes.push($(this).val());
                            });

                            //alert(halltypes);
                            var hall = halltypes.join(", ");
                           // alert(hall);

                            $.ajax({
                                url: '/filter',
                                method: 'POST',
                                data: {hall:hall, pricetag:price},
                                success: function(data){
                                    alert(JSON.stringify(data));
                                    console.log(data.result);
                                    alert(data.result);

                                }
                            })

                        })
                    });
                    </script>
                </body>
                </html>
