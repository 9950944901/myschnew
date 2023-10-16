@extends('layouts.teacher')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('Teacher.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Finance</li>
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
                    <a class="nav-link" onclick="filterSelection('fees')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Fees Statement</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('balance')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Balance Fees Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('collection')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Fees Collection Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('online')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Online Fees Collection Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " onclick="filterSelection('income-report')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Income Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('expense-report')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Expense Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('payroll')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Payroll Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('income-group')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Income Group Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " onclick="filterSelection('expense-group')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Expense Group Report</a>
                  </li>
                </ul>
              </div>
            </div>


            <div class="col-md-12">
              <div class="filterDiv fees p-4">
                <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">
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
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Student</h6>
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
                <h5 class="p-2" style="font-size: 18px;">Fees Statement</h5>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="row mb-3">
                    <div class="col-lg-2 col-md-6 col-sm-12">
                      <div>
                        <img src="assets/img/messages-1.jpg" width="100">
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                      <div class="ml-1 mr-2">
                        <div class="d-flex justify-content-between">
                          <p class="mb-1"><b>Name</b></p>
                          <p class="mb-1">Admin</p>
                        </div>

                        <div class="d-flex justify-content-between">
                          <p class="mb-1"><b>Father Name </b></p>
                          <p class="mb-1">-</p>
                        </div>

                        <div class="d-flex justify-content-between">
                          <p class="mb-1"><b>Phone</b></p>
                          <p class="mb-1">7410454654</p>
                        </div>

                        <div class="d-flex justify-content-between">
                          <p class="mb-1"><b>Category</b></p>
                          <p class="mb-1">-</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-sm-12">
                      <div class="ml-1 mr-2">
                        <div class="d-flex justify-content-between">
                          <p class="mb-1"><b>Class Section</b></p>
                          <p class="mb-1">Class-1</p>
                        </div>
                        <div class="d-flex justify-content-between">
                          <p class="mb-1"><b>Admission No.</b></p>
                          <p class="mb-1">1234567890
                          </p>
                        </div>
                        <div class="d-flex justify-content-between">
                          <p class="mb-1"><b>Roll No.</b></p>
                          <p class="mb-1">-</p>
                        </div>
                        <div class="d-flex justify-content-between">
                          <p class="mb-1"><b>RTE</b></p>
                          <p class="mb-1">No</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Fees Group</th>
                      <th>Fees Code</th>
                      <th>Due Date</th>
                      <th>Status</th>
                      <th>Amount</th>
                      <th>Payment Id</th>
                      <th>Mode</th>
                      <th>Date</th>
                      <th>Discount</th>
                      <th>Fine</th>
                      <th>Paid</th>
                      <th>Balance</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>A</td>
                      <td>08450</td>
                      <td>05-12-2022</td>
                      <td>Grand Total</td>
                      <td>2,000</td>
                      <td>UPI</td>
                      <td>-</td>
                      <td>11-12-2022</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>No</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv balance p-4">
                <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-12">
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

                  <div class="col-lg-6 col-md-6 col-sm-12">
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
                <table id="example9" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Class (Section)</th>
                      <th>Student Name</th>
                      <th>Admission No.</th>
                      <th>Roll Number</th>
                      <th>Father Name</th>
                      <th>Total Fees</th>
                      <th>Paid Fees</th>
                      <th>Discount</th>
                      <th>Fine</th>
                      <th>Balance</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>Class 1 (Section-A)</td>
                      <td>Tommy</td>
                      <td>08450</td>
                      <td>230</td>
                      <td>Arvind</td>
                      <td>2,000td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv collection p-4">
                <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">
                  <div class="col-lg-4 col-md-6 col-sm-12">
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
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Collect By</h6>
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
                    <h6 class="p-2" style="font-size: 14px;">Group By</h6>
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
                  <h5 class="" style="font-size: 17px;">Fees Collection Report</h5>
                </div>
                <table id="example10" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Payment Id</th>
                      <th>Date</th>
                      <th>Name</th>
                      <th>Class</th>
                      <th>Fees Type</th>
                      <th>Collect By</th>
                      <th>Mode</th>
                      <th>Amount</th>
                      <th>Discount</th>
                      <th>Fine</th>
                      <th>Total</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>07610</td>
                      <td>12-12-2019</td>
                      <td>Richa</td>
                      <td>Class-1</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>2,000</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv online p-4">
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
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="mb-2 mt-4">
                  <h5 class="" style="font-size: 17px;">Online Fees Report</h5>
                </div>
                <table id="example11" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Payment Id</th>
                      <th>Date</th>
                      <th>Name</th>
                      <th>Class</th>
                      <th>Fees Type</th>
                      <th>Collect By</th>
                      <th>Mode</th>
                      <th>Amount</th>
                      <th>Discount</th>
                      <th>Fine</th>
                      <th>Total</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>07610</td>
                      <td>12-12-2019</td>
                      <td>Richa</td>
                      <td>Class-1</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>2,000</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv income-report p-4">
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
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="mb-3 mt-3">
                  <h5 class="" style="font-size: 17px;">Income Report</h5>
                </div>
                <table id="example12" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Income Id</th>
                      <th>Date</th>
                      <th>Income Head</th>
                      <th>Name</th>
                      <th>Invoice Number</th>
                      <th>Amount</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>A</td>
                      <td>12-12-2022</td>
                      <td>-</td>
                      <td>Tommy</td>
                      <td>-</td>
                      <td>2,000</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv expense-report p-4">
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
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="mb-3 mt-3">
                  <h5 class="" style="font-size: 17px;">Expense Report</h5>
                </div>
                <table id="example18" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Expense Id</th>
                      <th>Date</th>
                      <th>Expense Head</th>
                      <th>Name</th>
                      <th>Invoice Number</th>
                      <th>Amount</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>A</td>
                      <td>12-12-2022</td>
                      <td>-</td>
                      <td>Tommy</td>
                      <td>-</td>
                      <td>2,000</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv payroll p-4">
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
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Payroll Report</h5>
                </div>
                <table id="example13" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Name</th>
                      <th>Roll No.</th>
                      <th>Designation</th>
                      <th>Month-Year</th>
                      <th>Payslip</th>
                      <th>Basic Salary</th>
                      <th>Earning</th>
                      <th>Deduction</th>
                      <th>Gross Salary</th>
                      <th>Tax</th>
                      <th>Net Salary</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>Ricky</td>
                      <td>230</td>
                      <td>-</td>
                      <td>12-2022</td>
                      <td>-</td>
                      <td>2,000</td>
                      <td>200</td>
                      <td>1800</td>
                      <td>-</td>
                      <td>-</td>
                      <td>1800</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv income-group p-4">
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
                    <h6 class="p-2" style="font-size: 14px;">Select Income Head</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">A</option>
                        <option value="Unverified">B</option>
                        <option value="Unverified">C</option>
                      </select>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Income Group Report</h5>
                </div>
                <table id="example14" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Income Head</th>
                      <th>Income Id</th>
                      <th>Name</th>
                      <th>Date</th>
                      <th>Invoice Number</th>
                      <th>Amount</th>

                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>Fees</td>
                      <td>2</td>
                      <td>Devil</td>
                      <td>12-12-2022</td>
                      <td>12345</td>
                      <td>3,000</td>

                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv expense-group p-4">
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
                    <h6 class="p-2" style="font-size: 14px;">Select Expense Head</h6>
                    <div class="">
                      <select name="source" class="form-control neha-text" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">A</option>
                        <option value="Unverified">B</option>
                        <option value="Unverified">C</option>
                      </select>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Expense Group Report</h5>
                </div>
                <table id="example15" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Expense Head</th>
                      <th>Expense Id</th>
                      <th>Name</th>
                      <th>Date</th>
                      <th>Invoice Number</th>
                      <th>Amount</th>

                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>Fees</td>
                      <td>2</td>
                      <td>Devil</td>
                      <td>12-12-2022</td>
                      <td>12345</td>
                      <td>3,000</td>

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
