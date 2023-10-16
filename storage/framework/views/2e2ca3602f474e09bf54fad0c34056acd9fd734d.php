
<?php $__env->startSection('content'); ?>
    <style>
        .adm-btn {
            margin-top: 0px;
        }

        @media (min-width: 769px) and (max-width: 1440px) {
            .adm-btn {
                margin-top: 17px;
            }
        }
    </style>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Student Details</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="dashboard">
            <section class="section dashboard">
                <div class="row">
                    <!-- Left side columns -->
                    <div class="col-lg-12 col-md-12 col-sm-12">

                        

                        <div class="card info-card sales-card" style="padding: 10px;">
                            <form action="<?php echo e(route('SCHOOL.Student.Details')); ?>" method="get">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <h6 class="p-2" style="font-size: 14px;">Class</h6>
                                                <div class="">
                                                    <select name="class" class="form-control neha-text" required>
                                                        <option value="">Select</option>
                                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option><?php echo e($value->class); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <h6 class="p-2" style="font-size: 14px;">Section</h6>
                                                <div class="">
                                                    <select name="section" class="form-control neha-text" required>
                                                        <option value="">Select</option>
                                                        <?php $__currentLoopData = $sec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option><?php echo e($value->section); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <h6 class="p-2" style="font-size: 14px;">Search</h6>
                                                    <div class="">
                                                        <button type="submit" dissabled class="btn btn-info"><i
                                                                class="fa fa-search"></i> Search</button>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                        <h6 class="p-2" style="font-size: 14px;"></h6>
                                        <div class="adm-btn">
                                            <a href="<?php echo e(route('SCHOOL.student-admission')); ?>" class="btn btn-info">Add
                                                Admission</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            


                        </div>

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="" style="font-size: 13px; color: #012970; ">
                                    <th>S No.</th>
                                    <th>Admission No.</th>
                                    <th>Roll No.</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Student</th>
                                    <th>Date of Birth</th>
                                    <th>Gender</th>
                                    
                                    <th>Mobile No.</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr id="task-1" class="task-list-row test-font text-capitalize" data-task-id="1"
                                        data-user="Platinum">
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($value->admission_no); ?></td>
                                        <td><?php echo e($value->roll_no); ?></td>
                                        <td><?php echo e($value->class); ?></td>
                                        <td><?php echo e($value->section); ?></td>
                                        <td>
                                            <span class="text-bold">Name:</span><span> <?php echo e($value->first_name); ?>

                                                <?php echo e($value->last_name); ?></span><br>
                                            <span class="text-bold">F.Name:</span><span>
                                                <?php echo e($value->father_name); ?></span><br>
                                        </td>

                                        <td><?php echo e($value->dob); ?></td>
                                        <td><?php echo e($value->gender); ?></td>
                                        
                                        <td>+91<?php echo e($value->mobile_no); ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="<?php echo e(route('SCHOOL.student-details-show', ['id' => $value->id])); ?>"
                                                    class="btn btn-light ml-1"><i class="fa fa-bars text-warning"></i></a>
                                                <a href="<?php echo e(route('SCHOOL.student-details-edit', ['id' => $value->id])); ?>"
                                                    class="btn btn-light ml-1"><i class="fa fa-edit text-primary"></i></a>
                                                <a href="<?php echo e(route('SCHOOL.student-details-delete', ['id' => $value->id])); ?>"
                                                    class="btn btn-light ml-1 delete-confirm"><i
                                                        class="fa fa-trash text-danger"></i></a>

                                                <?php if($value->active_status == 1): ?>
                                                    <a href="<?php echo e(route('SCHOOL.student-details-Active', ['id' => $value->id])); ?>"
                                                        class="btn btn-light ml-1"><i
                                                            class="fa fa-check text-success"></i></a>
                                                <?php else: ?>
                                                    <a href="<?php echo e(route('SCHOOL.student-details-inactive', ['id' => $value->id])); ?>"
                                                        class="btn btn-light ml-1"><i
                                                            class="fa fa-times text-warning"></i></a>
                                                <?php endif; ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/school/student-information/index.blade.php ENDPATH**/ ?>