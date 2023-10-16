
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Exam Schedule</li>
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
                    <h6 class="p-2" style="font-size: 14px;">Exam Group</h6>
                    <div class="">
                      <select name="exam_group" class="form-control neha-text" required>
                        <option value="">Select</option>
                        <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option><?php echo e($gr->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Subject</h6>
                    <div class="">
                      <select name="subject" class="form-control neha-text" required>
                        <option value="">Select</option>
                        <?php $__currentLoopData = $subject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option><?php echo e($subj->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="p-2 mt-4 d-flex justify-content-between" >
                      <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                      <a data-toggle="modal" data-target="#approveModal" class="btn btn-info"><i class="fa fa-plus"></i> Add</a>
                    </div>
                  </div>
                </div>
              </form>
              </div>



              <div class="modal fade" id="approveModal" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Exam Schedule</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo e(route('Add.Exam.Schedule')); ?>" method="post" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Class</label>
                          <select name="class" class="form-control neha-text" required>
                            <option value="">Select</option>
                            <?php $__currentLoopData = $ad_class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad_classaa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option><?php echo e($ad_classaa->class); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Subject</label>
                          <select name="subject" class="form-control neha-text" required>
                            <option value="">Select</option>
                            <?php $__currentLoopData = $subject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option><?php echo e($subj->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Exam Group</label>
                          <select name="exam_group" class="form-control neha-text" required>
                            <option value="">Select</option>
                            <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($gr->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="Email">Date From</label>
                          <input type="date" class="form-control neha-text" name="date_from" required>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="Phone">Start Time</label>
                          <input type="time" class="form-control neha-text" name="start_time" required>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="Address">Duration (In minutes)</label>
                          <input type="text" class="form-control neha-text" name="duration" >
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="Phone">Room No.</label>
                          <input type="text" class="form-control neha-text" name="room_no" >
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="number">Marks (Max.)</label>
                          <input type="text" pattern="['0-9']*" class="form-control neha-text" name="max_marks">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="number">Marks (Min.)</label>
                          <input type="text" pattern="['0-9']*" class="form-control neha-text" name="min_marks">
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



              <div class="d-flex justify-content-between p-2 mb-2">
                <h5 class="" style="font-size: 17px;">Exam Schedule</h5>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Class</th>
                    <th>Subject</th>
                    <th>Exam Group</th>
                    <th>Date From</th>
                    <th>Start Date</th>
                    <th>Duration</th>
                    <th>Room No.</th>
                    <th>Marks (Max.)</th>
                    <th>Marks (Min.)</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($value->class); ?></td>
                    <td><?php echo e($value->subject); ?></td>
                    <td><?php echo e($value->exam_group); ?></td>
                    <td><?php echo e(date('d-M-Y', strtotime($value->date_from))); ?></td>
                    <td><?php echo e(date('H:i A', strtotime($value->start_time))); ?></td>
                    <td><?php echo e($value->duration); ?></td>
                    <td><?php echo e($value->room_no); ?></td>
                    <td><?php echo e($value->max_marks); ?></td>
                    <td><?php echo e($value->min_marks); ?></td>
                    <td>
                      <div class="d-flex">
                        <a data-toggle="modal" data-target="#approve<?php echo e($value->id); ?>" class="btn btn-light"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo e(route('Exam.schedule.Delete',['id'=>$value->id])); ?>" class="btn btn-light ml-2 delete-confirm"><i class="fa fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  <div class="modal fade" id="approve<?php echo e($value->id); ?>" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Edit Exam Schedule</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="<?php echo e(route('Update.Exam.Schedule',['id'=>$value->id])); ?>" method="post" enctype="multipart/form-data">
                          <?php echo csrf_field(); ?>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group1 text-left">
                              <label for="Name">Class</label>
                              <select name="class" class="form-control neha-text" required>
                                <option><?php echo e($value->class); ?></option>
                                <?php $__currentLoopData = $ad_class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad_classaa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option><?php echo e($ad_classaa->class); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group1 text-left">
                              <label for="Name">Subject</label>
                              <select name="subject" class="form-control neha-text" required>
                                <option><?php echo e($value->subject); ?></option>
                                <?php $__currentLoopData = $subject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option><?php echo e($subj->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group1 text-left">
                              <label for="Name">Exam Group</label>
                              <select name="exam_group" class="form-control neha-text" required>
                                <option><?php echo e($value->exam_group); ?></option>
                                <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option><?php echo e($gr->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Email">Date From</label>
                              <input type="date" class="form-control neha-text" name="date_from" value="<?php echo e($value->date_from); ?>" required>
                            </div>
                          </div>
    
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Phone">Start Time</label>
                              <input type="time" class="form-control neha-text" name="start_time" value="<?php echo e($value->start_time); ?>" required>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Address">Duration (In minutes)</label>
                              <input type="text" class="form-control neha-text" name="duration"  value="<?php echo e($value->duration); ?>">
                            </div>
                          </div>
                          
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Phone">Room No.</label>
                              <input type="text" class="form-control neha-text" name="room_no" value="<?php echo e($value->room_no); ?>" >
                            </div>
                          </div>
    
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="number">Marks (Max.)</label>
                              <input type="text" pattern="['0-9']*" class="form-control neha-text" name="max_marks" value="<?php echo e($value->max_marks); ?>">
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="number">Marks (Min.)</label>
                              <input type="text" pattern="['0-9']*" class="form-control neha-text" name="min_marks" value="<?php echo e($value->min_marks); ?>">
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
      </section>
    </div>

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/school/examinations/exam-schedule.blade.php ENDPATH**/ ?>