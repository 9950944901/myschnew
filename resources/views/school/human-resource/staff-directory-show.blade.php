@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Staff Directory Show</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard" >
      <section class="section dashboard">
        <div class="row">
          <!-- left side columns -->
          <div class="col-lg-3 col-md-12 col-sm-12">
            <div class="row">
              <div class="card">

                <div class="box box-primary">
                  <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle"
                      src="https://bauaag.xyz/Web/Demo/School/uploads/student_images/default_male.jpg"
                      alt="User profile picture">
                    <h3 class="profile-username text-center text-capitalize">{{ $show->firstname }} {{ $show->lastname }}</h3>

                    <ul class="list-group list-group-unbordered" style="font-size: 14px;">
                      <li class="list-group-item listnoback">
                        <b>Staff ID</b> <a class="pull-right text-aqua">{{ $show->staff_id }}</a>
                      </li>

                      {{-- <li class="list-group-item listnoback">
                        <b>Roll Number</b> <a class="pull-right text-aqua"></a>
                      </li> --}}
                      <li class="list-group-item listnoback">
                        <b>Role</b> <a class="pull-right text-aqua">{{ $show->role }}</a>
                      </li>
                      {{-- <li class="list-group-item listnoback">
                        <b>Designation</b> <a class="pull-right text-aqua">{{ $show->designation }}</a>
                      </li> --}}
                      <li class="list-group-item listnoback">
                        <b>Department</b> <a class="pull-right text-aqua">{{ $show->department }}</a>
                      </li>
                      {{-- <li class="list-group-item listnoback">
                        <b>EPF No</b> <a class="pull-right text-aqua"></a>
                      </li>
                      <li class="list-group-item listnoback">
                        <b>Basic Salary</b> <a class="pull-right text-aqua"></a>
                      </li>
                      <li class="list-group-item listnoback">
                        <b>Contract Type</b> <a class="pull-right text-aqua"></a>
                      </li>
                      <li class="list-group-item listnoback">
                        <b>Work Shift</b> <a class="pull-right text-aqua"></a>
                      </li>
                      <li class="list-group-item listnoback">
                        <b>Location</b> <a class="pull-right text-aqua"></a>
                      </li> --}}
                      <li class="list-group-item listnoback">
                        <b>Date Of Joining</b> <a class="pull-right text-aqua">{{ $show->joining_date }}</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End left side columns -->

          <!-- right side columns -->
          <div class="col-lg-9 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-body" style="padding: 0 20px 0px 20px;">
                <hr>
                <div class="activity">
                  <div class="card-box height-100-p overflow-hidden">
                    <div class="profile-tab height-100-p">
                      <div class="tab height-100-p">
                        <ul class="nav nav-tabs customtab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile</a>
                          </li>

                          {{-- <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#payroll" role="tab">Payroll</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#leaves" role="tab">Leaves</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#attendance" role="tab">Attendance</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#documents" role="tab">Documents</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#timeline" role="tab">Timeline</a>
                          </li> --}}

                        </ul>
                        <div class="tab-content">
                          <!-- Profile Tab start -->
                          <div class="tab-pane fade show active" id="profile" role="tabpanel">
                            <div class="pd-20">
                              <div class="profile-timeline">
                                <div class="profile-timeline-list">
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane active" id="activity">
                              <div class="tshadow mb25 bozero">
                                <div class="table-responsive around10 pt0">
                                  <table class="table table-hover table-striped tmb0">
                                    <tbody>
                                      <tr>
                                        <td class="col-md-4">Phone</td>
                                        <td class="col-md-5">
                                          +91{{ $show->phone }}</td>
                                      </tr>
                                      <tr>
                                        <td>Emergency Contact Number</td>
                                        <td>+91{{ $show->contact_no }}</td>
                                      </tr>
                                      <tr>
                                        <td>Email</td>
                                        <td>
                                          {{ $show->email }}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Gender</td>
                                        <td>{{ $show->gender }}</td>
                                      </tr>
                                      <tr>
                                        <td>Date of Birth</td>
                                        <td>{{ $show->dob }}</td>
                                      </tr>
                                      <tr>
                                        <td>Marital Status</td>
                                        <td>{{ $show->marital_status }}</td>
                                      </tr>
                                      <tr>
                                        <td>Father's Name </td>
                                        <td>{{ $show->father_name }}</td>
                                      </tr>
                                      <tr>
                                        <td>Mother's Name</td>
                                        <td>{{ $show->mother_name }} </td>
                                      </tr>
                                      <tr>
                                        <td>Qualification</td>
                                        <td>{{ $show->qualification }} </td>
                                      </tr>
                                      <tr>
                                        <td>Work Experience </td>
                                        <td>{{ $show->work_exp }}</td>
                                      </tr>
                                      <tr>
                                        <td>Note</td>
                                        <td>{{ $show->note }}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tshadow mb25 bozero">
                                <h3 class="pagetitleh2" style="font-size: 20px;">Address </h3>
                                <div class="table-responsive around10 pt0">
                                  <table class="table table-hover table-striped tmb0">
                                    <tbody>
                                      <tr>
                                        <td class="col-md-4">Current Address</td>
                                        <td class="col-md-5">{{ $show->cadd }}</td>
                                      </tr>
                                      <tr>
                                        <td>Permanent Address</td>
                                        <td>{{ $show->padd }}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tshadow mb25 bozero">
                                <h3 class="pagetitleh2" style="font-size: 20px;">Bank Account Details </h3>
                                <div class="table-responsive around10 pt10">
                                  <table class="table table-hover table-striped tmb0">
                                    <tbody>
                                      <tr>
                                        <td class="col-md-4">Account Title</td>
                                        <td class="col-md-5"></td>
                                      </tr>
                                      <tr>
                                        <td>Bank Name</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>Bank Branch Name</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>Bank Account Number</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>IFSC Code</td>
                                        <td></td>
                                      </tr>

                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              {{-- <div class="tshadow mb25  bozero">
                                <h3 class="pagetitleh2" style="font-size: 20px;">Social Media Link</h3>
                                <div class="table-responsive around10 pt0">
                                  <table class="table table-hover table-striped tmb0">
                                    <tbody>
                                      <tr>
                                        <td class="col-md-4">Facebook URL</td>
                                        <td class="col-md-5"></td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-4">Twitter URL</td>
                                        <td class="col-md-5"></td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-4">Linkedin URL</td>
                                        <td class="col-md-5"></td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-4">Instagram URL</td>
                                        <td class="col-md-5"></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div> --}}
                            </div>
                          </div>
                          <!-- ====================== -->
                          <!-- Payroll Tab start -->
                          <div class="tab-pane fade" id="payroll" role="tabpanel">
                            <div class="pd-20 profile-task-wrap">
                              <div class="container pd-0">
                                <!-- Open Task start -->
                                <div class="task-title row align-items-center mt-3 mb-3">

                                  <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                      <div class="staffprofile">
                                        <h5>Total Net Salary Paid</h5>
                                        <h4>₹0</h4>
                                        <div class="icon mt12font40">
                                          <i class="fa fa-money"></i>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                      <div class="staffprofile">
                                        <h5>Total Gross Salary</h5>
                                        <h4>₹0</h4>
                                        <div class="icon mt12font40">
                                          <i class="fa fa-money"></i>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                      <div class="staffprofile">
                                        <h5>Total Earning </h5>
                                        <h4>₹0</h4>
                                        <div class="icon mt12font40">
                                          <i class="fa fa-money"></i>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                      <div class="staffprofile">
                                        <h5>Total Deduction</h5>
                                        <h4>₹0</h4>
                                        <div class="icon mt12font40">
                                          <i class="fa fa-money"></i>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                      <tr class="" style="font-size: 13px; color: #012970; ">
                                        <th>S No.</th>
                                        <th>Payslip</th>
                                        <th>Month-Year</th>
                                        <th>Date</th>
                                        <th>Mode</th>
                                        <th>Status</th>
                                        <th>Net Salary</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>

                                    <tbody>
                                      <tr id="task-1" class="task-list-row test-font" data-task-id="1"
                                        data-user="Platinum">
                                        <td>1</td>
                                        <td>Abc123</td>
                                        <td>12-2022</td>
                                        <td>09</td>
                                        <td>-</td>
                                        <td>Approved</td>
                                        <td>10,000</td>
                                        <td>
                                          <div class="d-flex">
                                            <a href="button" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                                            <a href="button" class="btn btn-light ml-1"><i class="fa fa-check"></i></a>
                                            <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                                          </div>
                                        </td>
                                      </tr>

                                      <tr id="task-2" class="task-list-row test-font" data-task-id="2"
                                        data-user="Silver">
                                        <td>2</td>
                                        <td>Abc123</td>
                                        <td>12-2022</td>
                                        <td>09</td>
                                        <td>-</td>
                                        <td>Approved</td>
                                        <td>10,000</td>
                                        <td>
                                          <div class="d-flex">
                                            <a href="button" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                                            <a href="button" class="btn btn-light ml-1"><i class="fa fa-check"></i></a>
                                            <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                                          </div>
                                        </td>
                                      </tr>
                                      </tr>

                                      <tr id="task-3" class="task-list-row test-font" data-task-id="2"
                                        data-user="Diamond">
                                        <td>3</td>
                                        <td>Abc123</td>
                                        <td>12-2022</td>
                                        <td>09</td>
                                        <td>-</td>
                                        <td>Approved</td>
                                        <td>10,000</td>
                                        <td>
                                          <div class="d-flex">
                                            <a href="button" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                                            <a href="button" class="btn btn-light ml-1"><i class="fa fa-check"></i></a>
                                            <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                                          </div>
                                        </td>
                                      </tr>
                                      </tr>

                                    </tbody>
                                  </table>
                                </div>
                                <!-- Open Task End -->
                              </div>
                            </div>
                          </div>
                          <!-- ==================== -->
                          <!-- Leaves Tab start -->
                          <div class="tab-pane fade height-100-p" id="leaves" role="tabpanel">
                            <div class="profile-setting">
                              <div class="task-title row align-items-center mb-3">
                                <hr>
                                <table id="example11" class="table table-bordered table-striped">
                                  <thead>
                                    <tr class="" style="font-size: 13px; color: #012970; ">
                                      <th>S No.</th>
                                      <th>Leave Type</th>
                                      <th>Leave Date</th>
                                      <th>Days</th>
                                      <th>Apply Date</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>

                                  <tbody>
                                    <tr id="task-1" class="task-list-row test-font" data-task-id="1"
                                      data-user="Platinum">
                                      <td>1</td>
                                      <td>Abc</td>
                                      <td>08-12-2022</td>
                                      <td>3</td>
                                      <td>02-12-2022</td>
                                      <td>Approved</td>
                                      <td>
                                        <div class="d-flex">
                                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-check"></i></a>
                                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                                        </div>
                                      </td>
                                    </tr>

                                    <tr id="task-2" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                                      <td>2</td>
                                      <td>Abc</td>
                                      <td>08-12-2022</td>
                                      <td>3</td>
                                      <td>02-12-2022</td>
                                      <td>Approved</td>
                                      <td>
                                        <div class="d-flex">
                                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-check"></i></a>
                                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                                        </div>
                                      </td>
                                    </tr>

                                    <tr id="task-3" class="task-list-row test-font" data-task-id="2"
                                      data-user="Diamond">
                                      <td>3</td>
                                      <td>Abc</td>
                                      <td>08-12-2022</td>
                                      <td>3</td>
                                      <td>02-12-2022</td>
                                      <td>Approved</td>
                                      <td>
                                        <div class="d-flex">
                                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-edit"></i></a>
                                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-check"></i></a>
                                          <a href="button" class="btn btn-light ml-1"><i class="fa fa-times"></i></a>
                                        </div>
                                      </td>
                                    </tr>

                                  </tbody>
                                </table>

                              </div>
                            </div>
                          </div>
                          <!-- ========================= -->
                          <!-- Attendance Tab End -->
                          <div class="tab-pane fade height-100-p" id="attendance" role="tabpanel">
                            <div class="profile-setting">
                              <div class="task-title row align-items-center mt-3 mb-3">
                                <div class="row">
                                  <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="staffprofile">
                                      <h5>Total Present</h5>
                                      <h4>0</h4>
                                      <div class="icon mt12font40">
                                        <i class="fa fa-check-square-o"></i>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="staffprofile">
                                      <h5>Total Late</h5>
                                      <h4>0</h4>
                                      <div class="icon mt12font40">
                                        <i class="fa fa-check-square-o"></i>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="staffprofile">
                                      <h5>Total Absent </h5>
                                      <h4>0</h4>
                                      <div class="icon mt12font40">
                                        <i class="fa fa-check-square-o"></i>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="staffprofile">
                                      <h5>Total Half Day</h5>
                                      <h4>0</h4>
                                      <div class="icon mt12font40">
                                        <i class="fa fa-check-square-o"></i>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="staffprofile">
                                      <h5>Total Holiday</h5>
                                      <h4>0</h4>
                                      <div class="icon mt12font40">
                                        <i class="fa fa-check-square-o"></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <table id="example12" class="table table-bordered table-striped">
                                  <thead>
                                    <tr class="" style="font-size: 13px; color: #012970; ">
                                      <th>S No.</th>
                                      <th>Date</th>
                                      <th>Month</th>
                                    </tr>
                                  </thead>

                                  <tbody>
                                    <tr id="task-1" class="task-list-row test-font" data-task-id="1"
                                      data-user="Platinum">
                                      <td>1</td>
                                      <td>1</td>
                                      <td>Kitty</td>
                                    </tr>

                                    <tr id="task-2" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                                      <td>2</td>
                                      <td>2</td>
                                      <td>Kitty</td>
                                    </tr>

                                    <tr id="task-3" class="task-list-row test-font" data-task-id="2"
                                      data-user="Diamond">
                                      <td>3</td>
                                      <td>3</td>
                                      <td>Kitty</td>
                                    </tr>

                                  </tbody>
                                </table>


                              </div>
                            </div>
                          </div>
                          <!-- ================ -->
                          <!-- Documents Tab End -->
                          <div class="tab-pane fade height-100-p" id="documents" role="tabpanel">
                            <div class="profile-setting">
                              <div class="task-title row align-items-center mb-3">
                                <h6>.....</h6>
                              </div>
                            </div>
                          </div>
                          <!-- ================================= -->
                          <!-- Timeline Tab start -->
                          <div class="tab-pane fade height-100-p" id="timeline" role="tabpanel">
                            <div class="profile-setting">
                              <div class="task-title row align-items-center mt-3 mb-3">
                                <h6>.....</h6>
                              </div>
                            </div>
                          </div>
                          <!-- ==================== -->
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

        </div>
      </section>
    </div>
  </main><!-- End #main -->
@endsection