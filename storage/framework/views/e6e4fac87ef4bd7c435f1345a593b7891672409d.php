
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
                  <h5>Class Timetable</h5>
                  <hr>
                   <!-- <h5 class="text-center mt-3 mb-2" style="font-size: 17px;"> 05/12/2022 To 11/12/2022 </h5> -->
                    <div class="row p-3">                    
                      <div class="col-lg-2 col-md-4 col-sm-12">
                        <h6 class="text-center p-2" style="font-size: 14px;">Monday</h6>
                        <?php if($data_grid==!null): ?>
                        <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="text-success text-center rounded mt-1 p-1" style="font-size:13px;background:rgb(205, 227, 236)"><b>
                              Class: <?php echo e($value->class); ?> <br><b>(<?php echo e($value->subject_group); ?>)</b> <br> Section: <?php echo e($value->section); ?> <br> Subject: <?php echo e($value->subject); ?> <br> 
                            <?php echo e(date('h:i A', strtotime($value->start_time ))); ?> - <?php echo e(date('h:i A', strtotime($value->end_time ))); ?> <br>
                             Room Number: <?php echo e($value->room_no); ?>

                          </b></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <div class="text-center">
                          <a href="button" class="btn btn-light">Not Scheduled</a>
                        </div>
                        <?php endif; ?>
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-12">
                        <h6 class="text-center p-2" style="font-size: 14px;">Tuesday</h6>
                        <?php if($data_grid==!null): ?>
                        <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="text-success text-center rounded mt-1 p-1" style="font-size:13px;background:rgb(205, 227, 236)"><b>
                              Class: <?php echo e($value->class); ?> <br><b>(<?php echo e($value->subject_group); ?>)</b> <br> Section: <?php echo e($value->section); ?> <br> Subject: <?php echo e($value->subject); ?> <br> 
                            <?php echo e(date('h:i A', strtotime($value->start_time ))); ?> - <?php echo e(date('h:i A', strtotime($value->end_time ))); ?> <br>
                             Room Number: <?php echo e($value->room_no); ?>

                          </b></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <div class="text-center">
                          <a href="button" class="btn btn-light">Not Scheduled</a>
                        </div>
                        <?php endif; ?>
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-12">
                        <h6 class="text-center p-2" style="font-size: 14px;">Wednesday</h6>
                        <?php if($data_grid==!null): ?>
                        <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="text-success text-center rounded mt-1 p-1" style="font-size:13px;background:rgb(205, 227, 236)"><b>
                              Class: <?php echo e($value->class); ?> <br><b>(<?php echo e($value->subject_group); ?>)</b> <br> Section: <?php echo e($value->section); ?> <br> Subject: <?php echo e($value->subject); ?> <br> 
                            <?php echo e(date('h:i A', strtotime($value->start_time ))); ?> - <?php echo e(date('h:i A', strtotime($value->end_time ))); ?> <br>
                             Room Number: <?php echo e($value->room_no); ?>

                          </b></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <div class="text-center">
                          <a href="button" class="btn btn-light">Not Scheduled</a>
                        </div>
                        <?php endif; ?>
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-12">
                        <h6 class="text-center p-2" style="font-size: 14px;">Thrusday</h6>
                        <?php if($data_grid==!null): ?>
                        <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="text-success text-center rounded mt-1 p-1" style="font-size:13px;background:rgb(205, 227, 236)"><b>
                              Class: <?php echo e($value->class); ?> <br><b>(<?php echo e($value->subject_group); ?>)</b> <br> Section: <?php echo e($value->section); ?> <br> Subject: <?php echo e($value->subject); ?> <br> 
                            <?php echo e(date('h:i A', strtotime($value->start_time ))); ?> - <?php echo e(date('h:i A', strtotime($value->end_time ))); ?> <br>
                             Room Number: <?php echo e($value->room_no); ?>

                          </b></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <div class="text-center">
                          <a href="button" class="btn btn-light">Not Scheduled</a>
                        </div>
                        <?php endif; ?>
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-12">
                        <h6 class="text-center p-2" style="font-size: 14px;">Friday</h6>
                        <?php if($data_grid==!null): ?>
                        <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="text-success text-center rounded mt-1 p-1" style="font-size:13px;background:rgb(205, 227, 236)"><b>
                            
                              Class: <?php echo e($value->class); ?> <br><b>(<?php echo e($value->subject_group); ?>)</b> <br> Section: <?php echo e($value->section); ?> <br> Subject: <?php echo e($value->subject); ?> <br> 
                            <?php echo e(date('h:i A', strtotime($value->start_time ))); ?> - <?php echo e(date('h:i A', strtotime($value->end_time ))); ?> <br>
                             Room Number: <?php echo e($value->room_no); ?>

                          </b></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <div class="text-center">
                          <a href="button" class="btn btn-light">Not Scheduled</a>
                        </div>
                        <?php endif; ?>
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-12">
                        <h6 class="text-center p-2" style="font-size: 14px;">Saturday</h6>
                        <?php if($data_grid==!null): ?>
                        <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="text-success text-center rounded mt-1 p-1" style="font-size:13px;background:rgb(205, 227, 236)"><b>
                              Class: <?php echo e($value->class); ?> <br><b>(<?php echo e($value->subject_group); ?>)</b> <br> Section: <?php echo e($value->section); ?> <br> Subject: <?php echo e($value->subject); ?> <br> 
                            <?php echo e(date('h:i A', strtotime($value->start_time ))); ?> - <?php echo e(date('h:i A', strtotime($value->end_time ))); ?> <br>
                             Room Number: <?php echo e($value->room_no); ?>

                          </b></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <div class="text-center">
                          <a href="button" class="btn btn-light">Not Scheduled</a>
                        </div>
                        <?php endif; ?>
                      </div>
                    </div>
                 
                </div>
              </div>

            </div>

          </div>

    </div>


<?php $__env->stopSection(); ?>
        
<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/student/class-time/index.blade.php ENDPATH**/ ?>