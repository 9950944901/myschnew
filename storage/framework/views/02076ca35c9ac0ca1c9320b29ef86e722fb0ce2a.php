
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Student Details Edit</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="dashboard " >
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card">
                <form action="<?php echo e(route('SCHOOL.Student.Admission.Edit',['id'=>$add->id])); ?>" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                <div class="row">
                  <div class="d-flex justify-content-between p-2">
                    <h5 class="mt-3" style="font-size: 17px;">Student Details Edit</h5>
                    
                  </div>
                  <hr>
                  <div class="col-lg-3 col-md-3 sol-sm-12">
                    <span class="text-danger"><?php $__errorArgs = ['admission_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

                        
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    <h6 class="p-2" style="font-size: 14px;">Admission No.</h6>
                    <div class="">
                      <input type="number"  class="form-control neha-text" name="admission_no" value="<?php echo e($add->admission_no); ?>" id="date1"required>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Roll No.</h6>
                    <div class="">
                      <input type="number" class="form-control neha-text" name="roll_no" value="<?php echo e($add->roll_no); ?>" id="date1" required>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">First Name</h6>
                    <div class="">
                      <input type="text" oninput="this.value = this.value.replace(/[^a-z . A-Z.]/g, ' ').replace(/(\..*)\./g, '$1');" class="form-control neha-text" value="<?php echo e($add->first_name); ?>" name="first_name"  required>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Last Name</h6>
                    <div class="">
                      
                      <input type="text" oninput="this.value = this.value.replace(/[^a-z . A-Z.]/g, ' ').replace(/(\..*)\./g, '$1');" class="form-control neha-text" value="<?php echo e($add->last_name); ?>" name="last_name" id="date1" required>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="class" class="form-control neha-text" >
                        <option><?php echo e($add->class); ?></option>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option><?php echo e($value->class); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="section" class="form-control neha-text" >
                        <option><?php echo e($add->section); ?></option>
                        <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option><?php echo e($value->section); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Date of Birth</h6>
                    <div class="">
                      <input type="date" class="form-control neha-text" value="<?php echo e($add->dob); ?>" name="dob" id="date1" required>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Gender</h6>
                    <div class="">
                      <select name="gender" class="form-control neha-text">
                        <option><?php echo e($add->gender); ?></option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Email</h6>
                   
                    <div class="">
                      <input type="email" name="email" value="<?php echo e($add->email); ?>" class="form-control neha-text" id="date1" required>
                      <input  type="hidden" name="oldemail" value="<?php echo e($add->email); ?>" class="form-control neha-text" id="date1">
                    </div>
                    <?php if($errors->has('email')): ?>
                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                    <?php endif; ?>
                    
                  </div>

                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Password</h6>
                    <div class="">
                      <input type="text" name="password" minlength="6" maxlength="15" value="<?php echo e($add->conform_password); ?>" class="form-control neha-text"  required>
                    </div>
                    <?php if($errors->has('password')): ?>
                        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                        <?php endif; ?>
                  </div>

                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Category</h6>
                    <div class="">
                      <select name="category" class="form-control neha-text" >
                        <option><?php echo e($add->category); ?></option>
                        <option>Student</option>
                        <option>Other</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Religion</h6>
                    <div class="">
                      <input type="text" name="religion" value="<?php echo e($add->religion); ?>" class="form-control neha-text" id="date1">
                    </div>
                  </div>

                  

            
         
             
                  
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Admission Date</h6>
                    <div class="">
                      <input type="date" name="admission_date" value="<?php echo e($add->admission_date); ?>" class="form-control neha-text" id="date1">
                    </div>
                  </div>
               

                  

                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Address</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" maxlength="150" name="stu_address" value="<?php echo e($add->stu_address); ?>" id="date1">
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Aadhaar Number</h6>
                    <div class="">
                      <input type="text" pattern="['0-9']*" maxlength="12" minlength="12" class="form-control neha-text"  name="aadhaar" value="<?php echo e($add->aadhaar); ?>">
                    </div>
                    <span class="text-danger"><?php $__errorArgs = ['aadhaar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

                        
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                  </div>


                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Student Photo</h6>
                    <div class="">
                      <input type="file" name="student_image" accept="image/png, image/jpeg, image/jpg" class="form-control-file" id="addImage" >
                     <?php if($add->student_image): ?>
                     <img src="<?php echo e(url('public/uploads/students/'.$add->student_image)); ?>" height="80" width="100" alt="">
                     <?php else: ?>
                         
                     <?php endif; ?>
                 
                    </div>
                  </div>


                  

                  
                  
                  <hr>
                </div>




                <div class="row">
                
                  <h5 class="mt-3" style="font-size: 17px;">Parent's Details</h5>
                  <div class="col-lg-3 col-md-3 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Father's Name</h6>
                    <div class="">
                      <input type="text" oninput="this.value = this.value.replace(/[^a-z . A-Z.]/g, ' ').replace(/(\..*)\./g, '$1');" class="form-control neha-text" name="father_name" value="<?php echo e($add->father_name); ?>" >
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Mother's Name</h6>
                    <div class="">
                      <input type="text" oninput="this.value = this.value.replace(/[^a-z . A-Z.]/g, ' ').replace(/(\..*)\./g, '$1');" class="form-control neha-text"  name="mother_name" value="<?php echo e($add->mother_name); ?>">
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Parent's Mobile No.</h6>
                    <div class="">
                      <input type="text" minlength="10" maxlength="10" pattern="[0-9]*" name="mobile_no" value="<?php echo e($add->mobile_no); ?>" class="form-control neha-text"  required>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Father's Occupation</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" maxlength="25" name="father_occupation" value="<?php echo e($add->father_occupation); ?>">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <h5 class="mt-3" style="font-size: 17px;">Guardian's Details</h5>
                  <div class="col-lg-3 col-md-3 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Guardian's Name</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text"  name="gur_name" value="<?php echo e($add->gur_name); ?>">
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Guardian's Relation</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text"  name="gur_relation" value="<?php echo e($add->gur_relation); ?>">
                    </div>
                  </div>
                
          
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Guardian's Phone</h6>
                    <div class="">
                      <input type="text" minlength="10" maxlength="10" pattern="['0-9']*" class="form-control neha-text" id="date1" name="gur_phone" value="<?php echo e($add->gur_phone); ?>">
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Guardian's Address</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" maxlength="150" name="gur_address" value="<?php echo e($add->gur_address); ?>">
                    </div>
                  </div>
         
          
                </div>



         


















                
                <div class="row">
                  <div class="text-center p-3">
                    <button type="submit" class="btn btn-info">Save</button>
                  </div>
                </div>
              </div>
            </form>


            </div>
      </section>
    </div>
 

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/school/student-information/student-details-edit.blade.php ENDPATH**/ ?>