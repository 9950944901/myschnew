@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Manage Lesson Plan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard" >
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card">
                <form action="{{ route('SCHOOL.manage-lesson-plan') }}" method="get">
                  @csrf
                <div class="row p-3">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <div class="col-lg-6 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Teachers</h6>
                    <div class="">
                   
                      <select name="name" class="form-control neha-text" required>
                        <option value="">Select</option>
                        @foreach ($staff as $value)
                        <option>{{ $value->firstname }} {{ $value->lastname }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-12 sol-sm-12">
                    <div class="p-2 mt-3" style="float: right;">
                      <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>
                </div>
              </form>


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

          <div class="card info-card sales-card">
            <div class="row p-3">
              <h5 class="text-center mt-3 mb-2" style="font-size: 17px;"> {{ $weekStartDate }} To {{ $weekEndDate }} </h5>
              <div class="col-lg-2 col-md-4 col-sm-12">
                <h6 class="text-center p-2" style="font-size: 14px;">Monday</h6>
                <h6 class="text-center mb-2" style="font-size: 14px;">{{  $weekStartDate1 = $now->startOfWeek()->format('d/m/Y'); }}</h6>
                <div class="text-center">
                  <a href="#" class="btn btn-light">
                  @if($weekStartDate1 == $nows)
                    @foreach ($data_grid as $value)
                      <div style="font-size: 12px;">Class:- {{ $value->class }} ,
                      Section:- {{ $value->section }}, Sub. Group:- {{ $value->subject_group }}, Subject:- {{ $value->subject }}, 
                    </div>
                    @endforeach
                    @else
                    Not Scheduled
                    @endif
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12">
                <h6 class="text-center p-2" style="font-size: 14px;">Tuesday</h6>
                <h6 class="text-center mb-2" style="font-size: 14px;">{{  $weekStartDate2 = $now->startOfWeek()->addDays(1)->format('d/m/Y'); }}</h6>
                <div class="text-center">
                  <a href="#" class="btn btn-light">
                   
                    @if($weekStartDate2 == $nows)
                    @foreach ($data_grid as $value)
                      <div style="font-size: 12px;">Class:- {{ $value->class }} ,
                      Section:- {{ $value->section }}, Sub. Group:- {{ $value->subject_group }}, Subject:- {{ $value->subject }}, 
                    </div>
                    @endforeach
                    @else
                    Not Scheduled
                    @endif
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12">
                <h6 class="text-center p-2" style="font-size: 14px;">Wednesday</h6>
                <h6 class="text-center mb-2" style="font-size: 14px;">{{  $weekStartDate3 = $now->startOfWeek()->addDays(2)->format('d/m/Y'); }}</h6>
                <div class="text-center">
                  <a href="#" class="btn btn-light">
                    @if($weekStartDate3 == $nows)
                    @foreach ($data_grid as $value)
                      <div style="font-size: 12px;">Class:- {{ $value->class }} ,
                      Section:- {{ $value->section }}, Sub. Group:- {{ $value->subject_group }}, Subject:- {{ $value->subject }}, 
                    </div>
                    @endforeach
                    @else
                    Not Scheduled
                    @endif
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12">
                <h6 class="text-center p-2" style="font-size: 14px;">Thrusday</h6>
                <h6 class="text-center mb-2" style="font-size: 14px;">{{  $weekStartDate4 = $now->startOfWeek()->addDays(3)->format('d/m/Y'); }}</h6>
                <div class="text-center">
                  <a href="#" class="btn btn-light">
                    @if($weekStartDate4 == $nows)
                    @foreach ($data_grid as $value)
                      <div style="font-size: 12px;">Class:- {{ $value->class }} ,
                      Section:- {{ $value->section }}, Sub. Group:- {{ $value->subject_group }}, Subject:- {{ $value->subject }}, 
                    </div>
                    @endforeach
                    @else
                    Not Scheduled
                    @endif
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12">
                <h6 class="text-center p-2" style="font-size: 14px;">Friday</h6>
                <h6 class="text-center mb-2" style="font-size: 14px;">{{  $weekStartDate5 = $now->startOfWeek()->addDays(4)->format('d/m/Y'); }}</h6>
                <div class="text-center">
                  <a href="#" class="btn btn-light">
                    @if($weekStartDate5 == $nows)
                    @foreach ($data_grid as $value)
                      <div style="font-size: 12px;">Class:- {{ $value->class }} ,
                      Section:- {{ $value->section }}, Sub. Group:- {{ $value->subject_group }}, Subject:- {{ $value->subject }}, 
                    </div>
                    @endforeach
                    @else
                    Not Scheduled
                    @endif
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12">
                <h6 class="text-center p-2" style="font-size: 14px;">Saturday</h6>
                <h6 class="text-center mb-2" style="font-size: 14px;">{{  $weekStartDate6 = $now->startOfWeek()->addDays(5)->format('d/m/Y'); }}</h6>
                <div class="text-center">
                  <a href="#" class="btn btn-light">
                    @if($weekStartDate6 == $nows)
                    @foreach ($data_grid as $value)
                      <div style="font-size: 12px;">Class:- {{ $value->class }} ,
                      Section:- {{ $value->section }}, Sub. Group:- {{ $value->subject_group }}, Subject:- {{ $value->subject }}, 
                    </div>
                    @endforeach
                    @else
                    Not Scheduled
                    @endif
                  </a>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection