
<?php $__env->startSection('content'); ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Student Result</li>
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
                                <form action="<?php echo e(route('SCHOOL.Student.result.in')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="d-flex justify-content-between p-2">
                                            <h5 class="mt-3" style="font-size: 17px;">Student Result</h5>
                                            <span class="text-danger"><?php $__errorArgs = ['roll_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>

                                            
                                            
                                            
                                        </div>
                                        <hr>
                                        <div class="col-lg-3 col-md-3 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Session</h6>
                                            <div class="">
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
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Class</h6>
                                            <div class="">
                                                <select name="class"  class="form-control neha-text"
                                                    required>
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
                                     
                                        <div class="col-lg-3 col-md-3 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Roll No.</h6>
                                            <div class="">
                                                
                                                <select name="roll_no" class="form-control neha-text" required>
                                                    <option value="">Select</option>
                                                    <?php $__currentLoopData = $Stu_Admiss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $se1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option><?php echo e($se1->roll_no); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>



                                                
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Admission No.</h6>
                                            <div class="">
                                                
                                               
                                        
                                                


                                                <select name="add_no" id="" class="form-control neha-text">
                                                    <option value="">Select</option>
                                                    <?php $__currentLoopData = $Stu_Admiss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $se23): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option><?php echo e($se23->admission_no); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>

                                            </div>
                                        </div>
                                        
                                        

                                        <br>
                                        <h5 class="mt-3">Subject</h5>

                                        <div class="mt-2">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#tabs-11"
                                                        role="tab" style="color: #012970;">Half Yearly Examination</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tabs-22" role="tab"
                                                        style="color: #012970;">Annual Examination</a>
                                                </li>
                                                
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabs-11" role="tabpanel">
                                                    <section class="featured-job-area mt-3">
                                                        <div class="container">

                                                            <h5 class="mt-3">Half Yearly Examination</h5>
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">English
                                                                    </h6>
                                                                    <div class="">
                                                                        <input type="text"  pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100"  name="half_english">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Hindi</h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text"  maxlength="100" name="half_hindi">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">
                                                                        Mathematics</h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="half_math">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Science
                                                                    </h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="half_science">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Social
                                                                        Science</h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="half_social">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Sanskrit</h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="half_sanskrit">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </section>
                                                </div>

                                                <div class="tab-pane" id="tabs-22" role="tabpanel">
                                                    <section class="featured-job-area mt-3">
                                                        <div class="container">

                                                            <h5 class="mt-3">Annual Examination</h5>
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">English
                                                                    </h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                        maxlength="100" class="form-control neha-text" name="anul_english">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Hindi</h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="anul_hindi">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">
                                                                        Mathematics</h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="anul_math">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Science
                                                                    </h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="anul_science">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Social
                                                                        Science</h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="anul_social">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Sanskrit</h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="anul_sanskrit">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                          </div>
                                                    </section>
                                                </div>

                                                <div class="tab-pane" id="tabs-23" role="tabpanel">
                                                    <section class="featured-job-area mt-3">
                                                        <div class="container">

                                                            <h5 class="mt-3">Sess.</h5>
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">English
                                                                    </h6>
                                                                    <div class="">
                                                                        <input type="text"
                                                                            class="form-control neha-text"  name="st_english">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Hindi</h6>
                                                                    <div class="">
                                                                        <input type="text"
                                                                            class="form-control neha-text" name="st_hindi">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">
                                                                        Mathematics</h6>
                                                                    <div class="">
                                                                        <input type="text"
                                                                            class="form-control neha-text" name="st_math">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Science
                                                                    </h6>
                                                                    <div class="">
                                                                        <input type="text"
                                                                            class="form-control neha-text" name="st_science">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Social
                                                                        Science</h6>
                                                                    <div class="">
                                                                        <input type="text"
                                                                            class="form-control neha-text" name="st_social">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Sanskrit</h6>
                                                                    <div class="">
                                                                        <input type="text"
                                                                            class="form-control neha-text" name="st_sanskrit">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Result</h6>
                                                                    <div class="">
                                                                        <input type="text"
                                                                            class="form-control neha-text" name="result">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                          </div>
                                                    </section>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="text-center p-3">
                                                <div class="float-right">
                                                    <button type="submit" class="btn btn-info">
                                                        <i class="fa fa-plus"></i> Add
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </section>
                </div>
            </main><!-- End #main -->
























<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/school/examinations/examresult.blade.php ENDPATH**/ ?>