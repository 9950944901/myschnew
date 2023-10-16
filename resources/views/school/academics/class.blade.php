@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Class</li>
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
                <h5 class="card-title" style="padding: 15px 0 0px 0; float: inherit;">Add Class </h5>
                <hr>
                <div class="activity">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Class</label>
                        <input type="text" class="form-control neha-text" id="date1" placeholder="">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Sections</label>
                        <div class="">
                          <input type="checkbox"> Test Section
                        </div>
                        <div class="">
                          <input type="checkbox"> Abcd
                        </div>
                      </div>
                    </div>
                

                  <hr>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-info">Save</button>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div><!-- End left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-8">
          <div class="row">
            <div class="card">
              <h5 class="mt-3" style="font-size: 17px;">Class List</h5>
              <hr>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Class </th>
                    <th>Section</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>1</td>
                    <td>Class-1</td>
                    <td>A</td>
                    <td>
                      <div class="d-flex">
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                  </tr>

                  <tr id="task-2" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                    <td>2</td>
                    <td>Class-1</td>
                    <td>A</td>
                    <td>
                      <div class="d-flex">
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                  </tr>

                  <tr id="task-3" class="task-list-row test-font" data-task-id="2" data-user="Diamond">
                    <td>3</td>
                    <td>Class-1</td>
                    <td>A</td>
                    <td>
                      <div class="d-flex">
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                  </tr>

                  <tr id="task-4" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                    <td>4</td>
                    <td>Class-1</td>
                    <td>A</td>
                    <td>
                      <div class="d-flex">
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                  </tr>

                  <tr id="task-5" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                    <td>5</td>
                    <td>Class-1</td>
                    <td>A</td>
                    <td>
                      <div class="d-flex">
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                        <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                  </tr>

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