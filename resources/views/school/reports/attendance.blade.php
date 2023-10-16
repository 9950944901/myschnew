@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Attendance</li>
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
                    <a class="nav-link" onclick="filterSelection('attendance-report')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Attendance Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('student-attendance')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Student Attendance Type Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('staff-attendance')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Staff Attendance Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('daily-attendance')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Daily Attendance Report</a>
                  </li>
                 
                </ul>
              </div>
            </div>


            <div class="col-md-12">
              <div class="filterDiv attendance-report p-4">
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
                    <h6 class="p-2" style="font-size: 14px;">Month</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">March</option>
                        <option value="Unverified">April</option>
                        <option value="Unverified">May</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Year</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">2020 </option>
                        <option value="Unverified">2021</option>
                        <option value="Unverified">2022</option>
                      </select>
                    </div>
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>
                </div> --}}
                <hr>
                <h5 class="p-2" style="font-size: 18px;">Student Attendance Report</h5>
                
                <hr>
                <div style="overflow-x:auto;">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Fees Group</th>
                      <th>Fees Code</th>
                      <th>Due Date</th>
                      <th>Status</th>
                      <th>Amount</th>
                      <th>Payment Id</th>
                      <th>Mode</th>
                      <th>Date</th>
                      <th>Discount</th>
                      <th>Fine</th>
                      <th>Paid</th>
                      <th>Balance</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>A</td>
                      <td>08450</td>
                      <td>05-12-2022</td>
                      <td>Grand Total</td>
                      <td>2,000</td>
                      <td>UPI</td>
                      <td>-</td>
                      <td>11-12-2022</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>No</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv student-attendance p-4">
                <h5 class="" style="font-size: 17px;">Select Criteria</h5>
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
                    <h6 class="p-2" style="font-size: 14px;">Attendance Type</h6>
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
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Student Attendance Report
                  </h5>
                </div>
                <table id="example9" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Admission No.</th>
                      <th>Student Name</th>
                      <th>Class </th>
                      <th>Father Name</th>                  
                      <th>Date of Birth</th>                     
                      <th>Admission Date</th>
                      <th>Gender</th>
                      <th>Mobile No.</th>
                    
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>08450</td>
                      <td>Tommy</td>
                      <td>Class 1</td>
                      <td>Arvind</td>
                       <td>10-08-2018</td>                                        
                      <td>-</td>
                      <td>Male</td>
                      <td>9012345678</td>
                      
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv staff-attendance p-4">
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
                        <option value="Verified">April</option>
                        <option value="Unverified">May</option>
                        <option value="Unverified">June</option>
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
                  <h5 class="" style="font-size: 17px;">Staff Attendance Report</h5>
                </div>
                <table id="example10" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Payment Id</th>
                      <th>Date</th>
                      <th>Name</th>
                      <th>Class</th>
                      <th>Fees Type</th>
                      <th>Collect By</th>
                      <th>Mode</th>
                      <th>Amount</th>
                      <th>Discount</th>
                      <th>Fine</th>
                      <th>Total</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>07610</td>
                      <td>12-12-2019</td>
                      <td>Richa</td>
                      <td>Class-1</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>2,000</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv daily-attendance p-4">
                <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Date</h6>
                    <input type="date" class="form-control neha-text" placeholder="">
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Daily Attendance Report</h5>
                </div>
                <table id="example11" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Class (Section)</th>
                      <th>Total Present</th>
                      <th>Total Absent</th>
                      <th>Present (%)</th>                      
                      <th>Absent (%)</th>
                      
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>Class-1 (A)</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>                     
                      <td>-</td>
                     
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