
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Staff Attendance</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <section class="section dashboard">
            <div class="row">
              <table  class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Staff Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Mobile</th>
                    <th>Attendance</th>
                  </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr style="font-size: 15px; color: #012970; ">
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($value->staff_id); ?></td>
                        <td class=" text-capitalize"><?php echo e($value->firstname); ?> <?php echo e($value->lastname); ?></td>
                        <td><?php echo e($value->email); ?></td>
                        <td><?php echo e($value->role); ?></td>
                        <td>+91<?php echo e($value->phone); ?></td>
                                <td>
                                    <form action="<?php echo e(route('SCHOOL.teache.Attendance.Sent')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                    <input type="hidden" name="staff_id[]" value="<?php echo e($value->id); ?>">
                      
                                    <input type="hidden" name="teachename[]" value="<?php echo e($value->firstname); ?> <?php echo e($value->lastname); ?>">
                                    <div class="" style="width: 300px;">
                                      <input type="radio" name="attendance[<?php echo e($value->id); ?>]" required value="Present" > <label>Present</label> &nbsp;
                                <input type="radio" name="attendance[<?php echo e($value->id); ?>]" required value="Late" > <label>Late</label> &nbsp;
                                <input type="radio" name="attendance[<?php echo e($value->id); ?>]" required value="Absent" > <label>Absent</label> &nbsp;
                                <input type="radio" name="attendance[<?php echo e($value->id); ?>]" required value="Half Day" > <label>Half Day</label> &nbsp;
                              </div>
                            </td>
                       </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="text-right mb-2">
                        <input type="date" name="date" value="<?php echo e(date('Y-m-d')); ?>">
                         <button type="submit" class="btn btn-sm btn-info">Save</button>
                    </div>
                    </form>
                </tbody>
              </table>

            </div>
      </section>
    </div>

  </main><!-- End #main -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/school/human-resource/staff-attendance2_list.blade.php ENDPATH**/ ?>