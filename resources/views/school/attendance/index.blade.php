@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Student Attendance</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card">
                <form action="{{ route('SCHOOL.student-attendance') }}" method="get">
                  @csrf
                <div class="row mb-3">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="class" class="form-control neha-text" required>
                        <option value="">Select</option>
                        @foreach ($class as $cls)
                            <option>{{ $cls->class }}</option>                          
                        @endforeach
                    
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="section" class="form-control neha-text" required>
                        <option value="">Select</option>
                        @foreach ($sec as $se)
                            <option>{{ $se->section }}</option>                          
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-12 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Attendance Date</h6>
                    <div class="">
                      <input type="date" class="form-control neha-text" name="date" value="<?php echo date('Y-m-d'); ?>" >
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-12 sol-sm-12">
                    <div class="p-2 mt-4">
                      <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>

                </div>
              </form>
              </div>

              <div class="p-3 d-flex justify-content-between">
                <h5>Student Attendance List</h5>
                {{-- <a href="{{ route('TEACHER.Student.Att') }}" class="btn btn-info"><i class="fa fa-plus"></i> Attendance</a> --}}
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    {{-- <th>Id</th> --}}
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Teacher</th>
                    <th>Attendance</th>
                    {{-- @for ($x = 1 ; $x <= $startr ; $x++)
                      <th style="display:none;">{{ $x }}</th>
                    @endfor --}}
                  </tr>
                </thead>
             
                <tbody>
                    @foreach ($info as $value)
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->admission_no }}</td>
                    <td>{{ $value->roll_no }}</td>
                    <td>{{ $value->first_name }} {{ $value->last_name }}</td>
                    <td>{{ $value->class }}</td>
                    <td>{{ $value->section }}</td>
                    <td>{{ $value->teacher_name }}</td>
                    <td>{{ $value->attendance }}</td>
                     {{-- @for ($x = 1 ; $x <= $startr ; $x++)
                    <td style="display:none !important;">{{ $x }}</td>
                     @endfor --}}
                  </tr>
                  @endforeach
                </div>
                </tbody>
              </table>

            </div>
            </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection
<style>
  table, th {
    border:1px solid black;
  }
  tr{
    border-bottom: 1px solid #000 !important;
  }
  .addd{
    border:none;
  }

  </style>