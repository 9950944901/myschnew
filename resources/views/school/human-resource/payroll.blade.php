@extends('layouts.app')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Pay Roll</li>
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
                <div class="row mb-3">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Role</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Admin</option>
                        <option value="Unverified">Teacher</option>
                        <option value="Unverified">Accountant</option>
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
                        <option value="Select">April</option>
                        <option value="Verified">May</option>
                        <option value="Unverified">June</option>
                        <option value="Unverified">July</option>
                        <option value="Select">August</option>
                        <option value="Verified">September</option>
                        <option value="Unverified">October</option>
                        <option value="Unverified">November</option>
                        <option value="Unverified">December</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Year</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">2022</option>
                        <option value="Unverified">2021</option>
                        <option value="Unverified">2020</option>
                        <option value="Verified">2019</option>
                        <option value="Unverified">2018</option>
                        <option value="Unverified">2017</option>
                      </select>
                    </div>
                  </div>

                </div>
              </div>


              <div class="">
                <h5 class="p-2">Staff List</h5>
              </div>


              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Staff Id</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($data as $value)
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
                    <td>00{{ $value->id }}</td>
                    <td>{{ $value->firstname }} {{ $value->lastname }}</td>
                    <td>{{ $value->role }}</td>
                    <td>{{ $value->department }}</td>
                    <td>{{ $value->designation }}</td>
                    <td>{{ $value->phone }}</td>
                    <td>
                      @if($value->status==1)
                        Active
                        @else
                        Inactive
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('SCHOOL.generate-payroll') }}" class="btn btn-info">Generate Payroll</a>
                    </td>
                  </tr>
                  @endforeach


                </tbody>
              </table>

            </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection