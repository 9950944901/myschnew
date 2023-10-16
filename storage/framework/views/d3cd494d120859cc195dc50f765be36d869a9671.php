
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

      <div class="row">
        <div class="col-md-12 ">
          <div class="card">
            <div class="card-body">
              <h5>Exam Result</h5>
              <hr>
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Student</th>
                    <th>Class/Section</th>
                    <th>Session</th>
                    <th>Performance</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $__currentLoopData = $exam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                    <td>
                      <span><span class="text-bold">Name:</span> <?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?></span><br>
                      <span><span class="text-bold">F.Name:</span> <?php echo e($value->father_name); ?></span><br>
                      <span><span class="text-bold">Mobile:</span> +91<?php echo e($value->mobile_no); ?></span><br>
                       </td>
                    <td><?php echo e($value->class); ?> <br> <span class="w-100 d-block"><?php echo e($value->section); ?></span></td>
                    <td><?php echo e($value->session); ?></td>
                    <td>
                      
                      <span class="text-bold">Percentage: </span><span> <?php echo e(Number_format(($half+$anul)*100/600,2)); ?>%</span> <br>
                      <span class=" text-bold">Result: </span><span>
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
                    <a href="<?php echo e(route('student_panel.report_card',['id'=>$value->student_id])); ?>" class="btn btn-sm btn-light"><i class="fa fa-eye text-info"></i></a>
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
    <!-- content-wrapper ends -->








<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/student/examinations/exam-result.blade.php ENDPATH**/ ?>