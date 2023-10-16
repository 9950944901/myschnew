
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('Teacher.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Student Attendance</li>
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
                <form action="" method="get">
                    <?php echo csrf_field(); ?>
                <div class="row mb-3">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
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
                  <div class="col-lg-3 col-md-6 sol-sm-12">
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
          
                  <div class="col-lg-3 col-md-12 sol-sm-12">
                    <div class="p-2 mt-4">
                      <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>

                </div>
            </form>
              </div>

              <div class="p-3 d-flex justify-content-between">
                <h5>Student List</h5>
              </div>
              <div style="overflow-x:auto;">
              <table  class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
           
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Attendance</th>
                
                  </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td><?php echo e($loop->iteration); ?></td>
     
                    <td><?php echo e($value->admission_no); ?></td>
                    <td><?php echo e($value->roll_no); ?></td>
                    <td><?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?></td>
                    <td><?php echo e($value->class); ?></td>
                    <td><?php echo e($value->section); ?></td>
                    <td>
                        <form action="<?php echo e(route('stu.Add.Data')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="stu_id[]" value="<?php echo e($value->id); ?>">
                            <input type="hidden" name="admission_no[]" value="<?php echo e($value->admission_no); ?>">
                            <input type="hidden" name="roll_no[]" value="<?php echo e($value->roll_no); ?>">
                            <input type="hidden" name="student_name[]" value="<?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?>">
                            <input type="hidden" name="class" value="<?php echo e($value->class); ?>">
                            <input type="hidden" name="section" value="<?php echo e($value->section); ?>">
                            <input type="hidden" name="dob[]" value="<?php echo e($value->dob); ?>">
                            <div class="" style="width: 261px;">
                              <input type="radio" name="attendance[<?php echo e($value->id); ?>]" required value="Present" > <label>Present</label> &nbsp;
                        <input type="radio" name="attendance[<?php echo e($value->id); ?>]" required value="Late" > <label>Late</label> &nbsp;
                        <input type="radio" name="attendance[<?php echo e($value->id); ?>]" required value="Absent" > <label>Absent</label> &nbsp;
                        <input type="radio" name="attendance[<?php echo e($value->id); ?>]" required value="Half Day" > <label>Half Day</label> &nbsp;
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <div class="text-right mb-2">
                    <input type="date" name="date" value="<?php echo e(date('Y-m-d')); ?>">
                  <button type="submit">Save</button>
                
                </div>
                </form>
                </tbody>
              </table>
            </div>
            </div>
      </section>
    </div>

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/teacher/attendance/list.blade.php ENDPATH**/ ?>