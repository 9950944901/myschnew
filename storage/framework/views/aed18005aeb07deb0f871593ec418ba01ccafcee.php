
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
        <div class="col-md-12 ">
          <div class="card">
            <div class="card-body">
              <h5 class="mt-3">Student Fees</h5>
              <hr>
              <div class="row mb-2">
                <div class="col-lg-2 col-md-6 col-sm-12">
                  <div>
                    <?php if($data->student_image): ?>
                    <img src="<?php echo e(url('public/uploads/students/'.$data->student_image)); ?>" width="100" height="100">
                    <?php else: ?>
                    <img src="<?php echo e(url('/')); ?>/public/student/male.jpg" width="100">
                    <?php endif; ?>
                  </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                  <div class="ml-1 mr-2">
                    <div class="d-flex justify-content-between">
                      <p class="mb-1"><b>Name</b></p>
                      <p class="mb-1"><?php echo e($data->first_name); ?> <?php echo e($data->last_name); ?></p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-1"><b>Father Name </b></p>
                      <p class="mb-1"><?php echo e($data->father_name); ?></p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-1"><b>Mobile No.</b></p>
                      <p class="mb-1">+91<?php echo e($data->mobile_no); ?></p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-1"><b>Category</b></p>
                      <p class="mb-1"><?php echo e($data->category); ?></p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-1"><b>Total Fees (<?php echo e($gener->session ?? ''); ?>)</b></p>
                      <p class="mb-1">₹<?php echo e($sum); ?>/-</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-5 col-md-6 col-sm-12">
                  <div class="ml-1 mr-2">
                    <div class="d-flex justify-content-between">
                      <p class="mb-1"><b>Class Section</b></p>
                      <p class="mb-1"><?php echo e($data->class); ?> (<?php echo e($data->section); ?>)</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="mb-1"><b>Admission No</b></p>
                      <p class="mb-1"><?php echo e($data->admission_no); ?>

                      </p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="mb-1"><b>Roll Number</b></p>
                      <p class="mb-1"><?php echo e($data->roll_no); ?></p>
                    </div>
                    
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-12">
          <table id="example1" class="table table-bordered table-striped">
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
                  
                  <td><a  class="btn btn-success">Paid</a></td>
                  <td><?php echo e($info->total); ?></td>
                  
                  <td><?php echo e($info->user_id); ?></td>
                  <td><?php echo e($info->payment_mode); ?></td>
                  <td><?php echo e(date('d/m/Y', strtotime($info->date))); ?></td>
                  
                  
                  <td>Success</td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
          </table>
        </div>

      </div>

    </div>


<?php $__env->stopSection(); ?>
        
<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/student/fees/index.blade.php ENDPATH**/ ?>