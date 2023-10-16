
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
      <div class="d-flex justify-content-between">
        <h5>Leave List</h5>
        <a href="button" class="btn btn-info" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i>
          Add</a>
        <!-- Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add Leave</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="<?php echo e(route('student.add_leave')); ?>"  method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group1 text-left">
                      <label for="Name">Apply Date</label>
                      <input type="text" class="form-control neha-text" required readonly name="Apply_date" value="<?php echo e(date('d-M-Y')); ?>" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group1 text-left">
                      <label for="Email">Class</label>
                      <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <input type="text"  class="form-control neha-text" required readonly  name="class" value="<?php echo e($item1->class); ?>"   placeholder="Enter Name">
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group1 text-left">
                      <label for="Phone">From Date</label>
                      <input type="date" name="from_date" required class="form-control neha-text" id="password2"
                        placeholder=" Enter Phone no.">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group1 text-left">
                      <label for="Address">To Date</label>
                      <input type="date" name="to_date" required class="form-control neha-text" id="Address" placeholder="Enter Address">
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="form-group1 text-left">
                      <label for="Phone">Reason</label>
                      <textarea name="reason" required class="form-control neha-text" rows="2"
                        placeholder="Enter here..."></textarea>
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="form-group1 text-left">
                      <label for="Address">Attach Document</label>
                      <input type="file" name="document" required accept = "application/pdf,.csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" class="form-control-file" id="addImage">
                    </div>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-info">Save</button>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>

      <hr>
      <div class="row">
        <div class="col-md-12">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr class="" style="font-size: 13px; color: #012970; ">
                <th>S No.</th>
                <th>Class</th>
                <th>Section</th>
                <th>Apply Date</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
              <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($item2->class); ?></td>
                <td><?php echo e($item2->section); ?></td>
                <td><?php echo e(date('d-M-Y', strtotime($item2->Apply_date))); ?></td>
                <td><?php echo e(date('d-M-Y', strtotime($item2->from_date))); ?></td>
                <td><?php echo e(date('d-M-Y', strtotime($item2->to_date))); ?></td>
                <td>
                  <?php if($item2->status == 0): ?>
                     <span class="text-success"> Approved</span>
                      <?php else: ?>
                     <span class="text-warning"> Pending</span>
                  <?php endif; ?>

                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>

      </div>

    </div>
    <!-- content-wrapper ends -->
    














<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/student/apply-leave/index.blade.php ENDPATH**/ ?>