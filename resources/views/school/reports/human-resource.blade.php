@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Human Resource</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
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
                    <a class="nav-link" onclick="filterSelection('staff')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Staff Report</a>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('payroll')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Payroll Report</a>
                  </li> --}}
                
                </ul>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv staff p-4">
                {{-- <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">

                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Search Type</h6>
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
                    <h6 class="p-2" style="font-size: 14px;">Status</h6>
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
                    <h6 class="p-2" style="font-size: 14px;">Role</h6>
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
                    <h6 class="p-2" style="font-size: 14px;">Designation</h6>
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
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Staff Report</h5>
                </div>
                <div style="overflow-x:auto;">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Staff Id</th>
                      <th>Role</th>
                      <th>Designation</th>
                      <th>Department</th>
                      <th>Name</th>
                      <th>Father Name</th>
                      <th>Mother Name</th>
                      <th>Email</th>
                      <th>Gender</th>
                      <th>Date of Birth</th>
                      <th>Date of Joining</th>
                      <th>Phone</th>
                      <th>Emergency Contact Number</th>
                      <th>Marital Status</th>
                      <th>Current Address</th>
                      <th>Permanent Address</th>
                      <th>Qualification</th>
                      <th>Work Experience</th>
                      <th>Note</th>                  
                      <th>Status</th>                  
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($show as $info)
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $info->staff_id }}</td>
                      <td>{{ $info->role }}</td>
                      <td>{{ $info->designation }}</td>
                      <td>{{ $info->department }}</td>
                      <td>{{ $info->firstname }} {{ $info->lastname }}</td>
                      <td>{{ $info->father_name }}</td>
                      <td>{{ $info->mother_name }}</td>
                      <td>{{ $info->email }}</td>
                      <td>{{ $info->gender }}</td>
                      <td>{{  date('d-M-Y', strtotime($info->dob)) }}</td>
                      <td>{{  date('d-M-Y', strtotime($info->joining_date)) }}</td>
                      <td>{{ $info->phone }}</td>
                      <td>{{ $info->contact_no }}</td>
                      <td>{{ $info->marital_status }}</td>
                      <td>{{ $info->cadd }}</td>
                      <td>{{ $info->padd }}</td>
                      <td>{{ $info->qualification }}</td>
                      <td>{{ $info->work_exp }}</td>
                      <td>{{ $info->note }}</td>
                      <td>
                        @if($info->status==0)
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

            {{-- <div class="col-md-12">
              <div class="filterDiv payroll p-4">
                <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">                  
                 
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Role</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">A</option>
                        <option value="Unverified">B</option>
                        <option value="Unverified">C</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Month</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">January</option>
                        <option value="Unverified">February</option>
                        <option value="Unverified">March</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Year</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">2020</option>
                        <option value="Unverified">2021</option>
                        <option value="Unverified">2022</option>
                      </select>
                    </div>
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>

                </div>
                <hr>
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Payroll Report</h5>
                </div>
                <table id="example9" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Name</th>
                      <th>Role</th>
                      <th>Designation </th>
                      <th>Month-Year</th>                  
                      <th>Payslip</th>                     
                      <th>Basic Salary (₹)</th>
                      <th>Earning (₹)</th>
                      <th>Deduction (₹)</th>
                      <th>Gross Salary (₹)</th>
                      <th>Tax (₹)</th>
                      <th>Net Salary (₹)</th>
                   
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                       <td>-</td>                                        
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div> --}}


          </div>
        </div>
        <hr>
    </div>

    </section>
    </div>
  </main><!-- End #main -->
@endsection