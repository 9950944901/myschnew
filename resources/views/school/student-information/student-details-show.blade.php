@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Student Details Show</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
      <section class="section dashboard">
        <div class="row">
          <!-- left side columns -->
          <div class="col-lg-3">
            <div class="row">
              <div class="card">

                <div class="box box-primary">
                  <div class="box-body box-profile">
                    @if($show->student_image)
                    <img class="profile-user-img img-responsive img-circle"
                    src="{{ url('public/uploads/students/'.$show->student_image) }}"
                    alt="Picture" style="height: 100px!important;">
                    @else
                    <img class="profile-user-img img-responsive img-circle"
                      src="{{ url('public/no_image.png') }}"
                      alt="User profile picture">
                      @endif
                    <h3 class="profile-username text-center">{{ $show->first_name }} {{ $show->last_name }}</h3>

                    <ul class="list-group list-group-unbordered" style="font-size: 14px;">
                      <li class="list-group-item listnoback">
                        <b>Admission No</b> <a class="pull-right text-aqua">{{ $show->admission_no }}</a>
                      </li>

                      <li class="list-group-item listnoback">
                        <b>Roll Number</b> <a class="pull-right text-aqua">{{ $show->roll_no }}</a>
                      </li>
                      <li class="list-group-item listnoback">
                        <b>Class</b> <a class="pull-right text-aqua">{{ $show->class }}</a>
                      </li>
                      <li class="list-group-item listnoback">
                        <b>Section</b> <a class="pull-right text-aqua">{{ $show->section }}</a>
                      </li>
                      {{-- <li class="list-group-item listnoback">
                        <b>RTE</b> <a class="pull-right text-aqua">{{ $show->rte }}</a>
                      </li> --}}
                      <li class="list-group-item listnoback">
                        <b>Gender</b> <a class="pull-right text-aqua">{{ $show->gender }}</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End left side columns -->

          <!-- right side columns -->
          <div class="col-lg-9">
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
                            <a class="nav-link" data-toggle="tab" href="#fees" role="tab">Fees</a>
                          </li> --}}
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
                                        <td class="col-md-4">Admission Date</td>
                                        <td class="col-md-5">
                                          {{ $show->admission_date }}</td>
                                      </tr>
                                      <tr>
                                        <td>Date of Birth</td>
                                        <td>{{ $show->dob }}</td>
                                      </tr>
                                      <tr>
                                        <td>Category</td>
                                        <td>{{ $show->category }}</td>
                                        <td>

                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Mobile Number</td>
                                        <td>{{ $show->mobile_no }}</td>
                                      </tr>
                                      {{-- <tr>
                                        <td>Caste</td>
                                        <td>{{ $show->caste }}</td>
                                      </tr> --}}
                                      <tr>
                                        <td>Religion</td>
                                        <td>{{ $show->religion }}</td>
                                      </tr>
                                      <tr>
                                        <td>Email</td>
                                        <td>{{ $show->email }}</td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-4">Aadhar Number</td>
                                        <td class="col-md-5">{{ $show->aadhaar }}</td>
                                      </tr>
                                      <tr>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tshadow mb25 bozero">
                                {{-- <h3 class="pagetitleh2" style="font-size: 20px;">Address </h3> --}}
                                <div class="table-responsive around10 pt0">
                                  <table class="table table-hover table-striped tmb0">
                                    <tbody>
                                      <tr>
                                        <td class="col-md-4">Address</td>
                                        <td class="col-md-5">{{ $show->stu_address }}</td>
                                      </tr>
                                      {{-- <tr>
                                        <td>Permanent Address</td>
                                        <td></td>
                                      </tr> --}}
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tshadow mb25 bozero">
                                <h3 class="pagetitleh2" style="font-size: 20px;">Parent's / Guardian's Details </h3>
                                <div class="table-responsive around10 pt10">
                                  <table class="table table-hover table-striped tmb0">
                                    <tbody>
                                      <tr>
                                        <td class="col-md-4">Father's Name</td>
                                        <td class="col-md-5">{{ $show->father_name }}</td>
                                        {{-- <td rowspan="3">
                                          @if($show->father_photo)
                                          <img class="profile-user-img img-responsive img-circle"
                                          src="{{ url('public/uploads/father/'.$show->father_photo) }}"
                                          alt="Picture" style="height: 100px!important;">
                                          @else
                                          <img class="profile-user-img img-responsive img-circle"
                                          src="{{ url('public/no_image.png') }}">
                                          @endif
                                         
                                        </td> --}}
                                      </tr>
                                      {{-- <tr>
                                        <td>Father Phone</td>
                                        <td>{{ $show->father_mobile }}</td>
                                      </tr> --}}
                                      <tr>
                                        <td>Father's Occupation</td>
                                        <td>{{ $show->father_occupation }}</td>
                                      </tr>
                                      <tr>
                                        <td>Mother's Name</td>
                                        <td>{{ $show->mother_name }}</td>
                                        {{-- <td rowspan="3">
                                          @if($show->mother_photo)
                                          <img class="profile-user-img img-responsive img-circle"
                                          src="{{ url('public/uploads/mother/'.$show->mother_photo) }}"
                                          alt="Picture" style="height: 100px!important;">
                                          @else
                                          <img class="profile-user-img img-responsive img-circle"
                                            src="{{ url('public/no_image.png') }}">
                                          @endif
                                          
                                        </td> --}}
                                      </tr>
                                      {{-- <tr>
                                        <td>Mother Phone</td>
                                        <td>{{ $show->mother_phone }}</td>

                                      </tr> --}}
                                      {{-- <tr>
                                        <td>Mother Occupation</td>
                                        <td>{{ $show->mother_occu }}</td>
                                      </tr> --}}
                                      <tr>
                                        <td>Guardian's Name</td>
                                        <td>{{ $show->gur_name }}</td>
                                        {{-- <td rowspan="3">
                                          @if($show->gur_photo)
                                          <img class="profile-user-img img-responsive img-circle"
                                          src="{{ url('public/uploads/gur_photo/'.$show->gur_photo) }}"
                                          alt="Picture" style="height: 100px!important;">
                                          @else
                                          <img class="profile-user-img img-responsive img-circle"
                                          src="{{ url('public/no_image.png') }}">
                                          @endif
                                        </td> --}}
                                      </tr>
                                      {{-- <tr>
                                        <td>Guardian Email</td>
                                        <td>{{ $show->gur_email }}</td>
                                      </tr> --}}
                                      <tr>
                                        <td>Guardian's Relation</td>
                                        <td>{{ $show->gur_relation }}</td>
                                      </tr>
                                      <tr>
                                        <td>Guardian's Phone</td>
                                        <td>{{ $show->gur_phone }}</td>
                                      </tr>
                                      {{-- <tr>
                                        <td>Guardian Occupation</td>
                                        <td>{{ $show->gur_occu }}</td>
                                      </tr> --}}
                                      <tr>
                                        <td>Guardian's Address</td>
                                        <td>{{ $show->gur_address }}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tshadow mb25  bozero">
                                {{-- <h3 class="pagetitleh2" style="font-size: 20px;">Miscellaneous Details</h3> --}}
                                <div class="table-responsive around10 pt0">
                                  <table class="table table-hover table-striped tmb0">
                                    <tbody>
                                      {{-- <tr>
                                        <td class="col-md-4">Blood Group</td>
                                        <td class="col-md-5">{{ $show->blood_group }}</td>
                                      </tr> --}}

                                      {{-- <tr>
                                        <td class="col-md-4">Student Address</td>
                                        <td class="col-md-5">{{ $show->stu_house }}</td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-4">Height</td>
                                        <td class="col-md-5">{{ $show->height }}</td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-4">Weight</td>
                                        <td class="col-md-5">{{ $show->weight }}</td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-4">As on Date</td>
                                        <td class="col-md-5">{{ $show->as_on_date }}</td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-4">Previous School Details</td>
                                        <td class="col-md-5">{{ $show->pre_school }}</td>
                                      </tr> --}}

                                  

                                      {{-- <tr>
                                        <td>Local Identification Number</td>
                                        <td>{{ $show->lin_no }}</td>
                                      </tr>
                                      <tr>
                                        <td>Bank Account Number</td>
                                        <td>{{ $show->bank_no }}</td>
                                      </tr>
                                      <tr>
                                        <td>Bank Name</td>
                                        <td>{{ $show->bank_name }}</td>
                                      </tr>
                                      <tr>
                                        <td>IFSC Code</td>
                                        <td>{{ $show->ifsc }}</td>
                                      </tr>
                                       --}}
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
                                <div class="task-title row align-items-center mt-3 mb-3">
                                  <h6>.....</h6>
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
                                <h6>.....</h6>
                                <div class="mt-1">

                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- ========================= -->
                          <!-- Documents Tab End -->
                          <div class="tab-pane fade height-100-p" id="documents" role="tabpanel">
                            <div class="profile-setting">
                              <div class="task-title row align-items-center mt-3 mb-3">
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

                                <div class="text-right p-2 mb-2">
                                  <a href="button" class="btn btn-info" data-toggle="modal"
                                    data-target="#timelineaddModal"><i class="fa fa-plus"></i> Add</a>
                                  <!-- Modal -->
                                  <div class="modal fade" id="timelineaddModal" tabindex="-1" role="dialog"
                                    aria-labelledby="timelineaddModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="leaverequestModalLabel">Add Timeline</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                                <label for="Name">Date</label>
                                                <input type="date" class="form-control neha-text" id="Email"
                                                  placeholder="">
                                              </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                              <div class="form-group1 text-left">
                                                <label for="Name">Description</label>
                                                <textarea name="" class="form-control neha-text" rows="2"
                                                placeholder=""></textarea>
                                              </div>
                                            </div>
                                            
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                              <div class="form-group1 text-left">
                                                <label for="number">Attach Document</label>
                                                <input type="file" name="Profile Image" class="form-control-file"
                                                  id="addImage">
                                              </div>
                                            </div> 
                                            
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                              <div class="form-group1 text-left mt-3">
                                                <label for="Name">Visible to this Person</label>
                                                <input type="checkbox">
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