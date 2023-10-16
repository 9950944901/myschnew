@extends('layouts.app')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Student Information</li>
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
                    <a class="nav-link" onclick="filterSelection('student')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Student Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('guardian')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Guardian Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('history')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Student History</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('login')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Student Login Credential</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " onclick="filterSelection('subject')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Class Subject Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('admission')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Admission Enquiry Report</a>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('sibling')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Sibling Report</a>
                  </li> --}}
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('profiledata')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Student Profile</a>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link " onclick="filterSelection('evaluation')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Homework Evaluation Report</a>
                  </li> --}}
                  {{-- <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('gender')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Student Gender Ratio Report</a>
                  </li> --}}
                  {{-- <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('teacher')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Student Teacher Ratio Report</a>
                  </li> --}}
                </ul>
              </div>
            </div>


            <div class="col-md-12">
              <div class="filterDiv all"></div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv student p-4">
                <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <form action="{{ route('SCHOOL.student-information') }}" method="get">
                  @csrf
                <div class="row ">
                  <div class="col-lg-3 col-md-4 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="class" class="form-control" value="" required="">
                        <option value="">Select</option>
                        @foreach ($class as $cls)
                        <option>{{ $cls->class }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="section" class="form-control" value="" required="">
                        <option value="">Select</option>
                        @foreach ($sec as $se)
                        <option>{{ $se->section }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                     <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>
                </div>
              </form>

                <div class=" mb-3">
                  <h5 class="" style="font-size: 17px;">Student Report</h5>
                </div>
              <div style="overflow-x:auto;">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Admission No.</th>
                      <th>Name</th>
                      <th>Class</th>
                      <th>Section</th>
                      <th>Father's Name</th>
                      <th>Date of Birth</th>
                      <th>Gender</th>
                      <th>Category</th>
                      <th>Mobile No.</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  @foreach ($show as $value)                  
                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $value->admission_no }}</td>
                      <td>{{ $value->first_name }} {{ $value->last_name }}</td>
                      <td>{{ $value->class }}</td>
                      <td>{{ $value->section }}</td>
                      <td>{{ $value->father_name }}</td>
                      <td>{{ $value->dob }}</td>
                      <td>{{ $value->gender }}</td>
                      <td>{{ $value->category }}</td>
                      <td>{{ $value->mobile_no }}</td>
                      <td>
                        <div class="d-flex">
                          <a href="{{ route('SCHOOL.student-details-show',['id'=>$value->id]) }}" class="btn btn-light ml-1"><i class="fa fa-bars"></i></a>
                          <a href="{{ route('SCHOOL.student-details-edit',['id'=>$value->id]) }}" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                          <a href="{{ route('SCHOOL.student-details-delete',['id'=>$value->id]) }}" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
             </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv guardian p-4">
                {{-- <h5 class="" style="font-size: 17px;">Select Criteria</h5> --}}
                {{-- <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Class 1</option>
                        <option value="Unverified">Class 2</option>
                        <option value="Unverified">Class 3</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Section-A</option>
                        <option value="Unverified">Section-B</option>
                        <option value="Unverified">Section-C</option>
                      </select>
                    </div>
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>
                </div> --}}
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Guardian Report</h5>
                </div>
                <div style="overflow-x:auto;">
                <table id="example9" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Class (Section)</th>
                      <th>Admission No.</th>
                      <th>Student Name</th>
                      <th>Mobile Number</th>
                      <th>Guardian's Name</th>
                      <th>Guardian's Relation</th>
                      <th>Guardian's Phone</th>
                      <th>Father's Name</th>
                      <th>Father's Phone</th>
                      <th>Mother's Name</th>
                      <th>Mother's Phone</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($show as $value)
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $value->class }} ({{ $value->section }})</td>
                      <td>{{ $value->admission_no }}</td>
                      <td>{{ $value->first_name }} {{ $value->last_name }}</td>
                      <td>{{ $value->mobile_no }}</td>
                      <td>{{ $value->gur_name }}</td>
                      <td>{{ $value->gur_relation }}</td>
                      <td>{{ $value->gur_phone }}</td>
                      <td>{{ $value->father_name }}</td>
                      <td>{{ $value->father_mobile }}</td>
                      <td>{{ $value->mother_name }}</td>
                      <td>{{ $value->mother_phone }}</td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
             </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv history p-4">
                {{-- <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Class 1</option>
                        <option value="Unverified">Class 2</option>
                        <option value="Unverified">Class 3</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Admission Year</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">2019-20</option>
                        <option value="Unverified">2020-21</option>
                        <option value="Unverified">2021-22</option>
                      </select>
                    </div>
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>
                </div> --}}
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Student History</h5>
                </div>
                <div style="overflow-x:auto;">
                <table id="example10" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Admission No.</th>
                      <th>Student Name</th>
                      <th>Admission Date</th>
                      <th>Class (Start-End)</th>
                      <th>Years</th>
                      <th>Mobile Number</th>
                      <th>Guardian's Name</th>
                      <th>Guardian's Phone</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($show as $value)
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $value->admission_no }}</td>
                      <td>{{ $value->first_name }} {{ $value->last_name }}</td>
                      <td>{{ $value->admission_date }}</td>
                      <td>{{ $value->class }}</td>
                      <td>
                      @php
                        $data = date('Y');
                        // dd($data);
                        $time = $data -date('Y', strtotime($value->created_at));
                        // dd($time);
                      @endphp
											{{ $time }}
                        
                      </td>
                      <td>{{ $value->mobile_no }}</td>
                      <td>{{ $value->gur_name }}</td>
                      <td>{{ $value->gur_phone }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv login p-4">
                {{-- <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Class 1</option>
                        <option value="Unverified">Class 2</option>
                        <option value="Unverified">Class 3</option>
                      </select>
                    </div>
                  </div>


                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Section-A</option>
                        <option value="Unverified">Section-B</option>
                        <option value="Unverified">Section-C</option>
                      </select>
                    </div>
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>
                </div> --}}
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Login Credential Report</h5>
                </div>
                <div style="overflow-x:auto;">
                <table id="example11" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Admission No.</th>
                      <th>Class</th>
                      <th>Section</th>
                      <th>DOB</th>
                      <th>Student Name</th>
                      <th>E-mail</th>
                      <th>Password</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                    @foreach ($data_show as $val)
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $val->admission_no }}</td>
                      <td>{{ $val->class }}</td>
                      <td>{{ $val->section }}</td>
                      <td>{{ date('d-M-Y', strtotime($value->dob)) }}</td>
                      <td>{{ $val->first_name }} {{ $val->last_name }}</td>
                      <td>{{ $val->email }}</td>
                      <td>{{ $val->conform_password }}</td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv subject p-4">
                {{-- <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Class 1</option>
                        <option value="Unverified">Class 2</option>
                        <option value="Unverified">Class 3</option>
                      </select>
                    </div>
                  </div>


                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Section-A</option>
                        <option value="Unverified">Section-B</option>
                        <option value="Unverified">Section-C</option>
                      </select>
                    </div>
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>
                </div> --}}
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Class-Subject Report</h5>
                </div>
                <div style="overflow-x:auto;">
                <table id="example18" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Class</th>
                      <th>Section</th>
                      <th>Subject</th>
                      <th>Subject Group</th>
                      <th>Time</th>
                      <th>Room Number</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($data_grid as $info)
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $info->class }}</td>
                      <td>{{ $info->section }}</td>
                      <td>{{ $info->subject }}</td>
                      <td>{{ $info->subject_group }}</td>
                      <td>{{ date('h:i A', strtotime($info->start_time )) }} - {{ date('h:i A', strtotime($info->end_time )) }}</td>
                      <td>{{ $info->room_no }}</td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv admission p-4">
                {{-- <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Class 1</option>
                        <option value="Unverified">Class 2</option>
                        <option value="Unverified">Class 3</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Section-A</option>
                        <option value="Unverified">Section-B</option>
                        <option value="Unverified">Section-C</option>
                      </select>
                    </div>
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>
                </div> --}}
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Admission Enquiry Report</h5>
                </div>
                <div style="overflow-x:auto;">
                <table id="example12" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Contact No.</th>
                      <th>Class</th>
                      {{-- <th>Source</th> --}}
                      <th>Reference</th>
                      <th>Date</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($data_enqiry as $enqiry)
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $enqiry->name }}</td>
                      <td>{{ $enqiry->email }}</td>
                      <td>{{ $enqiry->phone }}</td>
                      <td>{{ $enqiry->class }}</td>
                      {{-- <td>{{ $enqiry->source }}</td> --}}
                      <td>{{ $enqiry->reference }}</td>
                      <td>{{ date('d-M-Y', strtotime($enqiry->date )) }}</td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv sibling p-4">
                <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Class 1</option>
                        <option value="Unverified">Class 2</option>
                        <option value="Unverified">Class 3</option>
                      </select>
                    </div>
                  </div>


                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Section-A</option>
                        <option value="Unverified">Section-B</option>
                        <option value="Unverified">Section-C</option>
                      </select>
                    </div>
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Sibling Report</h5>
                </div>
                
                <table id="example13" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Father Name</th>
                      <th>Mother Name</th>
                      <th>Guardian's Name</th>
                      <th>Guardian's phone</th>
                      <th>Student Name (Sibling)</th>
                      <th>Class</th>
                      <th>Admission Date</th>
                      <th>Gender</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>RK Mehta</td>
                      <td>Ruchi</td>
                      <td>-</td>
                      <td>-</td>
                      <td>Jacky</td>
                      <td>Class-1</td>
                      <td>12-12-2020</td>
                      <td>Male</td>
                    </tr>

                  </tbody>
                </table>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv profiledata p-4">
                {{-- <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Search By Admission Date</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">A</option>
                        <option value="Unverified">B</option>
                        <option value="Unverified">C</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Class 1</option>
                        <option value="Unverified">Class 2</option>
                        <option value="Unverified">Class 3</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Admission Year</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">2019-20</option>
                        <option value="Unverified">2020-21</option>
                        <option value="Unverified">2021-22</option>
                      </select>
                    </div>
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>
                </div> --}}
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Student Profile</h5>
                </div>
                <div style="overflow-x:auto;">
                <table id="example14" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Admission No.</th>
                      <th>Roll No.</th>
                      <th>Class </th>
                      <th>Section</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Gender</th>
                      <th>Date of Birth</th>
                      <th>Category</th>
                      <th>Religion</th>
                      <th>Caste</th>
                      <th>Mobile Number</th>
                      <th>Email</th>
                      <th>Admission Date</th>
                      <th>Blood Group</th>
                      <th>Student House</th>
                      <th>Height</th>
                      <th>Weight</th>
                      <th>As on Date</th>
                      <th>Father's Name</th>
                      <th>Father's Phone</th>
                      <th>Father's Occupation</th>
                      <th>Mother's Name</th>
                      <th>Mother's Phone</th>
                      <th>Mother's Occupation</th>
                      <th>If Guardian's Is</th>
                      <th>Guardian's Name</th>
                      <th>Guardian's Relation</th>
                      <th>Guardian's Phone</th>
                      <th>Guardian's Occupation</th>
                      <th>Guardian's Email</th>
                      <th>Guardian's Address</th>
                      <th>Permanent Address</th>
                      <th>Bank Account Number</th>
                      <th>Bank Name</th>
                      <th>IFSC Code</th>
                      <th>National Identification Number</th>
                      <th>Local Identification Number</th>
                      <th>RTE</th>
                      <th>Previous School Details</th>
                      <th>Note</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($show as $value)
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $value->admission_no }}</td>
                      <td>{{ $value->roll_no }}</td>
                      <td>{{ $value->class }}</td>
                      <td>{{ $value->section }}</td>
                      <td>{{ $value->first_name }}</td>
                      <td>{{ $value->last_name }}</td>
                      <td>{{ $value->gender }}</td>
                      <td>{{ date('d-M-Y', strtotime($value->dob )) }}</td>
                      <td>{{ $value->category }}</td>
                      <td>{{ $value->religion }}</td>
                      <td>{{ $value->caste }}</td>
                      <td>{{ $value->mobile_no }}</td>
                      <td>{{ $value->email }}</td>
                      <td>{{ date('d-M-Y', strtotime($value->admission_date )) }}</td>
                      <td>{{ $value->blood_group }}</td>
                      <td>{{ $value->stu_house }}</td>
                      <td>{{ $value->height }}</td>
                      <td>{{ $value->weight }}</td>
                      <td>
                        @if($value->as_on_date)
                        {{ date('d-M-Y', strtotime($value->as_on_date )) }}
                        @else
                        @endif
                      </td>
                      <td>{{ $value->father_name }}</td>
                      <td>{{ $value->father_mobile }}</td>
                      <td>{{ $value->father_accu }}</td>
                      <td>{{ $value->mother_name }}</td>
                      <td>{{ $value->mother_phone }}</td>
                      <td>{{ $value->mother_occu }}</td>
                      <td>{{ $value->guardian }}</td>
                      <td>{{ $value->gur_name }}</td>
                      <td>{{ $value->gur_relation }}</td>
                      <td>{{ $value->gur_phone }}</td>
                      <td>{{ $value->gur_occu }}</td>
                      <td>{{ $value->gur_email }}</td>
                      <td>{{ $value->gur_address }}</td>
                      <td>{{ $value->stu_house }}</td>
                      <td>{{ $value->bank_name }}</td>
                      <td>{{ $value->bank_no }}</td>
                      <td>{{ $value->ifsc }}</td>
                      <td>{{ $value->nin_no }}</td>
                      <td>{{ $value->lin_no }}</td>
                      <td>{{ $value->rte }}</td>
                      <td>{{ $value->pre_school }}</td>
                      <td>{{ $value->pre_school }}</td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv evaluation p-4">
                <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
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
                      <select name="source" class="form-control" value="" required="">
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
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">A</option>
                        <option value="Unverified">B</option>
                        <option value="Unverified">C</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Subject</h6>
                    <div class="mb-3">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Maths</option>
                        <option value="Unverified">English</option>
                      </select>
                    </div>
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Evaluation Report</h5>
                </div>
                <table id="example15" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Subject</th>
                      <th>Homework Date</th>
                      <th>Submission Date</th>
                      <th>Complete/Incomplete</th>
                      <th>Complete (%)</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>Maths</td>
                      <td>01-12-2022</td>
                      <td>08-12-2022</td>
                      <td>Complete</td>
                      <td>95%</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv gender p-4">
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Student Gender Ratio Report</h5>
                </div>
                <table id="example16" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Class (Section)</th>
                      <th>Total Boys</th>
                      <th>Total Girls</th>
                      <th>Total Students</th>
                      <th>Boys-Girls Ratio</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>Class 1 (Section-A)</td>
                      <td>3</td>
                      <td>0</td>
                      <td>3</td>
                      <td>1:0</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv teacher p-4">
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Students Teacher Ratio Report</h5>
                </div>
                <table id="example17" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Class (Section)</th>
                      <th>Total Students</th>
                      <th>Total Assigned Teachers</th>
                      <th>Student-Teacher Ratio</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>Class 1 (Section-A)</td>
                      <td>3</td>
                      <td>0</td>
                      <td>1:0</td>
                    </tr>

                  </tbody>
                </table>
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