
<?php $__env->startSection('content'); ?>
<?php
  $user = auth()->user();
?>
      <div class="main-panel">
        <div class="content-wrapper m-0">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4">
                    <h3 class="font-weight-bold">Welcome <?php echo e($data->first_name); ?> <?php echo e($data->last_name); ?></h3>

                  
                </div>
                <div class="col-12 col-xl-4 mb-4">
                  <div class="justify-content-end d-flex">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
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
          <div class="">
            <h5>Homework</h5>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <tr class="" style="font-size: 13px; color: #012970; ">
                        <th>S No.</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Subject Group</th>
                        <th>Subject</th>
                        <th>Homework Date</th>
                        <th>Submission Date</th>
                        <th>Evaluation Date</th>
                        <th>Created By</th>
                        <th>Action</th>
                      </tr>
                  </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $home; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($list->class); ?></td>
                      <td><?php echo e($list->section); ?></td>
                      <td><?php echo e($list->subject_group); ?></td>
                      <td><?php echo e($list->subject); ?></td>
                      <td><?php echo e(date('d-M-Y', strtotime($list->homework_date))); ?></td>
                      <td><?php echo e(date('d-M-Y', strtotime($list->sub_date))); ?></td>
                      <td><?php echo e(date('d-M-Y', strtotime($list->evalu_date))); ?></td>
                      <td><?php echo e($list->teacher); ?> (Teacher)</td>
                    <td>
                      <?php if($list->document): ?>
                      <a href="<?php echo e(url('public/uploads/homework/'.$list->document)); ?>" class="btn btn-light ml-1" download> <img style="display: none;" src="<?php echo e(url('public/uploads/homework/'.$list->document)); ?>" alt="W3Schools"> <i class="fa fa-download"></i></a>
                      <?php else: ?>
                      No Files
                      <?php endif; ?>
                      
                    </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>

          </div>

        </div>
        <!-- content-wrapper ends -->
<?php $__env->stopSection(); ?>
        
<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/student/home-work/index.blade.php ENDPATH**/ ?>