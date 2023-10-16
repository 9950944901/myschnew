
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('Teacher.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Upload Content</li>
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
                <h5 class="card-title" style="padding: 15px 0 0px 0; float: inherit;">Upload Content</h5>
                <hr>
                <div class="activity">
                  <form action="<?php echo e(route('TUpload.Content.Data')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Content Title</label>
                        <input type="text" class="form-control neha-text" name="name" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Content Type</label>
                        <select name="content_type" class="form-control" required>
                          <option value="">Select</option>
                          <option>Assignments</option>
                            <option>Study Material</option>
                            <option>Syllabus</option>
                            <option>Other Download</option>
                      </select>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Available For</label>
                        <div>
                          <input type="checkbox" value="All Admin" name="availabe_for[]"> All Admin
                        </div>
                        <div>
                          <input type="checkbox" value="All Student" name="availabe_for[]"> All Student
                        </div>

                      </div>
                    </div>

                    <div class="bg-gray-light pt-2 pb-2">
                      <div class="col-md-12">
                        <div class="form-group1 text-left mb-2">
                          <input type="checkbox" value="Available For All Classes" name="availabe_for[]"> <label for="Phone">Available For All Classes</label>
                        </div>
                        <div class="form-group1 text-left mb-2">
                          <label for="Phone">Class</label>
                          <select name="class" class="form-control neha-text" required>
                            <option value="">Select</option>
                            <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($value->class); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          </select>
                        </div>
                        <div class="form-group1 text-left mb-2">
                          <label for="Phone">Section</label>
                          <select name="section" class="form-control neha-text" required>
                            <option value="">Select</option>
                            <?php $__currentLoopData = $sec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($value->section); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2 mt-2">
                        <label for="Phone"> Upload Date</label>
                        <input type="date" class="form-control neha-text" name="date" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Description</label>
                        <textarea name="desc" class="form-control neha-text" rows="2" ></textarea>
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Attach Document</label>
                        <input type="file" name="document" class="form-control-file" accept="application/pdf,application/vnd.ms-excel" >
                      </div>
                    </div>

                    <hr>
                    <div class="modal-footer">
                      <button type="submit"  class="btn btn-info" onClick="onClickPCI();">Save</button>
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
                <h5 class="mt-3" style="font-size: 17px;">Content List</h5>
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Content Title</th>
                      <th>Type</th>
                      <th>Date</th>
                      <th>Available For</th>
                      <th>Class</th>
                      <th>Upload Date</th>
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
                        
                        <?php echo e(date('d-M-Y', strtotime($value->created_at))); ?>

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
                            <form method="post" action="<?php echo e(route('TUpdate.Content',['id'=>$value->id])); ?>" enctype="multipart/form-data">
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
            </div>
          </div><!-- End Right side columns -->

        </div>
      </section>
    </div>

 
  </main><!-- End #main -->
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/teacher/download-center/index.blade.php ENDPATH**/ ?>