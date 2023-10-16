
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('Teacher.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Syllabus</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">

              <div class="p-2 d-flex justify-content-between">
                <h6>Syllabus List</h6 >
                <a data-toggle="modal" data-target="#approveModal" class="btn btn-info py-0 px-1" style="font-size: 13px;"><i class="fa fa-plus"></i> Add Syllabus </a>
              </div>



              <div class="modal fade" id="approveModal" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Syllabus </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo e(route('TAdd.Syllabus.Data')); ?>" method="post" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Session</label>
                          <select name="session" class="form-control" required>
                            <option value="">Select</option>
                            <option selected>2022-23</option>
                            <option>2023-24</option>
                            <option>2024-25</option>
                            <option>2025-26</option>
                            <option>2026-27</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Content Title</label>
                          <input type="text" class="form-control" name="content_title" required>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Syllabus Type </label>
                          <input type="text" class="form-control" name="syllabus_type" required>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Available For</label>
                          <select name="availabe_for" class="form-control" required>
                            <option value="">Select</option>
                            <option>Students</option>
                            <option>Teachers</option>
                            <option>All</option>
                          
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Class</label>
                          <select name="class" class="form-control" required>
                            <option value="">Select</option>
                            <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($cls->class); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Subject</label>
                          <select name="subject" class="form-control" required>
                            <option value="">Select</option>
                            <?php $__currentLoopData = $subject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($subj->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="number">Upload File</label>
                          <input type="file" class="form-control" name="syllabus_file" accept="application/pdf,application/vnd.ms-excel" required>
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










              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Session</th>
                    <th>Content Title</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Class</th>
                    <th>Subject</th>
                    <th>Available For</th>
                    <th>Download Syllabus</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($value->session); ?></td>
                    <td><?php echo e($value->content_title); ?></td>
                    <td><?php echo e($value->syllabus_type); ?></td>
                    <td><?php echo e(date('d-M-Y', strtotime($value->created_at))); ?></td>
                    <td><?php echo e($value->class); ?></td>
                    <td><?php echo e($value->subject); ?></td>
                    <td><?php echo e($value->availabe_for); ?></td>
                    <td>
                      <div class="d-flex">
                        
                        <?php if($value->syllabus_file): ?>
                        <a href="<?php echo e(url('public/uploads/syllabus/'.$value->syllabus_file)); ?>" class="btn btn-light ml-1" download> <img style="display: none;" src="<?php echo e(url('public/uploads/syllabus/'.$value->syllabus_file)); ?>" alt="W3Schools"> <i class="fa fa-download"></i></a>
                        <?php else: ?>
                        No Files
                        <?php endif; ?>
                      </div>
                    </td>
                  </tr>

                  <div class="modal fade" id="syllabus<?php echo e($value->id); ?>" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Edit Syllabus </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo e(route('TUpdate.Syllabus.Data',['id'=>$value->id])); ?>" method="post" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Session</label>
                          <select name="session" class="form-control" required>
                            <option><?php echo e($value->session); ?></option>
                            <option selected>2022-23</option>
                            <option>2023-24</option>
                            <option>2024-25</option>
                            <option>2025-26</option>
                            <option>2026-27</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Content Title</label>
                          <input type="text" class="form-control" name="content_title" value="<?php echo e($value->content_title); ?>" required>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Syllabus Type </label>
                          <input type="text" class="form-control" name="syllabus_type" value="<?php echo e($value->syllabus_type); ?>" required>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Available For</label>
                          <select name="availabe_for" class="form-control"  required>
                            <option><?php echo e($value->availabe_for); ?></option>
                            <option>Students</option>
                            <option>Teachers</option>
                            <option>All</option>
                          
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Class</label>
                          <select name="class" class="form-control" required>
                            <option><?php echo e($value->class); ?></option>
                            <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($cls->class); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Subject</label>
                          <select name="subject" class="form-control" required>
                            <option><?php echo e($value->subject); ?></option>
                            <?php $__currentLoopData = $subject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($subj->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="number">Upload File</label>
                          <input type="file" class="form-control" name="syllabus_file" accept="application/pdf,application/vnd.ms-excel" >
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group1 text-left" style="float: right;">
                          <button type="submit" class="btn btn-info mt-4">Update</button>
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
      </section>
    </div>

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/teacher/download-center/syllabus.blade.php ENDPATH**/ ?>