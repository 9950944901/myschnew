@extends('layouts.teacher')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Assign Class Teacher</li>
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
                <h5 class="card-title" style="padding: 15px 0 0px 0; float: inherit;">Assign Class Teacher </h5>
                <hr>
                <div class="activity">
                  <form action="{{ route('Assign.Class.Teacher.Data') }}" method="post">
                    @csrf
                  <div class="row">

                    <div class="col-lg-12 col-md-6 col-sm-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Class</label>
                        <select name="class" class="form-control neha-text" required>
                          <option value="">Select</option>
                          @foreach ($class as $cla)
                          <option>{{ $cla->class }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-12 col-md-6 col-sm-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Section</label>
                        <select name="section" class="form-control neha-text" required>
                          <option value="">Select</option>
                          @foreach ($sec as $se)
                          <option>{{ $se->section }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-12 col-md-6 col-sm-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Class Teacher</label>
                        @foreach ($staff as $info)
                        <div>
                          <input type="radio" name="class_teacher" value="{{ $info->firstname }} {{ $info->lastname }}"> {{ $info->firstname }} {{ $info->lastname }}
                        </div>
                          @endforeach
                        
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
          </div>
          <!-- End left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-8">
            <div class="row">
              <div class="card">
                <h5 class="mt-3" style="font-size: 17px;">Class Teacher List</h5>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Teacher Name</th>
                      <th>Class</th>
                      <th>Section</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($data as $value)                  
                    <tr id="task-4" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                      <td>{{ $loop->iteration }}</td>
                     <td>{{ $value->class_teacher }}</td>
                      <td>{{ $value->class }}</td>
                      <td>{{ $value->section }}</td>
                      <td>
                        <div class="d-flex">
                          <a data-bs-toggle="modal" data-bs-target="#editsubject{{ $value->id }}" class="btn btn-light ml-1"><i class="fa fa-pencil"></i></a>
                          <a href="{{ route('Assign .Delete',['id'=>$value->id]) }}" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>
                    <div class="modal fade" id="editsubject{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Assign Class Teacher</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="{{ route('Update.Class.Teacher',['id'=>$value->id]) }}">
                              @csrf
                              <div class="row">

                                <div class="col-lg-12 col-md-6 col-sm-12">
                                  <div class="form-group1 text-left mb-2">
                                    <label for="Name">Class</label>
                                    <select name="class" class="form-control neha-text" required>
                                      <option>{{ $value->class }}</option>
                                      @foreach ($class as $cla)
                                      <option>{{ $cla->class }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
            
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                  <div class="form-group1 text-left mb-2">
                                    <label for="Name">Section</label>
                                    <select name="section" class="form-control neha-text" required>
                                      <option>{{ $value->section }}</option>
                                      @foreach ($sec as $se)
                                      <option>{{ $se->section }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
            
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                  <div class="form-group1 text-left mb-2">
                                    <label for="Name">Class Teacher</label>
                                    <div>
                                      <input type="radio" name="class_teacher" checked value="{{ $value->class_teacher }}">{{ $value->class_teacher }}
                                    </div>
                                    @foreach ($staff as $info)
                                    <div>
                                      <input type="radio" name="class_teacher" value="{{ $info->firstname }} {{ $info->lastname }}"> {{ $info->firstname }} {{ $info->lastname }}
                                    </div>
                                      @endforeach
                                    
                                  </div>
                                </div>            
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
            </div>
          </div><!-- End Right side columns -->

        </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection