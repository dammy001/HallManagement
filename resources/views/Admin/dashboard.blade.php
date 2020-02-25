@extends('admin.layouts.admin')

@section('content')
     <!-- Begin Page Content -->
     <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-laptop"></i>Dashboard</h1>
          <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>

        <!-- Content Row -->
        <div class="row">

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Your Halls</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{$halls}}</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Bookings</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{$bookings}}</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- Pending Requests Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Booking Requests</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pendings}}</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Content Row -->
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <h3>Recent Bookings</h3>
                    <div class="table-responsive">
                        <table class="table table-dark table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Event Type</th>
                                <th scope="col">Event Date</th>
                                <th scope="col">Booking Option</th>
                                <th scope="col">Recieved At</th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse($vendorbookings as $vendorbooking)
                                <tr>
                                    <td>{{$vendorbooking->fullname}}</td>
                                    <td>{{$vendorbooking->email}}</td>
                                    <td>{{$vendorbooking->phonenumber}}</td>
                                    <td>{{$vendorbooking->eventtype}}</td>
                                    <td>{{$vendorbooking->eventdate}}</td>
                                    <td>{{$vendorbooking->bookingoption}}</td>
                                    <td>{{$vendorbooking->created_at->diffForHumans()}}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning">Confirm Booking</button>
                                        <button type="button" class="btn btn-danger">Delete Booking</button>
                                    </td>
                                </tr>
                              @empty
                                <tr>
                                    <td><h4>No recent Bookings</h4></td>
                                </tr>
                              @endforelse

                            </tbody>
                          </table>
                    </div>
            </div>
        </div>


        <!-- Content Row -->



      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection
