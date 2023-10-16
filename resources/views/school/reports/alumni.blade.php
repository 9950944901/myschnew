@extends('layouts.app')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Alumni</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard" >
      <section class="section dashboard">
        <div class="card">
          <div class="row">
            

            <div class="col-md-12">
              <div class="staff p-4">
                <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Pass Out Session</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">2021-22</option>
                        <option value="Unverified">2020-21</option>
                        <option value="Unverified">2019-20</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12">
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
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>

                </div>
                <hr>
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Alumini Student For Passout Session</h5>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>                     
                      <th>Admission No</th>
                      <th>Student Name</th>
                      <th>Class</th>
                      <th>Gender</th>
                      <th>Current Email</th>
                      <th>Date of Birth</th>
                      <th>Current Address</th>
                      <th>Occupation</th>
                      <th>Current Phone</th>
                             
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>                      
                      <td>023105</td>   
                      <td>Ravi</td>
                      <td>Class-1</td>
                      <td>Male</td> 
                      <td>abc@gmail.com</td>
                      <td>12-12-2022</td> 
                      <td>Jaipur</td>
                      <td>Teacher</td>                     
                      <td>902134567</td>   
                     
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