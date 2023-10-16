
<?php $__env->startSection('title',''); ?>
<?php $__env->startSection('content'); ?>


  <!-- Page Header Start here -->
  <section class="page-header section-notch">
    <div class="overlay">
      <div class="container mt-5 pt-5">
        <h3 class="mt-5">Our Contact Info</h3>
        <ul>
          <li><a href="<?php echo e(route('Site.Home')); ?>">Home</a></li>
          <li>-</li>
          <li>Contact us</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->
  <!-- Page Header End here -->


  <!-- Contact Start here -->
  <section class="contact contact-page">
    <div class="contact-details padding-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <ul>
              <li class="contact-item">
                <span class="icon flaticon-signs"></span>
                <div class="content">
                  <h4>Our Location</h4>
                  <p><?php echo e($add->school_address); ?></p>
                </div>
              </li>
              <li class="contact-item">
                <span class="icon flaticon-smartphone"></span>
                <div class="content">
                  <h4>Phone Number</h4>
                  <p><?php echo e($add->school_phone); ?></p>
                </div>
              </li>
              <li class="contact-item">
                <span class="icon flaticon-message"></span>
                <div class="content">
                  <h4>Email Address</h4>
                  <p><?php echo e($add->school_email); ?></p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-8 col-md-6 col-xs-12">
            <form class="contact-form" method="post" action="<?php echo e(route('Site.Contect.Request')); ?>">
              <input type="text" name="name" placeholder="Your Name" class="contact-input" style="border-bottom: 1px solid;" required>
              <input type="text" pattern="['0-9']*" name="number" placeholder="Your Mobile No." class="contact-input" style="border-bottom: 1px solid;" required>

              <input type="email" name="email" placeholder="Your Email" class="contact-input" style="border-bottom: 1px solid;"required>

              <textarea rows="5" name="msg" class="contact-input" style="border-bottom: 1px solid;" placeholder="Your Messages" required></textarea>

              <?php echo csrf_field(); ?>
              <input type="submit"  value="Send Message" class="contact-button">
            </form>
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- contact-details -->
    <div class="contact-map" id="map-canvas"></div>
  </section>
  <!-- Contact End here -->

<?php if($message = session('success')): ?>
<script>
  swal({
  title: "Request Send Successfully",
  text: "Thank You",
  icon: "success",
  button: "Ok",
});
</script>
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/site/contact.blade.php ENDPATH**/ ?>