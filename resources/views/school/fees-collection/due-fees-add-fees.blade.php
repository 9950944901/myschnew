@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Search Due Fees - Add Fees</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard p-3" style="background: #F3F3F3">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card">
                <h5 class="mt-3">Student Fees</h5>
                <hr>
                <div class="row mb-2">
                  <div class="col-lg-2 col-md-6 col-sm-12">
                    <div>
                      <img src="{{ url('public/school/assets/img/messages-1.jpg') }}" width="100">
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
                        <p class="mb-1"><b>Mobile No.</b></p>
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
                        <p class="mb-1">Class 1 (Section-A)</p>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="mb-1"><b>Admission No</b></p>
                        <p class="mb-1">1234567890
                        </p>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="mb-1"><b>Roll Number</b></p>
                        <p class="mb-1">-</p>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="mb-1"><b>RTE</b></p>
                        <p class="mb-1">-</p>
                      </div>
                    </div>
                  </div>
                  <hr>
                </div>
              </div>

              <div class="mt-1 mb-3">
                <a href="button" class="btn btn-info" data-toggle="modal" data-target="#addfeesModal"><i
                    class="fa fa-money"></i> Collect Selected</a>

                <!-- Modal -->
                <div class="modal fade" id="addfeesModal" tabindex="-1" role="dialog"
                  aria-labelledby="addfeesModalLabel" aria-hidden="true">
                  <div class="modal-dialog " role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="leaverequestModalLabel">Collect Fees</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">                         
                          <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Name">Date</label>
                              <input type="date" class="form-control neha-text" id="Email" placeholder="">
                            </div>
                          </div>
                          <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Email">Payment Mode</label>
                              <div>
                                <input type="radio" name="same" checked> <label>Cash</label> &nbsp;
                                <input type="radio" name="same"> <label>Cheque</label> &nbsp;
                                <input type="radio" name="same"> <label>DD</label> &nbsp;
                                <input type="radio" name="same"> <label>Bank</label> &nbsp;
                                <input type="radio" name="same"> <label>UPI</label> &nbsp;
                                <input type="radio" name="same"> <label>Card</label>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Phone">Note</label>
                              <textarea name="" class="form-control neha-text" rows="2" placeholder=""></textarea>
                            </div>
                          </div>
                          <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Name"><b>Total</b></label>
                              <input type="type" class="form-control neha-text" id="Email" placeholder="0">
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-info"><i class="fa fa-money"></i> Pay</button>
                      </div>
                    </div>
                  </div>
                </div>





              </div>

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
                    <th>Mode </th>
                    <th>Date</th>
                    <th>Discount (₹)</th>
                    <th>Fine (₹)</th>
                    <th>Paid (₹)</th>
                    <th>Balance (₹)</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>1</td>
                    <td>Abc</td>
                    <td>654</td>
                    <td>09-12-2022</td>
                    <td>Active</td>
                    <td>2,000</td>
                    <td>BV9058</td>
                    <td>Cash</td>
                    <td>09-12-2022</td>
                    <td>200</td>
                    <td>0</td>
                    <td>2,000</td>
                    <td>2,000</td>
                    <td>-</td>
                  </tr>


                </tbody>
              </table>

            </div>
          </div>
        </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection