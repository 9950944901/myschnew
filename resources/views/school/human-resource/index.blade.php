@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Staff Directory</li>
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
                  <div class="d-flex justify-content-between mt-2">
                  <h5 class="mt-2" style="font-size: 17px;">Staff Directory</h5>
                  <a href="{{ route('SCHOOL.staff-directory-add-staff') }}" class="btn btn-info"><i class="fa fa-plus"></i> Add Staff</a>
                </div>
                  {{-- <div class="col-lg-6 col-md-12 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Role</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Admin</option>
                        <option value="Unverified">Teacher</option>
                        <option value="Unverified">Accountant</option>
                      </select>
                    </div>
                  </div> --}}

                  {{-- <div class="col-lg-6 col-md-12 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Search By Keyword</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" id="date1"
                        placeholder="By Staff Id, Name, Role, etc.">
                      <div class="p-2 mt-1" style="float: right;">
                        <button type="button" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                      </div>
                    </div>
                  </div> --}}
                  <hr>
                  {{-- <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="text-center mb-2">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div> --}}

                </div>
              </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Staff Id</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Department</th>
                    {{-- <th>Designation</th> --}}
                    <th>Mobile Number</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($show as $value)  
                  {{-- {{dd($value);}}                  --}}
                  <tr id="task-1" class="task-list-row test-font " data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->staff_id }}</td>
                    <td>
                    <span class="text-bold ">Name:</span><span> {{ $value->firstname }} {{ $value->lastname }}</span><br>
                     <span class="text-bold">Email:</span><span> {{ $value->email }}</span>
                    </td>
                    <td>{{ $value->role }}</td>
                    <td>{{ $value->department }}</td>
                    {{-- <td>{{ $value->designation }}</td> --}}
                    <td>+91{{ $value->phone }}</td>
                    <td>
                      <div class="d-flex">
                        <a style="border:none;" href="{{ route('SCHOOL.staff-directory-show',['id'=>$value->id]) }}" class="btn btn-sm text-info  ml-1"><i class="fa fa-bars"></i></a>
                        <a style="border:none;" href="{{ route('SCHOOL.staff-directory-edit-staff',['id'=>$value->id]) }}" class="btn btn-sm  text-primary  ml-1"><i class="fa fa-pencil"></i></a>

                        <a style="border:none;" href="{{ route('SCHOOL.staff-directory-del',['id'=>$value->id]) }}" class="btn btn-sm  delete-confirm text-danger  ml-1"><i class="fa fa-trash "></i></a>
                      </div>
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