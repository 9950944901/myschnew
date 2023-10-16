@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Search Due Fees</li>
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
                <div class="row mb-3">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <div class="col-lg-4 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Fees Group</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">A</option>
                        <option value="Unverified">B</option>
                        <option value="Unverified">C</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 sol-sm-12">
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
                  <div class="col-lg-4 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Section-A</option>
                        <option value="Unverified">Section-B</option>
                        <option value="Unverified">Section-c</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="p-2 mt-3" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="p-3">
                <h5>Student List</h5>
              </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Due Date</th>
                    <th>Amount</th>
                    <th>Deposit</th>
                    <th>Discount</th>
                    <th>Fine</th>
                    <th>Balance</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>1</td>
                    <td>09859</td>
                    <td>25</td>
                    <td>Kitty</td>
                    <td>10-08-22</td>
                    <td>-</td>
                    <td>5,000</td>
                    <td>3,000</td>
                    <td>1,000</td>
                    <td>-</td>
                    <td>5,0000</td>
                    <td>
                      <div class="d-flex">
                        <a href="{{ route('SCHOOL.due-fees-add-fees') }}" class="btn btn-info"><i class="fa fa-rupee"></i> Add Fees</a>
                      </div>
                    </td>
                  </tr>

                  <tr id="task-2" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                    <td>2</td>
                     <td>09859</td>
                    <td>25</td>
                    <td>Kitty</td>
                    <td>10-08-22</td>
                    <td>-</td>
                    <td>5,000</td>
                    <td>3,000</td>
                    <td>1,000</td>
                    <td>-</td>
                    <td>5,0000</td>
                    <td>
                      <div class="d-flex">
                        <a href="{{ route('SCHOOL.due-fees-add-fees') }}" class="btn btn-info"><i class="fa fa-rupee"></i> Add Fees</a>
                      </div>
                    </td>
                  </tr>

                  <tr id="task-3" class="task-list-row test-font" data-task-id="2" data-user="Diamond">
                    <td>3</td>
                     <td>09859</td>
                    <td>25</td>
                    <td>Kitty</td>
                    <td>10-08-22</td>
                    <td>-</td>
                    <td>5,000</td>
                    <td>3,000</td>
                    <td>1,000</td>
                    <td>-</td>
                    <td>5,0000</td>
                    <td>
                      <div class="d-flex">
                        <a href="{{ route('SCHOOL.due-fees-add-fees') }}" class="btn btn-info"><i class="fa fa-rupee"></i> Add Fees</a>
                      </div>
                    </td>
                  </tr>

                </tbody>
              </table>

            </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection