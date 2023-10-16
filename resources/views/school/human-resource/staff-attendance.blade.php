@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Staff Attendance</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card pb-5">
                <form action="{{ route('SCHOOL.staff-attendance') }}" method="get">
                  @csrf
                <div class="row">
                  <h5 class="mt-3" style="font-size: 17px;">Select Staff</h5>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Staff</h6>
                    <div class="">
                      <select name="staff" class="form-control neha-text">
                        <option value="">Select</option>
                        @foreach ($data as $da)
                        <option value="{{ $da->id }}">{{ $da->firstname }} {{ $da->lastname }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                      {{-- <input type="date" class="form-control neha-text" id="date1" placeholder=""> --}}
                      <div class="p-2 mt-4">
                        <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                      </div>
                  </div>
                </div>
              </form>
              </div>


              <div class="d-flex justify-content-between">
                <h5 class="p-2">Staff Attendance</h5>
                <a data-bs-toggle="modal" data-bs-target="#showmodal" data-bs-whatever="@mdo" class="btn btn-info mb-3"><i class="fa fa-plus"></i> Add</a>
              </div>
              <div class="modal fade" id="showmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Staff Attendance</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="{{ route('Staff.Attend') }}">
                        @csrf
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label"> Staff Name</label>
                          <select  class="form-control" name="staff_id" required>
                            <option value="">Select</option>
                            @foreach ($data as $da)
                            <option value="{{ $da->id }}">{{ $da->firstname }} {{ $da->lastname }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Attendance</label><br>
                          <input type="radio" name="attendance" required value="Present"> <label>Present</label> &nbsp;
                          <input type="radio" name="attendance" required value="Late"> <label>Late</label> &nbsp;
                          <input type="radio" name="attendance" required value="Absent"> <label>Absent</label> &nbsp;
                          <input type="radio" name="attendance" required value="Half Day"> <label>Half Day</label> &nbsp;
                        </div>
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">Note</label>
                          <textarea class="form-control" id="message-text" name="desc"></textarea>
                        </div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Staff Id</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Attendance</th>
                    <th>Date</th>
                    <th>Note</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($show as $value)
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
                    <td>00{{ $value->staff_id }}</td>
                    <td>{{ $value->firstname }} {{ $value->lastname }}</td>
                    <td>{{ $value->role }}</td>
                    <td>
                      <div class="">
                        <input type="checkbox" checked> <label>{{ $value->attendance }}</label> &nbsp;
                      </div>
                    </td>
                    <td>{{ date('d-M-Y', strtotime($value->created_at)); }}</td>
                    <td>
                      <input type="text" class="form-control neha-text" disabled value="{{ $value->desc }}">
                    </td>
                    <td>
                      <div class="d-flex">
                        <a data-bs-toggle="modal" data-bs-target="#editinc{{ $value->id }}" class="btn btn-light ml-1"><i class="fa fa-pencil"></i></a>
                        <a href="{{ route('Attendance.Delete',['id'=>$value->id]) }}" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                  </tr>
                  <div class="modal fade" id="editinc{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Staff Attendance</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="{{ route('Staff.Attend.Update',['id'=>$value->id]) }}">
                            @csrf
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label"> Staff Name</label>
                              <select  class="form-control" name="staff_id" required>
                                <option value="{{ $value->staff_id }}">{{ $value->firstname }} {{ $value->lastname }}</option>
                                @foreach ($data as $da)
                                <option value="{{ $da->id }}">{{ $da->firstname }} {{ $da->lastname }}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Attendance</label><br>
                              <input type="radio" name="attendance" required value="Present" {{ ($value->attendance=="Present")? "checked" : "" }}> <label>Present</label> &nbsp;
                              <input type="radio" name="attendance" required value="Late"  {{ ($value->attendance=="Late")? "checked" : "" }}> <label>Late</label> &nbsp;
                              <input type="radio" name="attendance" required value="Absent" {{ ($value->attendance=="Absent")? "checked" : "" }}> <label>Absent</label> &nbsp;
                              <input type="radio" name="attendance" required value="Half Day" {{ ($value->attendance=="Half Day")? "checked" : "" }}> <label>Half Day</label> &nbsp;
                            </div>
                            <div class="mb-3">
                              <label for="message-text" class="col-form-label">Note</label>
                              <textarea class="form-control" id="message-text" name="desc">{{ $value->desc }}</textarea>
                            </div>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach

                </tbody>
              </table>

            </div>
      </section>
    </div>

  </main><!-- End #main -->

@endsection