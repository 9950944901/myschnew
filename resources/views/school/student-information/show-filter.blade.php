@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Student Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard" >
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <a href="{{ route('SCHOOL.Student.Details') }}" class="btn btn-danger mb-5" style="width: auto;"><i class="fa fa-arrow-circle-left"></i> Back</a>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Admission No.</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Father Name</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Category</th>
                    <th>Mobile No.</th>
                    <th>Action</th>
                  </tr>
                </thead>
                @foreach ($data as $value)                  
                <tbody>
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->admission_no }}</td>
                    <td>{{ $value->first_name }} {{ $value->last_name }}</td>
                    <td>{{ $value->class }}</td>
                    <td>{{ $value->father_name }}</td>
                    <td>{{ $value->dob }}</td>
                    <td>{{ $value->gender }}</td>
                    <td>{{ $value->category }}</td>
                    <td>{{ $value->mobile_no }}</td>
                    <td>
                      <div class="d-flex">
                        <a href="{{ route('SCHOOL.student-details-show') }}" class="btn btn-light ml-1"><i class="fa fa-bars"></i></a>
                        <a href="{{ route('SCHOOL.student-details-edit',['id'=>$value->id]) }}" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('SCHOOL.student-details-delete',['id'=>$value->id]) }}" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-trash"></i></a>
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