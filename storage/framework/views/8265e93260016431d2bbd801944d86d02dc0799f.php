
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('Teacher.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Subjects</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard" >
      <section class="section dashboard">
        <div class="row">

          <!-- left side columns -->
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body" style="padding: 0 20px 0px 20px;">
                <h5 class="card-title" style="padding: 15px 0 0px 0; float: inherit;">Add Subject </h5>
                <hr>
                <div class="activity">
                  <form action="<?php echo e(route('TAdd.Subject.Data')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Subject Name</label>
                        <input type="text" class="form-control neha-text" name="name" required>
                      </div>
                    </div>
                                    
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <div class="">
                          <input type="radio" value="Theory" name="subject_type" checked> Theory &nbsp;
                          <input type="radio" value="Practical" name="subject_type"> Practical
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Subject Code</label>
                        <input type="text" class="form-control neha-text" name="subject_code" required>
                      </div>
                    </div>
                   
                    <hr>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-info">Save</button>
                    </div>

                  </div>
                </form>
                </div>
              </div>
            </div>

          </div><!-- End left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-8">
            <div class="row">
              <div class="card">
                <h5 class="mt-3" style="font-size: 17px;">Subject List</h5>
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Subject </th>
                      <th>Subject Code</th>
                      <th>Subject Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($value->name); ?></td>
                      <td><?php echo e($value->subject_code); ?></td>
                      <td><?php echo e($value->subject_type); ?></td>
                      <td>
                        <div class="d-flex">
                          <a data-bs-toggle="modal" data-bs-target="#editsubject<?php echo e($value->id); ?>" class="btn btn-light ml-1"><i class="fa fa-pencil"></i></a>
                          <a href="<?php echo e(route('TSubject.Delete',['id'=>$value->id])); ?>" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>
                    <div class="modal fade" id="editsubject<?php echo e($value->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Subject</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo e(route('TUpdate.Subject',['id'=>$value->id])); ?>">
                              <?php echo csrf_field(); ?>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group1 text-left mb-2">
                                    <label for="Phone">Subject Name</label>
                                    <input type="text" class="form-control neha-text" name="name" value="<?php echo e($value->name); ?>" required>
                                  </div>
                                </div>
                                                
                                <div class="col-md-12">
                                  <div class="form-group1 text-left mb-2">
                                    <div class="">
                                      <input type="radio" value="Theory" name="subject_type" <?php echo e(($value->subject_type=="Theory")? "checked" : ""); ?>> Theory &nbsp;
                                      <input type="radio" value="Practical" name="subject_type" <?php echo e(($value->subject_type=="Practical")? "checked" : ""); ?>> Practical
                                    </div>
                                  </div>
                                </div>
            
                                <div class="col-md-12">
                                  <div class="form-group1 text-left mb-2">
                                    <label for="Phone">Subject Code</label>
                                    <input type="text" class="form-control neha-text" name="subject_code" value="<?php echo e($value->subject_code); ?>" required>
                                  </div>
                                </div>
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
            </div>
          </div><!-- End Right side columns -->

        </div>
      </section>
    </div>

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/teacher/academics/subjects.blade.php ENDPATH**/ ?>