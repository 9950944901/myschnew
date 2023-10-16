
<?php $__env->startSection('title',''); ?>
<?php $__env->startSection('content'); ?>

  <!-- Page Header Start here -->
  <section class="page-header section-notch">
    <div class="overlay">
      <div class="container mt-5 pt-5">
        <h3 class="mt-5">About Our KidsAcademy</h3>
        <ul>
          <li><a href="<?php echo e(route('Site.Home')); ?>">Home</a></li>
          <li>-</li>
          <li>About us</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->
  <!-- Page Header End here -->


  <!-- facility Start here -->
  <section class="facility padding-120">
    <div class="container">
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


  <!-- About Start here -->
  <section class="about section-notch">
    <div class="overlay padding-120">
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
                
                
              </ul>
            </div><!-- about content -->
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- about -->
  <!-- About End here -->


  <!-- Features Start here -->
  <section class="features padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Why Choose KidsAcademy</h3>
        <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic
          strategic themeplatform.</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-xs-12">
          <div class="features-left">
            <div class="feature-item">
              <div class="icon flaticon-people-1"></div>
              <div class="content">
                <h4>Expert Teachers</h4>
                <p>Distinctively enhance empowered and alignments without leveraged architectures professionly.</p>
              </div>
            </div><!-- feature item -->
            <div class="feature-item">
              <div class="icon flaticon-symbols"></div>
              <div class="content">
                <h4>Multimedia Class</h4>
                <p>Distinctively enhance empowered and alignments without leveraged architectures professionly.</p>
              </div>
            </div><!-- feature item -->
            <div class="feature-item">
              <div class="icon flaticon-microphone"></div>
              <div class="content">
                <h4>Music And Art Class</h4>
                <p>Distinctively enhance empowered and alignments without leveraged architectures professionly.</p>
              </div>
            </div><!-- feature item -->
          </div><!-- feature left -->
        </div>
        <div class="col-lg-4 col-xs-12">
          <div class="feature-image">
            <img src="<?php echo e(url('/')); ?>/public/site/assets/images/feature.jpg" alt="feature image" class="img-responsive">
          </div>
        </div>
        <div class="col-lg-4 col-xs-12">
          <div class="features-right">
            <div class="feature-item">
              <div class="icon flaticon-home"></div>
              <div class="content">
                <h4>Expert Teachers</h4>
                <p>Distinctively enhance empowered and alignments without leveraged architectures professionly.</p>
              </div>
            </div><!-- feature item -->
            <div class="feature-item">
              <div class="icon flaticon-line-chart"></div>
              <div class="content">
                <h4>Multimedia Class</h4>
                <p>Distinctively enhance empowered and alignments without leveraged architectures professionly.</p>
              </div>
            </div><!-- feature item -->
            <div class="feature-item">
              <div class="icon flaticon-signs"></div>
              <div class="content">
                <h4>Music And Art Class</h4>
                <p>Distinctively enhance empowered and alignments without leveraged architectures professionly.</p>
              </div>
            </div><!-- feature item -->
          </div><!-- feature left -->
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- features -->
  <!-- Features End here -->


  <!-- Teachers Start here -->
  <section class="teachers section-notch">
    <div class="overlay padding-120">
      <div class="container">
        <div class="section-header bg">
          <h3>Meet Our Teachers</h3>
          <p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize
            pandemic strategic themeplatform.</p>
        </div>
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
          <div class="col-lg-12">
            <div class="text-center">
            <a href="<?php echo e(route('Site.teacher')); ?>" class="button-default">View All Teacher</a>
            </div>
          </div>
        </div>
      </div>
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




<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/site/about.blade.php ENDPATH**/ ?>