      <!-- partial:partials/_sidebar.html -->
      <?php
        use App\Models\GeneralSetting;
        $info = GeneralSetting::get()->first();
      ?>
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <li class="">
            <a class="nav-link text-success">
              <i class="fa fa-calendar text-success"></i>
              <span class="ml-3"><b> Session <?php echo e($info->session ?? ''); ?></b></span>
            </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item active">
            <a class="nav-link" href="<?php echo e(route('Student.Home')); ?>">
              <i class="fa fa-user-circle menu-icon"></i>
              <span class="menu-title">My Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('Student.Fees')); ?>">
              <i class="fa fa-money menu-icon"></i>
              <span class="menu-title">Fees</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('Student.class-timetable')); ?>">
              <i class="fa fa-calendar menu-icon"></i>
              <span class="menu-title">Class Timetable</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('student.lesson_plan')); ?>">
              <i class="fa fa-list-alt menu-icon"></i>
              <span class="menu-title">Lesson Plan</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('student.home-work')); ?>">
              <i class="fa fa-pencil-square-o menu-icon"></i>
              <span class="menu-title">Homework</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('student.apply-leave')); ?>">
              <i class="fa fa-calendar-check-o menu-icon"></i>
              <span class="menu-title">Apply Leave</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#download-center" aria-expanded="false"
              aria-controls="download-center">
              <i class="fa fa-download menu-icon"></i>
              <span class="menu-title">Download Center</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="download-center">
              <ul class="nav flex-column sub-menu">
                
                <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('student.study-material')); ?>">Study Material</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('student.syllabus')); ?>">Syllabus</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('student.attendance')); ?>">
              <i class="fa fa-book menu-icon"></i>
              <span class="menu-title">Attendance</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#examination" aria-expanded="false"
              aria-controls="examination">
              <i class="fa fa-folder-open menu-icon"></i>
              <span class="menu-title">Examinations</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="examination">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('student.exam-schedule')); ?>">Exam Schedule</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('student.exam-result')); ?>">Exam Result</a></li>

              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('student.notice')); ?>">
              <i class="fa fa-newspaper-o menu-icon"></i>
              <span class="menu-title">Notice Board</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link signout-confirm" href="<?php echo e(route('Student.SignOut.Data')); ?>">
              <i class="fa fa-user-circle menu-icon"></i>
              <span class="menu-title">Sign Out</span>
            </a>
          </li>


        </ul>
      </nav>
      <!-- partial --><?php /**PATH C:\xampp\htdocs\school\resources\views/layouts/student-sidebar.blade.php ENDPATH**/ ?>