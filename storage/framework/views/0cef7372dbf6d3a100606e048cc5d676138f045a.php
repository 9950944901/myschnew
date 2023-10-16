
<?php $__env->startSection('content'); ?>
<?php
  $user = auth()->user();
?>
<div class="main-panel">
    <div class="content-wrapper m-0">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4">
                <h3 class="font-weight-bold">Welcome <?php echo e($data->first_name); ?> <?php echo e($data->last_name); ?></h3>
              
            </div>
            <div class="col-12 col-xl-4 mb-4">
              <div class="justify-content-end d-flex">
                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white"  id="dropdownMenuDate2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border: 1px solid #4B49AC">
                    <i class="mdi mdi-calendar"></i> Today (<?php echo e(date('d-M-Y')); ?>)
                  </button>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 ">
          <div class="card">
            <div class="card-body">
              <h5>Notice Board</h5>
              <hr>

              <div class="row">
                <div class="col-md-12">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
             
                        <tr class="" style="font-size: 13px; color: #012970; ">
                          <th>S No.</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Notice Date</th>
                          <th>Publish ON</th>
                          <th>For</th>
                          </tr>
                    </thead>
    
                    <tbody>
                      <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr class="" style="font-size: 13px; color: #012970; ">

                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->title); ?></td>
                        <td><?php echo $item->desc; ?></td>
                        <td><?php echo e(date('d-M-Y', strtotime($item->notice_date))); ?></td>
                        <td><?php echo e(date('d-M-Y', strtotime($item->publish_on))); ?></td>
                        <td>
                          <?php $__currentLoopData = json_decode($item->send_to); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php echo e($item2); ?>

                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
    
              </div>
    

            </div>
          </div>

        </div>

      </div>

    </div>
    <!-- content-wrapper ends -->




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/student/communicate/index.blade.php ENDPATH**/ ?>