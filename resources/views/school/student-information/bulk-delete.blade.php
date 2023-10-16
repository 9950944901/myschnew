@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Bulk Delete</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard" >
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card">
                <div class="row">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <div class="col-lg-6 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Class-1</option>
                        <option value="Unverified">Class-2</option>
                        <option value="Unverified">Class-3</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 sol-sm-12">
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


                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="p-2 mt-3" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>

                </div>
              </div>
              
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="p-3">
                    <input type="checkbox">
                    <label class="Select All">Select All</label>
                  </div>
                </div>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>#Id</th>
                      <th>Admission No.</th>
                      <th>Name</th>
                      <th>Class</th>
                      <th>Date of Birth</th>
                      <th>Gender</th>
                      <td>Category</td>
                      <th>Mobile No.</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>05983</td>
                      <td>Kitty</td>
                      <td>Class-2</td>
                      <td>13-07-10</td>
                      <td>Female</td>
                      <td>Student</td>
                      <td>9012345678</td>
                    </tr>

                    <tr id="task-2" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                      <td>2</td>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>05983</td>
                      <td>Kitty</td>
                      <td>Class-2</td>
                      <td>13-07-10</td>
                      <td>Female</td>
                      <td>Student</td>
                      <td>9012345678</td>
                    </tr>

                    <tr id="task-3" class="task-list-row test-font" data-task-id="2" data-user="Diamond">
                      <td>3</td>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>05983</td>
                      <td>Kitty</td>
                      <td>Class-2</td>
                      <td>13-07-10</td>
                      <td>Female</td>
                      <td>Student</td>
                      <td>9012345678</td>
                    </tr>

                    <tr id="task-4" class="task-list-row test-font" data-task-id="2" data-user="Silver">
                      <td>4</td>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>05983</td>
                      <td>Kitty</td>
                      <td>Class-2</td>
                      <td>13-07-10</td>
                      <td>Female</td>
                      <td>Student</td>
                      <td>9012345678</td>
                    </tr>

                    <tr id="task-5" class="task-list-row test-font" data-task-id="2" data-user="Gold">
                      <td>5</td>
                      <td>
                        <input type="checkbox">
                      </td>
                      <td>05983</td>
                      <td>Kitty</td>
                      <td>Class-2</td>
                      <td>13-07-10</td>
                      <td>Female</td>
                      <td>Student</td>
                      <td>9012345678</td>
                    </tr>

                  </tbody>
                </table>

                <div class="col-lg-12 col-md-12 c0l-sm-12">
                  <div class="float-right p-2 mt-2">
                    <button class="btn btn-info">Delete</button>
                  </div>
                </div>
              

            </div>
          </div>
        </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection