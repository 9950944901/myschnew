@extends('layouts.student')
@section('content')
@php
  $user = auth()->user();
@endphp

{{-- @php
use Carbon\Carbon;
 $now = Carbon::now();
 $nows = Carbon::now()->format('d/m/Y');
@endphp --}}

<div class="main-panel">
    <div class="content-wrapper m-0">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4">
                <h3 class="font-weight-bold">Welcome {{ $data->first_name }} {{ $data->last_name }}</h3>

              {{-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span
                  class="text-primary">3 unread alerts!</span></h6> --}}
            </div>
            <div class="col-12 col-xl-4 mb-4">
              <div class="justify-content-end d-flex">
                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
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
      <div class="d-flex justify-content-between">
        <h5>Leave List</h5>
        <a href="button" class="btn btn-info" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i>
          Add</a>
        <!-- Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add Leave</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="{{ route('student.add_leave')}}"  method="post" enctype="multipart/form-data">
                @csrf
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group1 text-left">
                      <label for="Name">Apply Date</label>
                      <input type="text" class="form-control neha-text" required readonly name="Apply_date" value="{{ date('d-M-Y') }}" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group1 text-left">
                      <label for="Email">Class</label>
                      @foreach ($class as $item1)
                      <input type="text"  class="form-control neha-text" required readonly  name="class" value="{{$item1->class}}"   placeholder="Enter Name">
                      @endforeach
                      {{-- <select name="class" class="form-control neha-text" value="" required="">
                        @foreach ($class as $item1)
                        <option value="Verified">{{$item1->class}}</option>
                        @endforeach
                        <option value="Verified">Class-1</option>
                        <option value="Unverified">Class-2</option>
                        <option value="Unverified">Class-3</option>
                      </select> --}}
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group1 text-left">
                      <label for="Phone">From Date</label>
                      <input type="date" name="from_date" required class="form-control neha-text" id="password2"
                        placeholder=" Enter Phone no.">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group1 text-left">
                      <label for="Address">To Date</label>
                      <input type="date" name="to_date" required class="form-control neha-text" id="Address" placeholder="Enter Address">
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="form-group1 text-left">
                      <label for="Phone">Reason</label>
                      <textarea name="reason" required class="form-control neha-text" rows="2"
                        placeholder="Enter here..."></textarea>
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="form-group1 text-left">
                      <label for="Address">Attach Document</label>
                      <input type="file" name="document" required accept = "application/pdf,.csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" class="form-control-file" id="addImage">
                    </div>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-info">Save</button>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>

      <hr>
      <div class="row">
        <div class="col-md-12">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr class="" style="font-size: 13px; color: #012970; ">
                <th>S No.</th>
                <th>Class</th>
                <th>Section</th>
                <th>Apply Date</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($info as $item2)
              {{-- {{dd($info)}} --}}
              <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                <td>{{$loop->iteration}}</td>
                <td>{{$item2->class}}</td>
                <td>{{$item2->section}}</td>
                <td>{{ date('d-M-Y', strtotime($item2->Apply_date)) }}</td>
                <td>{{ date('d-M-Y', strtotime($item2->from_date)) }}</td>
                <td>{{ date('d-M-Y', strtotime($item2->to_date)) }}</td>
                <td>
                  @if ($item2->status == 0)
                     <span class="text-success"> Approved</span>
                      @else
                     <span class="text-warning"> Pending</span>
                  @endif

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>

    </div>
    <!-- content-wrapper ends -->
    














@endsection
