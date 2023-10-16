@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Disabled Students</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard" >
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Student</th>
                    <th>Class</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Category</th>
                    <th>Mobile No.</th>
                    {{-- <th>Action</th> --}}
                  </tr>
                </thead>
                <tbody>
                  @foreach ($show as $value)                  
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->admission_no }}</td>
                    <td>{{ $value->roll_no }}</td>

                    <td>
                    <span class="text-bold text-capitalize">Name: </span><span>{{ $value->first_name }} {{ $value->last_name }}</span><br>
                    <span class="text-bold">Email: </span><span>{{ $value->email }} </span><br>
                    <span class="text-bold text-capitalize">F.Name: </span><span> {{ $value->father_name }}</span><br>
                    </td>

                    <td>{{ $value->class }}</td>
                    <td>{{ $value->dob }}</td>
                    <td>{{ $value->gender }}</td>
                    <td>{{ $value->category }}</td>
                    <td>
                      +91{{ $value->mobile_no }}</td>
                    {{-- <td>
                      <div class="d-flex">
                        <a href="{{ route('SCHOOL.student-details-show',['id'=>$value->id]) }}" class="btn btn-light ml-1"><i class="fa fa-bars"></i></a>
                        <a href="{{ route('SCHOOL.student-details-edit',['id'=>$value->id]) }}" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('SCHOOL.student-details-delete',['id'=>$value->id]) }}" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-trash"></i></a>
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