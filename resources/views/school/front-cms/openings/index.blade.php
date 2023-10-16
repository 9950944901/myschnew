@extends('layouts.app')
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
        <li class="breadcrumb-item active">front-cms / Openings</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="dashboard ">
    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-md-12">
            <div><a data-toggle="modal" data-target="#approveModal" class="btn btn-primary my-4"><i class="fa fa-plus"></i> Add Job</a></div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Post</th>
                    <th>Work Status  </th>
                    <th>Vacancy</th>
                    <th>Qualification</th>
                    <th>Experience</th>
                    <th>Apply Date</th>
                    <th>Status</th>
                    <th>Request</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                @foreach ($open  as $value)
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->post }}</td>
                    <td>{{ $value->work_status }}</td>
                    <td>{{ $value->vacancies }}</td>
                    <td>{{ $value->qualification }}</td>
                    <td>{{ $value->experience }}</td>
                    <td>{{ date('d-M-Y', strtotime($value->created_at)) }}</td>
                    <td>
                        @if($value->status==1)
                        <a href="{{ route('Openings.Active',['id'=>$value->id]) }}" class="btn btn-outline-success py-0">Active</a>
                        @else
                        <a href="{{ route('Openings.InActive',['id'=>$value->id]) }}" class="btn btn-outline-danger py-0">Inactive</a>
                        @endif
                    </td>
                    <td><a href="{{ route('Openings.View',['id'=>$value->id]) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>
                    <td>
                      <div class="d-flex">
                        <a data-toggle="modal" data-target="#approveModal{{ $value->id }}" class="btn btn-success ml-1"><i class="fa fa-pencil"></i></a>
                        <a href="{{ route('Openings.Delete',['id'=>$value->id]) }}" class="btn btn-danger ml-1 delete-confirm"><i class="fa fa-trash"></i></a>
                      </div>
                    </td>
                  </tr> 
                  <div class="modal fade" id="approveModal{{ $value->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="addModalLabel">Edit openings</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form action="{{ route('Openings.Update',['id'=>$value->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group1 text-left">
                                    <label for="Address">Post For.</label>
                                    <input type="text" class="form-control" name="post" value="{{ $value->post }}" required>
                                </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group1 text-left">
                                    <label for="Address">Total Vacancies</label>
                                    <input type="text" class="form-control" name="vacancies" value="{{ $value->vacancies }}" required>
                                </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group1 text-left">
                                    <label for="number">Work Status</label>
                                    <input type="text" class="form-control" name="work_status" value="{{ $value->work_status }}" required>
                                </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group1 text-left">
                                    <label for="number">Experience</label>
                                    <input type="text" class="form-control" name="experience" value="{{ $value->experience }}" required>
                                </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group1 text-left">
                                    <label for="number">Qualification</label>
                                    <input type="text" class="form-control" name="qualification" value="{{ $value->qualification }}" required>
                                </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group1 text-left">
                                    <label for="number">Location</label>
                                    <input type="text" class="form-control" name="location" value="{{ $value->location }}" required>
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
                  @endforeach 
                </tbody>
            </table>
        </div>
      </div>
    </section>
  </div>

</main><!-- End #main -->
@endsection


{{-- model --}}
<div class="modal fade" id="approveModal" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="addModalLabel">Add openings</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="{{ route('Openings.Data') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group1 text-left">
            <label for="Address">Post For.</label>
            <input type="text" class="form-control" name="post" required>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group1 text-left">
            <label for="Address">Total Vacancies</label>
            <input type="text" class="form-control" name="vacancies" required>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group1 text-left">
            <label for="number">Work Status</label>
            <input type="text" class="form-control" name="work_status" required>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group1 text-left">
            <label for="number">Experience</label>
            <input type="text" class="form-control" name="experience" required>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group1 text-left">
            <label for="number">Qualification</label>
            <input type="text" class="form-control" name="qualification" required>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group1 text-left">
            <label for="number">Location</label>
            <input type="text" class="form-control" name="location" required>
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