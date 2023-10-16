@extends('layouts.student')
@section('content')



<div class="main-panel">
    <div class="content-wrapper m-0">
      <div class="row">
        <div class="col-md-12 ">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4">
              <h3 class="font-weight-bold">Welcome {{ $data->first_name }} {{ $data->last_name }}</h3>
            {{-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span
                class="text-primary">3 unread alerts!</span></h6> --}}
          </div>
            <div class="col-12 col-xl-4 mb-4">
              <div class="justify-content-end d-flex">
                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                  <button class="btn btn-sm btn-light bg-white"  id="dropdownMenuDate2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border: 1px solid #4B49AC">
                    <i class="mdi mdi-calendar"></i> Today ({{ date('d-M-Y') }})
                  </button>
                  {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                    <a class="dropdown-item" href="#">January - March</a>
                    <a class="dropdown-item" href="#">March - June</a>
                    <a class="dropdown-item" href="#">June - August</a>
                    <a class="dropdown-item" href="#">August - November</a>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="">
        <h5>Exam Schedule</h5>
      </div>

      <hr>
      <div class="row">
        <div class="col-md-12">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr class="" style="font-size: 13px; color: #012970; ">
                <th>S No.</th>
                <th>Class</th>
                <th>Subject</th>
                <th>Exam Group</th>
                <th>Date From</th>
                <th>Start Date</th>
                <th>Duration</th>
                <th>Room No.</th>
                <th>Marks (Max.)</th>
                <th>Marks (Min.)</th>
              </tr>
            </thead>

            <tbody>
                
                @foreach ($dataexam as $value)
                <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $value->class ?? ''}}</td>
                  <td>{{ $value->subject }}</td>
                  <td>{{ $value->exam_group }}</td>
                  <td>{{  date('d-M-Y', strtotime($value->date_from))}}</td>
                  <td>{{  date('H:i A', strtotime($value->start_time))}}</td>
                  <td>{{ $value->duration }}</td>
                  <td>{{ $value->room_no }}</td>
                  <td>{{ $value->max_marks }}</td>
                  <td>{{ $value->min_marks }}</td>

                {{-- <td>
                  <a href="button" class="btn btn-info" data-toggle="modal" data-target="#viewModal"><i
                      class="fa fa-eye"></i> View</a>
                  <!-- Modal -->
                  <div class="modal fade" id="viewModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="viewModalLabel">ABC</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div style="overflow-x:auto;">
                                <table id="example9" class="table table-bordered table-striped">
                                  <thead>
                                    <tr class="" style="font-size: 13px; color: #012970; ">
                                      <th>S No.</th>
                                      <th>Class</th>
                                      <th>Section</th>
                                      <th>Apply Date</th>
                                      <th>From Date</th>
                                      <th>To Date</th>
                                      <th>Status</th>
                                      <th>Action</th>

                                    </tr>
                                  </thead>

                                  <tbody>
                                    <tr id="task-1" class="task-list-row test-font" data-task-id="1"
                                      data-user="Platinum">
                                      <td>1</td>
                                      <td>Class-1</td>
                                      <td>A</td>
                                      <td>15-12-2022</td>
                                      <td>17-12-2022</td>
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
                        <div class="modal-footer">
                          <button type="button" class="btn btn-info">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
 --}}
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>

    </div>
    <!-- content-wrapper ends -->


@endsection
