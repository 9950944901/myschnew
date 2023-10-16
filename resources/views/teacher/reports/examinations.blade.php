@extends('layouts.teacher')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('Teacher.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Examinations</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard" >
      <section class="section dashboard">
        <div class="card">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="p-3">
                <ul class="nav nav-tabs customtab" role="tablist" style="font-size: 14px;">
                  <!-- <li class="nav-item" style="display: none;">
                    <a class="nav-link active" onclick="filterSelection('all')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i></a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('rank-report')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Rank Report</a>
                  </li>
                </ul>
              </div>
            </div>


            <div class="col-md-12">
              {{-- <div class="filterDiv rank-report p-4"> --}}
              <div class="p-4">
              {{-- <h5 class="" style="font-size: 17px;">Select Criteria</h5> --}}
              <form action="{{ route('Teacher.examinations') }}" method="get">
                @csrf
              <div class="row">
                <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                <div class="col-lg-3 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Exam Group</h6>
                  <div class="">
                    <select name="exam_group" class="form-control neha-text" required>
                      <option value="">Select</option>
                      @foreach ($exam_group as $exg)
                      <option>{{ $exg->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-lg-2 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Session</h6>
                  <div class="">
                    <select name="session" class="form-control neha-text" required>
                      <option value="">Select</option>
                      <option>2022-2023</option>
                      <option>2023-2024</option>
                      <option>2024-2025</option>
                      <option>2025-2026</option>
                      <option>2026-2027</option>
                    </select>
                  </div>
                </div>

                <div class="col-lg-2 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Class</h6>
                  <div class="">
                    <select name="class" class="form-control neha-text" required>
                      <option value="">Select</option>
                      @foreach ($class as $cls)
                      <option>{{ $cls->class }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Section</h6>
                  <div class="">
                    <select name="section" class="form-control neha-text" required>
                      <option value="">Select</option>
                      @foreach ($sec as $se)
                      <option>{{ $se->section }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12">
                  <div class="p-2 mt-4">
                    <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                  </div>
                </div>
              </div>
            </form>
                <hr>
                <h5 class="p-2" style="font-size: 18px;">Student Listt</h5>
                
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Admission No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Class</th>
                      <th>Session</th>
                      <th>Total /Recieve</th>
                      <th>Percent</th>
                      <th>Result</th>
                      <th>Date</th>
                    </tr>
                  </thead>
  
                  <tbody>
                    @foreach ($data as $value)
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $value->add_no }}</td>
                      <td>{{ $value->roll_no }}</td>
                      <td>{{ $value->first_name }} {{ $value->last_name }}</td>
                      <td>{{ $value->class }}</td>
                      <td>{{ $value->session }}</td>
                      <td>{{ $value->total_marks }} / {{ $value->rec_marks }}</td>
                      <td>{{ $value->percent }}</td>
                      <td>{{ $value->result }}</td>
                      <td>
                        {{-- <div class="d-flex">
                          <a href="{{ route('Exam.Result.Delete',['id'=>$value->id]) }}" class="btn btn-light ml-2 delete-confirm"><i class="fa fa-trash"></i></a>
                        </div> --}}
                        {{  date('d-M-Y', strtotime($value->created_at)) }}
                      </td>
                    </tr>
                    @endforeach
  
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
        <hr>
    </div>

    </section>
    </div>
  </main><!-- End #main -->
@endsection