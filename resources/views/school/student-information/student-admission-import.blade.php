@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Student Admission Import</li>
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
                  <hr>
                  <div class="mb-2" style="font-size: 14px;">
                    <p class="mb-1">1. Your CSV data should be in the format below. The first line of your CSV file
                      should be the
                      column headers as in the table example. Also make sure that your file is UTF-8 to avoid
                      unnecessary encoding problems.</p>
                    <p class="mb-1">2. If the column you are trying to import is date make sure that is formatted in
                      format Y-m-d
                      (2018-06-06).</p>
                    <p class="mb-1">3. Duplicate Admission Number (unique) rows will not be imported.</p>
                    <p class="mb-1">4. For student Gender use Male, Female value.</p>
                    <p class="mb-1">5. For student Blood Group use O+, A+, B+, AB+, O-, A-, B-, AB- value.</p>
                    <p class="mb-1">6. For RTE use Yes, No value.</p>
                    <p class="mb-1">7. For If Guardian Is user father,mother,other value.</p>
                    <p class="mb-1">8. Category name comes from other table so for category, enter Category Id (Category
                      Id can be
                      found on category page ).</p>
                    <p class="mb-1">9. Student house comes from other table so for student house, enter Student House Id
                      (Student
                      House Id can be found on student house page ).</p>
                  </div>
                  <hr>
                </div>
              </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Category</th>
                    <th>Religion</th>
                    <th>Caste</th>
                    <th>Mobile No.</th>
                    <th>Email</th>
                    <th>Admission Date</th>
                    <th>Blood Group</th>
                    <th>Student House</th>
                    <th>Height</th>
                    <th>Weight</th>
                    <th>As on Date</th>
                    <th>Father Name</th>
                    <th>Father Phone</th>
                    <th>Father Occupation</th>
                    <th>Mother Name</th>
                    <th>Mother Phone</th>
                    <th>Mother Occupation</th>
                    <th>If Guardian Is</th>
                    <th>Guardian Name</th>
                    <th>Guardian Relation</th>
                    <th>Guardian Email</th>
                    <th>Guardian Phone</th>
                    <th>Guardian Occupation</th>
                    <th>Guardian Address</th>
                    <th>Current Address</th>
                    <th>Permanent Address</th>
                    <th>Bank Account Number</th>
                    <th>Bank Name</th>
                    <th>IFSC Code</th>
                    <th>National Identification Number</th>
                    <th>Local Identification Number</th>
                    <th>RTE</th>
                    <th>Previous School Details</th>
                    <th>Note</th>
                  </tr>
                </thead>

                <tbody>
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>1</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>

                  </tr>

                </tbody>
              </table>

              <div class="card info-card sales-card mt-3">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
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

                  <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
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

                  <div class="col-lg-6 col-md-6 sol-sm-12">
                    <h6 class="p-2 mt-2" style="font-size: 14px;">Select CSV File</h6>
                    <div class="">
                      <input type="file" name="Profile Image" class="form-control-file" id="addImage">
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="p-2 mt-1" style="float: right;">
                      <button type="button" class="btn btn-info"> Import Student</button>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection