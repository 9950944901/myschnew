
<?php $__env->startSection('content'); ?>



<style>
  .adm-import {
      margin-top: 30px;
  }

  .adm-export {
      margin-top: 30px;
  }

  @media (max-width: 425px) {
    .adm-export {
      margin-top: 10px;
  }

  }

</style>



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Student Admission</li>
                </ol>
            </nav>
        </div>

        

        <div class="dashboard ">
            <section class="section dashboard">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card info-card sales-card mt-3" style="padding: 10px;">
                            <div class="row ">
                                <div class="col-lg-5 col-md-12 sol-sm-12 ">
                                    <form action="<?php echo e(route('import')); ?>" method="POST" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group mb-2">

                                            <?php if(Session::has('import_error')): ?>
                                                <?php $__currentLoopData = Session::get('import_error'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $failure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="alert alert-danger" role="alert">
                                                        <?php echo e($failure->errors()[0]); ?> at line No.. <?php echo e($failure->row()); ?>

                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            <div class="row adm-import">
                                                <div class="col-lg-8 col-md-6 col-sm-12">
                                                    <div class="custom-file">
                                                        <span>Choose file</span>
                                                        <input type="file" name="filecsv" class="custom-file-input"
                                                            id="customFile">
                                                        <label class="custom-file-label" for="customFile">Choose
                                                            file</label>

                                                        <span class="text-danger">
                                                            <?php $__errorArgs = ['filecsv'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <?php echo e($message); ?>

                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <button class="btn btn-primary w-100">Import </button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                 
                                


                                <div class="col-lg-7 col-md-12 sol-sm-12 ">
                                    <form action="<?php echo e(route('export-users')); ?>" method="get" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group mb-2">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="csv1">
                                                        <label for="">Class</label>
                                                        <select name="classcsv" id="" class="form-control"
                                                            required>
                                                            <option value="">select</option>
                                                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option><?php echo e($class1->class); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="csv2">
                                                        <label for="">section</label>
                                                        <select name="sectioncsv" id="" class="form-control"
                                                            required>
                                                            <option value="">select</option>
                                                            <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option><?php echo e($section1->section); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="adm-export">
                                                        <button class="btn btn-success w-100">Export </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="card info-card sales-card">
                                <form action="<?php echo e(route('SCHOOL.Student.Admission')); ?>" method="post"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="d-flex justify-content-between p-2">
                                            <h5 class="mt-3" style="font-size: 17px;">Student Admission</h5>
                                            
                                            
                                        </div>
                                        <hr>
                                        <div class="col-lg-3 col-md-3 sol-sm-12">
                                            <span class="text-danger">
                                                <?php $__errorArgs = ['admission_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </span>
                                            <h6 class="p-2" style="font-size: 14px;"><span class="text-danger">*</span>
                                                Admission No.</h6>
                                            <div class="">

                                                <input type="text" pattern="['0-9']*" required class="form-control neha-text"
                                                    name="admission_no" value="<?php echo e(old('admission_no')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <span class="text-danger">
                                                <?php $__errorArgs = ['roll_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </span>
                                            <h6 class="p-2" style="font-size: 14px;"><span class="text-danger">*</span>
                                                Roll No.</h6>
                                            <div class="">

                                                <input type="text" pattern="['0-9']*" required class="form-control neha-text" name="roll_no"
                                                    value="<?php echo e(old('roll_no')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span class="text-danger">*</span>
                                                First Name</h6>
                                            <div class="">
                                                <input type="text" required class="form-control neha-text"
                                                    value="<?php echo e(old('first_name')); ?>" name="first_name"
                                                    oninput="this.value = this.value.replace(/[^a-z . A-Z.]/g, ' ').replace(/(\..*)\./g, '$1');">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span class="text-danger">*</span>
                                                Last Name</h6>
                                            <div class="">
                                                <input required type="text"
                                                    oninput="this.value = this.value.replace(/[^a-z . A-Z.]/g, ' ').replace(/(\..*)\./g, '$1');"
                                                    class="form-control neha-text" value="<?php echo e(old('last_name')); ?>"
                                                    name="last_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Class</h6>
                                            <div class="">
                                                <select required name="class" class="form-control neha-text">
                                                    <option value="">Select</option>
                                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option><?php echo e($value->class); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Section</h6>
                                            <div class="">
                                                <select required name="section" class="form-control neha-text">
                                                    <option value="">Select</option>
                                                    <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option><?php echo e($value->section); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Gender</h6>
                                            <div class="">
                                                <select required name="gender" class="form-control neha-text">
                                                    <option value="">Select</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Date of Birth</h6>
                                            <div class="">
                                                <input required type="date" class="form-control neha-text"
                                                    value="<?php echo e(old('dob')); ?>" name="dob">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Category</h6>
                                            <div class="">
                                                <select name="category" class="form-control neha-text">
                                                    <option value="">Select</option>
                                                    <option>Student</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Religion</h6>
                                            <div class="">
                                                <input type="text" name="religion" value="<?php echo e(old('religion')); ?>"
                                                    class="form-control neha-text">
                                            </div>
                                        </div>

                                        

                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Email</h6>
                                            <div class="">
                                                <input required type="text" name="email"
                                                    value="<?php echo e(old('email')); ?>" class="form-control neha-text">
                                            </div>
                                            <?php if($errors->has('email')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Password</h6>
                                            <div class="">
                                                <input required type="password" name="password"
                                                    class="form-control neha-text">
                                            </div>
                                            <?php if($errors->has('password')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Confirm Password</h6>
                                            <div class="">
                                                <input required type="password" name="conform_password"
                                                    class="form-control neha-text">
                                            </div>
                                            <?php if($errors->has('conform_password')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('conform_password')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Admission Date</h6>
                                            <div class="">
                                                <input required type="date" name="admission_date"
                                                    value="<?php echo e(old('admission_date')); ?>" class="form-control neha-text">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Aadhaar Number</h6>
                                            <div class="">
                                                <input type="text" pattern="['0-9']*" maxlength="12" minlength="12"
                                                    class="form-control neha-text" name="aadhaar" required>
                                            </div>
                                            <span class="text-danger">
                                                <?php $__errorArgs = ['aadhaar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </span>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Address</h6>
                                            <div class="">
                                                <input type="text" value="<?php echo e(old('stu_address')); ?>"
                                                    class="form-control neha-text" name="stu_address">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"> Student Photo/png, jpg/jpeg </h6>
                                            <div class="">
                                                <input type="file" name="student_image" class="form-control-file"
                                                    id="addImage" accept="image/png, image/jpeg">
                                            </div>
                                        </div>

                                        

                                        

                                        

                                        

                                        

                                        <hr>
                                    </div>

                                    <div class="row">
                                        <h5 class="mt-3" style="font-size: 17px;">Parent's Details</h5>
                                        <div class="col-lg-3 col-md-3 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"> Father's Name</h6>
                                            <div class="">
                                                <input type="text"
                                                    oninput="this.value = this.value.replace(/[^a-z . A-Z.]/g, ' ').replace(/(\..*)\./g, '$1');"
                                                    value="<?php echo e(old('father_name')); ?>" class="form-control neha-text"
                                                    name="father_name">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"> Mother's Name</h6>
                                            <div class="">
                                                <input type="text"
                                                    oninput="this.value = this.value.replace(/[^a-z . A-Z.]/g, ' ').replace(/(\..*)\./g, '$1');"
                                                    value="<?php echo e(old('mother_name')); ?>" class="form-control neha-text"
                                                    name="mother_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Parent's Mobile No.</h6>
                                            <div class="">
                                                <input required type="text" minlength="10" maxlength="10"
                                                    pattern="['0-9']*" name="mobile_no" value="<?php echo e(old('mobile_no')); ?>"
                                                    class="form-control neha-text">
                                            </div>
                                        </div>

                                        

                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"> Father's Occupation</h6>
                                            <div class="">
                                                <input type="text" value="<?php echo e(old('father_occupation')); ?>"
                                                    class="form-control neha-text" name="father_occupation">
                                            </div>
                                        </div>

                                        

                                        

                                        <div class="col-lg-12 col-md-12 sol-sm-12">
                                            <h5 class="mt-3" style="font-size: 17px;">Guardian's Details</h5>
                                            
                                        </div>

                                        <div class="col-lg-3 col-md-3 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Guardian's Name</h6>
                                            <div class="">
                                                <input type="text" value="<?php echo e(old('gur_name')); ?>"
                                                    class="form-control neha-text" name="gur_name">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Guardian's Relation</h6>
                                            <div class="">
                                                <input type="text" value="<?php echo e(old('gur_relation')); ?>"
                                                    class="form-control neha-text" name="gur_relation">
                                            </div>
                                        </div>

                                        

                                        

                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Guardian's Phone</h6>
                                            <div class="">
                                                <input type="text" value="<?php echo e(old('gur_phone')); ?>" pattern="['0-9']*"
                                                    minlength="10" maxlength="10" class="form-control neha-text"
                                                    name="gur_phone">
                                            </div>
                                        </div>

                                        

                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Guardian's Address</h6>
                                            <div class="">
                                                <input type="text" value="<?php echo e(old('gur_address')); ?>"
                                                    class="form-control neha-text" name="gur_address">
                                            </div>
                                        </div>

                                        <hr>
                                    </div>

                                    <div class="row">
                                        <div class="text-center p-3">
                                            <button type="submit" class="btn btn-info">Save</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
        </div>

    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/school/student-information/student-admission.blade.php ENDPATH**/ ?>