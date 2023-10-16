<?php $__env->startSection('title',''); ?>
<?php $__env->startSection('content'); ?>


<!-- Error Page Start here -->
<section class="error-page padding-120 mt-5 pt-5">
  <div class="container mt-5 pt-5">
    <div class="error-content mt-4">
      <h2>404</h2>
      <h3><span>Oops,</span> This Page Not Be Found!</h3>
      <p>We are really sorry but the page you requested is missing :</p>
      <a href="<?php echo e(route('Site.Home')); ?>" class="button-default">Go Back Home</a>
    </div><!-- error content -->
  </div><!-- container -->
</section>
<!-- Error Page End here -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/errors/404.blade.php ENDPATH**/ ?>