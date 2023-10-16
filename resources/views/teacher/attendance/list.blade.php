@extends('layouts.teacher')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('Teacher.Home') }}">Home</a></li>
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
                <form action="" method="get">
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
                    <div class="p-2 mt-4">
                      <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>

                </div>
            </form>
              </div>

              <div class="p-3 d-flex justify-content-between">
                <h5>Student List</h5>
              </div>
              <div style="overflow-x:auto;">
              <table  class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
           
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Attendance</th>
                
                  </tr>
                </thead>

                <tbody>
                    @foreach ($list as $value)
          
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
     
                    <td>{{ $value->admission_no }}</td>
                    <td>{{ $value->roll_no }}</td>
                    <td>{{ $value->first_name }} {{ $value->last_name }}</td>
                    <td>{{ $value->class }}</td>
                    <td>{{ $value->section }}</td>
                    <td>
                        <form action="{{ route('stu.Add.Data') }}" method="post">
                            @csrf
                            <input type="hidden" name="stu_id[]" value="{{ $value->id }}">
                            <input type="hidden" name="admission_no[]" value="{{ $value->admission_no }}">
                            <input type="hidden" name="roll_no[]" value="{{ $value->roll_no }}">
                            <input type="hidden" name="student_name[]" value="{{ $value->first_name }} {{ $value->last_name }}">
                            <input type="hidden" name="class" value="{{ $value->class }}">
                            <input type="hidden" name="section" value="{{ $value->section }}">
                            <input type="hidden" name="dob[]" value="{{ $value->dob }}">
                            <div class="" style="width: 261px;">
                              <input type="radio" name="attendance[{{$value->id}}]" required value="Present" > <label>Present</label> &nbsp;
                        <input type="radio" name="attendance[{{$value->id}}]" required value="Late" > <label>Late</label> &nbsp;
                        <input type="radio" name="attendance[{{$value->id}}]" required value="Absent" > <label>Absent</label> &nbsp;
                        <input type="radio" name="attendance[{{$value->id}}]" required value="Half Day" > <label>Half Day</label> &nbsp;
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  <div class="text-right mb-2">
                    <input type="date" name="date" value="{{ date('Y-m-d') }}">
                  <button type="submit">Save</button>
                
                </div>
                </form>
                </tbody>
              </table>
            </div>
            </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection