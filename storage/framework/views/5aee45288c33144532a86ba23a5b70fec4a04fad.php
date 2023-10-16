
  <!-- ======= Sidebar ======= -->
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
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link " href="<?php echo e(route('SCHOOL.Home')); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->



<li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#frontoffice-nav" data-bs-toggle="collapse" href="#">
    <i class="fa fa-university"></i>
<span>Front Office</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="frontoffice-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
    <li>
      <a href="<?php echo e(route('SCHOOL.Admission.Enquiry')); ?>">
        <i class="bi bi-circle"></i><span>Admission Enquiry</span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.Visitor.Book')); ?>">
        <i class="bi bi-circle"></i><span>Visitor Book</span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.phone-call-log')); ?>">
        <i class="bi bi-circle"></i><span>Phone Call Log</span>
      </a>
    </li>
   
  </ul>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#studentinformation-nav" data-bs-toggle="collapse" href="#">
    <i class="fa fa-address-card"></i>
<span>Student Information</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="studentinformation-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    <li>
      <a href="<?php echo e(route('SCHOOL.Student.Details')); ?>">
        <i class="bi bi-circle"></i><span>Student Details</span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.online-admission')); ?>">
        <i class="bi bi-circle"></i><span>Add Class & Section</span>
      </a>
    </li>
    
    <li>
      <a href="<?php echo e(route('SCHOOL.disabled-students')); ?>">
        <i class="bi bi-circle"></i><span>Disabled Students</span>
      </a>
    </li>
    
    
    
   
  </ul>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#feescollection-nav" data-bs-toggle="collapse" href="#">
    <i class="fa fa-newspaper-o"></i>
<span>Fees Collection</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="feescollection-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    <li>
      <a href="<?php echo e(route('SCHOOL.collect-fees')); ?>">
        <i class="bi bi-circle"></i><span>Collect Fees</span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.search-fees-payment')); ?>">
        <i class="bi bi-circle"></i><span>Search Fees Payment</span>
      </a>
    </li>
    
    <li>
      <a href="<?php echo e(route('SCHOOL.fees-discount')); ?>">
        <i class="bi bi-circle"></i><span> Class Fees</span>
      </a>
    </li>
    
    

    <li>
      <a href="<?php echo e(route('SCHOOL.fees-type')); ?>">
        <i class="bi bi-circle"></i><span>Fees Type</span>
      </a>
    </li>
    
    <li>
      <a href="<?php echo e(route('SCHOOL.fees-carry-forward')); ?>">
        <i class="bi bi-circle"></i><span>Fees Carry Forward</span>
      </a>
    </li>
    
   
  </ul>
</li>



 <li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#expenses-nav" data-bs-toggle="collapse" href="#">
    <i class="fa fa-list-alt"></i>
<span>Expenses</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="expenses-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    <li>
      <a href="<?php echo e(route('SCHOOL.add-expense')); ?>">
        <i class="bi bi-circle"></i><span>Add Expense</span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.search-expense')); ?>">
        <i class="bi bi-circle"></i><span>Search Expense</span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.expense-head')); ?>">
        <i class="bi bi-circle"></i><span>Expense Head</span>
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
      <a href="<?php echo e(route('SCHOOL.student-attendance')); ?>">
        <i class="bi bi-circle"></i><span>Student Attendance</span>
      </a>
    </li>
    
    

    <li>
      <a href="<?php echo e(route('SCHOOL.approve-leave')); ?>">
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
      <a href="<?php echo e(route('SCHOOL.exam-group')); ?>">
        <i class="bi bi-circle"></i><span>Exam Group</span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.exam-schedule')); ?>">
        <i class="bi bi-circle"></i><span>Exam Schedule</span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.exam-result')); ?>">
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
      <a href="<?php echo e(route('SCHOOL.manage-lesson-plan')); ?>">
        <i class="bi bi-circle"></i><span>Manage Lesson Plan </span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.manage-syllabus-status')); ?>">
        <i class="bi bi-circle"></i><span>Manage Syllabus Status</span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.lesson')); ?>">
        <i class="bi bi-circle"></i><span>Lesson</span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.topic')); ?>">
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
      <a href="<?php echo e(route('SCHOOL.class-timetable')); ?>">
        <i class="bi bi-circle"></i><span>Class Timetable</span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.teachers-timetable')); ?>">
        <i class="bi bi-circle"></i><span>Teachers Timetable</span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.assign-class-teacher')); ?>">
        <i class="bi bi-circle"></i><span>Assign Class Teacher</span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.promote-students')); ?>">
        <i class="bi bi-circle"></i><span>Promote Students</span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.subject-group')); ?>">
        <i class="bi bi-circle"></i><span>Subject Group</span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.subjects')); ?>">
        <i class="bi bi-circle"></i><span>Subjects</span>
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
      <a href="<?php echo e(route('SCHOOL.homework')); ?>">
        <i class="bi bi-circle"></i><span>Add Homework</span>
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
      <a href="<?php echo e(route('SCHOOL.staff-directory')); ?>">
        <i class="bi bi-circle"></i><span>Staff Directory</span>
      </a>
    </li>
    
    <li>
      <a href="<?php echo e(route('SCHOOL.staff-attendance2')); ?>">
        <i class="bi bi-circle"></i><span>Staff Attendance</span>
      </a>
    </li>
    
    <li>
      <a href="<?php echo e(route('SCHOOL.approve-leave-request')); ?>">
        <i class="bi bi-circle"></i><span>Approve Leave Request</span>
      </a>
    </li>
    
    <li>
      <a href="<?php echo e(route('SCHOOL.leave-type')); ?>">
        <i class="bi bi-circle"></i><span>Leave Type</span>
      </a>
    </li>
    
    <li>
      <a href="<?php echo e(route('SCHOOL.department')); ?>">
        <i class="bi bi-circle"></i><span>Department</span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.disabled-staff')); ?>">
        <i class="bi bi-circle"></i><span>Disabled Staff</span>
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
      <a href="<?php echo e(route('SCHOOL.notice-board')); ?>">
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
      <a href="<?php echo e(route('SCHOOL.upload-content')); ?>">
        <i class="bi bi-circle"></i><span>Upload Content</span>
      </a>
    </li>
    
    <li>
      <a href="<?php echo e(route('SCHOOL.study-material')); ?>">
        <i class="bi bi-circle"></i><span>Study Material</span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.syllabus')); ?>">
        <i class="bi bi-circle"></i><span>Syllabus</span>
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
      <a href="<?php echo e(route('SCHOOL.student-information')); ?>">
        <i class="bi bi-circle"></i><span>Student Information</span>
      </a>
    </li>
    
    




    



    
    
    <li>
      <a href="<?php echo e(route('SCHOOL.lesson-plan')); ?>">
        <i class="bi bi-circle"></i><span>Lesson Plan</span>
      </a>
    </li>
    <li>
      <a href="<?php echo e(route('SCHOOL.human-resource')); ?>">
        <i class="bi bi-circle"></i><span>Human Resource</span>
      </a>
    </li>
    
    
    <li>
      <a href="<?php echo e(route('SCHOOL.user-log')); ?>">
        <i class="bi bi-circle"></i><span>User Log</span>
      </a>
    </li>

  </ul>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#lessonplan-nav2" data-bs-toggle="collapse" href="#">
    <i class="fa fa-list"></i>
<span>Report Card</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="lessonplan-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    <li>
      
      <a href="<?php echo e(route('SCHOOL.Report.card')); ?>">
        <i class="bi bi-circle"></i><span>Marksheet</span>
      </a>
    </li>
  </ul>
</li>




<li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#systemsettings-nav" data-bs-toggle="collapse" href="#">
    <i class="fa fa-cogs"></i>
<span>System Settings</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="systemsettings-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    <li>
      <a href="<?php echo e(route('SCHOOL.general-setting')); ?>">
        <i class="bi bi-circle"></i><span>General Setting</span>
      </a>
    </li>
    
    


  </ul>
</li>

<!-- **************** -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Alerts</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Accordion</span>
            </a>
          </li>
          <li>
            <a href="components-badges.html">
              <i class="bi bi-circle"></i><span>Badges</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Breadcrumbs</span>
            </a>
          </li>
          <li>
            <a href="components-buttons.html">
              <i class="bi bi-circle"></i><span>Buttons</span>
            </a>
          </li>
          <li>
            <a href="components-cards.html">
              <i class="bi bi-circle"></i><span>Cards</span>
            </a>
          </li>
          <li>
            <a href="components-carousel.html">
              <i class="bi bi-circle"></i><span>Carousel</span>
            </a>
          </li>
          <li>
            <a href="components-list-group.html">
              <i class="bi bi-circle"></i><span>List group</span>
            </a>
          </li>
          <li>
            <a href="components-modal.html">
              <i class="bi bi-circle"></i><span>Modal</span>
            </a>
          </li>
          <li>
            <a href="components-tabs.html">
              <i class="bi bi-circle"></i><span>Tabs</span>
            </a>
          </li>
          <li>
            <a href="components-pagination.html">
              <i class="bi bi-circle"></i><span>Pagination</span>
            </a>
          </li>
          <li>
            <a href="components-progress.html">
              <i class="bi bi-circle"></i><span>Progress</span>
            </a>
          </li>
          <li>
            <a href="components-spinners.html">
              <i class="bi bi-circle"></i><span>Spinners</span>
            </a>
          </li>
          <li>
            <a href="components-tooltips.html">
              <i class="bi bi-circle"></i><span>Tooltips</span>
            </a>
          </li>
        </ul>
      </li> -->
      <!-- End Components Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li> -->
      <!-- End Forms Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li> -->
      <!-- End Tables Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li> -->
      <!-- End Charts Nav -->

       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Front CMS</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo e(route('SCHOOL.Front.Setting')); ?>">
              <i class="bi bi-circle"></i><span>General Setting</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('Front.CMS.Gallery')); ?>">
              <i class="bi bi-circle"></i><span>Gallery</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('Front.CMS.Parents.Say')); ?>">
              <i class="bi bi-circle"></i><span>Parents Say</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('Front.CMS.Teachers')); ?>">
              <i class="bi bi-circle"></i><span>Teachers</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('Front.CMS.Contect.Req')); ?>">
              <i class="bi bi-circle"></i><span>Contact Request</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('Front.CMS.Career.Req')); ?>">
              <i class="bi bi-circle"></i><span>Career Request</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('Front.CMS.Openings')); ?>">
              <i class="bi bi-circle"></i><span>Openings</span>
            </a>
          </li>
        </ul>
      </li> 
      <!-- End Icons Nav -->

      

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(route('SCHOOL.users-profile')); ?>">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed signout-confirm" href="<?php echo e(route('SignOut.Data')); ?>">
          <i class="bi bi-box-arrow-right"></i>
          <span>Sign Out</span>
        </a>
      </li>
      <!-- End Profile Page Nav -->

      
      <!-- End F.A.Q Page Nav -->

      
      <!-- End Contact Page Nav -->

      
      <!-- End Register Page Nav -->

      
      <!-- End Login Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li> -->
      <!-- End Error 404 Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li> -->
      <!-- End Blank Page Nav -->
    </ul>

  </aside><!-- End Sidebar--><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>