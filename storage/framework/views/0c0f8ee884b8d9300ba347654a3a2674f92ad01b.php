
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Staff Directory</li>
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
                <div class="row">
                  <div class="d-flex justify-content-between mt-2">
                  <h5 class="mt-2" style="font-size: 17px;">Staff Directory</h5>
                  <a href="<?php echo e(route('SCHOOL.staff-directory-add-staff')); ?>" class="btn btn-info"><i class="fa fa-plus"></i> Add Staff</a>
                </div>
                  

                  
                  <hr>
                  

                </div>
              </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Staff Id</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Department</th>
                    
                    <th>Mobile Number</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                  
                  <tr id="task-1" class="task-list-row test-font " data-task-id="1" data-user="Platinum">
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($value->staff_id); ?></td>
                    <td>
                    <span class="text-bold ">Name:</span><span> <?php echo e($value->firstname); ?> <?php echo e($value->lastname); ?></span><br>
                     <span class="text-bold">Email:</span><span> <?php echo e($value->email); ?></span>
                    </td>
                    <td><?php echo e($value->role); ?></td>
                    <td><?php echo e($value->department); ?></td>
                    
                    <td>+91<?php echo e($value->phone); ?></td>
                    <td>
                      <div class="d-flex">
                        <a style="border:none;" href="<?php echo e(route('SCHOOL.staff-directory-show',['id'=>$value->id])); ?>" class="btn btn-sm text-info  ml-1"><i class="fa fa-bars"></i></a>
                        <a style="border:none;" href="<?php echo e(route('SCHOOL.staff-directory-edit-staff',['id'=>$value->id])); ?>" class="btn btn-sm  text-primary  ml-1"><i class="fa fa-pencil"></i></a>

                        <a style="border:none;" href="<?php echo e(route('SCHOOL.staff-directory-del',['id'=>$value->id])); ?>" class="btn btn-sm  delete-confirm text-danger  ml-1"><i class="fa fa-trash "></i></a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/school/human-resource/index.blade.php ENDPATH**/ ?>