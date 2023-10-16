
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Add Class & Section</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-6 col-md-6 col-sm-6">
             <div><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addclass" data-bs-whatever="@mdo">Add Class</button></div>
              <div class="row">
                <h5 class="p-2">Class</h5>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Class Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($value->class); ?></td>
                      <td>
                        <div class="d-flex">
                          <a data-bs-toggle="modal" data-bs-target="#editclass<?php echo e($value->id); ?>" data-bs-whatever="@mdo" class="btn btn-light ml-1"><i class="fa fa-pencil"></i></a>
                          <a href="<?php echo e(route('Delete.Class',['id'=>$value->id])); ?>" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                    <div class="modal fade" id="editclass<?php echo e($value->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Class</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo e(route('SCHOOL.EDIT.Class',['id'=>$value->id])); ?>">
                              <?php echo csrf_field(); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Class:</label>
                                <input type="text" class="form-control" name="class" value="<?php echo e($value->class); ?>" id="recipient-name" required>
                              </div>
                              
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Submit</button>
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




          <div class="col-lg-6 col-md-6 col-sm-6">
             <div><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addsection" data-bs-whatever="@mdo">Add Section</button></div>
              <div class="row">
                <h5 class="p-2">Section</h5>
                <table id="example20" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Section Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($value->section); ?></td>
                      <td>
                        <div class="d-flex">
                          <a class="btn btn-light ml-1" data-bs-toggle="modal" data-bs-target="#editsection<?php echo e($value->id); ?>" data-bs-whatever="@mdo"><i class="fa fa-pencil"></i></a>
                          <a href="<?php echo e(route('Delete.Section',['id'=>$value->id])); ?>" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                    <div class="modal fade" id="editsection<?php echo e($value->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Section</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo e(route('SCHOOL.Edit.Section',['id'=>$value->id])); ?>">
                              <?php echo csrf_field(); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Section:</label>
                                <input type="text" class="form-control" value="<?php echo e($value->section); ?>" name="section" id="recipient-name" required>
                              </div>
                              
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Submit</button>
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
          </div>
      </section>
    </div>




    
    <div class="modal fade" id="addclass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Class</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo e(route('SCHOOL.ADD.Class')); ?>">
              <?php echo csrf_field(); ?>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Class:</label>
                <input type="text" class="form-control" name="class" id="recipient-name" required>
              </div>
              
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    
    <div class="modal fade" id="addsection" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New section</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo e(route('SCHOOL.ADD.Section')); ?>">
              <?php echo csrf_field(); ?>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Section:</label>
                <input type="text" class="form-control" name="section" id="recipient-name" required>
              </div>
              
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

















  </main><!-- End #main -->
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/school/student-information/online-admission.blade.php ENDPATH**/ ?>