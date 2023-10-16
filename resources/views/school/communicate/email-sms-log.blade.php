@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Email/SMS Log</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
            
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Email</th>
                    <th>SMS</th>
                    <th>Group</th>
                    <th>Individual</th>
                    <th>Class</th>
                  </tr>
                </thead>

                <tbody>
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>1</td>
                    <td>MTS</td>
                    <td>07-12-2022</td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td>-</td>
                    <td>Class-1</td>
                  </tr>

                  <tr id="task-2" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                    <td>2</td>
                     <td>MTS</td>
                    <td>07-12-2022</td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td>-</td>
                    <td>Class-1</td>
                  </tr>

                  <tr id="task-3" class="task-list-row test-font" data-task-id="2" data-user="Diamond">
                    <td>3</td>
                     <td>MTS</td>
                    <td>07-12-2022</td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td>-</td>
                    <td>Class-1</td>
                  </tr>

                  <tr id="task-4" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                    <td>4</td>
                     <td>MTS</td>
                    <td>07-12-2022</td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td>-</td>
                    <td>Class-1</td>
                  </tr>

                  <tr id="task-5" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                    <td>5</td>
                     <td>MTS</td>
                    <td>07-12-2022</td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td>-</td>
                    <td>Class-1</td>
                  </tr>

                </tbody>
              </table>

            </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection