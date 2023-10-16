
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
      <?php
      use Carbon\Carbon;
       $now = Carbon::now();
       $nows = Carbon::now()->format('d/m/Y');
        $weekStartDate = $now->startOfWeek()->format('d/m/Y');
        $weekEndDate = $now->endOfWeek()->format('d/m/Y');
      ?>
<style>
  .box_set{
    background: #f5f7ff;
    border: 1px solid #5552526b;
    color: #090909;
    box-shadow: 0px 0px 5px #97b6d5;
}
</style>
      <div class="row">
        <div class="col-md-12 ">
          <div class="card">
            <div class="card-body">
              <h5>Lesson Plan</h5>
              <hr>
              <h5 class="text-center mt-3 mb-2" style="font-size: 17px;"> <?php echo e($weekStartDate); ?> To <?php echo e($weekEndDate); ?> </h5>

              <div class="row p-3">
                <div class="col-lg-2 col-md-4 col-sm-12">
                  <h6 class="text-center p-2" style="font-size: 14px;">Monday</h6>
                  <h6 class="text-center mb-2" style="font-size: 14px;"><?php echo e($weekStartDate1 = $now->startOfWeek()->format('d/m/Y')); ?></h6>
                  <div class="text-center">
                    <?php if($weekStartDate1 == $nows): ?>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="#" class="btn btn-light mt-2 box_set">
                        <div style="font-size: 12px;">Class:- <?php echo e($value->class); ?> ,
                        Section:- <?php echo e($value->section); ?>, Sub. Group:- <?php echo e($value->subject_group); ?>, Subject:- <?php echo e($value->subject); ?>, 
                      </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    Not Scheduled
                    <?php endif; ?>
                  </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12">
                  <h6 class="text-center p-2" style="font-size: 14px;">Tuesday</h6>
                  <h6 class="text-center mb-2" style="font-size: 14px;"><?php echo e($weekStartDate2 = $now->startOfWeek()->addDays(1)->format('d/m/Y')); ?></h6>
                  <div class="text-center">
                    <?php if($weekStartDate2 == $nows): ?>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="#" class="btn btn-light mt-2 box_set">
                        <div style="font-size: 12px;">Class:- <?php echo e($value->class); ?> ,
                        Section:- <?php echo e($value->section); ?>, Sub. Group:- <?php echo e($value->subject_group); ?>, Subject:- <?php echo e($value->subject); ?>, 
                      </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    Not Scheduled
                    <?php endif; ?>
                  </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12">
                  <h6 class="text-center p-2" style="font-size: 14px;">Wednesday</h6>
                  <h6 class="text-center mb-2" style="font-size: 14px;"><?php echo e($weekStartDate3 = $now->startOfWeek()->addDays(2)->format('d/m/Y')); ?></h6>
                  <div class="text-center">
                    <?php if($weekStartDate3 == $nows): ?>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="#" class="btn btn-light mt-2 box_set">
                        <div style="font-size: 12px;">Class:- <?php echo e($value->class); ?> ,
                        Section:- <?php echo e($value->section); ?>, Sub. Group:- <?php echo e($value->subject_group); ?>, Subject:- <?php echo e($value->subject); ?>, 
                      </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    Not Scheduled
                    <?php endif; ?>
                  </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12">
                  <h6 class="text-center p-2" style="font-size: 14px;">Thrusday</h6>
                  <h6 class="text-center mb-2" style="font-size: 14px;"><?php echo e($weekStartDate4 = $now->startOfWeek()->addDays(3)->format('d/m/Y')); ?></h6>
                  <div class="text-center">
                    <?php if($weekStartDate4 == $nows): ?>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="#" class="btn btn-dark mt-2 box_set">
                        <div style="font-size: 12px;">Class:- <?php echo e($value->class); ?> ,
                        Section:- <?php echo e($value->section); ?>, Sub. Group:- <?php echo e($value->subject_group); ?>, Subject:- <?php echo e($value->subject); ?>, 
                      </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    Not Scheduled
                    <?php endif; ?>
                  </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12">
                  <h6 class="text-center p-2" style="font-size: 14px;">Friday</h6>
                  <h6 class="text-center mb-2" style="font-size: 14px;"><?php echo e($weekStartDate5 = $now->startOfWeek()->addDays(4)->format('d/m/Y')); ?></h6>
                  <div class="text-center">
                    <?php if($weekStartDate5 == $nows): ?>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="#" class="btn btn-light mt-2 box_set">
                        <div style="font-size: 12px;">Class:- <?php echo e($value->class); ?> ,
                        Section:- <?php echo e($value->section); ?>, Sub. Group:- <?php echo e($value->subject_group); ?>, Subject:- <?php echo e($value->subject); ?>, 
                      </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    Not Scheduled
                    <?php endif; ?>
                  </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12">
                  <h6 class="text-center p-2" style="font-size: 14px;">Saturday</h6>
                  <h6 class="text-center mb-2" style="font-size: 14px;"><?php echo e($weekStartDate6 = $now->startOfWeek()->addDays(5)->format('d/m/Y')); ?></h6>
                  <div class="text-center">
                    <?php if($weekStartDate6 == $nows): ?>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="#" class="btn btn-light mt-2 box_set">
                        <div style="font-size: 12px;">Class:- <?php echo e($value->class); ?> ,
                        Section:- <?php echo e($value->section); ?>, Sub. Group:- <?php echo e($value->subject_group); ?>, Subject:- <?php echo e($value->subject); ?>, 
                      </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    Not Scheduled
                    <?php endif; ?>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </div>
    <!-- content-wrapper ends -->
    




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/student/lesson-plan/index.blade.php ENDPATH**/ ?>