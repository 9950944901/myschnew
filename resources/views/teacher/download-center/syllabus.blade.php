@extends('layouts.teacher')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('Teacher.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Syllabus</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">

              <div class="p-2 d-flex justify-content-between">
                <h6>Syllabus List</h6 >
                <a data-toggle="modal" data-target="#approveModal" class="btn btn-info py-0 px-1" style="font-size: 13px;"><i class="fa fa-plus"></i> Add Syllabus </a>
              </div>



              <div class="modal fade" id="approveModal" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Syllabus </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ route('TAdd.Syllabus.Data') }}" method="post" enctype="multipart/form-data">
                      @csrf
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Session</label>
                          <select name="session" class="form-control" required>
                            <option value="">Select</option>
                            <option selected>2022-23</option>
                            <option>2023-24</option>
                            <option>2024-25</option>
                            <option>2025-26</option>
                            <option>2026-27</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Content Title</label>
                          <input type="text" class="form-control" name="content_title" required>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Syllabus Type </label>
                          <input type="text" class="form-control" name="syllabus_type" required>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Available For</label>
                          <select name="availabe_for" class="form-control" required>
                            <option value="">Select</option>
                            <option>Students</option>
                            <option>Teachers</option>
                            <option>All</option>
                          
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Class</label>
                          <select name="class" class="form-control" required>
                            <option value="">Select</option>
                            @foreach ($class as $cls)
                            <option>{{ $cls->class }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Subject</label>
                          <select name="subject" class="form-control" required>
                            <option value="">Select</option>
                            @foreach ($subject as $subj)
                            <option>{{ $subj->name }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="number">Upload File</label>
                          <input type="file" class="form-control" name="syllabus_file" accept="application/pdf,application/vnd.ms-excel" required>
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group1 text-left" style="float: right;">
                          <button type="submit" class="btn btn-info mt-4">Save</button>
                        </div>
                      </div>

                    </div>
                  </form>

                  </div>
                </div>
              </div>
            </div>










              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Session</th>
                    <th>Content Title</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Class</th>
                    <th>Subject</th>
                    <th>Available For</th>
                    <th>Download Syllabus</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($data as $value)
                    
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->session }}</td>
                    <td>{{ $value->content_title }}</td>
                    <td>{{ $value->syllabus_type }}</td>
                    <td>{{  date('d-M-Y', strtotime($value->created_at)) }}</td>
                    <td>{{ $value->class }}</td>
                    <td>{{ $value->subject }}</td>
                    <td>{{ $value->availabe_for }}</td>
                    <td>
                      <div class="d-flex">
                        {{-- <a data-toggle="modal" data-target="#syllabus{{ $value->id }}" class="btn btn-light ml-1"><i class="fa fa-pencil"></i></a>
                        <a href="{{ route('TSyllabus.Delete',['id'=>$value->id]) }}" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-times"></i></a> --}}
                        @if($value->syllabus_file)
                        <a href="{{ url('public/uploads/syllabus/'.$value->syllabus_file) }}" class="btn btn-light ml-1" download> <img style="display: none;" src="{{ url('public/uploads/syllabus/'.$value->syllabus_file) }}" alt="W3Schools"> <i class="fa fa-download"></i></a>
                        @else
                        No Files
                        @endif
                      </div>
                    </td>
                  </tr>

                  <div class="modal fade" id="syllabus{{ $value->id }}" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Edit Syllabus </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ route('TUpdate.Syllabus.Data',['id'=>$value->id]) }}" method="post" enctype="multipart/form-data">
                      @csrf
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Session</label>
                          <select name="session" class="form-control" required>
                            <option>{{ $value->session }}</option>
                            <option selected>2022-23</option>
                            <option>2023-24</option>
                            <option>2024-25</option>
                            <option>2025-26</option>
                            <option>2026-27</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Content Title</label>
                          <input type="text" class="form-control" name="content_title" value="{{ $value->content_title }}" required>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Syllabus Type </label>
                          <input type="text" class="form-control" name="syllabus_type" value="{{ $value->syllabus_type }}" required>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Available For</label>
                          <select name="availabe_for" class="form-control"  required>
                            <option>{{ $value->availabe_for }}</option>
                            <option>Students</option>
                            <option>Teachers</option>
                            <option>All</option>
                          
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Class</label>
                          <select name="class" class="form-control" required>
                            <option>{{ $value->class }}</option>
                            @foreach ($class as $cls)
                            <option>{{ $cls->class }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Subject</label>
                          <select name="subject" class="form-control" required>
                            <option>{{ $value->subject }}</option>
                            @foreach ($subject as $subj)
                            <option>{{ $subj->name }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="number">Upload File</label>
                          <input type="file" class="form-control" name="syllabus_file" accept="application/pdf,application/vnd.ms-excel" >
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group1 text-left" style="float: right;">
                          <button type="submit" class="btn btn-info mt-4">Update</button>
                        </div>
                      </div>

                    </div>
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