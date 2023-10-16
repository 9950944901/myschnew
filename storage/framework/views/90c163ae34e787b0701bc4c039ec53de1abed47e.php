
<?php $__env->startSection('content'); ?>
<?php
  $user = auth()->user();
?>
      <div class="main-panel">
        <div class="content-wrapper m-0">
          <div class="row">
            <div class="col-md-12 ">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4">
                  <h3 class="font-weight-bold">Welcome <?php echo e($data->first_name); ?> <?php echo e($data->last_name); ?></h3>
                  
                </div>
                <div class="col-12 col-xl-4 mb-4">
                  <div class="justify-content-end d-flex">
                    <div class="flex-md-grow-1 flex-xl-grow-0">
                      <button class="btn btn-sm btn-light bg-white"  id="dropdownMenuDate2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border: 1px solid #4B49AC">
                        <i class="mdi mdi-calendar"></i> Today (<?php echo e(date('d-M-Y')); ?>)
                      </button>
                      
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
                        src="<?php echo e(url('/')); ?>/public/student/male.jpg"
                        alt="User profile picture">
                      <h3 class="profile-username text-center"><?php echo e($user->name); ?></h3>

                      <ul class="list-group list-group-unbordered" style="font-size: 14px;">
                        <li class="list-group-item listnoback">
                          <b>Admission No</b> <a class="pull-right text-aqua"><?php echo e($data->admission_no); ?></a>
                        </li>

                        <li class="list-group-item listnoback">
                          <b>Roll Number</b> <a class="pull-right text-aqua"><?php echo e($data->roll_no); ?></a>
                        </li>
                        <li class="list-group-item listnoback">
                          <b>Class</b> <a class="pull-right text-aqua"><?php echo e($data->class); ?> <?php echo e($data->session); ?></a>
                        </li>
                        <li class="list-group-item listnoback">
                          <b>Section</b> <a class="pull-right text-aqua"><?php echo e($data->section); ?></a>
                        </li>
                        
                        <li class="list-group-item listnoback">
                          <b>Gender</b> <a class="pull-right text-aqua"><?php echo e($data->gender); ?></a>
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
                                            <?php echo e(date('d/M/Y', strtotime($data->admission_date))); ?> </td>
                                        </tr>
                                        <tr>
                                          <td>Date of Birth</td>
                                          <td><?php echo e(date('d/M/Y', strtotime($data->dob))); ?></td>
                                        </tr>
                                        <tr>
                                          <td>Category</td>
                                          <td>
                                      
                                            <?php echo e($data->category); ?>

                                          </td>
                                        </tr>
                                        <tr>
                                          <td>Mobile Number</td>
                                          <td>
                                            <?php if($data->mobile_no): ?>
                                            +91<?php echo e($data->mobile_no); ?>

                                            <?php else: ?>
                                                
                                            <?php endif; ?>
                                          </td>
                                        </tr>
                                        
                                        <tr>
                                          <td>Religion</td>
                                          <td><?php echo e($data->religion); ?></td>
                                        </tr>
                                        <tr>
                                          <td>Email</td>
                                          <td><?php echo e($data->email); ?></td>
                                        </tr>
                                        
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <hr>
                                <div class="tshadow mb25 bozero">
                                  
                                  <div class="table-responsive around10 pt0">
                                    <table class="table table-hover table-striped tmb0">
                                      <tbody>
                                        
                                          <td class="col-md-4">Student Address</td>
                                          <td class="col-md-5"><?php echo e($data->stu_address); ?></td>
                                        </tr>
                                        <tr>
                                          <td class="col-md-4">Aadhar Number</td>
                                          <td class="col-md-5"><?php echo e($data->aadhaar); ?></td>
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
                                          <td class="col-md-5"><?php echo e($data->father_name); ?></td>
                                          
                                        </tr>
                                        
                                        <tr>
                                          <td>Father Occupation</td>
                                          <td><?php echo e($data->father_occupation); ?></td>
                                        </tr>
                                        <tr>
                                          <td>Mother Name</td>
                                          <td>
                                            <?php echo e($data->mother_name); ?>

                                          </td>
                                          
                                        </tr>
                                        

                                        

                                        <tr>
                                          <td>Guardian Name</td>
                                          <td><?php echo e($data->gur_name); ?></td>
                                          
                                        </tr>
                                        
                                        <tr>
                                          <td>Guardian Relation</td>
                                          <td><?php echo e($data->gur_relation); ?></td>
                                        </tr>
                                        <tr>
                                          <td>Guardian Phone</td>
                                          <td>
                                            <?php if($data->gur_phone): ?>
                                            +91<?php echo e($data->gur_phone); ?>

                                          <?php else: ?>
                                              
                                          <?php endif; ?>
                                          </td>
                                        </tr>
                                        
                                        <tr>
                                          <td>Guardian Address</td>
                                          <td><?php echo e($data->gur_address); ?></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <hr>
                                <div class="tshadow mb25  bozero">
                                  
                                  <div class="table-responsive around10 pt0">
                                    <table class="table table-hover table-striped tmb0">
                                      <tbody class="">
                                        
                                  

                                      
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
                                              
                                              <th>Status</th>
                                              <th>Amount</th>
                                              
                                              <th>Session</th>
                                              <th>Mode</th>
                                              <th>Date</th>
                                              
                                              <th>Paid</th>
                                              
                                            </tr>
                                          </thead>

                                          <tbody>
                                            <?php $__currentLoopData = $fees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              
                                            <tr id="task-1" class="task-list-row test-font" data-task-id="1">
                                              <td><?php echo e($loop->iteration); ?></td>
                                              <td><?php echo e($info->fees_group); ?></td>
                                              <td>SFS<?php echo e($info->id); ?></td>
                                              
                                              <td><a href="button" class="btn btn-success">Paid</a></td>
                                              <td><?php echo e($info->total); ?></td>
                                              
                                              <td><?php echo e($info->user_id); ?></td>
                                              <td><?php echo e($info->payment_mode); ?></td>
                                              <td><?php echo e(date('d-M-Y', strtotime($info->date))); ?></td>
                                              
                                              
                                              <td>Success</td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                          </tbody>
                                        </table>
                                        <p><b>Total Amount = <?php echo e($sum); ?> /-</b></p>
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



<?php $__env->stopSection(); ?>
        
<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/student/dashboard/index.blade.php ENDPATH**/ ?>