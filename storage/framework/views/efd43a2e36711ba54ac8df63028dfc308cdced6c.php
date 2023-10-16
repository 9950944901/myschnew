
<?php $__env->startSection('content'); ?>



<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
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
                <form action="<?php echo e(route('SCHOOL.Student.Details')); ?>" method="get">
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
                  <div class="col-lg-3 col-md-12 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Search</h6>
                    <div class="">
                      <div class="">
                        <button type="submit" dissabled class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                      </div>
                    </div>
                  </div>
                  <style>
                    .custom-right{
                              padding-top: 33px;
                                }
                  </style>
                  <div class="col-lg-3 col-md-12 sol-sm-12">
                    
                    <div class="">
                      <div class="custom-right float-right ">
                        <a  href="<?php echo e(route('admin.School.report.add')); ?>" class="btn btn-info"><i class="fa fa-search"></i> School Information Add</a>
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
                    <th class="">Student</th>
                    <th>Class/Section</th>
                    <th>Performance</th>
                    <th>Action</th>      
                  </tr>
                  </thead>
                <tbody>
                  
                  <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                  
                  <?php
                  $half = 0;
                  $half = $half+$value->half_hindi+$value->half_math+$value->half_english+$value->half_science+$value->half_social+$value->half_sanskrit;
    
                  $anul = 0;
                  $anul = $anul+$value->anul_hindi+$value->anul_math+$value->anul_english+$value->anul_science+$value->anul_social+$value->anul_sanskrit;
    
                 $strang = 0;
                $strang = $strang+$value->st_hindi+$value->st_math+$value->st_english+$value->st_science+$value->st_social+$value->st_sanskrit;


              ?>

                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($value->admission_no); ?></td>
                    <td><?php echo e($value->roll_no); ?></td>
                    <td><span class="text-bold">Name: </span> <?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?><br> <span class=" font-weight-bolder">F.Name:</span> <?php echo e($value->father_name); ?> <br>
                       <span class=" font-weight-bolder">Mobile:</span> +91: <?php echo e($value->mobile_no); ?></td>
                    <td><?php echo e($value->class); ?> <br> <span class="w-100 d-block"><?php echo e($value->section); ?></span></td>
                    <td><span class="text-bold">Percentage: <?php echo e(Number_format(($half+$anul)*100/600,2)); ?>%</span> <br>
                      <span class=" text-bold">Result: 
                        <?php
                        $result = number_format(($half+$anul)*100/600,2);
                    ?>
                        <?php if($result >= 33 && $result <= 44): ?> 
                        3rd division
                        <?php elseif($result >= 45 && $result <= 59): ?> 
                        2nd division
                        <?php elseif($result >= 60 && $result <= 74): ?> 
                        1st division
                        <?php elseif($result >= 75 && $result <= 100): ?> 
                        Distinction                              
                        <?php else: ?>
                        <span class="text-danger">Fail</span>
                        <?php endif; ?> 
                      
                      </span><br>
                      
                    </td>
                    <td>
                      <div class="d-flex">
                        <a href="<?php echo e(route('SCHOOL.viewreport',['id'=>$value->id])); ?>" class="btn btn-info btn-sm ml-1">
                          <i class="fa fa-eye"></i></a>
                        
                        <a href="<?php echo e(route('SCHOOL.student_report.del',['id'=>$value->id])); ?>" class="btn btn-danger btn-sm ml-1 delete-confirm"><i class="fa fa-trash"></i></a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/school/reportcard/index.blade.php ENDPATH**/ ?>