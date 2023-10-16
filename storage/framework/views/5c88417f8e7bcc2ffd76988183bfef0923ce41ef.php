
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('Teacher.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Lesson Plan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard" >
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
                    <a class="nav-link" onclick="filterSelection('lesson-plan')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Syllabus Status Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('syllabus-status')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Subject Lesson Plan Report</a>
                  </li>
                
                </ul>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv syllabus-status p-4">
                
                <div style="overflow-x:auto;">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Subject</th>
                      <th>Subject Group</th>
                      <th>Class</th>
                      <th>Section</th>
                      <th>Subject-Lesson</th>
                      <th>Topic</th>
                      <th>Status</th>                   
                    </tr>
                  </thead>

                  <tbody>
                    <?php $__currentLoopData = $view; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($value->subject); ?></td>
                      <td><?php echo e($value->subject_group); ?></td>
                      <td><?php echo e($value->class); ?></td>
                      <td><?php echo e($value->section); ?></td>
                      <td><?php echo e($value->lesson); ?></td>
                      <td>
                        <?php $__currentLoopData = json_decode($value->topic); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php echo e($inf); ?>,
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </td>
                      <td>
                        <?php if($value->status==0): ?>
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

            <div class="col-md-12">
              <div class="filterDiv lesson-plan p-4">
                
                <div style="overflow-x:auto;">
                <table id="example9" class="table table-bordered table-striped">
                  <thead>
                      <tr class="" style="font-size: 13px; color: #012970; ">
                        <th>S No.</th>
                        <th>Session</th>
                        <th>Content Title</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Class</th>
                        <th>Subject</th>
                        <th>Available For</th>
                        <th>Status</th>
                      </tr>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $__currentLoopData = $syllabus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($val->session); ?></td>
                      <td><?php echo e($val->content_title); ?></td>
                      <td><?php echo e($val->syllabus_type); ?></td>
                      <td><?php echo e(date('d-M-Y', strtotime($val->created_at))); ?></td>
                      <td><?php echo e($val->class); ?></td>
                      <td><?php echo e($val->subject); ?></td>
                      <td><?php echo e($val->availabe_for); ?></td>
                      <td>
                        <?php if($val->status==1): ?>
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
<?php echo $__env->make('layouts.teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/teacher/reports/lesson-plan.blade.php ENDPATH**/ ?>