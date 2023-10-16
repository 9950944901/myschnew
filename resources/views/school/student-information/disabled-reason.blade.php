@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Disable Reason</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card">
                <div class="row mb-3">
                  <h5 class="mt-3" style="font-size: 17px;">Add Disable Reason</h5>
                  <div class="col-lg-6 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Name</h6>
                    <div class="">
                      <input type="text" class="form-control" id="required" placeholder="">
                    </div>
                  </div>
                
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="p-2 mt-3" style="float: right;">
                      <button type="button" class="btn btn-info">Save</button>
                    </div>
                  </div>
                </div>
              </div>
              
               <div class="p-3">
                <h5>Disable Reason List</h5>
               </div>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>078940</td>
                      <td>Tommy</td>
                      <td>
                        <div class="d-flex">
                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>

                    <tr id="task-2" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                      <td>2</td>
                      <td>078940</td>
                      <td>Tommy</td>
                      <td>
                        <div class="d-flex">
                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>

                    <tr id="task-3" class="task-list-row test-font" data-task-id="2" data-user="Diamond">
                      <td>3</td>
                      <td>078940</td>
                      <td>Tommy</td>
                      <td>
                        <div class="d-flex">
                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>

                    <tr id="task-4" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                      <td>4</td>
                      <td>078940</td>
                      <td>Tommy</td>
                      <td>
                        <div class="d-flex">
                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>

                    <tr id="task-5" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                      <td>5</td>
                      <td>078940</td>
                      <td>Tommy</td>
                      <td>
                        <div class="d-flex">
                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>

                  </tbody>
                </table>

                <div class="col-lg-12 col-md-12 c0l-sm-12">
                  <div class="float-right p-2 mt-2">
                    <button class="btn btn-info">Delete</button>
                  </div>
                </div>
              

            </div>
          </div>
        </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection