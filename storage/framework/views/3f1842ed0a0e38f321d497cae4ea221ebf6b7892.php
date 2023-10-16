
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Homework</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <form action="<?php echo e(route('Teacher.homework')); ?>" method="get">
                    <?php echo csrf_field(); ?>
                <div class="row">
                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="class" class="form-control" required>
                        <option value="">Select</option>
                        <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($cls->class); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="section" class="form-control" required>
                        <option value="">Select</option>
                        <?php $__currentLoopData = $sec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $se): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($se->section); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Subject Group</h6>
                    <div class="">
                      <select name="subject_group" class="form-control" required>
                        <option value="">Select</option>
                        <?php $__currentLoopData = $subject_group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sgr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($sgr->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Subject</h6>
                    <div class="">
                      <select name="subject" class="form-control" required>
                        <option value="">Select</option>
                        <?php $__currentLoopData = $subject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($subj->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-12 col-sm-12">
                    <div class="p-2 mt-4">
                      <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>
                </form>
                </div>

                <hr>
                <div class="d-flex justify-content-between p-2">
                  <h5>Homework List</h5>
                  <a href="button" class="btn btn-info" data-toggle="modal" data-target="#addhomeworkModal"><i
                      class="fa fa-plus"></i> Add</a>
                  <!-- Modal -->
                  <div class="modal fade" id="addhomeworkModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="applyleaveModalLabel">Add Homework</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo e(route('Teacher.Add.HomeWork')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                          <div class="row">
                            <?php
                                $user = auth()->user();
                            ?>
                            <input type="hidden" name="teacher" value="<?php echo e($user->name); ?>">
                            <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label><b>Class</b></label>
                                <!-- <h6 class="p-2" style="font-size: 14px;">Class</h6> -->
                                <div class="">
                                    <select name="class" class="form-control" required>
                                        <option value="">Select</option>
                                        <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option><?php echo e($cls->class); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                              <div class="form-group1 text-left">
                                <label><b>Section</b></label>
                                <!-- <h6 class="p-2" style="font-size: 14px;">Section</h6> -->
                                <div class="">
                                    <select name="section" class="form-control" required>
                                        <option value="">Select</option>
                                        <?php $__currentLoopData = $sec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $se): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option><?php echo e($se->section); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label><b>Subject Group</b></label>
                                <!-- <h6 class="p-2" style="font-size: 14px;">Subject Group</h6> -->
                                <div class="">
                                    <select name="subject_group" class="form-control" required>
                                        <option value="">Select</option>
                                        <?php $__currentLoopData = $subject_group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sgr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option><?php echo e($sgr->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label><b>Subject</b></label>
                                <!-- <h6 class="p-2" style="font-size: 14px;">Subject</h6> -->
                                <div class="">
                                    <select name="subject" class="form-control" required>
                                        <option value="">Select</option>
                                        <?php $__currentLoopData = $subject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option><?php echo e($subj->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="Phone"><b>Homework Date</b></label>
                                <input type="date" class="form-control" name="homework_date" required>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="Phone"><b>Submission Date</b></label>
                                <input type="date" class="form-control" name="sub_date" required>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="Phone"><b>Evaluation Date</b></label>
                                <input type="date" class="form-control" name="evalu_date">
                              </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="number"><b>Attach Document</b></label>
                                <input type="file" name="document" class="form-control" accept = "application/pdf,.csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                              </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="Phone"><b>Description</b></label>
                                <textarea type="text" id="myTextarea" class="form-control" name="desc"></textarea>
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <div class="form-group1 text-right mt-3">
                                <button type="submit" class="btn btn-info">Save</button>
                              </div>
                            </div>

                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Class</th>
                      <th>Section</th>
                      <th>Subject Group</th>
                      <th>Subject</th>
                      <th>Homework Date</th>
                      <th>Submission Date</th>
                      <th>Evaluation Date</th>
                      <th>Created By</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $__currentLoopData = $home; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($list->class); ?></td>
                      <td><?php echo e($list->section); ?></td>
                      <td><?php echo e($list->subject_group); ?></td>
                      <td><?php echo e($list->subject); ?></td>
                      <td><?php echo e(date('d-M-Y', strtotime($list->homework_date))); ?></td>
                      <td><?php echo e(date('d-M-Y', strtotime($list->sub_date))); ?></td>
                      <td><?php echo e(date('d-M-Y', strtotime($list->evalu_date))); ?></td>
                      <td><?php echo e($list->teacher); ?> (Teacher)</td>
                      <td>
                        <?php if($list->user_id == $user->id): ?>
                        <div class="d-flex">
                          <a data-toggle="modal" data-target="#addhomewor<?php echo e($list->id); ?>" class="btn btn-light ml-1"><i class="fa fa-pencil"></i></a>
                          <a href="<?php echo e(route('Teacher.HomeWork.Delete',['id'=>$list->id])); ?>" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-trash"></i></a>
                        </div>
                        <?php else: ?>
                        
                        <?php endif; ?>
                      </td>
                    </tr>

                    <div class="modal fade" id="addhomewor<?php echo e($list->id); ?>" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="applyleaveModalLabel">Add Homework</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo e(route('Teacher.Update.HomeWork',['id'=>$list->id])); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                          <div class="row">
                            <?php
                                $user = auth()->user();
                            ?>
                            <input type="hidden" name="teacher" value="<?php echo e($user->name); ?>">
                            <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label><b>Class</b></label>
                                <!-- <h6 class="p-2" style="font-size: 14px;">Class</h6> -->
                                <div class="">
                                    <select name="class" class="form-control" required>
                                        <option><?php echo e($list->class); ?></option>
                                        <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option><?php echo e($cls->class); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                              <div class="form-group1 text-left">
                                <label><b>Section</b></label>
                                <!-- <h6 class="p-2" style="font-size: 14px;">Section</h6> -->
                                <div class="">
                                    <select name="section" class="form-control" required>
                                        <option><?php echo e($list->section); ?></option>
                                        <?php $__currentLoopData = $sec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $se): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option><?php echo e($se->section); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label><b>Subject Group</b></label>
                                <!-- <h6 class="p-2" style="font-size: 14px;">Subject Group</h6> -->
                                <div class="">
                                    <select name="subject_group" class="form-control" required>
                                        <option><?php echo e($list->subject_group); ?></option>
                                        <?php $__currentLoopData = $subject_group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sgr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option><?php echo e($sgr->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label><b>Subject</b></label>
                                <!-- <h6 class="p-2" style="font-size: 14px;">Subject</h6> -->
                                <div class="">
                                    <select name="subject" class="form-control" required>
                                        <option><?php echo e($list->subject); ?></option>
                                        <?php $__currentLoopData = $subject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option><?php echo e($subj->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="Phone"><b>Homework Date</b></label>
                                <input type="date" class="form-control" name="homework_date" value="<?php echo e($list->homework_date); ?>" required>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="Phone"><b>Submission Date</b></label>
                                <input type="date" class="form-control" name="sub_date" value="<?php echo e($list->sub_date); ?>" required>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="Phone"><b>Evaluation Date</b></label>
                                <input type="date" class="form-control" name="evalu_date" value="<?php echo e($list->evalu_date); ?>">
                              </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="number"><b>Attach Document</b></label>
                                <input type="file" name="document" class="form-control" accept = "application/pdf,.csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                                <?php if($list->document): ?>
                                    <?php echo e($list->document); ?>

                                <?php else: ?>
                                No File
                                <?php endif; ?>
                              </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="Phone"><b>Description</b></label>
                                <textarea type="text" id="myTextarea" class="form-control" name="desc"><?php echo e($list->desc); ?></textarea>
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <div class="form-group1 text-right mt-3">
                                <button type="submit" class="btn btn-info">Save</button>
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
<?php echo $__env->make('layouts.teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/teacher/homework/index.blade.php ENDPATH**/ ?>