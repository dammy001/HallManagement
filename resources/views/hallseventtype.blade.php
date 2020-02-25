@extends('layouts.app')
@section('title', 'myHall | Venues')

@section('content')
<br><br><br><br><br><br><br><br>

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
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="guest[]" class="custom-control-input" id="custom50">
                        <label class="custom-control-label" for="custom50" style="font-size: 14px">0-100 guests</label></div>
                        <div class="custom-control custom-checkbox small">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="guest[]" class="custom-control-input" id="custom100">
                        <label class="custom-control-label" for="custom100" style="font-size: 14px">101-500 guests</label></div>
                        <div class="custom-control custom-checkbox small">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="guest[]" class="custom-control-input" id="custom200">
                        <label class="custom-control-label" style="font-size: 14px" for="custom200">above 500 guests</label></div>

                        </div><hr>
                        <br>
                        <div>
                            <font style="font-size: 14px"><b>Hall Types</b></font>

                                @foreach($halltypes as $halltype)
                                <div class="custom-control custom-checkbox small">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="halltype[]" class="custom-control-input" id="customCheck1">
                                <label style="font-size: 14px" class="custom-control-label" for="customCheck1">{{$halltype->halltype}}</label></div>
                                @endforeach
                        </div><hr>
                        <div>
                                <font style="font-size: 14px"><b>Locations / Proximities</b></font><br>
                                <font style="font-size: 10px"><b>High Proximities</b></font>
                                    @foreach($locations as $location)
                                    <div class="custom-control custom-checkbox small">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="halltype[]" class="custom-control-input" id="customCheck1">
                                    <label style="font-size: 14px" class="custom-control-label" for="customCheck1">{{$location->location}}</label></div>
                                    @endforeach
                                    <br>
                                    <font style="font-size: 10px"><b>Moderate Proximities</b></font>
                                    @foreach($moderatelocations as $moderatelocation)
                                    <div class="custom-control custom-checkbox small">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="halltype[]" class="custom-control-input" id="customCheck1">
                                    <label style="font-size: 14px" class="custom-control-label" for="customCheck1">{{$moderatelocation->location}}</label></div>
                                    @endforeach
                                    <br>
                                    <font style="font-size: 10px"><b>Low Proximities</b></font>
                                    @foreach($lowlocations as $lowlocation)
                                    <div class="custom-control custom-checkbox small">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="halltype[]" class="custom-control-input" id="customCheck1">
                                    <label style="font-size: 14px" class="custom-control-label" for="customCheck1">{{$lowlocation->location}}</label></div>
                                    @endforeach
                            </div><hr>
                        <div>
                            <font style="font-size: 14px"><b>Show halls with facilities</b></font><br>
                            <div class="custom-control custom-checkbox small">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities[]" class="custom-control-input" id="customCheck6">
                        <label style="font-size: 14px" class="custom-control-label" for="customCheck6">Security</label></div>
                        <div class="custom-control custom-checkbox small">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities[]" class="custom-control-input" id="customCheck7">
                        <label style="font-size: 14px" class="custom-control-label" for="customCheck7">Tables</label></div>
                        <div class="custom-control custom-checkbox small">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities[]" class="custom-control-input" id="customCheck8">
                        <label style="font-size: 14px" class="custom-control-label" for="customCheck8">Chairs</label></div>
                        <div class="custom-control custom-checkbox small">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities[]" class="custom-control-input" id="customCheck9">
                        <label style="font-size: 14px" class="custom-control-label" for="customCheck9">Air Conditioners</label></div>
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
                        <font style="font-size: 25px">{{$halls->count()}} Halls, Locations For {{$event}}</font>
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
                        @foreach ($halls as $hall)
                        <div class="col-lg-6" style="margin-bottom: 30px;">
                    <div class="listing">
                        <div class="listing_image">
                            <div class="listing_image_container">
                            <img src="./assets/images/{{$hall->image}}" alt="">
                            </div>
                            <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                <!-- <div class="tag tag_house"><a href="listings.html">house</a></div>
                                <div class="tag tag_rent"><a href="listings.html">for rent</a></div> -->
                            </div>
                            <div class="tag_price listing_price" style="background-color: #55407d">{{$hall->capacity}} guests</div>
                        </div>
                        <div class="listing_content">
                            <div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">

                            <a href="{{route('details.show', $hall->id)}}">{{$hall->name}}</a>
                            </div>
                            <div class="listing_info">
                                <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                    <li class="property_area d-flex flex-row align-items-center justify-content-start">
                                        <i class="fa fa-home" style="font-size: 14px"></i>
                                    <span style="font-size: 14px">{{$hall->halltype}}</span>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <i class="fa fa-users" style="font-size: 14px"></i>
                                    <span style="font-size: 14px">{{$hall->capacity}}</span>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <i class="fa fa-map-marker" style="font-size: 14px"></i>
                                    <span style="font-size: 14px">{{$hall->location}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
@endforeach


                    </div>
                </div>
        </div>
    </div>
    <br><br>
    <script>
    $(document).ready(function(){

    })
    </script>
@endsection
