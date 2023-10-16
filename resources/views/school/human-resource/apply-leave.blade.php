@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Apply Leave</li>
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
                <h5 class="" style="font-size: 17px;">Leaves</h5>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#applyleaveModal">
                  <i class="fa fa-plus"></i> Apply Leave
                </button>
                <!-- Modal -->
                <div class="modal fade" id="applyleaveModal" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="applyleaveModalLabel">Add Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Email">Apply Date</label>
                              <input type="date" class="form-control neha-text" id="Email" placeholder="Enter Email">
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group1 text-left">
                              <label for="Name">Available Leave</label>
                              <select name="source" class="form-control neha-text" value="" required="">
                                <option value="Select">Select</option>
                                <option value="Verified">A</option>
                                <option value="Unverified">B</option>
                                <option value="Unverified">C</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Email">Leave From Date</label>
                              <input type="date" class="form-control neha-text" id="Email" placeholder="Enter Email">
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Email">Leave To Date</label>
                              <input type="date" class="form-control neha-text" id="Email" placeholder="Enter Email">
                            </div>
                          </div>
                         
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Phone">Reason</label>
                              <textarea name="" class="form-control neha-text" rows="2"
                                placeholder=""></textarea>
                            </div>
                          </div>
                          

                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="number">Attach Document</label>
                              <input type="file" name="Profile Image" class="form-control-file" id="addImage">
                            </div>
                          </div>
                         
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-info">Save</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Staff</th>
                    <th>Leave Type</th>
                    <th>Leave Date</th>
                    <th>Days</th>
                    <th>Apply Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>1</td>
                    <td>Teacher</td>
                    <td>Medical</td>
                    <td>02-12-2022</td>
                    <td>3</td>
                    <td>20-11-2022</td>
                    <td>Approve</td>
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
                     <td>Teacher</td>
                    <td>Medical</td>
                    <td>02-12-2022</td>
                    <td>3</td>
                    <td>20-11-2022</td>
                    <td>Approve</td>
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
                     <td>Teacher</td>
                    <td>Medical</td>
                    <td>02-12-2022</td>
                    <td>3</td>
                    <td>20-11-2022</td>
                    <td>Approve</td>
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
                     <td>Teacher</td>
                    <td>Medical</td>
                    <td>02-12-2022</td>
                    <td>3</td>
                    <td>20-11-2022</td>
                    <td>Approve</td>
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
                     <td>Teacher</td>
                    <td>Medical</td>
                    <td>02-12-2022</td>
                    <td>3</td>
                    <td>20-11-2022</td>
                    <td>Approve</td>
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