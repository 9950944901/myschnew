@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Online Examination</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard" >
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
                    <a class="nav-link" onclick="filterSelection('result-report')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Result Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('exams-report')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Exams Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('exams-attempt')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Exams Attempt Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('exams-rank')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Exams Rank Report</a>
                  </li>
                 
                </ul>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv result-report p-4">
                <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">

                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Exam</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">A</option>
                        <option value="Unverified">B</option>
                        <option value="Unverified">C</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12">
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

                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Section-A</option>
                        <option value="Unverified">Section-B</option>
                        <option value="Unverified">Section-C</option>
                      </select>
                    </div>
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>

                </div>
                <hr>
                <h5 class="p-2" style="font-size: 18px;">Result Report</h5>
              
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Admission No.</th>
                      <th>Student Name</th>
                      <th>Class</th>
                      <th>Total Attempt</th>
                      <th>Remaining Attempt</th>
                      <th>Exam Submitted</th>
                      <th>Action</th>
                     
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>08450</td>
                      <td>Devil</td>
                      <td>Class-1</td>
                      <td>2</td>
                      <td>1</td>
                      <td>-</td>
                      <td>-</td>
                      
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv exams-report p-4">
                <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Search Type</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">A</option>
                        <option value="Unverified">B</option>
                        <option value="Unverified">C</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Date Type</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">A</option>
                        <option value="Unverified">B</option>
                        <option value="Unverified">C</option>
                      </select>
                    </div>
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>

                </div>
                <hr>
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Exams Report
                  </h5>
                </div>
                <table id="example9" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Exam</th>
                      <th>Attempt</th>
                      <th>Exam From </th>
                      <th>Exam To</th>                  
                      <th>Duration</th>                     
                      <th>Student</th>
                      <th>Questions</th>
                      <th>Exam Publish</th>
                      <th>Result Publish</th>
                    
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>test</td>
                      <td>1</td>
                      <td>12-12-2022 2:30pm</td>
                      <td>12-12-2022 3:30pm</td>
                       <td>1 hour</td>                                        
                      <td>-</td>
                      <td>-</td>
                      <td><i class="fa fa-check-square-o"></i></td>
                      <td><i class="fa fa-check-square-o"></i></td>
                      
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv exams-attempt p-4">
                <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Search Type</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">A</option>
                        <option value="Unverified">B</option>
                        <option value="Unverified">C</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Date Type</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">A</option>
                        <option value="Unverified">B</option>
                        <option value="Unverified">C</option>
                      </select>
                    </div>
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>

                </div>
                <hr>
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Exam Attempt Report</h5>
                </div>
                <table id="example10" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Student</th>
                      <th>Admission No.</th>
                      <th>Class</th>
                      <th>Section</th>
                      <th>Exam</th>
                      <th>Exam From</th>
                      <th>Exam To</th>
                      <th>Duration</th>
                      <th>Exam Publish</th>
                      <th>Result Publish</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>-</td>
                      <td>07610</td>
                      <td>Class-1</td>
                      <td>A</td>      
                      <td>-</td>
                      <td>10-11-2022 12:30pm</td>
                      <td>10-11-2022 1:30pm</td>
                      <td>1 hour</td>
                      <td>-</td>
                      <td>-</td>
                     
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv exams-rank p-4">
                <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Exam</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">A</option>
                        <option value="Unverified">B</option>
                        <option value="Unverified">C</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12">
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

                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Section-A</option>
                        <option value="Unverified">Section-B</option>
                        <option value="Unverified">Section-C</option>
                      </select>
                    </div>
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>

                </div>
                <hr>
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Exam Rank Report</h5>
                </div>
                <table id="example11" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Rank</th>
                      <th>Student</th>
                      <th>Admission No</th>
                      <th>Class</th>
                      <th>Father Name</th>
                      <th>Exam Submitted</th>
                      <th>Total Question</th>                      
                      <th>Descriptive</th>
                      <th>Correct Answer</th>
                      <th>Wrong Answer</th>
                      <th>Not Attempted</th>
                      <th>Total Exam Marks</th>
                      <th>Total Negative Marks</th>
                      <th>Total Scored Marks</th>
                      <th>Score (%)</th>
                      
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>-</td>
                      <td>-</td>
                      <td>23409</td>
                      <td>Class-1</td>                     
                      <td>Arun Singh</td>
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