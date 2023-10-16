
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Manage Lesson Plan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard" >
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card">
                <form action="<?php echo e(route('SCHOOL.manage-lesson-plan')); ?>" method="get">
                  <?php echo csrf_field(); ?>
                <div class="row p-3">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <div class="col-lg-6 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Teachers</h6>
                    <div class="">
                   
                      <select name="name" class="form-control neha-text" required>
                        <option value="">Select</option>
                        <?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option><?php echo e($value->firstname); ?> <?php echo e($value->lastname); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-12 sol-sm-12">
                    <div class="p-2 mt-3" style="float: right;">
                      <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>
                </div>
              </form>


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

          <div class="card info-card sales-card">
            <div class="row p-3">
              <h5 class="text-center mt-3 mb-2" style="font-size: 17px;"> <?php echo e($weekStartDate); ?> To <?php echo e($weekEndDate); ?> </h5>
              <div class="col-lg-2 col-md-4 col-sm-12">
                <h6 class="text-center p-2" style="font-size: 14px;">Monday</h6>
                <h6 class="text-center mb-2" style="font-size: 14px;"><?php echo e($weekStartDate1 = $now->startOfWeek()->format('d/m/Y')); ?></h6>
                <div class="text-center">
                  <a href="#" class="btn btn-light">
                  <?php if($weekStartDate1 == $nows): ?>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div style="font-size: 12px;">Class:- <?php echo e($value->class); ?> ,
                      Section:- <?php echo e($value->section); ?>, Sub. Group:- <?php echo e($value->subject_group); ?>, Subject:- <?php echo e($value->subject); ?>, 
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    Not Scheduled
                    <?php endif; ?>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12">
                <h6 class="text-center p-2" style="font-size: 14px;">Tuesday</h6>
                <h6 class="text-center mb-2" style="font-size: 14px;"><?php echo e($weekStartDate2 = $now->startOfWeek()->addDays(1)->format('d/m/Y')); ?></h6>
                <div class="text-center">
                  <a href="#" class="btn btn-light">
                   
                    <?php if($weekStartDate2 == $nows): ?>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div style="font-size: 12px;">Class:- <?php echo e($value->class); ?> ,
                      Section:- <?php echo e($value->section); ?>, Sub. Group:- <?php echo e($value->subject_group); ?>, Subject:- <?php echo e($value->subject); ?>, 
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    Not Scheduled
                    <?php endif; ?>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12">
                <h6 class="text-center p-2" style="font-size: 14px;">Wednesday</h6>
                <h6 class="text-center mb-2" style="font-size: 14px;"><?php echo e($weekStartDate3 = $now->startOfWeek()->addDays(2)->format('d/m/Y')); ?></h6>
                <div class="text-center">
                  <a href="#" class="btn btn-light">
                    <?php if($weekStartDate3 == $nows): ?>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div style="font-size: 12px;">Class:- <?php echo e($value->class); ?> ,
                      Section:- <?php echo e($value->section); ?>, Sub. Group:- <?php echo e($value->subject_group); ?>, Subject:- <?php echo e($value->subject); ?>, 
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    Not Scheduled
                    <?php endif; ?>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12">
                <h6 class="text-center p-2" style="font-size: 14px;">Thrusday</h6>
                <h6 class="text-center mb-2" style="font-size: 14px;"><?php echo e($weekStartDate4 = $now->startOfWeek()->addDays(3)->format('d/m/Y')); ?></h6>
                <div class="text-center">
                  <a href="#" class="btn btn-light">
                    <?php if($weekStartDate4 == $nows): ?>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div style="font-size: 12px;">Class:- <?php echo e($value->class); ?> ,
                      Section:- <?php echo e($value->section); ?>, Sub. Group:- <?php echo e($value->subject_group); ?>, Subject:- <?php echo e($value->subject); ?>, 
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    Not Scheduled
                    <?php endif; ?>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12">
                <h6 class="text-center p-2" style="font-size: 14px;">Friday</h6>
                <h6 class="text-center mb-2" style="font-size: 14px;"><?php echo e($weekStartDate5 = $now->startOfWeek()->addDays(4)->format('d/m/Y')); ?></h6>
                <div class="text-center">
                  <a href="#" class="btn btn-light">
                    <?php if($weekStartDate5 == $nows): ?>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div style="font-size: 12px;">Class:- <?php echo e($value->class); ?> ,
                      Section:- <?php echo e($value->section); ?>, Sub. Group:- <?php echo e($value->subject_group); ?>, Subject:- <?php echo e($value->subject); ?>, 
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    Not Scheduled
                    <?php endif; ?>
                  </a>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-12">
                <h6 class="text-center p-2" style="font-size: 14px;">Saturday</h6>
                <h6 class="text-center mb-2" style="font-size: 14px;"><?php echo e($weekStartDate6 = $now->startOfWeek()->addDays(5)->format('d/m/Y')); ?></h6>
                <div class="text-center">
                  <a href="#" class="btn btn-light">
                    <?php if($weekStartDate6 == $nows): ?>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div style="font-size: 12px;">Class:- <?php echo e($value->class); ?> ,
                      Section:- <?php echo e($value->section); ?>, Sub. Group:- <?php echo e($value->subject_group); ?>, Subject:- <?php echo e($value->subject); ?>, 
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    Not Scheduled
                    <?php endif; ?>
                  </a>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </section>
    </div>

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/school/lesson-plan/index.blade.php ENDPATH**/ ?>