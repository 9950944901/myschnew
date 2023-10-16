
<?php $__env->startSection('title',''); ?>
<?php $__env->startSection('content'); ?>
  <!-- Banner Start here -->
  <section class="banner banner-three">
    <div class="banner-slider swiper-container">
      <div class="swiper-wrapper">
        <div class="banner-item slide-one swiper-slide">
          <div class="banner-overlay"></div>
          <div class="container">
            <div class="row">
              <div class="offset-lg-5 col-lg-6 col-xs-12">
                <div class="banner-content">
                  <h3>Welcome to KidsAcademy</h3>
                  <h2>Best For Education</h2>
                  <p>Monotonely principle centered architecture through and standards magnetic metrics whereas cross
                    functional products.</p>
                  
                </div><!-- banner-content -->
              </div>
            </div>
          </div><!-- container -->
        </div><!-- slide item -->
        <div class="banner-item slide-two swiper-slide">
          <div class="banner-overlay"></div>
          <div class="container">
            <div class="row">
              <div class="offset-lg-5 col-lg-6 col-xs-12">
                <div class="banner-content">
                  <h3>Welcome to KidsAcademy</h3>
                  <h2>Best For Education</h2>
                  <p>Monotonely principle centered architecture through and standards magnetic metrics whereas cross
                    functional products.</p>
                  
                </div><!-- banner-content -->
              </div>
            </div>
          </div><!-- container -->
        </div><!-- slide item -->
        <div class="banner-item slide-three swiper-slide">
          <div class="banner-overlay"></div>
          <div class="container">
            <div class="row">
              <div class="offset-lg-5 col-lg-6 col-xs-12">
                <div class="banner-content">
                  <h3>Welcome to KidsAcademy</h3>
                  <h2>Best For Education</h2>
                  <p>Monotonely principle centered architecture through and standards magnetic metrics whereas cross
                    functional products.</p>
                  
                </div><!-- banner-content -->
              </div>
            </div>
          </div><!-- container -->
        </div><!-- slide item -->

      </div><!-- swiper-wrapper -->
      <div class="swiper-pagination"></div>
    </div><!-- swiper-container -->
  </section><!-- banner -->
  <!-- Banner End here -->


  <!-- About Start here -->
  <section class="about about-two padding-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="about-image">
            <img src="<?php echo e(url('/')); ?>/public/site/assets/images/about/about-2.png" alt="about image" class="img-responsive">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <h3>About Our KidsAcademy</h3>
            <p>Enthusiasticay diseminate competitive oportunitie through transparent an actions Compelngly seize viral
              schemas through intermandated creative is adiea sources. Enthusiasticay plagiarize clientcentered
              relationship for the covalent experiences. Distinctively architect 24/365 service for wireless is
              ebusiness ahosfluorescently Efficiently comunicate coperative methods of empowerment awesome athrough
              Monotonectaly myocardinate cross and functional niche markets and an functional.</p>
            <ul>
              <li><a href="<?php echo e(route('Site.About')); ?>" class="button-default">Read More</a></li>
              
            </ul>
          </div><!-- about content -->
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- about -->
  <!-- About End here -->


  <!-- facility Start here -->
  <section class="facility facility-three padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Our School Fecilities</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="facility-item">
            <span class="icon flaticon-symbols"></span>
            <h4>Active Learning</h4>
            <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after</p>
          </div><!-- facility item -->
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="facility-item">
            <span class="icon flaticon-avatar"></span>
            <h4>Expert Teachers</h4>
            <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after</p>
          </div><!-- facility item -->
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="facility-item">
            <span class="icon flaticon-world"></span>
            <h4>Strategi Location</h4>
            <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after</p>
          </div><!-- facility item -->
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="facility-item">
            <span class="icon flaticon-line-chart"></span>
            <h4>Full Day Programs</h4>
            <p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after</p>
          </div><!-- facility item -->
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- facility -->
  <!-- facility End here -->


 
  


  <!-- Teachers Start here -->
  <section class="teachers teachers-three padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Meet Our Teachers</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
      </div>
      <div class="teacher-items">
        <div class="teacher-slider swiper-container">
          <div class="swiper-wrapper">

            <?php $__currentLoopData = $teacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="teacher-item swiper-slide">
              <div class="teacher-image">
                <img src="<?php echo e(url('public/uploads/front/teacher/'.$item->image)); ?>" alt="teacher image" class="img-responsive">
              </div>
              <div class="teacher-content">
                <h4><a href="#"><?php echo e($item->name); ?></a></h4>
                <span><?php echo e($item->job); ?></span>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
        </div><!-- swiper-container -->
      </div><!-- partner-items -->

    </div><!-- container -->
  </section><!-- teacher -->
  <!-- Teachers End here -->


  <!-- Gallery Start here -->
  <section class="gallery padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Our School Gallery</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
      </div>
      

      
      <div class="gallery-items">
        <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gall): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="gallery-item branding packing">
          <div class="gallery-image">
            <img src="<?php echo e(url('public/uploads/gallery/'.$gall->gallery)); ?>" alt="gallery image" style="height: 390px;          " class="img-responsive">
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

     
      
      </div>
      <div class="gallery-button"><a href="<?php echo e(route('Site.gallery')); ?>" class="button-default">View More Gallery</a></div>
    </div>
  </section>

  <section class="testimonial testimonial-three padding-120">
    <div class="container">
      <div class="section-header">
        <h3>What Parents Say</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
      </div>
      <div class="testimonial-items">
        <div class="testimonial-slider-three swiper-container">
          <div class="swiper-wrapper">

            <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="testimonial-item swiper-slide">
              <div class="testimonial-image">
                <img src="<?php echo e(url('public/uploads/parents/'.$info->image)); ?>" alt="client image" class="img-responsive">
              </div>
              <div class="testimonial-details">
                <h4><?php echo e($info->name); ?> </h4>
                <span><?php echo e($info->job); ?></span>
                <i class="icon fa fa-quote-left" aria-hidden="true"></i>
                <p><?php echo e($info->says); ?></p>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Event Start here -->
  
  <!-- event End here -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/site/index.blade.php ENDPATH**/ ?>