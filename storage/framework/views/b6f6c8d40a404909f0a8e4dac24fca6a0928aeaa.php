
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('Teacher.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Study Material</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">

              <div class="p-2 mb-2">
                <h5>Study Material List</h5>
              </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Content Title</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Available For</th>
                    <th>Class</th>
                    <th>Download File</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>      
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($value->name); ?></td>
                    <td><?php echo e($value->content_type); ?></td>
                    <td><?php echo e($value->date); ?></td>
                    <td>
                      <?php $__currentLoopData = json_decode($value->availabe_for); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($item); ?>,
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td><?php echo e($value->class); ?></td>
                    <td>
                      <div class="d-flex">
                        <?php if($value->document): ?>
                        <a href="<?php echo e(url('public/uploads/content/'.$value->document)); ?>" class="btn btn-light ml-1" download> <img style="display: none;" src="<?php echo e(url('public/uploads/content/'.$value->document)); ?>" alt="W3Schools"> <i class="fa fa-download"></i></a>
                        <?php else: ?>
                       <span class="text-danger"> No Files</span>
                        <?php endif; ?>
                        
                      </div>
                    </td>
                  </tr>

                  <div class="modal fade" id="editmodal<?php echo e($value->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Content</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="<?php echo e(route('Update.Content',['id'=>$value->id])); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group1 text-left mb-2">
                                  <label for="Phone">Content Title</label>
                                  <input type="text" class="form-control neha-text" name="name" value="<?php echo e($value->name); ?>" required>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group1 text-left mb-2">
                                  <label for="Phone">Content Type</label>
                                  <select name="content_type" class="form-control" required>
                                    <option><?php echo e($value->content_type); ?></option>
                                    <option>Assignments</option>
                                      <option>Study Material</option>
                                      <option>Syllabus</option>
                                      <option>Other Download</option>
                                </select>
                                </div>
                              </div>
          
                              
          
                              <div class="col-md-12">
                                <div class="form-group1 text-left mb-2 mt-2">
                                  <label for="Phone"> Upload Date</label>
                                  <input type="date" class="form-control neha-text" name="date" value="<?php echo e($value->date); ?>" required>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group1 text-left mb-2">
                                  <label for="Phone">Description</label>
                                  <textarea name="desc" class="form-control neha-text" rows="2" ><?php echo e($value->desc); ?></textarea>
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
      </section>
    </div>

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/teacher/download-center/study-material.blade.php ENDPATH**/ ?>