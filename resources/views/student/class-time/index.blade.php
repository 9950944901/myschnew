@extends('layouts.student')
@section('content')
@php
  $user = auth()->user();
@endphp
      <div class="main-panel">
        <div class="content-wrapper m-0">
          <div class="row">
            <div class="col-md-12 ">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4">
                  <h3 class="font-weight-bold">Welcome {{ $data->first_name }} {{ $data->last_name }}</h3>
                  {{-- <h6 class="font-weight-normal mb-0"> <span
                      class="text-primary">3 unread alerts!</span></h6> --}}
                </div>
                <div class="col-12 col-xl-4 mb-4">
                  <div class="justify-content-end d-flex">
                    <div class="flex-md-grow-1 flex-xl-grow-0">
                      <button class="btn btn-sm btn-light bg-white"  id="dropdownMenuDate2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border: 1px solid #4B49AC">
                        <i class="mdi mdi-calendar"></i> Today ({{ date('d-M-Y') }})
                      </button>
                      {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                        <a class="dropdown-item" href="#">January - March</a>
                        <a class="dropdown-item" href="#">March - June</a>
                        <a class="dropdown-item" href="#">June - August</a>
                        <a class="dropdown-item" href="#">August - November</a>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 ">
              <div class="card">
                <div class="card-body">
                  <h5>Class Timetable</h5>
                  <hr>
                   <!-- <h5 class="text-center mt-3 mb-2" style="font-size: 17px;"> 05/12/2022 To 11/12/2022 </h5> -->
                    <div class="row p-3">                    
                      <div class="col-lg-2 col-md-4 col-sm-12">
                        <h6 class="text-center p-2" style="font-size: 14px;">Monday</h6>
                        @if($data_grid==!null)
                        @foreach ($data_grid as $value)
                          <div class="text-success text-center rounded mt-1 p-1" style="font-size:13px;background:rgb(205, 227, 236)"><b>
                              Class: {{ $value->class }} <br><b>({{ $value->subject_group }})</b> <br> Section: {{ $value->section }} <br> Subject: {{ $value->subject }} <br> 
                            {{ date('h:i A', strtotime($value->start_time )) }} - {{ date('h:i A', strtotime($value->end_time )) }} <br>
                             Room Number: {{ $value->room_no }}
                          </b></div>
                        @endforeach
                        @else
                        <div class="text-center">
                          <a href="button" class="btn btn-light">Not Scheduled</a>
                        </div>
                        @endif
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-12">
                        <h6 class="text-center p-2" style="font-size: 14px;">Tuesday</h6>
                        @if($data_grid==!null)
                        @foreach ($data_grid as $value)
                          <div class="text-success text-center rounded mt-1 p-1" style="font-size:13px;background:rgb(205, 227, 236)"><b>
                              Class: {{ $value->class }} <br><b>({{ $value->subject_group }})</b> <br> Section: {{ $value->section }} <br> Subject: {{ $value->subject }} <br> 
                            {{ date('h:i A', strtotime($value->start_time )) }} - {{ date('h:i A', strtotime($value->end_time )) }} <br>
                             Room Number: {{ $value->room_no }}
                          </b></div>
                        @endforeach
                        @else
                        <div class="text-center">
                          <a href="button" class="btn btn-light">Not Scheduled</a>
                        </div>
                        @endif
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-12">
                        <h6 class="text-center p-2" style="font-size: 14px;">Wednesday</h6>
                        @if($data_grid==!null)
                        @foreach ($data_grid as $value)
                          <div class="text-success text-center rounded mt-1 p-1" style="font-size:13px;background:rgb(205, 227, 236)"><b>
                              Class: {{ $value->class }} <br><b>({{ $value->subject_group }})</b> <br> Section: {{ $value->section }} <br> Subject: {{ $value->subject }} <br> 
                            {{ date('h:i A', strtotime($value->start_time )) }} - {{ date('h:i A', strtotime($value->end_time )) }} <br>
                             Room Number: {{ $value->room_no }}
                          </b></div>
                        @endforeach
                        @else
                        <div class="text-center">
                          <a href="button" class="btn btn-light">Not Scheduled</a>
                        </div>
                        @endif
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-12">
                        <h6 class="text-center p-2" style="font-size: 14px;">Thrusday</h6>
                        @if($data_grid==!null)
                        @foreach ($data_grid as $value)
                          <div class="text-success text-center rounded mt-1 p-1" style="font-size:13px;background:rgb(205, 227, 236)"><b>
                              Class: {{ $value->class }} <br><b>({{ $value->subject_group }})</b> <br> Section: {{ $value->section }} <br> Subject: {{ $value->subject }} <br> 
                            {{ date('h:i A', strtotime($value->start_time )) }} - {{ date('h:i A', strtotime($value->end_time )) }} <br>
                             Room Number: {{ $value->room_no }}
                          </b></div>
                        @endforeach
                        @else
                        <div class="text-center">
                          <a href="button" class="btn btn-light">Not Scheduled</a>
                        </div>
                        @endif
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-12">
                        <h6 class="text-center p-2" style="font-size: 14px;">Friday</h6>
                        @if($data_grid==!null)
                        @foreach ($data_grid as $value)
                          <div class="text-success text-center rounded mt-1 p-1" style="font-size:13px;background:rgb(205, 227, 236)"><b>
                            
                              Class: {{ $value->class }} <br><b>({{ $value->subject_group }})</b> <br> Section: {{ $value->section }} <br> Subject: {{ $value->subject }} <br> 
                            {{ date('h:i A', strtotime($value->start_time )) }} - {{ date('h:i A', strtotime($value->end_time )) }} <br>
                             Room Number: {{ $value->room_no }}
                          </b></div>
                        @endforeach
                        @else
                        <div class="text-center">
                          <a href="button" class="btn btn-light">Not Scheduled</a>
                        </div>
                        @endif
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-12">
                        <h6 class="text-center p-2" style="font-size: 14px;">Saturday</h6>
                        @if($data_grid==!null)
                        @foreach ($data_grid as $value)
                          <div class="text-success text-center rounded mt-1 p-1" style="font-size:13px;background:rgb(205, 227, 236)"><b>
                              Class: {{ $value->class }} <br><b>({{ $value->subject_group }})</b> <br> Section: {{ $value->section }} <br> Subject: {{ $value->subject }} <br> 
                            {{ date('h:i A', strtotime($value->start_time )) }} - {{ date('h:i A', strtotime($value->end_time )) }} <br>
                             Room Number: {{ $value->room_no }}
                          </b></div>
                        @endforeach
                        @else
                        <div class="text-center">
                          <a href="button" class="btn btn-light">Not Scheduled</a>
                        </div>
                        @endif
                      </div>
                    </div>
                 
                </div>
              </div>

            </div>

          </div>

    </div>


@endsection
        