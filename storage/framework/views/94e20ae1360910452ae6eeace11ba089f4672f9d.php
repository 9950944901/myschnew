
<!DOCTYPE html>
<html lang="en">
<?php
  use App\Models\FrontCms_Setting;

  $data = FrontCms_Setting::get()->first();


?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <!-- Google fonts -->
  <link rel="icon" type="image/x-icon" href="<?php echo e(url('/')); ?>/public/site/assets/images/fav.jpg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap -->
  <link href="<?php echo e(url('/')); ?>/public/site/assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font-awesome -->
  <link href="<?php echo e(url('/')); ?>/public/site/assets/css/font-awesome.min.css" rel="stylesheet">
  <!-- Flaticon -->
  <link href="<?php echo e(url('/')); ?>/public/site/assets/flaticon/flaticon.css" rel="stylesheet">
  <!-- lightcase -->
  <link href="<?php echo e(url('/')); ?>/public/site/assets/css/lightcase.css" rel="stylesheet">
  <!-- Swiper -->
  <link href="<?php echo e(url('/')); ?>/public/site/assets/css/swiper.min.css" rel="stylesheet">
  <!-- quick-view -->
  <link href="<?php echo e(url('/')); ?>/public/site/assets/css/quick-view.css" rel="stylesheet">
  <!-- nstSlider -->
  <link href="<?php echo e(url('/')); ?>/public/site/assets/css/jquery.nstSlider.css" rel="stylesheet">
  <!-- flexslider -->
  <link href="<?php echo e(url('/')); ?>/public/site/assets/css/flexslider.css" rel="stylesheet">
  <!-- Style -->
  <link href="<?php echo e(url('/')); ?>/public/site/assets/css/rtl.css" rel="stylesheet">
  <!-- Style -->
  <link href="<?php echo e(url('/')); ?>/public/site/assets/css/style.css" rel="stylesheet">
  <!-- Responsive -->
  <link href="<?php echo e(url('/')); ?>/public/site/assets/css/responsive.css" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body id="scroll-top" class="home-3">
  <!-- Preloader start here -->
  <!-- <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div> -->
  <!-- Preloader end here -->


  <!-- mobile menu start here -->
  <div class="mobile-menu-area">
    <div class="logo-area">
      <a class="logo" href="<?php echo e(route('Site.Home')); ?>">
        <?php if($data->web_logo ?? ''): ?>
        <img src="<?php echo e(url('public/uploads/site-logo/'.$data->web_logo)); ?>" alt="logo" class="img-responsive">
        <?php else: ?>
            
        <?php endif; ?>
      </a>
      <button type="button" class="navbar-toggle collapsed d-md-none" data-toggle="collapse"
        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="mobile-menu">
      <ul class="m-menu">
        <li class="dropdown-submenu">
          <a href="<?php echo e(route('Site.Home')); ?>">Home</a>
        </li>
        <li class="dropdown-submenu">
          <a href="<?php echo e(route('Site.About')); ?>">About</a>
        </li>
        

        <li class="dropdown-submenu">
          <a href="<?php echo e(route('Site.teacher')); ?>">Teachers</a>
          
        </li>

        <li class="dropdown-submenu">
          <a href="<?php echo e(route('Site.gallery')); ?>">Gallery</a>
          
        </li>

        <li class="dropdown-submenu">
          <a href="<?php echo e(route('Site.Blog')); ?>">Career</a>
          
        </li>

        <li><a href="<?php echo e(route('Site.Contact')); ?>">Contact Us</a></li>
        <li><a href="<?php echo e(route('Site.Login')); ?>"><i class="fa fa-arrow-circle-o-right"></i> Login</a></li>
      </ul>
    </div>
  </div>
  <!-- mobile menu ending here -->


  <header class="header-three">
    <div class="header-top">
      <div class="container">
        <div class="ht-area">
          <ul class="left">
            <li><span><i class="fa fa-phone" aria-hidden="true"></i></span> Phone : <?php echo e($data->school_phone ?? ''); ?></li>
            <li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Opening Time : <?php echo e(date('h:i a', strtotime($data->open_start_time ?? ''))); ?>-<?php echo e(date('h:i a', strtotime($data->open_end_time ?? ''))); ?></li>
            <!-- <li><span><i class="fa fa-home" aria-hidden="true"></i></span> Address : Labartisan 1205 Newyork</li> -->
          </ul>
          <ul class="right">
            <li><a href="<?php echo e($data->facebook ?? ''); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="<?php echo e($data->instagram ?? ''); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="<?php echo e($data->google ?? ''); ?>"><i class="fa fa-google" aria-hidden="true"></i></a></li>
            <li><a href="<?php echo e($data->skype ?? ''); ?>"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="main-menu">
      <div class="container">
        <div class="row no-gutters">
          <nav class="main-menu-area w-100">
            <div class="logo-area">
              <a class="" href="<?php echo e(route('Site.Home')); ?>">
                <?php if($data->web_logo ?? ''): ?>
                    
                <img src="<?php echo e(url('public/uploads/site-logo/'.$data->web_logo)); ?>" alt="logo" class="img-responsive">
                <?php else: ?>
                    
                <?php endif; ?>
              </a>
              <button type="button" class="navbar-toggle collapsed d-md-none" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <div class="menu-area">
              

              <ul class="menu">
                <li class="dropdown">
                  <a href="<?php echo e(route('Site.Home')); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Home</a>
                 
                </li>
                <li class="dropdown">
                  <a href="<?php echo e(route('Site.About')); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">About</a>
             
                </li>
                
                <li class="dropdown">
                  <a href="<?php echo e(route('Site.teacher')); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Teachers </a>
                  
                </li>
                <li class="dropdown">
                  <a href="<?php echo e(route('Site.gallery')); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Gallery </a>
                  
                </li>
                <li class="dropdown">
                  <a href="<?php echo e(route('Site.Blog')); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Career </a>
                  
                </li>
                <li><a href="<?php echo e(route('Site.Contact')); ?>">Contact</a></li>
                <li><a href="<?php echo e(route('Site.Login')); ?>"><i class="fa fa-arrow-circle-o-right"></i> Login</a></li>
              </ul>
              
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- header End here --><?php /**PATH C:\xampp\htdocs\school\resources\views/site/layouts/header.blade.php ENDPATH**/ ?>