@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Exam Group</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
      <section class="section dashboard">
        <div class="row">

          <!-- left side columns -->
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body" style="padding: 0 20px 0px 20px;">
                <h5 class="card-title" style="padding: 15px 0 0px 0; float: inherit;">Add Exam Group</h5>
                <hr>
                <div class="activity">
                  <form action="{{ route('Add.Exam.Group') }}" method="post">
                    @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Name</label>
                        <input type="text" class="form-control neha-text" id="date1" name="name" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Exam Type</label>
                        <input type="text" class="form-control neha-text" id="date1" name="exam_type" required>

                        {{-- <select class="form-control neha-text" name="exam_type" required>
                          <option value="">Select</option>
                          <option>General Purpose (Pass/Fail)</option>
                          <option>School Based Grading System</option>
                          <option>College Based Grading System</option>
                          <option>GPA Grading System</option>
                          <option>Other</option>
                        </select> --}}
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Description</label>
                        <textarea name="desc" class="form-control neha-text" rows="2"
                        ></textarea>
                      </div>
                    </div>
                    <hr>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-info">Save</button>
                    </div>

                  </div>
                </form>
                </div>
              </div>
            </div>

          </div><!-- End left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-8">
            <div class="row">
              <div class="card">
                <h5 class="mt-3" style="font-size: 17px;">Exam Group List</h5>
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Name</th>
                      {{-- <th>No. of Exam</th> --}}
                      <th>Exam Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($show as $value)                     
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $value->name }}</td>
                      {{-- <td>1</td> --}}
                      <td>{{ $value->exam_type }}</td>
                      <td>
                        <div class="d-flex">
                          <a data-bs-toggle="modal" data-bs-target="#editclass{{ $value->id }}" data-bs-whatever="@mdo" class="btn btn-light ml-1"><i class="fa fa-pencil"></i></a>
                          <a href="{{ route('Exam.Group.Delete',['id'=>$value->id]) }}" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>

                    <div class="modal fade" id="editclass{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Exam Group</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="{{ route('Update.Exam.Group',['id'=>$value->id]) }}">
                              @csrf
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group1 text-left mb-2">
                                    <label for="Phone">Name</label>
                                    <input type="text" class="form-control neha-text" id="date1" value="{{ $value->name }}" name="name" required>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group1 text-left mb-2">
                                    <label for="Phone">Exam Type</label>
                                    <input type="text" class="form-control neha-text" id="date1" value="{{ $value->exam_type }}" name="exam_type" required>

                                    {{-- <select class="form-control neha-text" name="exam_type" required>
                                      <option>{{ $value->exam_type }}</option>
                                      <option>General Purpose (Pass/Fail)</option>
                                      <option>School Based Grading System</option>
                                      <option>College Based Grading System</option>
                                      <option>GPA Grading System</option>
                                      <option>Other</option>
                                    </select> --}}

                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group1 text-left mb-2">
                                    <label for="Phone">Description</label>
                                    <textarea name="desc" class="form-control neha-text" rows="2"
                                    >{{ $value->desc }}</textarea>
                                  </div>
                                </div>
                                <hr>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-info">Update</button>
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
            </div>
          </div><!-- End Right side columns -->

        </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection