@extends('layouts.app')
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
        <li class="breadcrumb-item active">front-cms / Contact Request</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="dashboard ">
    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-md-12">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Name</th>
                    <th>Mobile No.  </th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Req. Date</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                @foreach ($contect  as $value)
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->number }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->msg }}</td>
                    <td>{{ date('d-M-Y', strtotime($value->created_at)) }}</td>
                    <td>
                      <div class="d-flex">
                        <a href="{{ route('Contect.Request.Delete',['id'=>$value->id]) }}" class="btn btn-danger ml-1 delete-confirm"><i class="fa fa-trash"></i></a>
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