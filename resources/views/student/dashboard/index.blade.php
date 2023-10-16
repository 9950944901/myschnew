@extends('layouts.student')
@section('content')
@php
  $user = auth()->user();
@endphp
      <div class="main-panel">
        <div class="content-wrapper m-0">
          <div class="row">
            <div class="col-md-12 ">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4">
                  <h3 class="font-weight-bold">Welcome {{ $data->first_name }} {{ $data->last_name }}</h3>
                  {{-- <h6 class="font-weight-normal mb-0"> <span
                      class="text-primary">3 unread alerts!</span></h6> --}}
                </div>
                <div class="col-12 col-xl-4 mb-4">
                  <div class="justify-content-end d-flex">
                    <div class="flex-md-grow-1 flex-xl-grow-0">
                      <button class="btn btn-sm btn-light bg-white"  id="dropdownMenuDate2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border: 1px solid #4B49AC">
                        <i class="mdi mdi-calendar"></i> Today ({{ date('d-M-Y') }})
                      </button>
                      {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                        <a class="dropdown-item" href="#">January - March</a>
                        <a class="dropdown-item" href="#">March - June</a>
                        <a class="dropdown-item" href="#">June - August</a>
                        <a class="dropdown-item" href="#">August - November</a>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 ">
              <div class="card">
                <div class="card-body">
                  <div class="box box-primary">
                    <div class="box-body box-profile">
                      <img class="profile-user-img img-responsive img-circle" 
                        src="{{ url('/') }}/public/student/male.jpg"
                        alt="User profile picture">
                      <h3 class="profile-username text-center">{{ $user->name }}</h3>

                      <ul class="list-group list-group-unbordered" style="font-size: 14px;">
                        <li class="list-group-item listnoback">
                          <b>Admission No</b> <a class="pull-right text-aqua">{{ $data->admission_no }}</a>
                        </li>

                        <li class="list-group-item listnoback">
                          <b>Roll Number</b> <a class="pull-right text-aqua">{{ $data->roll_no }}</a>
                        </li>
                        <li class="list-group-item listnoback">
                          <b>Class</b> <a class="pull-right text-aqua">{{ $data->class }} {{ $data->session }}</a>
                        </li>
                        <li class="list-group-item listnoback">
                          <b>Section</b> <a class="pull-right text-aqua">{{ $data->section }}</a>
                        </li>
                        {{-- <li class="list-group-item listnoback">
                          <b>RTE</b> <a class="pull-right text-aqua">{{ $data->rte }}</a>
                        </li> --}}
                        <li class="list-group-item listnoback">
                          <b>Gender</b> <a class="pull-right text-aqua">{{ $data->gender }}</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-9 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="activity">
                    <div class="card-box height-100-p overflow-hidden">
                      <div class="profile-tab height-100-p">
                        <div class="tab height-100-p">
                          <ul class="nav nav-tabs customtab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#fees" role="tab">Fees</a>
                            </li>
                            {{-- <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#exam" role="tab">Exam</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#documents" role="tab">Documents</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#timeline" role="tab">Timeline</a>
                            </li> --}}
                          </ul>
                          <div class="tab-content p-0 mt-2">
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
                                          <td class="col-md-4">Admission Date</td>
                                          <td class="col-md-5">
                                            {{ date('d/M/Y', strtotime($data->admission_date)) }} </td>
                                        </tr>
                                        <tr>
                                          <td>Date of Birth</td>
                                          <td>{{ date('d/M/Y', strtotime($data->dob)) }}</td>
                                        </tr>
                                        <tr>
                                          <td>Category</td>
                                          <td>
                                      
                                            {{ $data->category }}
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>Mobile Number</td>
                                          <td>
                                            @if ($data->mobile_no)
                                            +91{{ $data->mobile_no }}
                                            @else
                                                
                                            @endif
                                          </td>
                                        </tr>
                                        {{-- <tr>
                                          <td>Caste</td>
                                          <td>{{ $data->caste }}</td>
                                        </tr> --}}
                                        <tr>
                                          <td>Religion</td>
                                          <td>{{ $data->religion }}</td>
                                        </tr>
                                        <tr>
                                          <td>Email</td>
                                          <td>{{ $data->email }}</td>
                                        </tr>
                                        
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <hr>
                                <div class="tshadow mb25 bozero">
                                  {{-- <h3 class="pagetitleh2" style="font-size: 20px;">Address </h3> --}}
                                  <div class="table-responsive around10 pt0">
                                    <table class="table table-hover table-striped tmb0">
                                      <tbody>
                                        {{-- <tr>
                                          <td class="col-md-4">Current Address</td>
                                          <td class="col-md-5">{{ $data->stu_house }}</td>
                                        </tr>
                                        <tr>
                                          <td>Permanent Address</td>
                                          <td>{{ $data->gur_address }}</td>
                                        </tr>
                                        <tr> --}}
                                          <td class="col-md-4">Student Address</td>
                                          <td class="col-md-5">{{ $data->stu_address }}</td>
                                        </tr>
                                        <tr>
                                          <td class="col-md-4">Aadhar Number</td>
                                          <td class="col-md-5">{{ $data->aadhaar }}</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <hr>
                                <div class="tshadow mb25 bozero">
                                  <h3 class="pagetitleh2" style="font-size: 20px;">Parent's / Guardian's Details </h3>
                                  <div class="table-responsive around10 pt10">
                                    <table class="table table-hover table-striped tmb0">
                                      <tbody>
                                        <tr>
                                          <td class="col-md-4">Father Name</td>
                                          <td class="col-md-5">{{ $data->father_name }}</td>
                                          {{-- <td rowspan="3">
                                            <img class="profile-user-img img-responsive img-circle"
                                              src="{{ url('/') }}/public/student/male.jpg">
                                          </td> --}}
                                        </tr>
                                        {{-- <tr>
                                          <td>Father Phone</td>
                                          <td>
                                          @if ($data->father_mobile)
                                          +91{{ $data->father_mobile }}
                                          @else
                                              
                                          @endif
                                          
                                          </td>
                                        </tr> --}}
                                        <tr>
                                          <td>Father Occupation</td>
                                          <td>{{ $data->father_occupation }}</td>
                                        </tr>
                                        <tr>
                                          <td>Mother Name</td>
                                          <td>
                                            {{ $data->mother_name }}
                                          </td>
                                          {{-- <td rowspan="3"><img class="profile-user-img img-responsive img-circle"
                                              src="{{ url('/') }}/public/student/male.jpg">
                                          </td> --}}
                                        </tr>
                                        {{-- <tr>
                                          <td>Mother Phone</td>
                                          <td>
                                            @if ($data->mother_phone)
                                            +91{{ $data->mother_phone }}
                                            @else
                                            @endif
                                          </td>
                                        </tr> --}}

                                        {{-- <tr>
                                          <td>Mother Occupation</td>
                                          <td>{{ $data->mother_occu }}</td>
                                        </tr> --}}

                                        <tr>
                                          <td>Guardian Name</td>
                                          <td>{{ $data->gur_name }}</td>
                                          {{-- <td rowspan="3">
                                            <img class="profile-user-img img-responsive img-circle"
                                              src="{{ url('/') }}/public/student/male.jpg">
                                          </td> --}}
                                        </tr>
                                        {{-- <tr>
                                          <td>Guardian Email</td>
                                          <td>{{ $data->gur_email }}</td>
                                        </tr> --}}
                                        <tr>
                                          <td>Guardian Relation</td>
                                          <td>{{ $data->gur_relation }}</td>
                                        </tr>
                                        <tr>
                                          <td>Guardian Phone</td>
                                          <td>
                                            @if ($data->gur_phone)
                                            +91{{ $data->gur_phone }}
                                          @else
                                              
                                          @endif
                                          </td>
                                        </tr>
                                        {{-- <tr>
                                          <td>Guardian Occupation</td>
                                          <td>{{ $data->gur_occu }}</td>
                                        </tr> --}}
                                        <tr>
                                          <td>Guardian Address</td>
                                          <td>{{ $data->gur_address }}</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <hr>
                                <div class="tshadow mb25  bozero">
                                  {{-- <h3 class="pagetitleh2" style="font-size: 20px;">Miscellaneous Details</h3> --}}
                                  <div class="table-responsive around10 pt0">
                                    <table class="table table-hover table-striped tmb0">
                                      <tbody class="">
                                        {{-- <tr>
                                          <td class="col-md-4">Blood Group</td>
                                          <td class="col-md-5">{{ $data->blood_group }}</td>
                                        </tr>
                                       
                                        <tr>
                                          <td class="col-md-4">Height</td>
                                          <td class="col-md-5">{{ $data->height }}</td>
                                        </tr>
                                        <tr>
                                          <td class="col-md-4">Weight</td>
                                          <td class="col-md-5">{{  $data->weight }}</td>
                                        </tr>
                                        <tr>
                                          <td class="col-md-4">As on Date</td>
                                         @if($data->as_on_date) 
                                         <td class="col-md-5">{{ date('d/m/Y', strtotime($data->as_on_date)) }}</td>
                                         @else
                                         <td class="col-md-5"></td>
                                         @endif
                                        </tr>
                                         --}}
                                  

                                      {{--                                         
                                        <tr>
                                          <td class="col-md-4">Previous School Details</td>
                                          <td class="col-md-5">{{ $data->pre_school }}</td>
                                        </tr>
                                     
                                        <tr>
                                          <td>Local Identification Number</td>
                                          <td>{{ $data->lin_no }}</td>
                                        </tr>
                                        <tr>
                                          <td>Bank Account Number</td>
                                          <td>{{ $data->bank_no }}</td>
                                        </tr>
                                        <tr>
                                          <td>Bank Name</td>
                                          <td>{{ $data->bank_name }}</td>
                                        </tr>
                                        <tr>
                                          <td>IFSC Code</td>
                                          <td>{{ $data->ifsc }}</td>
                                        </tr> --}}
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- ====================== -->
                            <!-- Fees Tab start -->
                            <div class="tab-pane fade" id="fees" role="tabpanel">
                              <div class="pd-20 profile-task-wrap">
                                <div class="container pd-0">
                                  <!-- Open Task start -->
                                  <div class="task-title row mt-3 mb-3">
                                    <div class="col-md-12">
                                      <div style="overflow-x:auto;">
                                        <table id="example9" class="table table-bordered table-striped">
                                          <thead>
                                            <tr class="" style="font-size: 13px; color: #012970; ">
                                              <th>S No.</th>
                                              <th>Fees Group</th>
                                              <th>Fees Code</th>
                                              {{-- <th>Due Date</th> --}}
                                              <th>Status</th>
                                              <th>Amount</th>
                                              {{-- <th>Payment Id</th> --}}
                                              <th>Session</th>
                                              <th>Mode</th>
                                              <th>Date</th>
                                              {{-- <th>Discount</th>
                                              <th>Fine</th> --}}
                                              <th>Paid</th>
                                              {{-- <th>Balance</th> --}}
                                            </tr>
                                          </thead>

                                          <tbody>
                                            @foreach ($fees as $info)
                                              
                                            <tr id="task-1" class="task-list-row test-font" data-task-id="1">
                                              <td>{{ $loop->iteration }}</td>
                                              <td>{{ $info->fees_group }}</td>
                                              <td>SFS{{ $info->id }}</td>
                                              {{-- <td>-</td> --}}
                                              <td><a href="button" class="btn btn-success">Paid</a></td>
                                              <td>{{ $info->total }}</td>
                                              {{-- <td>-</td> --}}
                                              <td>{{ $info->user_id }}</td>
                                              <td>{{ $info->payment_mode }}</td>
                                              <td>{{ date('d-M-Y', strtotime($info->date)) }}</td>
                                              {{-- <td>-</td>
                                              <td>-</td> --}}
                                              {{-- <td>1900.00</td> --}}
                                              <td>Success</td>
                                            </tr>
                                            @endforeach


                                          </tbody>
                                        </table>
                                        <p><b>Total Amount = {{ $sum }} /-</b></p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="profile-task-list pb-30">

                                  </div>
                                  <!-- Open Task End -->
                                </div>
                              </div>
                            </div>
                            <!-- ==================== -->
                            <!-- Exam Tab start -->
                            <div class="tab-pane fade height-100-p" id="exam" role="tabpanel">
                              <div class="profile-setting">
                                <div class="task-title row align-items-center mt-3 mb-3">
                                  <h6></h6>
                                  <div class="mt-1">

                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- ========================= -->
                            <!-- Documents Tab End -->
                            <div class="tab-pane fade height-100-p" id="documents" role="tabpanel">
                              <div class="profile-setting">
                                {{-- <div class="task-title row mb-3">
                                  <div class="col-md-12">
                                    <div class="text-right p-2 mb-2">
                                      <a href="button" class="btn btn-info" data-toggle="modal"
                                        data-target="#uploaddocumentsModal"><i class="fa fa-upload"></i> Upload
                                        Documents</a>
                                      <!-- Modal -->
                                      <div class="modal fade" id="uploaddocumentsModal" tabindex="-1" role="dialog"
                                        aria-labelledby="uploaddocumentsModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="leaverequestModalLabel">Upload Documents</h5>
                                              <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                  <div class="form-group1 text-left">
                                                    <label for="Name">Title</label>
                                                    <input type="text" class="form-control neha-text" id="Email"
                                                      placeholder="">
                                                  </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                  <div class="form-group1 text-left">
                                                    <label for="number">Documents</label>
                                                    <input type="file" name="Profile Image" class="form-control-file"
                                                      id="addImage">
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
                                  </div>

                                  <div class="col-md-12">
                                    <div style="overflow-x:auto;">
                                      <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                          <tr class="" style="font-size: 13px; color: #012970; ">
                                            <th>S No.</th>
                                            <th>Title</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                          </tr>
                                        </thead>

                                        <tbody>
                                          <tr id="task-1" class="task-list-row test-font" data-task-id="1"
                                            data-user="Platinum">
                                            <td>1</td>
                                            <td>Abc</td>
                                            <td>Kitty</td>
                                            <td>
                                              <div class="d-flex">
                                                <a href="button" class="btn btn-light ml-1"><i
                                                    class="fa fa-edit"></i></a>
                                                <a href="button" class="btn btn-light ml-1"><i
                                                    class="fa fa-check"></i></a>
                                                <a href="button" class="btn btn-light ml-1"><i
                                                    class="fa fa-times"></i></a>
                                              </div>
                                            </td>
                                          </tr>

                                          <tr id="task-2" class="task-list-row test-font" data-task-id="2"
                                            data-user="Silver">
                                            <td>2</td>
                                            <td>Abc</td>
                                            <td>Kitty</td>
                                            <td>
                                              <div class="d-flex">
                                                <a href="button" class="btn btn-light ml-1"><i
                                                    class="fa fa-edit"></i></a>
                                                <a href="button" class="btn btn-light ml-1"><i
                                                    class="fa fa-check"></i></a>
                                                <a href="button" class="btn btn-light ml-1"><i
                                                    class="fa fa-times"></i></a>
                                              </div>
                                            </td>
                                          </tr>

                                          <tr id="task-3" class="task-list-row test-font" data-task-id="2"
                                            data-user="Diamond">
                                            <td>3</td>
                                            <td>Abc</td>
                                            <td>Kitty</td>
                                            <td>
                                              <div class="d-flex">
                                                <a href="button" class="btn btn-light ml-1"><i
                                                    class="fa fa-edit"></i></a>
                                                <a href="button" class="btn btn-light ml-1"><i
                                                    class="fa fa-check"></i></a>
                                                <a href="button" class="btn btn-light ml-1"><i
                                                    class="fa fa-times"></i></a>
                                              </div>
                                            </td>
                                          </tr>

                                          <tr id="task-4" class="task-list-row test-font" data-task-id="2"
                                            data-user="Silver">
                                            <td>4</td>
                                            <td>Abc</td>
                                            <td>Kitty</td>
                                            <td>
                                              <div class="d-flex">
                                                <a href="button" class="btn btn-light ml-1"><i
                                                    class="fa fa-edit"></i></a>
                                                <a href="button" class="btn btn-light ml-1"><i
                                                    class="fa fa-check"></i></a>
                                                <a href="button" class="btn btn-light ml-1"><i
                                                    class="fa fa-times"></i></a>
                                              </div>
                                            </td>
                                          </tr>

                                          <tr id="task-5" class="task-list-row test-font" data-task-id="2"
                                            data-user="Gold">
                                            <td>5</td>
                                            <td>Abc</td>
                                            <td>Kitty</td>
                                            <td>
                                              <div class="d-flex">
                                                <a href="button" class="btn btn-light ml-1"><i
                                                    class="fa fa-edit"></i></a>
                                                <a href="button" class="btn btn-light ml-1"><i
                                                    class="fa fa-check"></i></a>
                                                <a href="button" class="btn btn-light ml-1"><i
                                                    class="fa fa-times"></i></a>
                                              </div>
                                            </td>
                                          </tr>

                                        </tbody>
                                      </table>
                                    </div>
                                  </div>

                                </div> --}}
                              </div>
                            </div>
                            <!-- ================================= -->
                            <!-- Timeline Tab start -->
                            <div class="tab-pane fade height-100-p" id="timeline" role="tabpanel">
                              <div class="profile-setting">
                                <div class="task-title row align-items-center mt-3 mb-3">
                                  <h6></h6>
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
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->



@endsection
        