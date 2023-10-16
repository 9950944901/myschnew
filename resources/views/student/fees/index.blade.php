@extends('layouts.student')
@section('content')
@php
  $user = auth()->user();
@endphp
      <div class="main-panel">
        <div class="content-wrapper m-0">
          <div class="row">
            <div class="col-md-12 ">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4">
                  <h3 class="font-weight-bold">Welcome {{ $data->first_name }} {{ $data->last_name }}</h3>
                  {{-- <h6 class="font-weight-normal mb-0"> <span
                      class="text-primary">3 unread alerts!</span></h6> --}}
                </div>
                <div class="col-12 col-xl-4 mb-4">
                  <div class="justify-content-end d-flex">
                    <div class="flex-md-grow-1 flex-xl-grow-0">
                      <button class="btn btn-sm btn-light bg-white"  id="dropdownMenuDate2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border: 1px solid #4B49AC">
                        <i class="mdi mdi-calendar"></i> Today ({{ date('d-M-Y') }})
                      </button>
                      {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                        <a class="dropdown-item" href="#">January - March</a>
                        <a class="dropdown-item" href="#">March - June</a>
                        <a class="dropdown-item" href="#">June - August</a>
                        <a class="dropdown-item" href="#">August - November</a>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

      <div class="row">
        <div class="col-md-12 ">
          <div class="card">
            <div class="card-body">
              <h5 class="mt-3">Student Fees</h5>
              <hr>
              <div class="row mb-2">
                <div class="col-lg-2 col-md-6 col-sm-12">
                  <div>
                    @if($data->student_image)
                    <img src="{{ url('public/uploads/students/'.$data->student_image) }}" width="100" height="100">
                    @else
                    <img src="{{ url('/') }}/public/student/male.jpg" width="100">
                    @endif
                  </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <div class="ml-1 mr-2">
                    <div class="d-flex justify-content-between">
                      <p class="mb-1"><b>Name</b></p>
                      <p class="mb-1">{{ $data->first_name }} {{ $data->last_name }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-1"><b>Father Name </b></p>
                      <p class="mb-1">{{ $data->father_name }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-1"><b>Mobile No.</b></p>
                      <p class="mb-1">+91{{ $data->mobile_no }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-1"><b>Category</b></p>
                      <p class="mb-1">{{ $data->category }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-1"><b>Total Fees ({{ $gener->session ?? ''}})</b></p>
                      <p class="mb-1">₹{{ $sum }}/-</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-5 col-md-6 col-sm-12">
                  <div class="ml-1 mr-2">
                    <div class="d-flex justify-content-between">
                      <p class="mb-1"><b>Class Section</b></p>
                      <p class="mb-1">{{ $data->class }} ({{ $data->section }})</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="mb-1"><b>Admission No</b></p>
                      <p class="mb-1">{{ $data->admission_no }}
                      </p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="mb-1"><b>Roll Number</b></p>
                      <p class="mb-1">{{ $data->roll_no }}</p>
                    </div>
                    {{-- <div class="d-flex justify-content-between">
                      <p class="mb-1"><b>RTE</b></p>
                      <p class="mb-1">{{ $data->rte }}</p>
                    </div> --}}
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-12">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr class="" style="font-size: 13px; color: #012970; ">
                <th>S No.</th>
                <th>Fees Group</th>
                <th>Fees Code</th>
                {{-- <th>Due Date</th> --}}
                <th>Status</th>
                <th>Amount</th>
                {{-- <th>Payment Id</th> --}}
                <th>Session</th>
                <th>Mode</th>
                <th>Date</th>
                {{-- <th>Discount</th>
                <th>Fine</th> --}}
                <th>Paid</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($fees as $info)
                <tr id="task-1" class="task-list-row test-font" data-task-id="1">
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $info->fees_group }}</td>
                  <td>SFS{{ $info->id }}</td>
                  {{-- <td>-</td> --}}
                  <td><a  class="btn btn-success">Paid</a></td>
                  <td>{{ $info->total }}</td>
                  {{-- <td>-</td> --}}
                  <td>{{ $info->user_id }}</td>
                  <td>{{ $info->payment_mode }}</td>
                  <td>{{ date('d/m/Y', strtotime($info->date)) }}</td>
                  {{-- <td>-</td>
                  <td>-</td> --}}
                  {{-- <td>1900.00</td> --}}
                  <td>Success</td>
                </tr>
                @endforeach

            </tbody>
          </table>
        </div>

      </div>

    </div>


@endsection
        