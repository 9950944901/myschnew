
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('Teacher.Home')); ?>">Home</a></li>
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
                <form action="<?php echo e(route('Teacher.exam-result')); ?>" method="get">
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

                

                
                
                
            
              </div>


              <div class="modal fade" id="approveModal" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Exam Result</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo e(route('TAdd.Exam.Result')); ?>" method="post" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Session</label>
                          <select name="session" class="form-control neha-text" required>
                            <option value="">Select</option>
                            <option selected>2022-2023</option>
                            <option>2023-2024</option>
                            <option>2024-2025</option>
                            <option>2025-2026</option>
                            <option>2026-2027</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Exam Group</label>
                          <select name="exam_group" class="form-control neha-text" required>
                            <option value="">Select</option>
                            <?php $__currentLoopData = $exam_group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($exg->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Class</label>
                        <select name="class" class="form-control neha-text" required>
                        <option value="">Select</option>
                        <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option><?php echo e($cls->class); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Section</label>
                          <select name="section" class="form-control neha-text" required>
                            <option value="">Select</option>
                            <?php $__currentLoopData = $sec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $se): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($se->section); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>
                      </div>
                    

                    
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="Address">Admission No.</label>
                          <input type="text" class="form-control neha-text" name="add_no" required>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="Address">Exam Roll No.</label>
                          <input type="text" class="form-control neha-text" name="roll_no" required>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="number">Total Marks</label>
                          <input type="number" id="value1" class="form-control neha-text" name="total_marks" value="600" required>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="number">Receive Marks</label>
                          <input type="number" id="value2" class="form-control neha-text" name="rec_marks" required>
                        </div>
                      
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="number">Percent %</label>
                          <input type="text" id="sum"  class="form-control percent" readonly name="percent" required>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="number">Result</label>
                          <div>
                            <label for=""><input type="radio" name="result" value="Pass" required> Pass</label>
                            <label for=""><input type="radio" name="result" value="Fail" required> Fail</label>
                            <label for=""><input type="radio" name="result" value="By Grace" required> By Grace</label>
                            <label for=""><input type="radio" name="result" value="Supp." required> Supp.</label>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group1 text-left" style="float: right;">
                          <button type="submit" class="btn btn-info mt-4">Save</button>
                        </div>
                      </div>

                    </div>
                  </form>

                  </div>
                </div>
              </div>
            </div>


              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Session</th>
                    <th>Class/Section</th>
                    <th>Student</th>
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

                    <td><?php echo e($value->session); ?></td>
                    <td><?php echo e($value->class); ?> <br> <span class="w-100 d-block"><?php echo e($value->section); ?></span></td>
                    <td>
                      <span class="text-bold">Name: </span><span><?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?></span><br>
                      <span class="text-bold">F.Name: </span><span><?php echo e($value->father_name); ?> </span><br>
                      <span class="text-bold">Mobile: </span><span>+91-<?php echo e($value->mobile_no); ?> </span><br>
                      </td>
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
                        

                        <a href="<?php echo e(route('Student.report_card',['id'=>$value->student_id])); ?>" class="btn btn-sm btn-light ml-2"><i class="fa fa-eye text-info"></i></a>
                      </div>
                    </td>
                  </tr>
                  <div class="modal fade" id="approve<?php echo e($value->id); ?>" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Edit <?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?> Exam Result</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="<?php echo e(route('TUpdate.Exam.Result',['id'=>$value->id])); ?>" method="post" enctype="multipart/form-data">
                          <?php echo csrf_field(); ?>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group1 text-left">
                              <label for="Name">Session</label>
                              <select name="session" class="form-control neha-text" required>
                                <option><?php echo e($value->session); ?></option>
                                <option>2022-2023</option>
                                <option>2023-2024</option>
                                <option>2024-2025</option>
                                <option>2025-2026</option>
                                <option>2026-2027</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group1 text-left">
                              <label for="Name">Exam Group</label>
                              <select name="exam_group" class="form-control neha-text" required>
                                <option><?php echo e($value->exam_group); ?></option>
                                <?php $__currentLoopData = $exam_group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option><?php echo e($exg->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  
                              </select>
                            </div>
                          </div>
    
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group1 text-left">
                              <label for="Name">Class</label>
                            <select name="class" class="form-control neha-text" required>
                            <option><?php echo e($value->class); ?></option>
                            <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($cls->class); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group1 text-left">
                              <label for="Name">Section</label>
                              <select name="section" class="form-control neha-text" required>
                                <option><?php echo e($value->section); ?></option>
                                <?php $__currentLoopData = $sec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $se): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option><?php echo e($se->section); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                            </div>
                          </div>
                        
    
                        
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Address">Admission No.</label>
                              <input type="text" class="form-control neha-text" name="add_no" value="<?php echo e($value->add_no); ?>" required>
                            </div>
                          </div>
    
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Address">Exam Roll No.</label>
                              <input type="text" class="form-control neha-text" name="roll_no" value="<?php echo e($value->roll_no); ?>" required>
                            </div>
                          </div>
    
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="number">Total Marks</label>
                              <input type="number" id="value12" class="form-control neha-text" name="total_marks" value="<?php echo e($value->total_marks); ?>"  required>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="number">Receive Marks</label>
                              <input type="number" id="value22" class="form-control neha-text" name="rec_marks" value="<?php echo e($value->rec_marks); ?>" required>
                            </div>
                          
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="number">Percent %</label>
                              <input type="text" id="sum2"  class="form-control" readonly name="percent" value="<?php echo e($value->percent); ?>"  required>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="number">Result</label>
                              <div>
                                <label for=""><input type="radio" name="result" value="Pass" <?php echo e(($value->result=="Pass")? "checked" : ""); ?> required> Pass</label>
                                <label for=""><input type="radio" name="result" value="Fail" <?php echo e(($value->result=="Fail")? "checked" : ""); ?> required> Fail</label>
                                <label for=""><input type="radio" name="result" value="By Grace" <?php echo e(($value->result=="By Grace")? "checked" : ""); ?> required> By Grace</label>
                                <label for=""><input type="radio" name="result" value="Supp." <?php echo e(($value->result=="Supp.")? "checked" : ""); ?> required> Supp.</label>
                              </div>
                            </div>
                          </div>
    
                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group1 text-left" style="float: right;">
                              <button type="submit" class="btn btn-info mt-4">Update</button>
                            </div>
                          </div>
    
                        </div>
                      </form>
    
                      </div>
                    </div>
                  </div>
                </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
              </table>

            </div>
      </section>
    </div>
    </main><!-- End #main -->

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


<?php echo $__env->make('layouts.teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/teacher/examinations/exam-result.blade.php ENDPATH**/ ?>