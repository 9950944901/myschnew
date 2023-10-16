
<?php $__env->startSection('content'); ?>

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('Teacher.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Student Details</li>
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
                <form action="<?php echo e(route('Teacher.student-details')); ?>" method="get">
                  <?php echo csrf_field(); ?>
                <div class="row">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="class" class="form-control neha-text" required >
                        <option value="">Select</option>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <option><?php echo e($value->class); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="section" class="form-control neha-text" required>
                        <option value="">Select</option>
                        <?php $__currentLoopData = $sec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <option><?php echo e($value->section); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Search</h6>
                    <div class="">
                      <div class="">
                        <button type="submit" dissabled class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th class="w-100">Student</th>
                    <th>Class</th>
             
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Category</th>
                    <th>Mobile No.</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                  
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($value->admission_no); ?></td>
                    <td><?php echo e($value->roll_no); ?></td>
                    <td>
                      <span class="text-bold text-capitalize">Name: </span><span><?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?></span><br>
                      <span class="text-bold">Email: </span><span><?php echo e($value->email); ?> </span><br>
                      <span class="text-bold text-capitalize">F.Name: </span><span> <?php echo e($value->father_name); ?></span><br>
                      </td>
                    <td><?php echo e($value->class); ?></td>
              
                    <td><?php echo e($value->dob); ?></td>
                    <td><?php echo e($value->gender); ?></td>
                    <td><?php echo e($value->category); ?></td>
                    <td>+91<?php echo e($value->mobile_no); ?></td>
                    <td>
                      <div class="d-flex">
                        <a href="<?php echo e(route('Teacher.student-details-show45',['id'=>$value->id])); ?>" class="btn btn-light ml-1"><i class="fa fa-bars"></i></a>
                        
                      </div>
                    </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>

            </div>
      </section>
    </div>

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/teacher/student-information/index.blade.php ENDPATH**/ ?>