
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Exam Result</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card">
                <form action="<?php echo e(route('SCHOOL.exam-result')); ?>" method="get">
                  <?php echo csrf_field(); ?>
                <div class="row">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Exam Group</h6>
                    <div class="">
                      <select name="exam_group" class="form-control neha-text" required>
                        <option value="">Select</option>
                        <?php $__currentLoopData = $exam_group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option><?php echo e($exg->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Session</h6>
                    <div class="">
                      <select name="session" class="form-control neha-text" required>
                        <option value="">Select</option>
                        <option>2022-2023</option>
                        <option>2023-2024</option>
                        <option>2024-2025</option>
                        <option>2025-2026</option>
                        <option>2026-2027</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-6 sol-sm-12">
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

                  <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="p-2 mt-4">
                      <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>
                </div>
              </form>
              </div>

              <div class="d-flex justify-content-between p-2 mb-2">
                <h5 class="" style="font-size: 17px;">Exam Result</h5>
                <a href="<?php echo e(route('SCHOOL.examresult')); ?>" class="btn btn-info"><i class="fa fa-plus"></i> Add</a>
                
              </div>


              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Name</th>
                    <th>Class/Section</th>
                    <th>Session</th>
                    <th>Performance</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <?php
                  $half = 0;
                  $half = $half+$value->half_hindi+$value->half_math+$value->half_english+$value->half_science+$value->half_social+$value->half_sanskrit;
    
                  $anul = 0;
                  $anul = $anul+$value->anul_hindi+$value->anul_math+$value->anul_english+$value->anul_science+$value->anul_social+$value->anul_sanskrit;
                //  $strang = 0;
                // $strang = $strang+$value->st_hindi+$value->st_math+$value->st_english+$value->st_science+$value->st_social+$value->st_sanskrit;
              ?>
   
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($value->add_no); ?></td>
                    <td><?php echo e($value->roll_no); ?></td>
                    <td><?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?></td>
                    <td><?php echo e($value->class); ?> <br> <span class="w-100 d-block"><?php echo e($value->section); ?></span></td>
                    <td><?php echo e($value->session); ?></td>
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
                        <a href="<?php echo e(route('school.resutl.exam_result_edit',['id'=>$value->id])); ?>" class="btn btn-light"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo e(route('Exam.Result.Delete',['id'=>$value->id])); ?>" class="btn btn-light ml-2 delete-confirm"><i class="fa fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
        </section>
      </div>
    </main>

<script>
$(function(){
            $('#value1, #value2').keyup(function(){
               var value1 = parseFloat($('#value1').val()) || 0;
               var value2 = parseFloat($('#value2').val()) || 0;
               $('#sum').val((value2 / value1 * 100).toFixed(2) + "%");
            });
         });
</script>
<script>
$(function(){
            $('#value12, #value22').keyup(function(){
               var value12 = parseFloat($('#value12').val()) || 0;
               var value22 = parseFloat($('#value22').val()) || 0;
               $('#sum2').val((value22 / value12 * 100).toFixed(2) + "%");
            });
         });
</script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/school/examinations/exam-result.blade.php ENDPATH**/ ?>