


<?php $__env->startSection('title',''); ?>
<?php $__env->startSection('content'); ?>


   <!-- Page Header Start here -->
   <section class="page-header section-notch">
    <div class="overlay">
      <div class="container mt-5 pt-5">
        <h3 class="mt-5">Our School Gallery</h3>
        <ul>
          <li><a href="<?php echo e(route('Site.Home')); ?>">Home</a></li>
          <li>-</li>
          <li>Gallery</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->

  <!-- Gallery Start here -->
  <section class="gallery padding-120">
    <div class="container">

      <div class="gallery-items">
        <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gall): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="gallery-item">
          <div class="gallery-image">
            <img src="<?php echo e(url('public/uploads/gallery/'.$gall->gallery)); ?>" alt="gallery image" class="img-responsive">
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/site/gallery.blade.php ENDPATH**/ ?>