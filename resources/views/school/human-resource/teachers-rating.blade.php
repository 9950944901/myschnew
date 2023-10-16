@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Teachers Rating</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">

              <div class="d-flex justify-content-between mb-3">
                <h5 class="" style="font-size: 17px;">Teachers Rating List</h5>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Staff Id</th>
                    <th>Name</th>
                    <th>Rating</th>
                    <th>Comment</th>
                    <th>Status</th>
                    <th>Student Name</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>1</td>
                    <td>03890</td>
                    <td>Raavi</td>
                    <td>4</td>
                    <td>-</td>
                    <td>-</td>
                    <td>Kitty</td>
                    <td>
                      <div class="d-flex">
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-check"></i></a>
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>

                  <tr id="task-2" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                    <td>2</td>
                     <td>03890</td>
                    <td>Raavi</td>
                    <td>4</td>
                    <td>-</td>
                    <td>-</td>
                    <td>Kitty</td>
                    <td>
                      <div class="d-flex">
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-check"></i></a>
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>

                  <tr id="task-3" class="task-list-row test-font" data-task-id="2" data-user="Diamond">
                    <td>3</td>
                     <td>03890</td>
                    <td>Raavi</td>
                    <td>4</td>
                    <td>-</td>
                    <td>-</td>
                    <td>Kitty</td>
                    <td>
                      <div class="d-flex">
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-check"></i></a>
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>

                  <tr id="task-4" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                    <td>4</td>
                     <td>03890</td>
                    <td>Raavi</td>
                    <td>4</td>
                    <td>-</td>
                    <td>-</td>
                    <td>Kitty</td>
                    <td>
                      <div class="d-flex">
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-check"></i></a>
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>

                  <tr id="task-5" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                    <td>5</td>
                     <td>03890</td>
                    <td>Raavi</td>
                    <td>4</td>
                    <td>-</td>
                    <td>-</td>
                    <td>Kitty</td>
                    <td>
                      <div class="d-flex">
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-check"></i></a>
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>

                </tbody>
              </table>

            </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection