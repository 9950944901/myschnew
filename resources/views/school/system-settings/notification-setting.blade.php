@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Notification Setting</li>
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
                <div class="row mb-2">
                  <h5 class="mt-3" style="font-size: 17px;">Notification Setting</h5>
                  <hr>
                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Event</h6>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Option</h6>
                  </div>
                  <div class="col-lg-7 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Sample Message</h6>
                  </div>
                  <hr>

                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <p class="content-text">Student Admission</p>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <div>
                      <input type="checkbox"> <label>Email</label> &nbsp;
                      <input type="checkbox"> <label>SMS</label>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-12 sol-sm-12">
                    <p class="content-text mb-0">Dear  your admission is confirm in Class: 
                      Section:
                       for
                      Session: .</p>
                    <div>
                      <a href="button" data-toggle="modal" data-target="#editnotificationModal">
                        <i class="fa fa-edit"></i> </a>
                      <!-- Modal -->
                      <div class="modal fade" id="editnotificationModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="leaverequestModalLabel">Template</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <h5>Student Admission</h5>
                                <p class="mb-0"><b>Template</b></p>
                                <p class="mb-0">Dear  your admission is confirm in Class: 
                                  Section:  for Session:  for more
                                  detail</p>
                                <p class="mb-0">Contact</p>
                                <p class="mb-0">System</p>
                                <p class="mb-0">Admin</p>
                                <p class="text-justify mb-0">aa</p>
                                <h5>You can use variables</h5>
                                <p class="text-justify"> aa
                                </p>

                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-info">Save</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>

                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <p class="content-text">Exam Result</p>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <div>
                      <input type="checkbox"> <label>Email</label> &nbsp;
                      <input type="checkbox"> <label>SMS</label> &nbsp;
                      <input type="checkbox"> <label>Mobile App</label>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-12 sol-sm-12">
                    <p class="content-text mb-0">Dear  - a result has been
                      published.
                    </p>
                    <div>
                      <a href="button" data-toggle="modal" data-target="#editnotificationModal">
                        <i class="fa fa-edit"></i> </a>
                    </div>
                  </div>
                  <hr>

                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <p class="content-text">Fee Submission</p>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <div>
                      <input type="checkbox"> <label>Email</label> &nbsp;
                      <input type="checkbox"> <label>SMS</label> &nbsp;
                      <input type="checkbox"> <label>Mobile App</label>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-12 sol-sm-12">
                    <p class="content-text mb-0">Dear parents, we have received Fees Amount  for
                       by
                      Your School Name  a. </p>
                    <div>
                      <a href="button" data-toggle="modal" data-target="#editnotificationModal">
                        <i class="fa fa-edit"></i> </a>
                    </div>
                  </div>
                  <hr>

                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <p class="content-text">Absent Attendance</p>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <div>
                      <input type="checkbox"> <label>Email</label> &nbsp;
                      <input type="checkbox"> <label>SMS</label> &nbsp;
                      <input type="checkbox"> <label>Mobile App</label>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-12 sol-sm-12">
                    <p class="content-text mb-0">Absent Notice : was absent on date a from Your School Name. </p>
                    <div>
                      <a href="button" data-toggle="modal" data-target="#editnotificationModal">
                        <i class="fa fa-edit"></i> </a>
                    </div>
                  </div>
                  <hr>

                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <p class="content-text">Login Credential</p>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <div>
                      <input type="checkbox"> <label>Email</label> &nbsp;
                      <input type="checkbox"> <label>SMS</label>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-12 sol-sm-12">
                    <p class="content-text mb-0">Hello your login details for Url:  Username:
                      
                      Password: .</p>
                    <div>
                      <a href="button" data-toggle="modal" data-target="#editnotificationModal">
                        <i class="fa fa-edit"></i> </a>
                    </div>
                  </div>
                  <hr>

                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <p class="content-text">Homework</p>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <div>
                      <input type="checkbox"> <label>Email</label> &nbsp;
                      <input type="checkbox"> <label>SMS</label> &nbsp;
                      <input type="checkbox"> <label>Mobile App</label>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-12 sol-sm-12">
                    <p class="content-text mb-0">New Homework has been created for  at 
                      for the class    kindly submit your homework before
                      .Thank you.</p>
                    <div>
                      <a href="button" data-toggle="modal" data-target="#editnotificationModal">
                        <i class="fa fa-edit"></i> </a>
                    </div>
                  </div>
                  <hr>

                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <p class="content-text">Fees Reminder</p>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <div>
                      <input type="checkbox"> <label>Email</label> &nbsp;
                      <input type="checkbox"> <label>SMS</label> &nbsp;
                      <input type="checkbox"> <label>Mobile App</label>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-12 sol-sm-12">
                    <p class="content-text mb-0">Dear parents, please pay fee amount Rs.100
                      before  for  from smart school (ignore if you already paid).</p>
                    <div>
                      <a href="button" data-toggle="modal" data-target="#editnotificationModal">
                        <i class="fa fa-edit"></i> </a>
                    </div>
                  </div>
                  <hr>

                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <p class="content-text">Forgot Password</p>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <div>
                      <input type="checkbox"> <label>Email</label> &nbsp;
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-12 sol-sm-12">
                    <p class="content-text mb-0">Dear  , Recently a request was submitted to reset password for
                      your account. If you didn't make the request, just ignore this email. Otherwise you can reset your
                      password using this link
                      <a href="#">Click here to reset your password</a>
                      , if you're having trouble clicking the password reset button, copy and paste the URL below into
                      your web browser. your username  Regards, .
                    </p>
                    <div>
                      <a href="button" data-toggle="modal" data-target="#editnotificationModal">
                        <i class="fa fa-edit"></i> </a>
                    </div>
                  </div>
                  <hr>

                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <p class="content-text">Online Examination Publish Exam</p>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <div>
                      <input type="checkbox"> <label>Email</label> &nbsp;
                      <input type="checkbox"> <label>SMS</label> &nbsp;
                      <input type="checkbox"> <label>Mobile App</label>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-12 sol-sm-12">
                    <p class="content-text mb-0">A new exam  has been created for duration:
                       min, which will be available from: ..</p>
                    <div>
                      <a href="button" data-toggle="modal" data-target="#editnotificationModal">
                        <i class="fa fa-edit"></i> </a>
                    </div>
                  </div>
                  <hr>

                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <p class="content-text">Online Examination Publish Result</p>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <div>
                      <input type="checkbox"> <label>Email</label> &nbsp;
                      <input type="checkbox"> <label>SMS</label> &nbsp;
                      <input type="checkbox"> <label>Mobile App</label>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-12 sol-sm-12">
                    <p class="content-text mb-0">Exam  result has been declared which was conducted
                      between  to , for more details, please check your student portal..</p>
                    <div>
                      <a href="button" data-toggle="modal" data-target="#editnotificationModal">
                        <i class="fa fa-edit"></i> </a>
                    </div>
                  </div>
                  <hr>







                  <div class="text-right p-1">
                    <button type="button" class="btn btn-info">Save</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

  </main><!-- End #main -->

@endsection