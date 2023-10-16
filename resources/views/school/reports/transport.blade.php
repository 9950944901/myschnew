@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Transport</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard" >
      <section class="section dashboard">
        <div class="card">
          <div class="row">
            <!-- <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="p-3">
                <ul class="nav nav-tabs customtab" role="tablist" style="font-size: 14px;">
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('staff')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Staff Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('payroll')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Payroll Report</a>
                  </li>                
                </ul>
              </div>
            </div> -->

            <div class="col-md-12">
              <div class="staff p-4">
                <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">

                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Class-1</option>
                        <option value="Unverified">Class-2</option>
                        <option value="Unverified">Class-3</option>
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
                    <h6 class="p-2" style="font-size: 14px;">Route Title</h6>
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
                    <h6 class="p-2" style="font-size: 14px;">Vehicle Number</h6>
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
                <hr>
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Student Transport Report</h5>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Class-Section</th>
                      <th>Admission No</th>
                      <th>Student Name</th>
                      <th>Mobile No</th>
                      <th>Father Name</th>
                      <th>Father Phone</th>
                      <th>Mother Name</th>
                      <th>Mother Phone</th>
                      <th>Route Title</th>
                      <th>Vehicle Number</th>
                      <th>Driver Name</th>
                      <th>Driver Contact</th>                    
                      <th>Fare</th>
                                   
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>Class-1 (A)</td>
                      <td>023105</td>   
                      <td>Ravi</td>
                      <td>9012345678</td> 
                      <td>Arvind</td>
                      <td>9012345687</td> 
                      <td>Amrita</td>
                      <td>9012345678</td> 
                      <td>-</td>
                      <td>RJ 14 3426</td> 
                      <td>Ramu</td>
                      <td>902134567</td>   
                      <td>500</td>
                      
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