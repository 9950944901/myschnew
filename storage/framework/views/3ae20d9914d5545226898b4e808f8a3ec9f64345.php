
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
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
                  <a data-bs-toggle="modal" data-bs-target="#editinc" class="btn btn-info"><i class="fa fa-plus"></i>  Post New Message</a>
                </div>
                  

                </div>
              </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Title</th>
                    <th class="" style="width:200px;">description</th>
                    <th>Notice Date</th>
                    <th>Publish On</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                              
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($value->title); ?></td>
                    <td><?php echo $value->desc; ?></td>
                    <td><?php echo e(date('d-M-Y',strtotime($value->notice_date))); ?></td>
                    <td><?php echo e(date('d-M-Y',strtotime($value->publish_on))); ?></td>
                    <td>
                      <div class="d-flex">
                        <a data-bs-toggle="modal" data-bs-target="#editmodal<?php echo e($value->id); ?>" class="btn btn-light ml-1"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo e(route('Notice.Delete',['id'=>$value->id])); ?>" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-trash"></i></a>

                      </div>
                    </td>
                  </tr>
                  <div class="modal fade" id="editmodal<?php echo e($value->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Notice Board</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="<?php echo e(route('Update.Notice',['id'=>$value->id])); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Title.</label>
                              <input type="text" class="form-control" name="title" value="<?php echo e($value->title); ?>"  required>
                            </div>
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Description.</label>
                             <textarea name="desc" id="myTextarea" class="form-control" rows="7"><?php echo e($value->desc); ?></textarea>
                            </div>
                            <div class="mb-3">
                              <label class="col-form-label">Notice Date *</label>
                             <input type="date"  class="form-control" name="notice_date" value="<?php echo e($value->notice_date); ?>"  required>
                              <label class="col-form-label">Publish On *</label>
                             <input type="date"  class="form-control" name="publish_on"  value="<?php echo e($value->publish_on); ?>"  required>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/school/communicate/index.blade.php ENDPATH**/ ?>