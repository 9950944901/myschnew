
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Search Fees Payments</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              
                

              <div class="p-3">
                <h5>Payment Id Detail</h5>
              </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Admission No</th>
                    <th>Roll No</th>
                    <th>Payment Id</th>
                    <th>Student</th>
                    <th>Date</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Mode</th>
                    <th>Amount</th>
                    
                    
                  </tr>
                </thead>

                <tbody>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($value->admission_no); ?></td>
                    <td><?php echo e($value->roll_no); ?></td>
                    <td>00<?php echo e($value->id); ?></td>
                    <td>
                      <span class="text-bold">Name:</span><span> <?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?></span><br>
                      <span class="text-bold">F.Name:</span><span> <?php echo e($value->father_name); ?></span><br>
                      <span class="text-bold">Email:</span><span> <?php echo e($value->email); ?></span><br>
                      </td>
                    <td><?php echo e(date('d-M-Y', strtotime($value->created_at))); ?></td>
                    <td><?php echo e($value->class); ?></td>
                    <td><?php echo e($value->section); ?></td>
                    <td><?php echo e($value->payment_mode); ?></td>
                    <td>
                    
                    <span class="text-success text-bold">₹<?php echo e(number_format($value->total ?? '0')); ?></span>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/school/fees-collection/search-fees-payment.blade.php ENDPATH**/ ?>