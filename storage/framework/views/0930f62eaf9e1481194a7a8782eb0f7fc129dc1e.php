
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('Teacher.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Approve Leave Request</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">

              <div class="d-flex justify-content-between mb-3">
                <h5 class="" style="font-size: 17px;">Approve Leave Request</h5>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#leaverequestModal">
                  <i class="fa fa-plus"></i> Add Leave Request
                </button>
                <!-- Modal -->
                <div class="modal fade" id="leaverequestModal" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="leaverequestModalLabel">Add Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="<?php echo e(route('tLeave.Request.data')); ?>" method="post" enctype="multipart/form-data">
                          <?php echo csrf_field(); ?>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group1 text-left">
                              <label for="Name">Role</label>
                              <select name="role" class="form-control neha-text" required>
                                <option>Teacher</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group1 text-left">
                              <label for="Name">Name</label>

                              <input type="text" class="form-control neha-text" id="Email" name="name" value="<?php echo e(auth()->user()->name ?? ''); ?>" required> 

                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Email">Apply Date</label>
                              <input type="date" class="form-control neha-text" id="Email" name="date" required>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group1 text-left">
                              <label for="Name">Leave Type</label>
                              <select name="leave_type" class="form-control neha-text" required>
                                <option value="">Select</option>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                  
                                <option><?php echo e($value->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Email">Leave From Date</label>
                              <input type="date" class="form-control neha-text" id="Email" name="from_date" required>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Email">Leave To Date</label>
                              <input type="date" class="form-control neha-text" id="Email" name="todate" required>
                            </div>
                          </div>
                         
                          <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Phone">Reason</label>
                              <textarea name="reason" class="form-control neha-text" rows="2" required
                                ></textarea>
                            </div>
                          </div>
                          

                          <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="number">Attach Document</label>
                              <input type="file" name="document" class="form-control-file" id="addImage">
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left" style="display:none;">
                              <label for="Email">Status</label>
                              <div>
                              <input type="radio" name="same" checked value="Pending"> <label>Pending</label> &nbsp;
                              <input type="radio" name="same" value="Approve"> <label>Approve</label> &nbsp;
                              <input type="radio" name="same" value="Disapprove"> <label>Disapprove</label>
                            </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <button type="submit" class="btn btn-info mt-2">Save</button>
                          </div>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Leave Type</th>
                    <th>Leave start Date</th>
                    <th>End Date</th>
                    
                    <th>Status</th>
                    <th>Apply Date</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                   
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($data->name); ?></td>
                    <td><?php echo e($data->role); ?></td>
                    <td><?php echo e($data->leave_type); ?></td>
                    <td><?php echo e($data->from_date); ?></td>
                    <td><?php echo e($data->todate); ?></td>
                    
                    <td><?php echo e($data->same); ?></td>
                    <td>
                      
                      <?php echo e(date('d-M-Y', strtotime($data->created_at))); ?>

                    </td>
                  </tr>
                  <div class="modal fade" id="editinc<?php echo e($data->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">View Request</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="<?php echo e(route('View.Request.Update',['id'=>$data->id])); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Reason.</label>
                              <textarea type="text" class="form-control" name="reason"><?php echo e($data->reason); ?></textarea>
                            </div>
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Note.</label>
                              <textarea type="text" class="form-control" name="reason"><?php echo e($data->note); ?></textarea>
                            </div>
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Documents.</label>
                              <?php if($data->document): ?>
                              <iframe src="<?php echo e(url('public/uploads/leavrequest/'.$data->document)); ?>" style="width: 100%;height:150px;" frameborder="0"></iframe>
                              <?php else: ?>
                              
                              <?php endif; ?>
                            </div>
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Status.</label>
                              <input type="radio" name="same" <?php echo e(($data->same=="Pending")? "checked" : ""); ?> value="Pending"> <label>Pending</label> &nbsp;
                              <input type="radio" name="same" <?php echo e(($data->same=="Approve")? "checked" : ""); ?> value="Approve"> <label>Approve</label> &nbsp;
                              <input type="radio" name="same" <?php echo e(($data->same=="Disapprove")? "checked" : ""); ?> value="Disapprove"> <label>Disapprove</label>
                            </div>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>

            </div>
      </section>
    </div>

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/teacher/human-resource/approve-leave-request.blade.php ENDPATH**/ ?>