
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
        <li class="breadcrumb-item active">General Setting</li>
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
              <?php if($data): ?>
             
                <form action="<?php echo e(route('General.Setting.up',['id'=>$data->id])); ?>" method="post">
                  <?php echo csrf_field(); ?>

                  <div class="row mb-2">
                    <h5 class="mt-3" style="font-size: 17px;">General Setting</h5>
                    <div class="col-lg-6 col-md-6 sol-sm-12">
                      <h6 class="p-2" style="font-size: 14px;">School Name</h6>
                      <div class="">
                        <input type="text" required class="form-control" name="school_name" value="<?php echo e($data->school_name); ?>">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 sol-sm-12">
                      <h6 class="p-2" style="font-size: 14px;">School Code</h6>
                      <div class="">
                        <input type="text" class="form-control" name="school_code" value="<?php echo e($data->school_code); ?>">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 sol-sm-12">
                      <h6 class="p-2" style="font-size: 14px;">Phone</h6>
                      <div class="">
                        <input type="text" class="form-control" pattern="['0-9']*"  name="school_phone" value="<?php echo e($data->school_phone); ?>">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 sol-sm-12">
                      <h6 class="p-2" style="font-size: 14px;">Email</h6>
                      <div class="">
                        <input type="email" required class="form-control" name="school_email" value="<?php echo e($data->school_email); ?>">
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 sol-sm-12 mb-3">
                      <h6 class="p-2" style="font-size: 14px;">Address</h6>
                      <div class="">
                        <input type="text" class="form-control" name="school_address" value="<?php echo e($data->school_address); ?>">
                      </div>
                    </div>
                    <hr>
    
                    <h5 class="mb-2" style="font-size: 17px;">Session</h5>
                    <div class="col-lg-6 col-md-6 sol-sm-12">
                      <h6 class="p-2" style="font-size: 14px;">Session</h6>
                      <div class="mb-3">
                        <select name="session" class="form-control" required>
                          <?php if($data->session): ?>
                          <option><?php echo e($data->session); ?></option>
                          <?php else: ?>
                          <option value="">Select</option>
                          <?php endif; ?>
                          <option>2021-22</option>
                          <option>2022-23</option>
                          <option>2023-24</option>
                          <option>2024-25</option>
                          <option>2025-26</option>
                          <option>2026-27</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 sol-sm-12">
                      <h6 class="p-2" style="font-size: 14px;">Session Start Month</h6>
                      <div class="mb-3">
                        <select name="session_month" class="form-control" required>
                          <?php if($data->session_month): ?>
                          <option><?php echo e($data->session_month); ?></option>
                          <?php else: ?>
                          <option value="">Select</option>
                          <?php endif; ?>
                          <option>January</option>
                          <option>February</option>
                          <option>March</option>
                          <option>April</option>
                          <option>May</option>
                          <option>June</option>
                          <option>July</option>
                          <option>August</option>
                          <option>September</option>
                          <option>October</option>
                          <option>November</option>
                          <option>December</option>
                        </select>
                      </div>
                    </div>
                    <div class="text-right p-1">
                      <button type="submit" class="btn btn-info">Save</button>
                    </div>
    
                  </div>

                  <?php else: ?>
                  <form action="<?php echo e(route('General.Setting.Data')); ?>" method="post">
                    <?php echo csrf_field(); ?>

                    <div class="row mb-2">
                      <h5 class="mt-3" style="font-size: 17px;">General Setting</h5>
                      <div class="col-lg-6 col-md-6 sol-sm-12">
                        <h6 class="p-2" style="font-size: 14px;">School Name</h6>
                        <div class="">
                          <input type="text" required class="form-control" name="school_name" >
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 sol-sm-12">
                        <h6 class="p-2" style="font-size: 14px;">School Code</h6>
                        <div class="">
                          <input type="text" class="form-control" name="school_code" >
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 sol-sm-12">
                        <h6 class="p-2" style="font-size: 14px;">Phone</h6>
                        <div class="">
                          <input type="text" class="form-control" pattern="['0-9']*"  name="school_phone" >
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 sol-sm-12">
                        <h6 class="p-2" style="font-size: 14px;">Email</h6>
                        <div class="">
                          <input type="email" required class="form-control" name="school_email" value="">
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 sol-sm-12 mb-3">
                        <h6 class="p-2" style="font-size: 14px;">Address</h6>
                        <div class="">
                          <input type="text" class="form-control" name="school_address" value="">
                        </div>
                      </div>
                      <hr>
      
                      <h5 class="mb-2" style="font-size: 17px;">Session</h5>
                      <div class="col-lg-6 col-md-6 sol-sm-12">
                        <h6 class="p-2" style="font-size: 14px;">Session</h6>
                        <div class="mb-3">
                          <select name="session" class="form-control" required>
                           
                            <option>2021-22</option>
                            <option>2022-23</option>
                            <option>2023-24</option>
                            <option>2024-25</option>
                            <option>2025-26</option>
                            <option>2026-27</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 sol-sm-12">
                        <h6 class="p-2" style="font-size: 14px;">Session Start Month</h6>
                        <div class="mb-3">
                          <select name="session_month" class="form-control" required>
                        
                            <option value="">Select</option>
                        
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                          </select>
                        </div>
                      </div>
                      <div class="text-right p-1">
                        <button type="submit" class="btn btn-info">Save</button>
                      </div>
      
                    </div>
                  <?php endif; ?>
              

          
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

</main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/school/system-settings/index.blade.php ENDPATH**/ ?>