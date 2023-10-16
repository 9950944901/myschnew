
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
        <li class="breadcrumb-item active">front-cms / Openings</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="dashboard ">
    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-md-12">
            <div><a data-toggle="modal" data-target="#approveModal" class="btn btn-primary my-4"><i class="fa fa-plus"></i> Add Job</a></div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Post</th>
                    <th>Work Status  </th>
                    <th>Vacancy</th>
                    <th>Qualification</th>
                    <th>Experience</th>
                    <th>Apply Date</th>
                    <th>Status</th>
                    <th>Request</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                <?php $__currentLoopData = $open; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($value->post); ?></td>
                    <td><?php echo e($value->work_status); ?></td>
                    <td><?php echo e($value->vacancies); ?></td>
                    <td><?php echo e($value->qualification); ?></td>
                    <td><?php echo e($value->experience); ?></td>
                    <td><?php echo e(date('d-M-Y', strtotime($value->created_at))); ?></td>
                    <td>
                        <?php if($value->status==1): ?>
                        <a href="<?php echo e(route('Openings.Active',['id'=>$value->id])); ?>" class="btn btn-outline-success py-0">Active</a>
                        <?php else: ?>
                        <a href="<?php echo e(route('Openings.InActive',['id'=>$value->id])); ?>" class="btn btn-outline-danger py-0">Inactive</a>
                        <?php endif; ?>
                    </td>
                    <td><a href="<?php echo e(route('Openings.View',['id'=>$value->id])); ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>
                    <td>
                      <div class="d-flex">
                        <a data-toggle="modal" data-target="#approveModal<?php echo e($value->id); ?>" class="btn btn-success ml-1"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo e(route('Openings.Delete',['id'=>$value->id])); ?>" class="btn btn-danger ml-1 delete-confirm"><i class="fa fa-trash"></i></a>
                      </div>
                    </td>
                  </tr> 
                  <div class="modal fade" id="approveModal<?php echo e($value->id); ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="addModalLabel">Edit openings</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form action="<?php echo e(route('Openings.Update',['id'=>$value->id])); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group1 text-left">
                                    <label for="Address">Post For.</label>
                                    <input type="text" class="form-control" name="post" value="<?php echo e($value->post); ?>" required>
                                </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group1 text-left">
                                    <label for="Address">Total Vacancies</label>
                                    <input type="text" class="form-control" name="vacancies" value="<?php echo e($value->vacancies); ?>" required>
                                </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group1 text-left">
                                    <label for="number">Work Status</label>
                                    <input type="text" class="form-control" name="work_status" value="<?php echo e($value->work_status); ?>" required>
                                </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group1 text-left">
                                    <label for="number">Experience</label>
                                    <input type="text" class="form-control" name="experience" value="<?php echo e($value->experience); ?>" required>
                                </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group1 text-left">
                                    <label for="number">Qualification</label>
                                    <input type="text" class="form-control" name="qualification" value="<?php echo e($value->qualification); ?>" required>
                                </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group1 text-left">
                                    <label for="number">Location</label>
                                    <input type="text" class="form-control" name="location" value="<?php echo e($value->location); ?>" required>
                                </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group1 text-left" style="float: right;">
                                    <button type="submit" class="btn btn-info mt-4">Save</button>
                                </div>
                                </div>
                            </div>
                            </form>
                            </div>
                        </div>
                        </div>
                        </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </tbody>
            </table>
        </div>
      </div>
    </section>
  </div>

</main><!-- End #main -->
<?php $__env->stopSection(); ?>



<div class="modal fade" id="approveModal" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="addModalLabel">Add openings</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="<?php echo e(route('Openings.Data')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group1 text-left">
            <label for="Address">Post For.</label>
            <input type="text" class="form-control" name="post" required>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group1 text-left">
            <label for="Address">Total Vacancies</label>
            <input type="text" class="form-control" name="vacancies" required>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group1 text-left">
            <label for="number">Work Status</label>
            <input type="text" class="form-control" name="work_status" required>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group1 text-left">
            <label for="number">Experience</label>
            <input type="text" class="form-control" name="experience" required>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group1 text-left">
            <label for="number">Qualification</label>
            <input type="text" class="form-control" name="qualification" required>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group1 text-left">
            <label for="number">Location</label>
            <input type="text" class="form-control" name="location" required>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="form-group1 text-left" style="float: right;">
            <button type="submit" class="btn btn-info mt-4">Save</button>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>
</div>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/school/front-cms/openings/index.blade.php ENDPATH**/ ?>