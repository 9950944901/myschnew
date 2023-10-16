
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('Teacher.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Human Resource</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
      <section class="section dashboard">
        <div class="card">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="p-3">
                <ul class="nav nav-tabs customtab" role="tablist" style="font-size: 14px;">
                  <!-- <li class="nav-item" style="display: none;">
                    <a class="nav-link active" onclick="filterSelection('all')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i></a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('staff')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Staff Report</a>
                  </li>
                  
                
                </ul>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv staff p-4">
                
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Staff Report</h5>
                </div>
                <div style="overflow-x:auto;">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Staff Id</th>
                      <th>Role</th>
                 
                      <th>Department</th>
                      <th>Name</th>
                      <th>Father Name</th>
                      <th>Mother Name</th>
                      <th>Email</th>
                      <th>Gender</th>
                      <th>Date of Birth</th>
                      <th>Date of Joining</th>
                      <th>Phone</th>
                      <th>Emergency Contact Number</th>
                      <th>Marital Status</th>
                      <th>Current Address</th>
                      <th>Permanent Address</th>
                      <th>Qualification</th>
                      <th>Work Experience</th>
          
                      <th>Status</th>                  
                    </tr>
                  </thead>

                  <tbody>
                    <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($info->staff_id); ?></td>
                      <td><?php echo e($info->role); ?></td>
                      
                      <td><?php echo e($info->department); ?></td>
                      <td><?php echo e($info->firstname); ?> <?php echo e($info->lastname); ?></td>
                      <td><?php echo e($info->father_name); ?></td>
                      <td><?php echo e($info->mother_name); ?></td>
                      <td><?php echo e($info->email); ?></td>
                      <td><?php echo e($info->gender); ?></td>
                      <td><?php echo e(date('d-M-Y', strtotime($info->dob))); ?></td>
                      <td><?php echo e(date('d-M-Y', strtotime($info->joining_date))); ?></td>
                      <td><?php echo e($info->phone); ?></td>
                      <td><?php echo e($info->contact_no); ?></td>
                      <td><?php echo e($info->marital_status); ?></td>
                      <td><?php echo e($info->cadd); ?></td>
                      <td><?php echo e($info->padd); ?></td>
                      <td><?php echo e($info->qualification); ?></td>
                      <td><?php echo e($info->work_exp); ?></td>
                      
                      <td>
                        <?php if($info->status==0): ?>
                        Active
                        <?php else: ?>
                        Inactive
                        <?php endif; ?>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                </table>
              </div>
              </div>
            </div>

            


          </div>
        </div>
        <hr>
    </div>

    </section>
    </div>
  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/teacher/reports/human-resource.blade.php ENDPATH**/ ?>