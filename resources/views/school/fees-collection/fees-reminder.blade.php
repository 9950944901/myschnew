@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Fees Reminder</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">


              <div class="p-3">
                <h5>Fees Reminder</h5>
              </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Action</th>
                    <th>Reminder Type</th>
                    <th>Days</th>
                  </tr>
                </thead>

                <tbody>
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>1</td>
                    <td><input type="checkbox"> Active</td>
                    <td>Before</td>
                    <td>3</td>
                  </tr>

                  <tr id="task-2" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                    <td>2</td>
                    <td><input type="checkbox"> Active</td>
                    <td>Before</td>
                    <td>3</td>
                  </tr>

                  <tr id="task-3" class="task-list-row test-font" data-task-id="2" data-user="Diamond">
                    <td>3</td>
                    <td><input type="checkbox"> Active</td>
                    <td>Before</td>
                    <td>3</td>
                  </tr>

                  <tr id="task-4" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                    <td>4</td>
                    <td><input type="checkbox"> Active</td>
                    <td>Before</td>
                    <td>3</td>
                  </tr>

                  <tr id="task-5" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                    <td>5</td>
                    <td><input type="checkbox"> Active</td>
                    <td>Before</td>
                    <td>3</td>
                  </tr>
                </tbody>
              </table>

              <div class="text-center">
                <button type="button" class="btn btn-info">Save</button>
              </div>

            </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection