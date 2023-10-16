
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Disabled Staff</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              

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
                  
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($value->staff_id); ?></td>
                    <td><?php echo e($value->firstname); ?> <?php echo e($value->lastname); ?></td>
                    <td><?php echo e($value->role); ?></td>
                    <td><?php echo e($value->department); ?></td>
                    
                    <td><?php echo e($value->phone); ?></td>
                    <td>
                      <div class="d-flex">
                        <a href="<?php echo e(route('SCHOOL.staff-directory-show',['id'=>$value->id])); ?>" class="btn btn-light ml-1"><i class="fa fa-bars"></i></a>
                        <a href="<?php echo e(route('SCHOOL.staff-directory-edit-staff',['id'=>$value->id])); ?>" class="btn btn-light ml-1"><i class="fa fa-pencil"></i></a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/school/human-resource/disabled-staff.blade.php ENDPATH**/ ?>