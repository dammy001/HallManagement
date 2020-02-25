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
              <h5><b>Hall Upload Form</b></h5>
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
            <form method='POST' action='{{route('uploadhall.submit')}}' enctype="multipart/form-data">
                @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label><b>Hall Name</b></label>
              <input type="text" class="form-control" name="hallname">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Location</label>
              <input type="text" class="form-control" name="location" placeholder="e.g. Alaba, Ojo">
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
          <input type= "text" class="form-control" name='hallcapacity' id='hallcapacity' placeholder="500 guests" required=''>
          </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
            <label for="hall-amenities"><b>Amenities</b></label><br>
            <input type="text" class="form-control" name='amenities' id='amenities' placeholder="Air Conditioner, Security, Tables, Water, Toilets" required=''>
            </div>
          </div>

         {{--  <div class="col-md-3">
          <div class="form-group">
          <label for="hall-capacity"><b>Hall Amenities</b></label><br>
          <div class="custom-control custom-checkbox small">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities[]" class="custom-control-input" id="securitycheck">
                      <label style="font-size: 14px" class="custom-control-label" for="securitycheck">Security</label></div>
                      <div class="custom-control custom-checkbox small">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities[]" class="custom-control-input" id="tablescheck">
                      <label style="font-size: 14px" class="custom-control-label" for="tablescheck">Tables</label></div>
                      <div class="custom-control custom-checkbox small">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities[]" class="custom-control-input" id="chairscheck">
                      <label style="font-size: 14px" class="custom-control-label" for="chairscheck">Chairs</label></div>
                      <div class="custom-control custom-checkbox small">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities[]" class="custom-control-input" id="aircheck">
                      <label style="font-size: 14px" class="custom-control-label" for="aircheck">Air Conditioners</label></div>
                      <div class="custom-control custom-checkbox small">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities[]" class="custom-control-input" id="fanscheck">
                      <label style="font-size: 14px" class="custom-control-label" for="fanscheck">Fanscheck</label></div>
                      <div class="custom-control custom-checkbox small">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities[]" class="custom-control-input" id="powercheck">
                      <label style="font-size: 14px" class="custom-control-label" for="powercheck">Power Supply</label></div>
                      <div class="custom-control custom-checkbox small">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities[]" class="custom-control-input" id="lightcheck">
                      <label style="font-size: 14px" class="custom-control-label" for="lightcheck">Lightning</label></div>
                      <div class="custom-control custom-checkbox small">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities[]" class="custom-control-input" id="restcheck">
                      <label style="font-size: 14px" class="custom-control-label" for="restcheck">Rest Room</label></div>
                      <div class="custom-control custom-checkbox small">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="amenities[]" class="custom-control-input" id="changingcheck">
                      <label style="font-size: 14px" class="custom-control-label" for="changingcheck">Changing Room</label></div>

          </div>
          </div> --}}
          <div class="col-md-7">
          <div class="form-group">
          <label for="hall-capacity"><b>Description</b></label><br>
          <textarea class="form-control ckeditor" name="halldescription" id="halldescr" rows="6" required=""></textarea>
          </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-3">
           <div class="form-group">
             <label for="pricetag"><b>Price</b></label>
             <input class="form-control" type="text" name="pricetag" id="pricetag" required="" placeholder="">
           </div>
         </div>
         <div class="col-md-5">
           <div class="form-group">
             <label for="halladdress"><b>Address</label></b></label>
             <input class="form-control" type="text" name="halladdress" id="halladdress" required="" placeholder="">
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
          <button class="btn btn-primary" type="submit" style="float: right;">Submit</button>
          </div>
         </div>
          </div>

      </form>
    </div>
  </section>

        <!-- Content Row -->


        <!-- Content Row -->


      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

@endsection
