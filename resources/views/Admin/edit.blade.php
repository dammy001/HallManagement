
@extends('admin.layouts.admin')

@section('content')
     <!-- Begin Page Content -->
     <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-laptop"></i>Upload Hall</h1>
          <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>

        <!-- Content Row -->
        <section class='panel'>
            <header class='panel-heading' style='color: orange'>
              <h5><b>Hall Update Form</b></h5>
            </header>
            <hr>
            @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            <i data-notify="icon" class="ion-checkmark"></i>&ensp;
                            <span data-notify="message" class="text-center">{{ Session::get('success') }}</span>
                        </div>
                    @endif
            <div class='panel-body'>
            <form method='POST' action='{{route('uploadhall.update')}}' enctype="multipart/form-data">
                @csrf
                @method('PUT')
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label><b>Hall Name</b></label>
            <input type="text" class="form-control" value="{{$hall->name}}" name="hallname">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Location</label>
              <input type="text" class="form-control" value="{{$hall->location}}" name="location" placeholder="e.g. Alaba, Ojo">
            </div>
          </div>
        <div class="col-md-3">
            <div class="form-group">
              <label><b>Hall Type</b></label>
              <select class="form-control" name="halltype">
                  @foreach($halltypes as $halltype)
                    <option value="{{$halltype->halltype}}">{{$halltype->halltype}}</option>
                  @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-3">
                <div class="form-group">
                  <label><b>Event Type</b></label>
                  <select class="form-control" name="eventtype">
                      @foreach($eventtypes as $eventtype)
                        <option value="{{$eventtype->eventtype}}">{{$eventtype->eventtype}}</option>
                      @endforeach
                  </select>
                </div>
              </div>
        </div>
        <div class="row">
          <div class="col-md-2">
          <div class="form-group">
          <label for="hall-capacity"><b>Capacity</b></label><br>
          <input type= "text" class="form-control" value="{{$hall->capacity}}" name='hallcapacity' id='hallcapacity' placeholder="500 guests" required=''>
          </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
            <label for="hall-amenities"><b>Amenities</b></label><br>
            <input type="text" class="form-control" value="{{$hall->amenities}}" name='amenities' id='amenities' placeholder="Air Conditioner, Security, Tables, Water, Toilets" required=''>
            </div>
          </div>

          <div class="col-md-7">
          <div class="form-group">
          <label for="hall-capacity"><b>Description</b></label><br>
          <textarea class="form-control" value="{{$hall->description}}" name="halldescription" id="halldescr" rows="6" required=""></textarea>
          </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-3">
           <div class="form-group">
             <label for="pricetag"><b>Price</b></label>
             <input class="form-control" type="text" value="{{$hall->price}}" name="pricetag" id="pricetag" required="" placeholder="">
           </div>
         </div>
         <div class="col-md-5">
           <div class="form-group">
             <label for="halladdress"><b>Address</label></b></label>
             <input class="form-control" type="text" value="{{$hall->address}}" name="halladdress" id="halladdress" required="" placeholder="">
           </div>
         </div>
         <div class="col-md-5">
            <div class="form-group">
              <label for="hallimage"><b>Hall Image</label></b></label>
              <input class="form-control" type="file" name="image" id="image">
            </div>
          </div>
         <div class="col-md-4">
          <br>
          <div class="form-group">
          <button class="btn btn-primary" type="submit" style="float: right;">Update</button>
          </div>
         </div>
          </div>

      </form>
    </div>
  </section>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

@endsection

