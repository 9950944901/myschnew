
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
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
                    <?php if($show->student_image): ?>
                    <img class="profile-user-img img-responsive img-circle"
                    src="<?php echo e(url('public/uploads/students/'.$show->student_image)); ?>"
                    alt="Picture" style="height: 100px!important;">
                    <?php else: ?>
                    <img class="profile-user-img img-responsive img-circle"
                      src="<?php echo e(url('public/no_image.png')); ?>"
                      alt="User profile picture">
                      <?php endif; ?>
                    <h3 class="profile-username text-center"><?php echo e($show->first_name); ?> <?php echo e($show->last_name); ?></h3>

                    <ul class="list-group list-group-unbordered" style="font-size: 14px;">
                      <li class="list-group-item listnoback">
                        <b>Admission No</b> <a class="pull-right text-aqua"><?php echo e($show->admission_no); ?></a>
                      </li>

                      <li class="list-group-item listnoback">
                        <b>Roll Number</b> <a class="pull-right text-aqua"><?php echo e($show->roll_no); ?></a>
                      </li>
                      <li class="list-group-item listnoback">
                        <b>Class</b> <a class="pull-right text-aqua"><?php echo e($show->class); ?></a>
                      </li>
                      <li class="list-group-item listnoback">
                        <b>Section</b> <a class="pull-right text-aqua"><?php echo e($show->section); ?></a>
                      </li>
                      
                      <li class="list-group-item listnoback">
                        <b>Gender</b> <a class="pull-right text-aqua"><?php echo e($show->gender); ?></a>
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
                                          <?php echo e($show->admission_date); ?></td>
                                      </tr>
                                      <tr>
                                        <td>Date of Birth</td>
                                        <td><?php echo e($show->dob); ?></td>
                                      </tr>
                                      <tr>
                                        <td>Category</td>
                                        <td><?php echo e($show->category); ?></td>
                                        <td>

                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Mobile Number</td>
                                        <td><?php echo e($show->mobile_no); ?></td>
                                      </tr>
                                      
                                      <tr>
                                        <td>Religion</td>
                                        <td><?php echo e($show->religion); ?></td>
                                      </tr>
                                      <tr>
                                        <td>Email</td>
                                        <td><?php echo e($show->email); ?></td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-4">Aadhar Number</td>
                                        <td class="col-md-5"><?php echo e($show->aadhaar); ?></td>
                                      </tr>
                                      <tr>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tshadow mb25 bozero">
                                
                                <div class="table-responsive around10 pt0">
                                  <table class="table table-hover table-striped tmb0">
                                    <tbody>
                                      <tr>
                                        <td class="col-md-4">Address</td>
                                        <td class="col-md-5"><?php echo e($show->stu_address); ?></td>
                                      </tr>
                                      
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
                                        <td class="col-md-5"><?php echo e($show->father_name); ?></td>
                                        
                                      </tr>
                                      
                                      <tr>
                                        <td>Father's Occupation</td>
                                        <td><?php echo e($show->father_occupation); ?></td>
                                      </tr>
                                      <tr>
                                        <td>Mother's Name</td>
                                        <td><?php echo e($show->mother_name); ?></td>
                                        
                                      </tr>
                                      
                                      
                                      <tr>
                                        <td>Guardian's Name</td>
                                        <td><?php echo e($show->gur_name); ?></td>
                                        
                                      </tr>
                                      
                                      <tr>
                                        <td>Guardian's Relation</td>
                                        <td><?php echo e($show->gur_relation); ?></td>
                                      </tr>
                                      <tr>
                                        <td>Guardian's Phone</td>
                                        <td><?php echo e($show->gur_phone); ?></td>
                                      </tr>
                                      
                                      <tr>
                                        <td>Guardian's Address</td>
                                        <td><?php echo e($show->gur_address); ?></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tshadow mb25  bozero">
                                
                                <div class="table-responsive around10 pt0">
                                  <table class="table table-hover table-striped tmb0">
                                    <tbody>
                                      

                                      

                                  

                                      
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/school/student-information/student-details-show.blade.php ENDPATH**/ ?>