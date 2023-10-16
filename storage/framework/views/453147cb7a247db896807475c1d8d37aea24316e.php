

<?php $__env->startSection('title',''); ?>
<?php $__env->startSection('content'); ?>

  
  <!-- Page Header Start here -->
  <section class="page-header section-notch">
    <div class="overlay">
      <div class="container mt-5 pt-5">
        <h3 class="mt-5">Meet Our Teachers</h3>
        <ul>
          <li><a href="<?php echo e(route('Site.Home')); ?>">Home</a></li>
          <li>-</li>
          <li>Teachers</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->
  <!-- Page Header End here -->


  <!-- Teachers Start here -->
  <section class="teachers teachers-page padding-120">
    <div class="container">
      <div class="row">

        <?php $__currentLoopData = $teacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-6 col-xs-12">
          <div class="teacher-item">
            <div class="teacher-image">
              <img src="<?php echo e(url('public/uploads/front/teacher/'.$info->image)); ?>" alt="teacher image" class="img-responsive">
            </div>
            <div class="teacher-content">
              <h4><?php echo e($info->name); ?> <span></span></h4>
              <ul>
                <?php echo e($info->job); ?>

              </ul>
              <p>Qualification:- <?php echo e($info->about); ?></p>
              <p>Experience:- <?php echo e($info->personal_statement); ?></p>
              <p>Mail To:- <?php echo e($info->email); ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


      </div>
    </div>
  </section>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/site/teachers.blade.php ENDPATH**/ ?>