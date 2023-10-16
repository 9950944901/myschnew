
<?php $__env->startSection('content'); ?>
<main id="main" class="main">
<?php
    use App\Models\FeesDiscount;
    use App\Models\FeesCollect;
?>
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Fees Carry Forward</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard" >
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card" style="padding-bottom: 36px;">
                <form action="<?php echo e(route('SCHOOL.fees-carry-forward')); ?>" method="get">
                  <?php echo csrf_field(); ?>
                <div class="row">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <div class="col-md-5 sol-sm-12">
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
                  <div class="col-md-5 sol-sm-12">
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
                  <div class="col-md-2 col-sm-12">
                    <div class="mt-4 pt-1">
                      <button type="submit" class="btn btn-info" style="margin-top: 5px"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>

                </div>
              </form>
              </div>

              <div class="p-3">
                <h5>Previous Session Balance Fees</h5>
               </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th class="w-10">Student</th>
                    <th class="w-10">Mobile</th>
                    <th>Balance</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                  <tr id="task-1" class="task-list-row test-font " data-task-id="1" data-user="Platinum">
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($value->admission_no); ?></td>
                    <td><?php echo e($value->roll_no); ?></td>
                    <td><?php echo e($value->class); ?></td>
                    <td><?php echo e($value->section); ?></td>
                    <td>
                      <span class="text-bold text-capitalize">Name:</span><span> <?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?></span><br>
                      <span class="text-bold text-capitalize">F.Name:</span><span> <?php echo e($value->father_name); ?></span><br>
                      <span class="text-bold">Email:</span><span> <?php echo e($value->email); ?></span><br>
                    </td>
                    <td>+91<?php echo e($value->mobile_no); ?></td>
               
                    
                  
                    

                    <?php
                        $fees = FeesCollect::where('stu_id',$value->id)->get();
                        // {{dd($fees);}}
                    ?>
                    <?php
                        $sum = FeesCollect::where('stu_id',$value->id)->sum('total');
                        $amot = 0;
                    ?>
                    <?php $__currentLoopData = $fees->unique('user_id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                     $total = FeesDiscount::where('discount',$item->fees_group)->where('name',$item->user_id)->first();
                     $amot = $amot + ($total->amount ?? '0');

                    //  {{dd($amount);}}
                     ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php if((int)($amot ?? '0') > $sum): ?>
                     <td><span class="text-warning">Pending..</span><span class="text-bold"><?php echo e(number_format($sum - ($amot ?? '0'))); ?></span></td>
                   <?php elseif((int)($amot ?? '0') == $sum): ?>
                    <td><span></span><span class="text-success">---</span></td>
                 <?php else: ?>
                 <td class="text-primary">Carry Forward <span>₹<?php echo e($sum - ($amot ?? '0')); ?>

                </span></td>
                 <?php endif; ?>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
              </table>

            </div>
      </section>
    </div>

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/school/fees-collection/fees-carry-forward.blade.php ENDPATH**/ ?>