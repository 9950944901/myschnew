@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Attendance By Date</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card">
                <div class="row">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Class 1</option>
                        <option value="Unverified">Class 2</option>
                        <option value="Unverified">Class 3</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Section-A</option>
                        <option value="Unverified">Section-B</option>
                        <option value="Unverified">Section-C</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Attendance Date</h6>
                    <div class="">
                      <input type="date" class="form-control neha-text" id="date1" placeholder="">
                      <div class="p-2 mt-1" style="float: right;">
                        <button type="button" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>

              <div class="p-3">
                <h5>Attendance List</h5>
              </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Id</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Name</th>
                    <th>Attendance</th>
                    <th>Note</th>
                  </tr>
                </thead>

                <tbody>
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>1</td>
                    <td>039802</td>
                    <td>02380</td>
                    <td>42</td>
                    <td>Tommy</td>
                    <td>
                      <div class="">
                        <input type="radio" name="radio1" > <label>Present</label> &nbsp;
                        <input type="radio" name="radio1"  > <label>Late</label> &nbsp;
                        <input type="radio" name="radio1" checked  > <label>Absent</label> &nbsp;
                        <input type="radio" name="radio1"  > <label>Half Day</label> &nbsp;
                      </div>
                    </td>
                    <td><input type="text" class="form-control" placeholder=""></td>
                  </tr>

                  <tr id="task-2" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                    <td>2</td>
                    <td>039802</td>
                    <td>02380</td>
                    <td>42</td>
                    <td>Tommy</td>
                    <td>
                     <div class="">
                        <input type="radio" name="radio2" checked  > <label>Present</label> &nbsp;
                        <input type="radio" name="radio2"  > <label>Late</label> &nbsp;
                        <input type="radio" name="radio2"  > <label>Absent</label> &nbsp;
                        <input type="radio" name="radio2"  > <label>Half Day</label> &nbsp;
                      </div>
                    </td>
                    <td><input type="text" class="form-control" placeholder=""></td>
                  </tr>

                  <tr id="task-3" class="task-list-row test-font" data-task-id="2" data-user="Diamond">
                    <td>3</td>
                    <td>039802</td>
                    <td>02380</td>
                    <td>42</td>
                    <td>Tommy</td>
                    <td>
                     <div class="">
                        <input type="radio" name="radio3"  > <label>Present</label> &nbsp;
                        <input type="radio" name="radio3"  checked> <label>Late</label> &nbsp;
                        <input type="radio" name="radio3"  > <label>Absent</label> &nbsp;
                        <input type="radio" name="radio3"  > <label>Half Day</label> &nbsp;
                      </div>
                    </td>
                    <td><input type="text" class="form-control" placeholder=""></td>
                  </tr>

                 

                </tbody>
              </table>

            </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection