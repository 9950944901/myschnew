@extends('layouts.student')
@section('content')
@php
  $user = auth()->user();
@endphp

<div class="main-panel">
    <div class="content-wrapper m-0">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4">
              <h3 class="font-weight-bold">Welcome {{ $data->first_name }} {{ $data->last_name }}</h3>
              {{-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span
                  class="text-primary">3 unread alerts!</span></h6> --}}
            </div>
            <div class="col-12 col-xl-4 mb-4">
              <div class="justify-content-end d-flex">
                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
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
      @php
      use Carbon\Carbon;
       $now = Carbon::now();
       $nows = Carbon::now()->format('d/m/Y');
        $weekStartDate = $now->startOfWeek()->format('d/m/Y');
        $weekEndDate = $now->endOfWeek()->format('d/m/Y');
      @endphp
<style>
  .box_set{
    background: #f5f7ff;
    border: 1px solid #5552526b;
    color: #090909;
    box-shadow: 0px 0px 5px #97b6d5;
}
</style>
      <div class="row">
        <div class="col-md-12 ">
          <div class="card">
            <div class="card-body">
              <h5>Lesson Plan</h5>
              <hr>
              <h5 class="text-center mt-3 mb-2" style="font-size: 17px;"> {{ $weekStartDate }} To {{ $weekEndDate }} </h5>

              <div class="row p-3">
                <div class="col-lg-2 col-md-4 col-sm-12">
                  <h6 class="text-center p-2" style="font-size: 14px;">Monday</h6>
                  <h6 class="text-center mb-2" style="font-size: 14px;">{{  $weekStartDate1 = $now->startOfWeek()->format('d/m/Y'); }}</h6>
                  <div class="text-center">
                    @if($weekStartDate1 == $nows)
                    @foreach ($data_grid as $value)
                    <a href="#" class="btn btn-light mt-2 box_set">
                        <div style="font-size: 12px;">Class:- {{ $value->class }} ,
                        Section:- {{ $value->section }}, Sub. Group:- {{ $value->subject_group }}, Subject:- {{ $value->subject }}, 
                      </div>
                    </a>
                    @endforeach
                    @else
                    Not Scheduled
                    @endif
                  </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12">
                  <h6 class="text-center p-2" style="font-size: 14px;">Tuesday</h6>
                  <h6 class="text-center mb-2" style="font-size: 14px;">{{  $weekStartDate2 = $now->startOfWeek()->addDays(1)->format('d/m/Y'); }}</h6>
                  <div class="text-center">
                    @if($weekStartDate2 == $nows)
                    @foreach ($data_grid as $value)
                    <a href="#" class="btn btn-light mt-2 box_set">
                        <div style="font-size: 12px;">Class:- {{ $value->class }} ,
                        Section:- {{ $value->section }}, Sub. Group:- {{ $value->subject_group }}, Subject:- {{ $value->subject }}, 
                      </div>
                    </a>
                    @endforeach
                    @else
                    Not Scheduled
                    @endif
                  </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12">
                  <h6 class="text-center p-2" style="font-size: 14px;">Wednesday</h6>
                  <h6 class="text-center mb-2" style="font-size: 14px;">{{  $weekStartDate3 = $now->startOfWeek()->addDays(2)->format('d/m/Y'); }}</h6>
                  <div class="text-center">
                    @if($weekStartDate3 == $nows)
                    @foreach ($data_grid as $value)
                    <a href="#" class="btn btn-light mt-2 box_set">
                        <div style="font-size: 12px;">Class:- {{ $value->class }} ,
                        Section:- {{ $value->section }}, Sub. Group:- {{ $value->subject_group }}, Subject:- {{ $value->subject }}, 
                      </div>
                    </a>
                    @endforeach
                    @else
                    Not Scheduled
                    @endif
                  </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12">
                  <h6 class="text-center p-2" style="font-size: 14px;">Thrusday</h6>
                  <h6 class="text-center mb-2" style="font-size: 14px;">{{  $weekStartDate4 = $now->startOfWeek()->addDays(3)->format('d/m/Y'); }}</h6>
                  <div class="text-center">
                    @if($weekStartDate4 == $nows)
                    @foreach ($data_grid as $value)
                    <a href="#" class="btn btn-dark mt-2 box_set">
                        <div style="font-size: 12px;">Class:- {{ $value->class }} ,
                        Section:- {{ $value->section }}, Sub. Group:- {{ $value->subject_group }}, Subject:- {{ $value->subject }}, 
                      </div>
                    </a>
                    @endforeach
                    @else
                    Not Scheduled
                    @endif
                  </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12">
                  <h6 class="text-center p-2" style="font-size: 14px;">Friday</h6>
                  <h6 class="text-center mb-2" style="font-size: 14px;">{{  $weekStartDate5 = $now->startOfWeek()->addDays(4)->format('d/m/Y'); }}</h6>
                  <div class="text-center">
                    @if($weekStartDate5 == $nows)
                    @foreach ($data_grid as $value)
                    <a href="#" class="btn btn-light mt-2 box_set">
                        <div style="font-size: 12px;">Class:- {{ $value->class }} ,
                        Section:- {{ $value->section }}, Sub. Group:- {{ $value->subject_group }}, Subject:- {{ $value->subject }}, 
                      </div>
                    </a>
                    @endforeach
                    @else
                    Not Scheduled
                    @endif
                  </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12">
                  <h6 class="text-center p-2" style="font-size: 14px;">Saturday</h6>
                  <h6 class="text-center mb-2" style="font-size: 14px;">{{  $weekStartDate6 = $now->startOfWeek()->addDays(5)->format('d/m/Y'); }}</h6>
                  <div class="text-center">
                    @if($weekStartDate6 == $nows)
                    @foreach ($data_grid as $value)
                    <a href="#" class="btn btn-light mt-2 box_set">
                        <div style="font-size: 12px;">Class:- {{ $value->class }} ,
                        Section:- {{ $value->section }}, Sub. Group:- {{ $value->subject_group }}, Subject:- {{ $value->subject }}, 
                      </div>
                    </a>
                    @endforeach
                    @else
                    Not Scheduled
                    @endif
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </div>
    <!-- content-wrapper ends -->
    




@endsection
