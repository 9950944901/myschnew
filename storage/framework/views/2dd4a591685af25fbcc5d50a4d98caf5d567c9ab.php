
<?php $__env->startSection('content'); ?>



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
        <h5>Exam Schedule</h5>
      </div>

      <hr>
      <div class="row">
        <div class="col-md-12">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr class="" style="font-size: 13px; color: #012970; ">
                <th>S No.</th>
                <th>Class</th>
                <th>Subject</th>
                <th>Exam Group</th>
                <th>Date From</th>
                <th>Start Date</th>
                <th>Duration</th>
                <th>Room No.</th>
                <th>Marks (Max.)</th>
                <th>Marks (Min.)</th>
              </tr>
            </thead>

            <tbody>
                
                <?php $__currentLoopData = $dataexam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                  <td><?php echo e($loop->iteration); ?></td>
                  <td><?php echo e($value->class ?? ''); ?></td>
                  <td><?php echo e($value->subject); ?></td>
                  <td><?php echo e($value->exam_group); ?></td>
                  <td><?php echo e(date('d-M-Y', strtotime($value->date_from))); ?></td>
                  <td><?php echo e(date('H:i A', strtotime($value->start_time))); ?></td>
                  <td><?php echo e($value->duration); ?></td>
                  <td><?php echo e($value->room_no); ?></td>
                  <td><?php echo e($value->max_marks); ?></td>
                  <td><?php echo e($value->min_marks); ?></td>

                
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>

      </div>

    </div>
    <!-- content-wrapper ends -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/student/examinations/exam-schedule1.blade.php ENDPATH**/ ?>