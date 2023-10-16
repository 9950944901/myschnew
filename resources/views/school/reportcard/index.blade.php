@extends('layouts.app')
@section('content')



<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Student Details</li>
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
                <form action="{{ route('SCHOOL.Student.Details') }}" method="get">
                  @csrf
                <div class="row">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="class" class="form-control neha-text" required >
                        <option value="">Select</option>
                        @foreach ($data as $value) 
                        <option>{{ $value->class }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="section" class="form-control neha-text" required>
                        <option value="">Select</option>
                        @foreach ($sec as $value) 
                        <option>{{ $value->section }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-12 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Search</h6>
                    <div class="">
                      <div class="">
                        <button type="submit" dissabled class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                      </div>
                    </div>
                  </div>
                  <style>
                    .custom-right{
                              padding-top: 33px;
                                }
                  </style>
                  <div class="col-lg-3 col-md-12 sol-sm-12">
                    {{-- <h6 class="p-2" style="font-size: 14px;">Search</h6> --}}
                    <div class="">
                      <div class="custom-right float-right ">
                        <a  href="{{route('admin.School.report.add')}}" class="btn btn-info"><i class="fa fa-search"></i> School Information Add</a>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              
              </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th class="">Student</th>
                    <th>Class/Section</th>
                    <th>Performance</th>
                    <th>Action</th>      
                  </tr>
                  </thead>
                <tbody>
                  
                  @foreach ($show as $value) 
                  
                  @php
                  $half = 0;
                  $half = $half+$value->half_hindi+$value->half_math+$value->half_english+$value->half_science+$value->half_social+$value->half_sanskrit;
    
                  $anul = 0;
                  $anul = $anul+$value->anul_hindi+$value->anul_math+$value->anul_english+$value->anul_science+$value->anul_social+$value->anul_sanskrit;
    
                 $strang = 0;
                $strang = $strang+$value->st_hindi+$value->st_math+$value->st_english+$value->st_science+$value->st_social+$value->st_sanskrit;


              @endphp

                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->admission_no }}</td>
                    <td>{{ $value->roll_no }}</td>
                    <td><span class="text-bold">Name: </span> {{ $value->first_name }} {{ $value->last_name }}<br> <span class=" font-weight-bolder">F.Name:</span> {{ $value->father_name }} <br>
                       <span class=" font-weight-bolder">Mobile:</span> +91: {{ $value->mobile_no }}</td>
                    <td>{{ $value->class }} <br> <span class="w-100 d-block">{{$value->section}}</span></td>
                    <td><span class="text-bold">Percentage: {{ Number_format(($half+$anul)*100/600,2)}}%</span> <br>
                      <span class=" text-bold">Result: 
                        @php
                        $result = number_format(($half+$anul)*100/600,2);
                    @endphp
                        @if ($result >= 33 && $result <= 44) 
                        3rd division
                        @elseif($result >= 45 && $result <= 59) 
                        2nd division
                        @elseif($result >= 60 && $result <= 74) 
                        1st division
                        @elseif($result >= 75 && $result <= 100) 
                        Distinction                              
                        @else
                        <span class="text-danger">Fail</span>
                        @endif 
                      
                      </span><br>
                      {{-- <span class="text-bold">Performance:</span> --}}
                    </td>
                    <td>
                      <div class="d-flex">
                        <a href="{{route('SCHOOL.viewreport',['id'=>$value->id])}}" class="btn btn-info btn-sm ml-1">
                          <i class="fa fa-eye"></i></a>
                        {{-- <a href="{{ route('SCHOOL.Report.report_edit',['id'=>$value->id]) }}" class="btn btn-primary btn-sm ml-1"><i class="fa fa-edit"></i></a> --}}
                        <a href="{{ route('SCHOOL.student_report.del',['id'=>$value->id]) }}" class="btn btn-danger btn-sm ml-1 delete-confirm"><i class="fa fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

            </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection