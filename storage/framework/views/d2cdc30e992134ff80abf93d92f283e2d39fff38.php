
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
        <li class="breadcrumb-item active">front-cms / Parents-Say</li>
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
              <form action="<?php echo e(route('Front.Web.parents.Data')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
              <div class="row mb-2">
                <h5 class="mt-3" style="font-size: 17px;">WebSite Parents-Say</h5>
                <div class="col-lg-4 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Parent's Image</h6>
                  <div class="">
                    <input type="file" class="form-control" name="image" required>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Parent's Name</h6>
                  <div class="">
                    <input type="text" class="form-control" name="name" required>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Parent's Job</h6>
                  <div class="">
                    <input type="text" class="form-control" name="job" required>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Parent's Say</h6>
                  <div class="">
                    <textarea type="text" class="form-control" name="says" rows="5" required></textarea>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 sol-sm-12">
                  <div class="mt-4 pt-2">
                    <button type="submit" class="btn btn-info">Save</button>
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
        <div class="col-md-12">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Job</th>
                    <th>Parent's Say</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>

                   <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><img src="<?php echo e(url('public/uploads/parents/'.$value->image)); ?>" height="50" width="50" alt=""></td>
                    <td><?php echo e($value->name); ?></td>
                    <td><?php echo e($value->job); ?></td>
                    <td><?php echo e($value->says); ?></td>
                    <td>
                      <div class="d-flex">
                        
                        <a href="<?php echo e(route('Parents.Delete',['id'=>$value->id])); ?>" class="btn btn-danger ml-1 delete-confirm"><i class="fa fa-trash"></i></a>
                      </div>
                    </td>
                  </tr> 
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
      </div>
    </section>
  </div>

</main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/school/front-cms/parrents/index.blade.php ENDPATH**/ ?>