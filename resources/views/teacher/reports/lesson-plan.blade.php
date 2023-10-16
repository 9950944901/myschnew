@extends('layouts.teacher')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('Teacher.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Lesson Plan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard" >
      <section class="section dashboard">
        <div class="card">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="p-3">
                <ul class="nav nav-tabs customtab" role="tablist" style="font-size: 14px;">
                  <!-- <li class="nav-item" style="display: none;">
                    <a class="nav-link active" onclick="filterSelection('all')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i></a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('lesson-plan')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Syllabus Status Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('syllabus-status')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Subject Lesson Plan Report</a>
                  </li>
                
                </ul>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv syllabus-status p-4">
                {{-- <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">

                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Class 1</option>
                        <option value="Unverified">Class 2</option>
                        <option value="Unverified">Class 3</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Section-A</option>
                        <option value="Unverified">Section-B</option>
                        <option value="Unverified">Section-C</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Subject Group</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">A</option>
                        <option value="Unverified">B</option>
                        <option value="Unverified">C</option>
                      </select>
                    </div>
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>

                </div>
                <hr> --}}
                <div style="overflow-x:auto;">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Subject</th>
                      <th>Subject Group</th>
                      <th>Class</th>
                      <th>Section</th>
                      <th>Subject-Lesson</th>
                      <th>Topic</th>
                      <th>Status</th>                   
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($view as $value)                      
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $value->subject}}</td>
                      <td>{{ $value->subject_group}}</td>
                      <td>{{ $value->class}}</td>
                      <td>{{ $value->section}}</td>
                      <td>{{ $value->lesson}}</td>
                      <td>
                        @foreach (json_decode($value->topic) as $inf)
                          {{ $inf }},
                        @endforeach
                      </td>
                      <td>
                        @if($value->status==0)
                        Active 
                        @else
                        Inactive
                        @endif
                        </td>                    
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv lesson-plan p-4">
                {{-- <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">                  
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Class 1</option>
                        <option value="Unverified">Class 2</option>
                        <option value="Unverified">Class 3</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Section-A</option>
                        <option value="Unverified">Section-B</option>
                        <option value="Unverified">Section-C</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Subject Group</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">A</option>
                        <option value="Unverified">B</option>
                        <option value="Unverified">C</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Subject</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">A</option>
                        <option value="Unverified">B</option>
                        <option value="Unverified">C</option>
                      </select>
                    </div>
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>

                </div>
                <hr> --}}
                <div style="overflow-x:auto;">
                <table id="example9" class="table table-bordered table-striped">
                  <thead>
                      <tr class="" style="font-size: 13px; color: #012970; ">
                        <th>S No.</th>
                        <th>Session</th>
                        <th>Content Title</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Class</th>
                        <th>Subject</th>
                        <th>Available For</th>
                        <th>Status</th>
                      </tr>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($syllabus as $val)
                    
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $val->session }}</td>
                      <td>{{ $val->content_title }}</td>
                      <td>{{ $val->syllabus_type }}</td>
                      <td>{{  date('d-M-Y', strtotime($val->created_at)) }}</td>
                      <td>{{ $val->class }}</td>
                      <td>{{ $val->subject }}</td>
                      <td>{{ $val->availabe_for }}</td>
                      <td>
                        @if($val->status==1)
                        Active
                        @else
                        Inactive
                        @endif
                      </td>
                    
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              </div>
            </div>


          </div>
        </div>
        <hr>
    </div>

    </section>
    </div>
  </main><!-- End #main -->
@endsection