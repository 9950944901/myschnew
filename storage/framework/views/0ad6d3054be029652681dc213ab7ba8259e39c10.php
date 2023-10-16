
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('Teacher.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Lesson</li>
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
                <h5 class="card-title" style="padding: 15px 0 0px 0; float: inherit;">Add Lesson </h5>
                <hr>
                <form action="<?php echo e(route('TAdd.Lesson')); ?>" method="post">
                  <?php echo csrf_field(); ?>
                <div class="activity">
                  <div class="row">

                    <div class="col-lg-12 col-md-6 col-sm-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Class</label>
                        <select name="class" class="form-control neha-text" required>
                          <option value="">Select</option>
                          <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option><?php echo e($class->class); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-12 col-md-6 col-sm-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Section</label>
                        <select name="section" class="form-control neha-text" required>
                          <option value="">Select</option>
                          <?php $__currentLoopData = $sec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option><?php echo e($sec->section); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-12 col-md-6 col-sm-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Subject Group</label>
                        <select name="subject_group" class="form-control neha-text" required>
                          <option value="">Select</option>
                          <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option><?php echo e($group->name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-12 col-md-6 col-sm-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Name">Subject</label>
                        <select name="subject" class="form-control neha-text" required>
                          <option value="">Select</option>
                          <?php $__currentLoopData = $subj; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option><?php echo e($subj->name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <label for="Phone">Lesson Name</label>
                    </div>

                    <div class="multi-field-wrapper">
                      <div class="multi-fields">
                        
                        <div class="multi-field d-flex">
                          <input type="text" class="form-control" name="lesson[]" required>
                          <p class="remove-field"><i class="fa fa-remove" style="margin-top: 10px;margin-left: 2px;color:red"></i></p>
                        </div>
                      </div>
                    <p class="add-field" style="background: #cfd3d3;display: initial;border-radius: 5px;padding: 3px 7px;"><i class="fa fa-plus"></i> Add</p>
                  </div>

                    <hr>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-info">Save</button>
                    </div>

                  </div>
                </div>
              </form>
              </div>
            </div>

          </div><!-- End left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-8">
            <div class="row">
              <div class="card">
                <h5 class="mt-3" style="font-size: 17px;">Lesson List</h5>
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Class</th>
                      <th>Section</th>
                      <th>Subject Group</th>
                      <th>Subject</th>
                      <th>Lesson</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($value->class); ?></td>
                      <td><?php echo e($value->section); ?></td>
                      <td><?php echo e($value->subject_group); ?></td>
                      <td><?php echo e($value->subject); ?></td>
                      <td>
                        <?php $__currentLoopData = json_decode($value->lesson); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php echo e($data); ?>,
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </td>
                      <td>
                        <div class="d-flex">
                          <a href="<?php echo e(route('TLesson.Edit',['id'=>$value->id])); ?>" class="btn btn-light ml-1"><i class="fa fa-pencil"></i></a>
                          <a href="<?php echo e(route('TLesson.Delete',['id'=>$value->id])); ?>" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>
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

  <script>
    $('.multi-field-wrapper').each(function() {
    var $wrapper = $('.multi-fields', this);
    $(".add-field", $(this)).click(function(e) {
        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
    });
    $('.multi-field .remove-field', $wrapper).click(function() {
        if ($('.multi-field', $wrapper).length > 1)
            $(this).parent('.multi-field').remove();
    });
});
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/teacher/lesson-plan/lesson.blade.php ENDPATH**/ ?>