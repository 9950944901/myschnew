@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Search Income</li>
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
                <div class="row">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <div class="col-lg-6 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Search Type</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Today</option>
                        <option value="Unverified">This Week</option>
                        <option value="Unverified">This Month</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="col-lg-6 col-md-12 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Search</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" id="date1"
                        placeholder="">
                      <div class="p-2 mt-1" style="float: right;">
                        <button type="button" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="text-center mb-2">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>

                </div>
              </div>

              <div class="p-3">
                <h5>Income Result</h5>
               </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Name</th>
                    <th>Invoice No.</th>
                    <th>Income Head</th>
                    <th>Date</th>
                    <th>Amount</th>
                  </tr>
                </thead>

                <tbody>
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>1</td>
                    <td>Kitty</td>
                    <td>-</td>
                    <td>-</td>
                    <td>06-07-99</td>
                    <td>3,000</td>
                  </tr>

                  <tr id="task-2" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                    <td>2</td>
                     <td>Kitty</td>
                    <td>-</td>
                    <td>-</td>
                    <td>06-07-99</td>
                    <td>3,000</td>
                  </tr>

                  <tr id="task-3" class="task-list-row test-font" data-task-id="2" data-user="Diamond">
                    <td>3</td>
                     <td>Kitty</td>
                    <td>-</td>
                    <td>-</td>
                    <td>06-07-99</td>
                    <td>3,000</td>
                  </tr>

                  <tr id="task-4" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                    <td>4</td>
                     <td>Kitty</td>
                    <td>-</td>
                    <td>-</td>
                    <td>06-07-99</td>
                    <td>3,000</td>
                  </tr>

                  <tr id="task-5" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                    <td>5</td>
                     <td>Kitty</td>
                    <td>-</td>
                    <td>-</td>
                    <td>06-07-99</td>
                    <td>3,000</td>
                  </tr>

                </tbody>
              </table>

            </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection