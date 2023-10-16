@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">User Log</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
      <section class="section dashboard">
        <div class="card">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="p-3">
                <ul class="nav nav-tabs customtab" role="tablist" style="font-size: 14px;">
                  <!-- <li class="nav-item" style="display: none;">
                    <a class="nav-link active" onclick="filterSelection('all')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i></a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('users')" style="color: #000;"> All Users</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('staff')" style="color: #000;">Staff</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('students')" style="color: #000;">Students</a>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('parent')" style="color: #000;">Parent</a>
                  </li> --}}

                </ul>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv users p-4">
                <div style="overflow-x:auto;">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Role</th>
                      <th>Contact No.</th>
                      <th>Register Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($add_user as $user)
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->conform_password }}</td>
                      <td>
                        @if($user->role==2)
                        Teacher
                        @else
                        Student
                        @endif
                      </td>
                      <td>{{ $user->phone }}</td>
                      <td>{{  date('d-M-Y', strtotime($user->created_at)) }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv staff p-4">
                <div style="overflow-x:auto;">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr class="" style="font-size: 13px; color: #012970; ">
                        <th>S No.</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Contact No.</th>
                        <th>Register Date</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($staff as $sta)
                      <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $sta->email }}</td>
                        <td>{{ $sta->conform_password }}</td>
                        <td>
                          @if($sta->role==2)
                          Teacher
                          @else
                          Student
                          @endif
                        </td>
                        <td>{{ $sta->phone }}</td>
                        <td>{{  date('d-M-Y', strtotime($sta->created_at)) }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv students p-4">
                <div style="overflow-x:auto;">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr class="" style="font-size: 13px; color: #012970; ">
                        <th>S No.</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Contact No.</th>
                        <th>Register Date</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($student as $stu)
                      <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $stu->email }}</td>
                        <td>{{ $stu->conform_password }}</td>
                        <td>
                          @if($stu->role==2)
                          Teacher
                          @else
                          Student
                          @endif
                        </td>
                        <td>{{ $stu->phone }}</td>
                        <td>{{  date('d-M-Y', strtotime($stu->created_at)) }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv parent p-4">
                <div style="overflow-x:auto;">
                <table id="example11" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Users</th>
                      <th>Role</th>               
                      <th>IP Address</th>
                      <th>Login Time</th>
                      <th>User Agent</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>admin@gmail.com</td>
                      <td>Admin</td>
                      <td>157.35.83.105</td>
                      <td>12/09/2022 15:52:17</td>
                      <td>Chrome 109.0.0.0, Windows 10 </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </div>
            </div>

          </div>
        </div>
        <hr>
    </div>

    </section>
    </div>
  </main><!-- End #main -->
@endsection