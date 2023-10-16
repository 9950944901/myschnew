
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('Teacher.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Notice Board</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card p-3">
                <div class="row">
                  <div class="d-flex justify-content-between mt-2">
                  <h5 class="mt-2" style="font-size: 17px;">Notice Board</h5>
                  
                </div>
                </div>
              </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    
                    <th>Title</th>
                    <th>Description</th>
                    <th>Notice Date</th>
                    <th>Publish ON</th>
                    <th>For</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                   
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    
                    <td><?php echo e($value->title); ?></td>
                    <td>
                         <?php echo $value->desc; ?>

                    </td>
                    <td><?php echo e(date('d-M-Y', strtotime($value->notice_date))); ?></td>
                    <td><?php echo e(date('d-M-Y', strtotime($value->publish_on))); ?></td>
                    <td><?php $__currentLoopData = json_decode($value->send_to); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php echo e($val); ?>,
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </td>
                  </tr>
                
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>

            </div>
           </div>
          </div>
      </section>
    </div>

    
    <div class="modal fade" id="editinc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Notice Board</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo e(route('Add.Notice')); ?>">
              <?php echo csrf_field(); ?>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Title.</label>
                <input type="text" class="form-control" name="title"  required>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Description.</label>
               <textarea name="desc" id="myTextarea" class="form-control" rows="7"></textarea>
              </div>
              <div class="mb-3">
                <label class="col-form-label">Notice Date *</label>
               <input type="date"  class="form-control" name="notice_date"  required>
                <label class="col-form-label">Publish On *</label>
               <input type="date"  class="form-control" name="publish_on"  required>
              </div>
              <div class="mb-3">
                <label class="col-form-label">Message To</label>
               <div><input type="checkbox" name="send_to[]" Value="Admin" checked> <label class="col-form-label">Admin</label></div>
               <div><input type="checkbox" name="send_to[]" Value="Teacher"> <label class="col-form-label">Teacher</label></div>
               <div><input type="checkbox" name="send_to[]" Value="Student"> <label class="col-form-label">Student</label></div>
              </div>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>




  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/teacher/communicate/index.blade.php ENDPATH**/ ?>