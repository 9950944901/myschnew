@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Study Material</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">

              <div class="p-2 mb-2">
                <h5>Study Material List</h5>
              </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Content Title</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Available For</th>
                    <th>Class</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($content as $value)      
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->content_type }}</td>
                    <td>{{ $value->date }}</td>
                    <td>
                      @foreach(json_decode($value->availabe_for) as $item)
                        {{ $item }},
                      @endforeach
                    </td>
                    <td>{{ $value->class }}</td>
                    <td>
                      <div class="d-flex">
                        <a href="{{ url('public/uploads/content/'.$value->document) }}" class="btn btn-light ml-1" download> <img style="display: none;" src="{{ url('public/uploads/content/'.$value->document) }}" alt="W3Schools"> <i class="fa fa-download"></i></a>
                        <a data-bs-toggle="modal" data-bs-target="#editmodal{{ $value->id }}" class="btn btn-light ml-1"><i class="fa fa-pencil"></i></a>
                        <a href="{{ route('Content.Delete',['id'=>$value->id]) }}" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                  </tr>

                  <div class="modal fade" id="editmodal{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Content</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="{{ route('Update.Content',['id'=>$value->id]) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group1 text-left mb-2">
                                  <label for="Phone">Content Title</label>
                                  <input type="text" class="form-control neha-text" name="name" value="{{ $value->name }}" required>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group1 text-left mb-2">
                                  <label for="Phone">Content Type</label>
                                  <select name="content_type" class="form-control" required>
                                    <option>{{ $value->content_type }}</option>
                                    <option>Assignments</option>
                                      <option>Study Material</option>
                                      <option>Syllabus</option>
                                      <option>Other Download</option>
                                </select>
                                </div>
                              </div>
          
                              {{-- <div class="col-md-12">
                                <div class="form-group1 text-left mb-2">
                                  <label for="Phone">Available For</label>
                                  <div>
                                    @foreach(json_decode($value->availabe_for) as $itm)
                                    @if($itm=='All Admin')
                                    <input type="checkbox" checked value="All Admin" name="availabe_for[]"> All Admin
                                    @else
                                    <input type="checkbox" value="All Admin" name="availabe_for[]"> All Admin
                                    @endif
                                  </div>
                                  <div>
                                    @if($itm=='All Student')
                                    <input type="checkbox" checked value="All Student" name="availabe_for[]"> All Student
                                    @else
                                    <input type="checkbox" value="All Student" name="availabe_for[]"> All Student
                                    @endif
                                  </div>
          
                                </div>
                              </div>
          
                              <div class="bg-gray-light pt-2 pb-2">
                                <div class="col-md-12">
                                  <div class="form-group1 text-left mb-2">
                                    @if($itm=='Available For All Classes')
                                    <input type="checkbox" checked value="Available For All Classes" name="availabe_for[]"> <label for="Phone">Available For All Classes</label>
                                    @else
                                    <input type="checkbox" value="Available For All Classes" name="availabe_for[]"> <label for="Phone">Available For All Classes</label>
                                    @endif
                                  </div>
                                  @endforeach
                                  <div class="form-group1 text-left mb-2">
                                    <label for="Phone">Class</label>
                                    <select name="class" class="form-control neha-text" required>
                                      <option>{{ $value->class }}</option>
                                      @foreach ($class as $valuea)
                                      <option>{{ $valuea->class }}</option>
                                      @endforeach
          
                                    </select>
                                  </div>
                                  <div class="form-group1 text-left mb-2">
                                    <label for="Phone">Section</label>
                                    <select name="section" class="form-control neha-text" required>
                                      <option>{{ $value->section }}</option>
                                      @foreach ($sec as $valuea)
                                      <option>{{ $valuea->section }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
                              </div> --}}
          
                              <div class="col-md-12">
                                <div class="form-group1 text-left mb-2 mt-2">
                                  <label for="Phone"> Upload Date</label>
                                  <input type="date" class="form-control neha-text" name="date" value="{{ $value->date }}" required>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group1 text-left mb-2">
                                  <label for="Phone">Description</label>
                                  <textarea name="desc" class="form-control neha-text" rows="2" >{{ $value->desc }}</textarea>
                                </div>
                              </div>
                              
                              {{-- <div class="col-md-12">
                                <div class="form-group1 text-left mb-2">
                                  <label for="Phone">Attach Document</label>
                                  <input type="file" name="document" class="form-control-file" accept="application/pdf,application/vnd.ms-excel" >
                                </div>
                              </div> --}}
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