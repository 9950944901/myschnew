@extends('layouts.app')
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
        <li class="breadcrumb-item active">Events</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="dashboard" >
    <section class="section dashboard">
      <div class="row">

        <!-- left side columns -->
        {{-- <div class="col-lg-4">
          <div class="card">
            <div class="card-body" style="padding: 0 20px 0px 20px;">
              <hr>
              <div class="activity">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group1 text-left mb-2">
                      <label for="Phone">Date</label>
                      <input type="date" class="form-control neha-text" id="date1" placeholder="">
                    </div>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        <!-- End left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-12">
          <div class="row">
            <div class="card">
              <div class="d-flex justify-content-between mt-3">
                <h5 class="">Event List</h5>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#eventModal">
                  <i class="fa fa-plus"></i> Add Event
                </button>
                <!-- Modal -->
                <div class="modal fade" id="eventModal" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="eventModalLabel">Add Event</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">

                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Email">Event For</label>
                              <div>
                                <input type="radio" name="same" checked> <label> All Alumni </label> &nbsp;                          
                                <input type="radio" name="same" > <label> Class </label>
                              </div>
                            </div>
                          </div>
                        

                        <div class="col-lg-12 col-md-6 col-sm-12">
                          <div class="form-group1 text-left">
                            <label for="Email">Event Title</label>
                            <input type="text" class="form-control neha-text" id="Email" placeholder="Enter Title">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group1 text-left">
                            <label for="Email">Class</label>
                            {{-- <input type="date" class="form-control neha-text" id="Email" placeholder="Enter Email"> --}}
                            <select name="" id="" class="form-control">
                              <option value="">1</option>
                              <option value="">2</option>
                              <option value="">3</option>
                             </select>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group1 text-left">
                            <label for="Email">Section</label>
                            {{-- <input type="date" class="form-control neha-text" id="Email" placeholder="Enter Email"> --}}
                             <select name="" id="" class="form-control">
                              <option value="">1</option>
                              <option value="">2</option>
                              <option value="">3</option>
                             </select>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group1 text-left">
                            <label for="Email">Event From Date</label>
                            <input type="date" class="form-control neha-text" id="Email" placeholder="Enter Email">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group1 text-left">
                            <label for="Email">Event To Date</label>
                            <input type="date" class="form-control neha-text" id="Email" placeholder="Enter Email">
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group1 text-left">
                            <label for="Phone">Note</label>
                            <textarea name="" class="form-control neha-text" rows="2" placeholder=""></textarea>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group1 text-left">
                            <label for="Phone">Event Notification Message</label>
                            <textarea name="" class="form-control neha-text" rows="2" placeholder=""></textarea>
                          </div>
                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group1 text-left">
                            <div class="mt-3">
                              <input type="checkbox"> <label> Email </label> &nbsp;                          
                              <input type="checkbox"> <label> SMS </label>
                            </div>
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
            <hr>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr class="" style="font-size: 13px; color: #012970; ">
                  <th>S No.</th>
                  <th>Title</th>
                  <th>Class</th>
                  <th>Section</th>
                  <th>Pass Out Session</th>
                  <th>From</th>
                  <th>To</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                  <td>1</td>
                  <td>Function</td>
                  <td>Class 1</td>
                  <td>A</td>
                  <td>2021</td>
                  <td>15-11-2021</td>
                  <td>17-11-2021</td>
                  <td>
                    <div class="d-flex">
                      <a href="button" class="btn btn-light ml-1"><i class="fa fa-check"></i></a>
                      <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                    </div>
                  </td>
                </tr>

                <tr id="task-2" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                  <td>2</td>
                  <td>Function</td>
                  <td>Class 1</td>
                  <td>A</td>
                  <td>2021</td>
                  <td>15-11-2021</td>
                  <td>17-11-2021</td>
                  <td>
                    <div class="d-flex">
                      <a href="button" class="btn btn-light ml-1"><i class="fa fa-check"></i></a>
                      <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                    </div>
                  </td>
                </tr>

                <tr id="task-3" class="task-list-row test-font" data-task-id="2" data-user="Diamond">
                  <td>3</td>
                  <td>Function</td>
                  <td>Class 1</td>
                  <td>A</td>
                  <td>2021</td>
                  <td>15-11-2021</td>
                  <td>17-11-2021</td>
                  <td>
                    <div class="d-flex">
                      <a href="button" class="btn btn-light ml-1"><i class="fa fa-check"></i></a>
                      <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                    </div>
                  </td>
                </tr>

                <tr id="task-4" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                  <td>4</td>
                  <td>Function</td>
                  <td>Class 1</td>
                  <td>A</td>
                  <td>2021</td>
                  <td>15-11-2021</td>
                  <td>17-11-2021</td>
                  <td>
                    <div class="d-flex">
                      <a href="button" class="btn btn-light ml-1"><i class="fa fa-check"></i></a>
                      <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                    </div>
                  </td>
                </tr>

                <tr id="task-5" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                  <td>5</td>
                  <td>Function</td>
                  <td>Class 1</td>
                  <td>A</td>
                  <td>2021</td>
                  <td>15-11-2021</td>
                  <td>17-11-2021</td>
                  <td>
                    <div class="d-flex">
                      <a href="button" class="btn btn-light ml-1"><i class="fa fa-check"></i></a>
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