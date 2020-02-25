@extends('Admin.layouts.admin')

@section('content')
<div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Manage Bookings</h1>

        <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Manage Bookings</h6>
                </div>
                <div class="card-body">
                        {{-- @if (Session::has('success'))
                        <div class="alert alert-success">
                            <i data-notify="icon" class="ion-checkmark"></i>&ensp;
                            <span data-notify="message" class="text-center">{{ Session::get('success') }}</span>
                        </div>
                    @endif --}}
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Hall Name</th>
                          <th>Type</th>
                          <th>Location</th>
                          <th>Address</th>
                          <th>Capacity</th>
                          <th>Created At</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                             @foreach($bookings as $booking)
                            <tr>
                            <td>{{$booking->eventdate}}</td>
                            <td>{{$booking->eventtype}}</td>
                            <td>{{$booking->fullname}}</td>
                            <td>{{$booking->phonenumber}}</td>
                            <td>{{$booking->email}}</td>
                            <td>{{$booking->bookingoption}}</td>
                            <td>{{$booking->created_at->diffForHumans()}}</td>
                            <td>
                            <a href="{{route('edit', $booking->hallid)}}" class="btn btn-success btn-circle btn-sm">
                                        <i class="fas fa-check"></i>
                                    </a>
                                    <a href="#" class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-info-circle"></i>
                                    </a>

                                <a href="{{route('delete', $booking->hallid)}}">
                                    <button  type="button" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </a>
                            </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>

@endsection
