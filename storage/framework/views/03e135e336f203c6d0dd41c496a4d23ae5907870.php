
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Approve Leave</li>
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
                <form action="" method="get">
                  <?php echo csrf_field(); ?>
                <div class="row mb-3">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <div class="col-lg-4 col-md-4 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="class" class="form-control neha-text" required>
                        <option value="<?php echo e(route('SCHOOL.approve-leave')); ?>">Select</option>
                        <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option><?php echo e($cls->class); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 sol-sm-12">
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
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="p-2 mt-4">
                      <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>
                </div>
              </form>
              </div>

              <div class="d-flex justify-content-between mb-3">
                <h5 class="" style="font-size: 17px;">Leave Approval List</h5>
                <!-- Button trigger modal -->

                

                

                

                <!-- Modal -->
                <div class="modal fade" id="approveModal" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add Student Leave</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="<?php echo e(route('Add.Student.Leave')); ?>" method="post" enctype="multipart/form-data">
                          <?php echo csrf_field(); ?>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group1 text-left">
                              <label for="Name">Class</label>
                              <select name="class" class="form-control neha-text" required>
                                <option value="">Select</option>
                                <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option><?php echo e($cls->class); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group1 text-left">
                              <label for="Name">Section</label>
                              <select name="section" class="form-control neha-text" required>
                                <option value="">Select</option>
                                <?php $__currentLoopData = $sec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $se): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option><?php echo e($se->section); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <label for="Name">Select Student</label>
                            <select class="form-control" name="Student_name" required>
                              <option value="">Select</option>
                              <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option><?php echo e($stu->first_name); ?> <?php echo e($stu->last_name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                          
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Email">Apply Date</label>
                              <input type="date" class="form-control neha-text" name="Apply_date" value="<?php echo date('Y-m-d'); ?>" required>
                            </div>
                          </div>

                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Phone">From Date</label>
                              <input type="date" class="form-control neha-text" name="from_date" required>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Address">To Date</label>
                              <input type="date" class="form-control neha-text" name="to_date" required>
                            </div>
                          </div>

                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Phone">Reason</label>
                              <textarea name="reason" class="form-control neha-text" rows="2"
                                placeholder="Enter here..."></textarea>
                            </div>
                          </div>

                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="number">Attach Document</label>
                              <input type="file" name="document" class="form-control-file">
                            </div>
                          </div>

                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <button type="submit" class="btn btn-info mt-2">Save</button>
                            </div>
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
                    <th>Class</th>
                    <th>Section</th>
                    <th>Apply Date</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Status</th>
                    <th>Approved By</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $__currentLoopData = $stu_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                  <tr id="task-2" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($value->Student_name); ?></td>
                    <td><?php echo e($value->class); ?></td>
                    <td><?php echo e($value->section); ?></td>
                    <td><?php echo e(date('d-M-Y', strtotime($value->Apply_date))); ?> </td>
                    <td><?php echo e(date('d-M-Y', strtotime($value->from_date))); ?></td>
                    <td><?php echo e(date('d-M-Y', strtotime($value->to_date))); ?></td>
                    <td>
                      <?php if($value->status==1): ?>
                       <span class="text-warning">Pending</span>
                      <?php else: ?>
                      <span class="text-success">Approved</span>
                      <?php endif; ?>
                    </td>
                    <td><?php echo e($value->approvalby); ?></td>
                    <td>
                      <div class="d-flex">
                        <?php if($value->status==1): ?>

                        <a href="<?php echo e(route('Student.Approve.Change.Status',['id'=>$value->id])); ?>" class="btn btn-secondary ml-1"><i class="fa fa-times" onclick="return confirm('Are you sure you want to Approve Leave <?php echo e($value->Student_name); ?>?');"></i></a>
                        
                        <?php else: ?>
                        <a class="btn btn-success ml-1"><i class="fa fa-check"></i></a>
                        <?php endif; ?>
                        <?php if($value->document): ?>
                        <a href="<?php echo e(url('public/uploads/student/homework/'.$value->document)); ?>" class="btn btn-light ml-1" download><i class="fa fa-download"></i></a>
                        <?php else: ?>
                        <a class="btn btn-light ml-1" onclick="toastr.error('No File !. ','Error',{displayDuration: 500, pos: 'top'})"><i class="fa fa-download"></i></a>
                        <?php endif; ?>
                        <a class="btn btn-light ml-1" data-toggle="modal" data-target="#editapproveModal<?php echo e($value->id); ?>">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a href="<?php echo e(route('Student.Approve.Delete',['id'=>$value->id])); ?>" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  <div class="modal fade" id="editapproveModal<?php echo e($value->id); ?>" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                      <div class="d-flex"><h5 class="modal-title" id="addModalLabel"><?php echo e($value->Student_name); ?></h5> <p class="mt-1 ml-2"> Leave Reason</p></div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="box p-2">
                              <p><?php echo e($value->reason); ?></p>
                            </div>
                          </div>
                        </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/school/attendance/approve-leave.blade.php ENDPATH**/ ?>