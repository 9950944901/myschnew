
<?php echo $__env->make('layouts.header-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php
use App\Models\AddStaff;
$user = auth()->user();
$data = AddStaff::where('email',$user->email)->get()->first();
?>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    
    <div class="d-flex align-items-center justify-content-between">
      
      <a href="<?php echo e(url()->current()); ?>" class="logo d-flex align-items-center">
        <img src="<?php echo e(url('public/logobt.png')); ?>" style="max-height: 50px;width: 100%;" alt="">
        
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" action="#">
        <?php echo csrf_field(); ?>
        <input type="text" name="search" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>
    <!-- End Search Bar -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <?php if($user->image): ?>
            <img src="<?php echo e(url('public/uploads/school/'.$user->image)); ?>" alt="NO IMAGE" class="rounded-circle">
            <?php elseif($data->staff_image): ?>
            <img src="<?php echo e(url('public/uploads/staff/'.$data->staff_image)); ?>"  class="rounded-circle">
            <?php else: ?>
            <img src="<?php echo e(url('public/no_image.png')); ?>" alt="NO IMAGE" class="rounded-circle">
            <?php endif; ?>

            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo e($user->name); ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo e($user->name); ?></h6>
              <span><?php echo e($user->job); ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('Teacher.users-profile')); ?>">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center signout-confirm" href="<?php echo e(route('SignOut.Teacher')); ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
      </ul>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->




<?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/layouts/teacher-header.blade.php ENDPATH**/ ?>