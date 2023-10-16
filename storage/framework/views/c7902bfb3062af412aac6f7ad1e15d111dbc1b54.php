
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
        <li class="breadcrumb-item active">front-cms / Openings Request</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="dashboard ">
    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-md-12">
           
            <div class="d-flex justify-content-between" ><h6 class="btn btn-outline-secondary my-3"><b>Post:-<?php echo e($add->post); ?></b></h6> <a href="<?php echo e(route('Front.CMS.Openings')); ?>" class="btn btn-danger my-3"><i class="fa fa-arrow-circle-o-left"></i> Back</a></div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile No.</th>
                    <th>Apply Date</th>
                    <th>Resume</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                <?php $__currentLoopData = $career; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($value->name); ?></td>
                    <td><?php echo e($value->email); ?></td>
                    <td><?php echo e($value->number); ?></td>
                    <td><?php echo e(date('d-M-Y', strtotime($value->created_at))); ?></td>
                    <td><a href="<?php echo e(url('public/uploads/openings/'.$value->resume)); ?>" class="btn btn-info" download><i class="fa fa-download"></i></a></td>
                    <td>
                      <div class="d-flex">
                        <a href="<?php echo e(route('Openings.View.Delete',['id'=>$value->id])); ?>" class="btn btn-danger ml-1 delete-confirm"><i class="fa fa-trash"></i></a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/school/front-cms/openings/view.blade.php ENDPATH**/ ?>