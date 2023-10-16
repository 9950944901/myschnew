
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Staff Directory Staff</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <form action="<?php echo e(route('Add.Staff')); ?>" method="post" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
            <div class="row">
              <div class="card info-card sales-card">
                <div class="row">
                  <h5 class="mt-3" style="font-size: 17px;">Basic Information</h5>
                  


                  <div class="col-lg-3 col-md-3 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">First Name</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" value="<?php echo e(old('firstname')); ?>" name="firstname">
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Last Name</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" value="<?php echo e(old('lastname')); ?>" name="lastname">
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Father's Name</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" value="<?php echo e(old('father_name')); ?>" name="father_name">
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Mother's Name</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" value="<?php echo e(old('mother_name')); ?>" name="mother_name">
                    </div>
                  </div>


                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Role</h6>
                    <div class="">
                      <input type="text" name="role" class="form-control neha-text" required>
                    </div>
                  </div>
                  
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Department</h6>
                    <div class="">
                      <select name="department" class="form-control neha-text" required>
                        <option value="">Select</option>
                        <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option><?php echo e($value->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>
              
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Email (Login Username) </h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" name="email" value="<?php echo e(old('email')); ?>">
                      <?php if($errors->has('email')): ?>
                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                    <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Password </h6>
                    <div class="">
                      <input type="password" class="form-control neha-text" name="password">
                      <?php if($errors->has('password')): ?>
                      <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Confirm Password</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" name="conform_password">
                      <?php if($errors->has('conform_password')): ?>
                      <span class="text-danger"><?php echo e($errors->first('conform_password')); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Gender</h6>
                    <div class="">
                      <select name="gender" class="form-control neha-text" required>
                        <option value="">Select</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Date of Birth</h6>
                    <div class="">
                      <input type="date" class="form-control neha-text" value="<?php echo e(old('dob')); ?>" name="dob" required>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Date of Joining</h6>
                    <div class="">
                      <input type="date" class="form-control neha-text" value="<?php echo e(old('joining_date')); ?>" name="joining_date" required>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Phone </h6>
                    <div class="">
                      <input type="text" minlength="10" maxlength="10" pattern="[0-9]*" class="form-control neha-text" value="<?php echo e(old('phone')); ?>" name="phone" required>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Emergency Contact Number </h6>
                    <div class="">
                      <input type="text" minlength="10" maxlength="10" pattern="[0-9]*" class="form-control neha-text" value="<?php echo e(old('contact_no')); ?>" name="contact_no">
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Marital Status</h6>
                    <div class="">
                      <select class="form-control" name="marital_status" >
                        <option value="">Select</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Separated">Separated</option>
                        <option value="Not Specified">Not Specified</option>
                    </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Photo</h6>
                    <div class="">
                      <input type="file" name="staff_image" class="form-control-file" accept=".png, .jpg, .jpeg">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Current Address</h6>
                    <div class="">
                      <textarea class="form-control neha-text" maxlength="200" name="cadd"><?php echo e(old('cadd')); ?></textarea>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Permanent Address</h6>
                    <div class="">
                      <textarea class="form-control neha-text" maxlength="200" name="padd"><?php echo e(old('padd')); ?></textarea>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Qualification</h6>
                    <div class="">
                      <textarea class="form-control neha-text" name="qualification"><?php echo e(old('qualification')); ?></textarea>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Work Experience</h6>
                    <div class="">
                      <textarea class="form-control neha-text" maxlength="100" name="work_exp"><?php echo e(old('work_exp')); ?></textarea>
                    </div>
                  </div>

                  
  
                  <hr>
                </div>
              

              

              
                <div class="row">
                  <div class="text-center p-3">
                    <button type="Submit" class="btn btn-info">Save</button>
                  </div>
                </div>
              </div>


            </div>
          </form>

      </section>
    </div>

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/school/human-resource/staff-directory-add-staff.blade.php ENDPATH**/ ?>