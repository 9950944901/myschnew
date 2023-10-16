<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        @php
        use App\Models\GeneralSetting;
        $info = GeneralSetting::get()->first();
      @endphp
       <li class="nav-item">
        <a class="nav-link text-success">
          <i class="bi bi-calendar-check-fill text-success"></i>
          <span>Session {{ $info->session ?? ''}}</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ route('Teacher.Home') }}">
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
            <a href="{{ route('Teacher.student-details') }}">
              <i class="bi bi-circle"></i><span>Student Details</span>
            </a>
          </li>
          {{-- <li>
            <a href="student-admission.html">
              <i class="bi bi-circle"></i><span>Student Admission</span>
            </a>
          </li>
          <li>
            <a href="online-admission.html">
              <i class="bi bi-circle"></i><span>Online Admission</span>
            </a>
          </li> --}}
          <li>
            <a href="{{ route('Teacher.online-admission') }}">
              <i class="bi bi-circle"></i><span>Add Class & Section</span>
            </a>
          </li>
          <li>
          <li>
            <a href="{{ route('Teacher.disabled-students') }}">
              <i class="bi bi-circle"></i><span>Disabled Students</span>
            </a>
          </li>
          {{-- <li>
            <a href="bulk-delete.html">
              <i class="bi bi-circle"></i><span>Bulk Delete</span>
            </a>
          </li>
          <li>
            <a href="student-categories.html">
              <i class="bi bi-circle"></i><span>Student Categories</span>
            </a>
          </li>
          <li>
            <a href="disabled-reason.html">
              <i class="bi bi-circle"></i><span>Disable Reason</span>
            </a>
          </li> --}}

        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#attendance-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-book"></i>
          <span>Attendance</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="attendance-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('Teacher.student-attendance') }}">
              <i class="bi bi-circle"></i><span>Student Attendance</span>
            </a>
          </li>
          {{-- <li>
            <a href="attendance-by-date.html">
              <i class="bi bi-circle"></i><span>Attendance By Date</span>
            </a>
          </li> --}}
          <li>
            <a href="{{ route('Teacher.approve-leave') }}">
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
            <a href="{{ route('Teacher.exam-group') }}">
              <i class="bi bi-circle"></i><span>Exam Group</span>
            </a>
          </li>
          <li>
            <a href="{{ route('Teacher.exam-schedule') }}">
              <i class="bi bi-circle"></i><span>Exam Schedule</span>
            </a>
          </li>
          <li>
            <a href="{{ route('Teacher.exam-result') }}">
              <i class="bi bi-circle"></i><span>Exam Result</span>
            </a>
          </li>
          {{-- <li>
            <a href="marks-grade.html">
              <i class="bi bi-circle"></i><span>Marks Grade</span>
            </a>
          </li> --}}

        </ul>
      </li>

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#online-examinations-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-wifi"></i>
          <span>Online Examinations</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="online-examinations-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Online Exam</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Question Bank</span>
            </a>
          </li>
        </ul>
      </li> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#lessonplan-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-list"></i>
          <span>Lesson Plan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="lessonplan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('Teacher.manage-lesson-plan') }}">
              <i class="bi bi-circle"></i><span>Manage Lesson Plan </span>
            </a>
          </li>
          <li>
            <a href="{{ route('Teacher.manage-syllabus-status') }}">
              <i class="bi bi-circle"></i><span>Manage Syllabus Status</span>
            </a>
          </li>
          <li>
            <a href="{{ route('Teacher.lesson') }}">
              <i class="bi bi-circle"></i><span>Lesson</span>
            </a>
          </li>
          <li>
            <a href="{{ route('Teacher.topic') }}">
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
          {{-- <li>
            <a href="{{ route('Teacher.class-timetable') }}">
              <i class="bi bi-circle"></i><span>Class Timetable</span>
            </a>
          </li> --}}
          <li>
            <a href="{{ route('Teacher.teachers-timetable') }}">
              <i class="bi bi-circle"></i><span>Teachers Timetable</span>
            </a>
          </li>
          {{-- <li>
            <a href="{{ route('Teacher.assign-class-teacher') }}">
              <i class="bi bi-circle"></i><span>Assign Class Teacher</span>
            </a>
          </li> --}}
          <li>
            <a href="{{ route('Teacher.promote-students') }}">
              <i class="bi bi-circle"></i><span>Promote Students</span>
            </a>
          </li>
          <li>
            <a href="{{ route('Teacher.subject-group') }}">
              <i class="bi bi-circle"></i><span>Subject Group</span>
            </a>
          </li>
          <li>
            <a href="{{ route('Teacher.subjects') }}">
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
            <a href="{{ route('Teacher.apply-leave') }}">
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
            <a href="{{ route('Teacher.notice-board') }}">
              <i class="bi bi-circle"></i><span>Notice Board</span>
            </a>
          </li>
            {{-- <li>
              <a href="send-email.html">
                <i class="bi bi-circle"></i><span>Send Email</span>
              </a>
            </li>
            <li>
              <a href="send-sms.html">
                <i class="bi bi-circle"></i><span>Send SMS</span>
              </a>
            </li>
            <li>
              <a href="email-sms-log.html">
                <i class="bi bi-circle"></i><span>Email/SMS Log</span>
              </a>
            </li> --}}

        </ul>
      </li>

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#online-course-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-file-video-o"></i>
          <span>Online Course</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="online-course-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Online Course</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Online Course Report</span>
            </a>
          </li>


        </ul>
      </li> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#downloadcenter-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-download"></i>
          <span>Download Center</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="downloadcenter-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('Teacher.upload-content') }}">
              <i class="bi bi-circle"></i><span>Upload Content</span>
            </a>
          </li>
          {{-- <li>
            <a href="assignments.html">
              <i class="bi bi-circle"></i><span>Assignments</span>
            </a>
          </li> --}}
          <li>
            <a href="{{ route('Teacher.study-material') }}">
              <i class="bi bi-circle"></i><span>Study Material</span>
            </a>
          </li>
          <li>
            <a href="{{ route('Teacher.syllabus') }}">
              <i class="bi bi-circle"></i><span>Syllabus</span>
            </a>
          </li>
          {{-- <li>
            <a href="other-downloads.html">
              <i class="bi bi-circle"></i><span>Other Downloads</span>
            </a>
          </li> --}}


        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#homework-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-receipt"></i>
          <span>Homework</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="homework-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('Teacher.homework') }}">
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
            <a href="{{ route('Teacher.student-information') }}">
              <i class="bi bi-circle"></i><span>Student Information</span>
            </a>
          </li>
          {{-- <li>
            <a href="{{ route('Teacher.finance') }}">
              <i class="bi bi-circle"></i><span>Finance</span>
            </a>
          </li> --}}
          {{-- <li>
            <a href="{{ route('Teacher.attendance') }}">
              <i class="bi bi-circle"></i><span>Attendance</span>
            </a>
          </li> --}}



          {{-- examinations --}}

          {{-- <li>
            <a href="{{ route('Teacher.examinations') }}">
              <i class="bi bi-circle"></i><span>Examinations</span>
            </a>
          </li> --}}

          {{-- examinations --}}


          {{-- <li>
            <a href="{{ route('Teacher.online-examination') }}">
              <i class="bi bi-circle"></i><span>Online Examinations</span>
            </a>
          </li> --}}
          <li>
            <a href="{{ route('Teacher.lesson-plan') }}">
              <i class="bi bi-circle"></i><span>Lesson Plan</span>
            </a>
          </li>
          <li>
            <a href="{{ route('Teacher.human-resource') }}">
              <i class="bi bi-circle"></i><span>Human Resource</span>
            </a>
          </li>
          {{-- <li>
            <a href="{{ route('Teacher.transport') }}">
              <i class="bi bi-circle"></i><span>Transport</span>
            </a>
          </li> --}}
          {{-- <li>
            <a href="{{ route('Teacher.alumni') }}">
              <i class="bi bi-circle"></i><span>Alumni</span>
            </a>
          </li> --}}
        

        </ul>
      </li>

      <!-- **************** -->

      {{-- <li class="nav-heading">Pages</li> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('Teacher.users-profile') }}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>
      <!-- End Profile Page Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li> --}}
      <!-- End F.A.Q Page Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li> --}}
      <!-- End Contact Page Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li> --}}
      <!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed signout-confirm" href="{{route('SignOut.Teacher')}}">
          <i class="bi bi-box-arrow-right"></i>
          <span>Sign Out</span>
        </a>
      </li>
      <!-- End Login Page Nav -->
    </ul>

  </aside>