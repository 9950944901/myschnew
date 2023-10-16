
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Class Time-Table</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card">
                <form action="<?php echo e(route('SCHOOL.class-timetable')); ?>" method="get">
                  <?php echo csrf_field(); ?>
                <div class="row p-3">
                  <div class="d-flex justify-content-between">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                 <div> <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" class="btn btn-info" style="padding: 1px 5px;"><i class="fa fa-plus"></i> Add</a></div>
                </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="class" class="form-control neha-text" required>
                        <option value="">Select</option>
                        <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option><?php echo e($cls->class); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="section" class="form-control neha-text" required>
                        <option value="">Select</option>
                        <?php $__currentLoopData = $sec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $se): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option><?php echo e($se->section); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="p-2 mt-4">
                      <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>
                </div>
              </form>
              </div>
            </div>
          </div>



            
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Class Time-Table</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="<?php echo e(route('Class.Time.Data')); ?>">
                      <?php echo csrf_field(); ?>
                      <div class="mb-2">
                        <label for="message-text" class="col-form-label">Class</label>
                        <select name="class" class="form-control neha-text" required>
                          <option value="">Select</option>
                          <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option><?php echo e($cls->class); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                      <div class="mb-2">
                        <label for="message-text" class="col-form-label">Section</label>
                        <select name="section" class="form-control neha-text" required>
                          <option value="">Select</option>
                          <?php $__currentLoopData = $sec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $se): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option><?php echo e($se->section); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                      <div class="mb-2">
                        <label for="message-text" class="col-form-label">Subject</label>
                        <select name="subject" class="form-control neha-text" required>
                          <option value="">Select</option>
                          <?php $__currentLoopData = $subj; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option><?php echo e($sub->name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                      <div class="mb-2">
                        <label for="message-text" class="col-form-label">Subject Group</label>
                        <select name="subject_group" class="form-control neha-text" required>
                          <option value="">Select</option>
                          <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option><?php echo e($grp->name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                      <div class="mb-2">
                        <label for="message-text" class="col-form-label">Start Time</label>
                        <input type="time" class="form-control" name="start_time" required>
                      </div>
                      <div class="mb-2">
                        <label for="message-text" class="col-form-label">End Time</label>
                        <input type="time" class="form-control" name="end_time" required>
                      </div>
                      <div class="mb-2">
                        <label for="message-text" class="col-form-label">Room No.</label>
                        <input type="text" pattern="['0-9']*" class="form-control" name="room_no" required>
                      </div>
                      <div class="mb-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>





          <div class="card info-card sales-card">
            <div class="row p-3">
              <!-- <h5 class="text-center mt-3 mb-2" style="font-size: 17px;"> 05/12/2022 To 11/12/2022 </h5> -->
              <div class="col-lg-2 col-md-4 col-sm-12">
                <h6 class="text-center p-2" style="font-size: 14px;">Monday</h6>
                <div class="">
                  <?php if($data_grid==!null): ?>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="text-success mt-1 p-1" style="font-size:13px;background:rgb(205, 227, 236)"><b>
                          Class: <?php echo e($value->class); ?> <a href="<?php echo e(route('Class.Timetable.Delete',['id'=>$value->id])); ?>" style="margin-left: 47px;" class="afs delete-confirm"><i class="fa fa-times"></i></a>
                          <br><b style="margin-left: 29px;">(<?php echo e($value->subject_group); ?>)</b> <br> Section: <?php echo e($value->section); ?> <br> Subject: <?php echo e($value->subject); ?> <br> 
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
              <div class="col-lg-2 col-md-4 col-sm-12">
                <h6 class="text-center p-2" style="font-size: 14px;">Tuesday</h6>
               <div class="">
                  <?php if($data_grid==!null): ?>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="text-success mt-1 p-1" style="font-size:13px;background:rgb(205, 227, 236)"><b>
                          Class: <?php echo e($value->class); ?> <a href="<?php echo e(route('Class.Timetable.Delete',['id'=>$value->id])); ?>" style="margin-left: 47px;" class="afs delete-confirm"><i class="fa fa-times"></i></a>
                          <br><b style="margin-left: 29px;">(<?php echo e($value->subject_group); ?>)</b> <br> Section: <?php echo e($value->section); ?> <br> Subject: <?php echo e($value->subject); ?> <br> 
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
              <div class="col-lg-2 col-md-4 col-sm-12">
                <h6 class="text-center p-2" style="font-size: 14px;">Wednesday</h6>
               <div class="">
                  <?php if($data_grid==!null): ?>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="text-success mt-1 p-1" style="font-size:13px;background:rgb(205, 227, 236)"><b>
                          Class: <?php echo e($value->class); ?> <a href="<?php echo e(route('Class.Timetable.Delete',['id'=>$value->id])); ?>" style="margin-left: 47px;" class="afs delete-confirm"><i class="fa fa-times"></i></a>
                          <br><b style="margin-left: 29px;">(<?php echo e($value->subject_group); ?>)</b> <br> Section: <?php echo e($value->section); ?> <br> Subject: <?php echo e($value->subject); ?> <br> 
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
              <div class="col-lg-2 col-md-4 col-sm-12">
                <h6 class="text-center p-2" style="font-size: 14px;">Thrusday</h6>
               <div class="">
                  <?php if($data_grid==!null): ?>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="text-success mt-1 p-1" style="font-size:13px;background:rgb(205, 227, 236)"><b>
                          Class: <?php echo e($value->class); ?> <a href="<?php echo e(route('Class.Timetable.Delete',['id'=>$value->id])); ?>" style="margin-left: 47px;" class="afs delete-confirm"><i class="fa fa-times"></i></a>
                          <br><b style="margin-left: 29px;">(<?php echo e($value->subject_group); ?>)</b> <br> Section: <?php echo e($value->section); ?> <br> Subject: <?php echo e($value->subject); ?> <br> 
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
              <div class="col-lg-2 col-md-4 col-sm-12">
                <h6 class="text-center p-2" style="font-size: 14px;">Friday</h6>
               <div class="">
                  <?php if($data_grid==!null): ?>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="text-success mt-1 p-1" style="font-size:13px;background:rgb(205, 227, 236)"><b>
                          Class: <?php echo e($value->class); ?> <a href="<?php echo e(route('Class.Timetable.Delete',['id'=>$value->id])); ?>" style="margin-left: 47px;" class="afs delete-confirm"><i class="fa fa-times"></i></a>
                          <br><b style="margin-left: 29px;">(<?php echo e($value->subject_group); ?>)</b> <br> Section: <?php echo e($value->section); ?> <br> Subject: <?php echo e($value->subject); ?> <br> 
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
              <div class="col-lg-2 col-md-4 col-sm-12">
                <h6 class="text-center p-2" style="font-size: 14px;">Saturday</h6>
               <div class="">
                  <?php if($data_grid==!null): ?>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="text-success mt-1 p-1" style="font-size:13px;background:rgb(205, 227, 236)"><b>
                          Class: <?php echo e($value->class); ?> <a href="<?php echo e(route('Class.Timetable.Delete',['id'=>$value->id])); ?>" style="margin-left: 47px;" class="afs delete-confirm"><i class="fa fa-times"></i></a>
                          <br><b style="margin-left: 29px;">(<?php echo e($value->subject_group); ?>)</b> <br> Section: <?php echo e($value->section); ?> <br> Subject: <?php echo e($value->subject); ?> <br> 
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
      </section>
    </div>

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/school/academics/index.blade.php ENDPATH**/ ?>