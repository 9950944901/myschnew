@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Send SMS</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
      <section class="section dashboard">
        <div class="row">

          <!-- left side columns -->
          <div class="col-lg-7">
            <div class="row">
              <div class="card">
                <div class="card-body" style="padding: 0 20px 52px 20px;">
                  <h5 class="mt-3" style="font-size: 17px;">Send Email</h5>
                  <hr>
                  <div class="form-group1 text-left mb-3">
                    <label for="Phone">Title</label>
                    <input type="text" class="form-control neha-text" id="date1" placeholder="">
                  </div>
                  <div class="form-group1 text-left mb-3">
                    <label for="Phone">Send Through</label>
                    <div>
                      <input type="checkbox"> <label>SMS</label> &nbsp;
                      <input type="checkbox"> <label>Mobile App</label>
                    </div>
                  </div>

                  <div class="form-group1 text-left mb-3 ">
                    <label class="form-label" for="firstName">Message</label>
                    <textarea type="text" id="myTextarea" class="form-control "></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End left side columns -->

          <!-- right side columns -->
          <div class="col-lg-5">
            <div class="card">
              <div class="card-body" style="padding: 0 20px 0px 20px;">
               
                <hr>
                <div class="activity">

                  <div class="card-box height-100-p overflow-hidden">
                    <div class="profile-tab height-100-p">
                      <div class="tab height-100-p">
                        <ul class="nav nav-tabs customtab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#group" role="tab">Group</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#individual" role="tab">Individual</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#class" role="tab">Class</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#birthday" role="tab">Today's Birthday</a>
                          </li>
                        </ul>
                        <div class="tab-content">
                          <!-- Timeline Tab start -->
                          <div class="tab-pane fade show active" id="group" role="tabpanel">
                            <div class="pd-20">
                              <div class="profile-timeline">
                                <div class="timeline-month mt-3 mb-3">
                                  <h6>Message To</h6>
                                </div>
                                <div class="profile-timeline-list">
                                  <div>
                                    <input type="checkbox">
                                    <label>Students</label>
                                  </div>
                                  <div>
                                    <input type="checkbox">
                                    <label>Guardians</label>
                                  </div>
                                  <div>
                                    <input type="checkbox">
                                    <label>Admin</label>
                                  </div>
                                  <div>
                                    <input type="checkbox">
                                    <label>Teacher</label>
                                  </div>
                                  <div>
                                    <input type="checkbox">
                                    <label>Accountant</label>
                                  </div>
                                  <div>
                                    <input type="checkbox">
                                    <label>Librarian</label>
                                  </div>
                                  <div>
                                    <input type="checkbox">
                                    <label>Receptionist</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Timeline Tab End -->
                          <!-- Tasks Tab start -->
                          <div class="tab-pane fade" id="individual" role="tabpanel">
                            <div class="pd-20 profile-task-wrap">
                              <div class="container pd-0">
                                <!-- Open Task start -->
                                <div class="task-title row align-items-center mt-3 mb-3">
                                  <h6>Message To</h6>
                                </div>

                                <div class="profile-task-list pb-30">
                                  <input type="text" class="form-control neha-text" placeholder="Search..">
                                </div>
                                <!-- Open Task End -->
                              </div>
                            </div>
                          </div>
                          <!-- Tasks Tab End -->
                          <!-- Setting Tab start -->
                          <div class="tab-pane fade height-100-p" id="class" role="tabpanel">
                            <div class="profile-setting">
                              <div class="task-title row align-items-center mt-3 mb-3">
                                <h6>Message To</h6>
                                <div class="mt-1">
                                  <select name="source" class="form-control neha-text" value="" required="">
                                    <option value="Select">Select</option>
                                    <option value="Verified">A</option>
                                    <option value="Unverified">B</option>
                                    <option value="Unverified">C</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Setting Tab End -->
                          <div class="tab-pane fade height-100-p" id="birthday" role="tabpanel">
                            <div class="profile-setting">
                              <div class="task-title row align-items-center mt-3 mb-3">
                                <h6>Message To</h6>
                              </div>
                            </div>
                          </div>
                          <!-- ================================= -->
                        </div>
                      </div>
                    </div>
                  </div>

                  <hr>

                </div>
              </div>
            </div>

          </div><!-- End right side columns -->

          <hr>
          <div class="text-right p-2">
            <button type="button" class="btn btn-info"><i class="fa fa-envelope"></i> Send</button>
          </div>

        </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection