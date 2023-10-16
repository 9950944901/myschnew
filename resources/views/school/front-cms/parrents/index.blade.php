@extends('layouts.app')
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
        <li class="breadcrumb-item active">front-cms / Parents-Say</li>
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
              <form action="{{ route('Front.Web.parents.Data') }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="row mb-2">
                <h5 class="mt-3" style="font-size: 17px;">WebSite Parents-Say</h5>
                <div class="col-lg-4 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Parent's Image</h6>
                  <div class="">
                    <input type="file" class="form-control" name="image" required>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Parent's Name</h6>
                  <div class="">
                    <input type="text" class="form-control" name="name" required>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Parent's Job</h6>
                  <div class="">
                    <input type="text" class="form-control" name="job" required>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Parent's Say</h6>
                  <div class="">
                    <textarea type="text" class="form-control" name="says" rows="5" required></textarea>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <div class="mt-4 pt-2">
                    <button type="submit" class="btn btn-info">Save</button>
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
        <div class="col-md-12">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Job</th>
                    <th>Parent's Say</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>

                   @foreach ($show  as $value)
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ url('public/uploads/parents/'.$value->image) }}" height="50" width="50" alt=""></td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->job }}</td>
                    <td>{{ $value->says }}</td>
                    <td>
                      <div class="d-flex">
                        {{-- <a data-bs-toggle="modal" data-bs-target="#editvisit{{ $value->id }}" class="btn btn-light ml-1"><i class="fa fa-eye"></i></a> --}}
                        <a href="{{ route('Parents.Delete',['id'=>$value->id]) }}" class="btn btn-danger ml-1 delete-confirm"><i class="fa fa-trash"></i></a>
                      </div>
                    </td>
                  </tr> 
                  @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </section>
  </div>

</main><!-- End #main -->
@endsection