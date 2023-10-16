@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Staff Directory Edit</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="dashboard ">
        <section class="section dashboard">
          <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="row">
                <div class="card info-card sales-card">
                  <div class="row mb-2">
                    <h5 class="p-2">Staff Details</h5>
                    <div class="col-lg-8 col-md-12 col-sm-12">
                      <div class="row mb-3">
                        <div class="col-lg-2 col-md-6 col-sm-12">
                          <div>
                            <img src="assets/img/messages-1.jpg" width="100">
                          </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12">
                          <div class="ml-1 mr-2">
                            <div class="d-flex justify-content-between">
                              <p class="mb-1"><b>Name</b></p>
                              <p class="mb-1">Admin</p>
                            </div>
  
                            <div class="d-flex justify-content-between">
                              <p class="mb-1"><b>Phone</b></p>
                              <p class="mb-1">7410454654</p>
                            </div>
  
                            <div class="d-flex justify-content-between">
                              <p class="mb-1"><b>EPF No </b></p>
                              <p class="mb-1">-</p>
                            </div>
  
                            <div class="d-flex justify-content-between">
                              <p class="mb-1"><b>Department</b></p>
                              <p class="mb-1">Department 1 </p>
                            </div>
                          </div>
                        </div>
  
                        <div class="col-lg-5 col-md-6 col-sm-12">
                          <div class="ml-1 mr-2">
                            <div class="d-flex justify-content-between">
                              <p class="mb-1"><b>Staff ID</b></p>
                              <p class="mb-1">STF0002</p>
                            </div>
                            <div class="d-flex justify-content-between">
                              <p class="mb-1"><b>Email</b></p>
                              <p class="mb-1">admin@gmail.com
                              </p>
                            </div>
                            <div class="d-flex justify-content-between">
                              <p class="mb-1"><b>Role</b></p>
                              <p class="mb-1">Admin</p>
                            </div>
                            <div class="d-flex justify-content-between">
                              <p class="mb-1"><b>Designation</b></p>
                              <p class="mb-1">Math Teacher </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
  
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <div class="row mb-3">
                        <div class="col-lg-1 col-md-2 col-sm-12">
                          <div class="letest">
                            <div class="rotatetest">Attendance</div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <div>
                            <p class="mb-1"><b>Month</b></p>
                            <p class="mb-1">November</p>
                            <p class="mb-1">September</p>
                            <p class="mb-1">August</p>
                          </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12">
                          <div class="d-flex justify-content-around">
                            <p class="mb-1"><b>P</b></p>
                            <p class="mb-1"><b>L</b></p>
                            <p class="mb-1"><b>A</b></p>
                            <p class="mb-1"><b>F</b></p>
                            <p class="mb-1"><b>H</b></p>
                            <p class="mb-1"><b>V</b></p>
                          </div>
                          <div class="d-flex justify-content-around">
                            <p class="mb-1">0</p>
                            <p class="mb-1">0</p>
                            <p class="mb-1">0</p>
                            <p class="mb-1">0</p>
                            <p class="mb-1">0</p>
                            <p class="mb-1">0</p>
                          </div>
                          <div class="d-flex justify-content-around">
                            <p class="mb-1">0</p>
                            <p class="mb-1">0</p>
                            <p class="mb-1">0</p>
                            <p class="mb-1">0</p>
                            <p class="mb-1">0</p>
                            <p class="mb-1">0</p>
                          </div>
                          <div class="d-flex justify-content-around">
                            <p class="mb-1">0</p>
                            <p class="mb-1">0</p>
                            <p class="mb-1">0</p>
                            <p class="mb-1">0</p>
                            <p class="mb-1">0</p>
                            <p class="mb-1">0</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="box-header">
                      <div class="row display-flex">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="d-flex justify-content-between mt-2">
                            <h3 class="box-title" style="font-size: 21px;">Earning</h3>
                            <a href="button" class="btn btn-info"><i class="fa fa-plus"></i></a>
                          </div>
                          <div class="sameheight">
                            <div class="feebox">
                              <div class="row">
                                <div class="col-md-9">
                                  <div class="form-group">
                                    <input type="text" class="form-control neha-text" placeholder="Type">
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <input type="text" class="form-control neha-text" placeholder="0">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div><!--./col-md-4-->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="d-flex justify-content-between mt-2">
                            <h3 class="box-title" style="font-size: 21px;">Deduction</h3>
                            <a href="button" class="btn btn-info"><i class="fa fa-plus"></i></a>
                          </div>
                          <div class="sameheight">
                            <div class="feebox">
                              <div class="row">
                                <div class="col-md-9">
                                  <div class="form-group">
                                    <input type="text" class="form-control neha-text" placeholder="Type">
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <input type="text" class="form-control neha-text" placeholder="0">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div><!--./col-md-4-->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="d-flex justify-content-between mt-2">
                            <h3 class="box-title" style="font-size: 21px;">Payroll Summary(₹)</h3>
                            <a href="button" class="btn btn-info"><i class="fa fa-calculator"></i></a>
                          </div>
                          <div class="sameheight mb-3">
                            <div class="payrollbox feebox">
                              <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label>Basic Salary</label>
                                  </div>
                                </div>
                                <div class="col-md-8">
                                  <input type="text" class="form-control neha-text" placeholder="0">
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label>Earning</label>
                                  </div>
                                </div>
                                <div class="col-md-8">
                                  <input type="text" class="form-control neha-text" placeholder="0">
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label>Deduction</label>
                                  </div>
                                </div>
                                <div class="col-md-8">
                                  <input type="text" class="form-control neha-text" placeholder="0">
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label>Gross Salary</label>
                                  </div>
                                </div>
                                <div class="col-md-8">
                                  <input type="text" class="form-control neha-text" placeholder="0">
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label>Tax</label>
                                  </div>
                                </div>
                                <div class="col-md-8">
                                  <input type="text" class="form-control neha-text" placeholder="0">
                                </div>
                                <hr>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label>Net Salary</label>
                                  </div>
                                </div>
                                <div class="col-md-8">
                                  <input type="text" class="form-control neha-text" placeholder="0">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="text-right">
                          <button type="submit" id="" class="btn btn-info ">Save</button>
                        </div>
                        </div>
                      </div>
                    </div>
  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

  </main><!-- End #main -->
@endsection