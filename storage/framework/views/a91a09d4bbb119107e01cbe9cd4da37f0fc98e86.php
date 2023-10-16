
<?php $__env->startSection('content'); ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
                    <li class="breadcrumb-item active">School</li>
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
                                <?php if(is_null($report)): ?>
                                <form action="<?php echo e(route('SCHOOL.school.information.in')); ?>" method="post" enctype="multipart/form-data">
                                <?php else: ?>
                                <form action="<?php echo e(route('SCHOOL.school.information.up',['id'=>$report->id])); ?>"       method="post" enctype="multipart/form-data"> 
                                  <?php endif; ?>
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="d-flex justify-content-between p-2">
                                            <h5 class="mt-3" style="font-size: 17px;">School Information</h5>
                                        </div>
                                        <hr>
                                        <div class="col-lg-3 col-md-3 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">School Name</h6>
                                            <div class="">
                                                <input type="text" required class="form-control" name="sname" value="<?php echo e($report->sname ?? ''); ?>" placeholder="">

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Mobile:</h6>
                                            <div class="">
                                                <input type="text" maxlength="10" minlength="10" pattern="[0-9]*" class="form-control" name="smobile" value="<?php echo e($report->smobile ?? ''); ?>" placeholder="">

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">School Address</h6>
                                            <div class="">
                                                <input type="text" class="form-control" name="saddress" value="<?php echo e($report->saddress ?? ''); ?>" placeholder="">

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Section</h6>
                                            <div class="">
                                                <select name="ssection" class="form-control neha-text" required>
                                                    <option><?php echo e($report->ssection ?? ''); ?></option>
                                                    <option>2022-2023</option>
                                                    <option>2023-2024</option>
                                                    <option>2024-2025</option>
                                                    <option>2025-2026</option>
                                                    <option>2026-2027</option>
                                                  </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">School Background Images.</h6>
                                            <div class="">
                                                <input type="file" class="form-control" name="background_img" value="" placeholder="">

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">School logo</h6>
                                            <div class="">
                                                <input type="file" class="form-control" name="logoimg" value="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Email</h6>
                                            <div class="">
                                                <input type="email" class="form-control" name="semail" value="<?php echo e($report->semail ?? ''); ?>" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">School Code</h6>
                                            <div class="">
                                                <input type="text" class="form-control" name="scode" value="<?php echo e($report->scode ?? ''); ?>" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="text-center p-3">
                                                <div class="float-right">
                                                    <button type="submit" class="btn btn-info">
                                                        <i class="fa fa-plus"></i> Add
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </section>
                </div>
            </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/school/reportcard/school_report.blade.php ENDPATH**/ ?>