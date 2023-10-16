@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Search Fees Payments</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              {{-- <div class="card info-card sales-card"> --}}
                {{-- <div class="row mb-3">
                  <h5 class="mt-3" style="font-size: 17px;">Search Fees Payment</h5>
                  <div class="col-lg-6 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Payment Id</h6>
                    <div class="">
                      <input type="text" class="form-control" id="required" placeholder="">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="p-2 mt-3" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>
                </div>
              </div> --}}

              <div class="p-3">
                <h5>Payment Id Detail</h5>
              </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Admission No</th>
                    <th>Roll No</th>
                    <th>Payment Id</th>
                    <th>Student</th>
                    <th>Date</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Mode</th>
                    <th>Amount</th>
                    {{-- <th>Discount</th>
                    <th>Fine</th> --}}
                    {{-- <th>Action</th> --}}
                  </tr>
                </thead>

                <tbody>
                  @foreach ($data as $value)

                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->admission_no }}</td>
                    <td>{{ $value->roll_no }}</td>
                    <td>00{{ $value->id }}</td>
                    <td>
                      <span class="text-bold">Name:</span><span> {{ $value->first_name }} {{ $value->last_name }}</span><br>
                      <span class="text-bold">F.Name:</span><span> {{ $value->father_name }}</span><br>
                      <span class="text-bold">Email:</span><span> {{ $value->email }}</span><br>
                      </td>
                    <td>{{ date('d-M-Y', strtotime($value->created_at)); }}</td>
                    <td>{{ $value->class }}</td>
                    <td>{{ $value->section }}</td>
                    <td>{{ $value->payment_mode }}</td>
                    <td>
                    
                    <span class="text-success text-bold">₹{{ number_format($value->total ?? '0') }}</span>
                    </td>
                    {{-- <td>-</td> --}}
                    {{-- <td>-</td> --}}
                    {{-- <td>
                      <div class="d-flex">
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-check"></i></a>
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-trash"></i></a>
                      </div>
                    </td> --}}
                  </tr>
                  @endforeach

                </tbody>
              </table>

            </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection