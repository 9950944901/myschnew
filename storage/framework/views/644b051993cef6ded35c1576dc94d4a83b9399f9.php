<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <?php
        use App\Models\GeneralSetting;
        $info = GeneralSetting::get()->first();
      ?>
       <li class="nav-item">
        <a class="nav-link text-success">
          <i class="bi bi-calendar-check-fill text-success"></i>
          <span>Session <?php echo e($info->session ?? ''); ?></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?php echo e(route('Teacher.Home')); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#studentinformation-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-address-card"></i>
          <span>Student Information</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="studentinformation-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo e(route('Teacher.student-details')); ?>">
              <i class="bi bi-circle"></i><span>Student Details</span>
            </a>
          </li>
          
          <li>
            <a href="<?php echo e(route('Teacher.online-admission')); ?>">
              <i class="bi bi-circle"></i><span>Add Class & Section</span>
            </a>
          </li>
          <li>
          <li>
            <a href="<?php echo e(route('Teacher.disabled-students')); ?>">
              <i class="bi bi-circle"></i><span>Disabled Students</span>
            </a>
          </li>
          

        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#attendance-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-book"></i>
          <span>Attendance</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="attendance-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo e(route('Teacher.student-attendance')); ?>">
              <i class="bi bi-circle"></i><span>Student Attendance</span>
            </a>
          </li>
          
          <li>
            <a href="<?php echo e(route('Teacher.approve-leave')); ?>">
              <i class="bi bi-circle"></i><span>Approve Leave</span>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#examinations-nav" data-bs-toggle="collapse" href="#">
          <i class="bx bx-book-reader"></i>
          <span>Examinations</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="examinations-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo e(route('Teacher.exam-group')); ?>">
              <i class="bi bi-circle"></i><span>Exam Group</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('Teacher.exam-schedule')); ?>">
              <i class="bi bi-circle"></i><span>Exam Schedule</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('Teacher.exam-result')); ?>">
              <i class="bi bi-circle"></i><span>Exam Result</span>
            </a>
          </li>
          

        </ul>
      </li>

      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#lessonplan-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-list"></i>
          <span>Lesson Plan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="lessonplan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo e(route('Teacher.manage-lesson-plan')); ?>">
              <i class="bi bi-circle"></i><span>Manage Lesson Plan </span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('Teacher.manage-syllabus-status')); ?>">
              <i class="bi bi-circle"></i><span>Manage Syllabus Status</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('Teacher.lesson')); ?>">
              <i class="bi bi-circle"></i><span>Lesson</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('Teacher.topic')); ?>">
              <i class="bi bi-circle"></i><span>Topic</span>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#academics-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-graduation-cap"></i>
          <span>Academics</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="academics-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
          <li>
            <a href="<?php echo e(route('Teacher.teachers-timetable')); ?>">
              <i class="bi bi-circle"></i><span>Teachers Timetable</span>
            </a>
          </li>
          
          <li>
            <a href="<?php echo e(route('Teacher.promote-students')); ?>">
              <i class="bi bi-circle"></i><span>Promote Students</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('Teacher.subject-group')); ?>">
              <i class="bi bi-circle"></i><span>Subject Group</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('Teacher.subjects')); ?>">
              <i class="bi bi-circle"></i><span>Subjects</span>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#humanresource-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Human Resource</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="humanresource-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo e(route('Teacher.apply-leave')); ?>">
              <i class="bi bi-circle"></i><span>Apply Leave</span>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#communicate-nav" data-bs-toggle="collapse" href="#">
          <i class="bx bxs-conversation"></i>
          <span>Communicate</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="communicate-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo e(route('Teacher.notice-board')); ?>">
              <i class="bi bi-circle"></i><span>Notice Board</span>
            </a>
          </li>
            

        </ul>
      </li>

      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#downloadcenter-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-download"></i>
          <span>Download Center</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="downloadcenter-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo e(route('Teacher.upload-content')); ?>">
              <i class="bi bi-circle"></i><span>Upload Content</span>
            </a>
          </li>
          
          <li>
            <a href="<?php echo e(route('Teacher.study-material')); ?>">
              <i class="bi bi-circle"></i><span>Study Material</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('Teacher.syllabus')); ?>">
              <i class="bi bi-circle"></i><span>Syllabus</span>
            </a>
          </li>
          


        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#homework-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-receipt"></i>
          <span>Homework</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="homework-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo e(route('Teacher.homework')); ?>">
              <i class="bi bi-circle"></i><span>Add Homework</span>
            </a>
          </li>
      
        </ul>
      </li>      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#reports-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-folder-open"></i>
          <span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="reports-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo e(route('Teacher.student-information')); ?>">
              <i class="bi bi-circle"></i><span>Student Information</span>
            </a>
          </li>
          
          



          

          

          


          
          <li>
            <a href="<?php echo e(route('Teacher.lesson-plan')); ?>">
              <i class="bi bi-circle"></i><span>Lesson Plan</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('Teacher.human-resource')); ?>">
              <i class="bi bi-circle"></i><span>Human Resource</span>
            </a>
          </li>
          
          
        

        </ul>
      </li>

      <!-- **************** -->

      

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(route('Teacher.users-profile')); ?>">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>
      <!-- End Profile Page Nav -->

      
      <!-- End F.A.Q Page Nav -->

      
      <!-- End Contact Page Nav -->

      
      <!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed signout-confirm" href="<?php echo e(route('SignOut.Teacher')); ?>">
          <i class="bi bi-box-arrow-right"></i>
          <span>Sign Out</span>
        </a>
      </li>
      <!-- End Login Page Nav -->
    </ul>

  </aside><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/layouts/teacher-sidebar.blade.php ENDPATH**/ ?>