@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Homework</li>
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
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <form action="" method="get">
                    @csrf
                <div class="row">
                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="class" class="form-control" required>
                        <option value="">Select</option>
                        @foreach ($class as $cls)
                            <option>{{ $cls->class }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="section" class="form-control" required>
                        <option value="">Select</option>
                        @foreach ($sec as $se)
                            <option>{{ $se->section }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Subject Group</h6>
                    <div class="">
                      <select name="subject_group" class="form-control" required>
                        <option value="">Select</option>
                        @foreach ($subject_group as $sgr)
                            <option>{{ $sgr->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Subject</h6>
                    <div class="">
                      <select name="subject" class="form-control" required>
                        <option value="">Select</option>
                        @foreach ($subject as $subj)
                            <option>{{ $subj->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-12 col-sm-12">
                    <div class="p-2 mt-4">
                      <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>
                </form>
                </div>

                <hr>
                <div class="d-flex justify-content-between p-2">
                  <h5>Homework List</h5>
                  <a href="button" class="btn btn-info" data-toggle="modal" data-target="#addhomeworkModal"><i
                      class="fa fa-plus"></i> Add</a>
                  <!-- Modal -->
                  <div class="modal fade" id="addhomeworkModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="applyleaveModalLabel">Add Homework</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('SCHOOL.Add.HomeWork') }}" method="post" enctype="multipart/form-data">
                                @csrf
                          <div class="row">
                            @php
                                $user = auth()->user();
                            @endphp
                            <input type="hidden" name="teacher" value="{{ $user->name }}">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label><b>Class</b></label>
                                <!-- <h6 class="p-2" style="font-size: 14px;">Class</h6> -->
                                <div class="">
                                    <select name="class" class="form-control" required>
                                        <option value="">Select</option>
                                        @foreach ($class as $cls)
                                            <option>{{ $cls->class }}</option>
                                        @endforeach
                                      </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                              <div class="form-group1 text-left">
                                <label><b>Section</b></label>
                                <!-- <h6 class="p-2" style="font-size: 14px;">Section</h6> -->
                                <div class="">
                                    <select name="section" class="form-control" required>
                                        <option value="">Select</option>
                                        @foreach ($sec as $se)
                                            <option>{{ $se->section }}</option>
                                        @endforeach
                                      </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label><b>Subject Group</b></label>
                                <!-- <h6 class="p-2" style="font-size: 14px;">Subject Group</h6> -->
                                <div class="">
                                    <select name="subject_group" class="form-control" required>
                                        <option value="">Select</option>
                                        @foreach ($subject_group as $sgr)
                                            <option>{{ $sgr->name }}</option>
                                        @endforeach
                                      </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label><b>Subject</b></label>
                                <!-- <h6 class="p-2" style="font-size: 14px;">Subject</h6> -->
                                <div class="">
                                    <select name="subject" class="form-control" required>
                                        <option value="">Select</option>
                                        @foreach ($subject as $subj)
                                            <option>{{ $subj->name }}</option>
                                        @endforeach
                                      </select>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="Phone"><b>Homework Date</b></label>
                                <input type="date" class="form-control" name="homework_date" required>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="Phone"><b>Submission Date</b></label>
                                <input type="date" class="form-control" name="sub_date" required>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="Phone"><b>Evaluation Date</b></label>
                                <input type="date" class="form-control" name="evalu_date">
                              </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="number"><b>Attach Document</b></label>
                                <input type="file" name="document" class="form-control" accept = "application/pdf,.csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                              </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="Phone"><b>Description</b></label>
                                <textarea type="text" id="myTextarea" class="form-control" name="desc"></textarea>
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <div class="form-group1 text-right mt-3">
                                <button type="submit" class="btn btn-info">Save</button>
                              </div>
                            </div>

                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Class</th>
                      <th>Section</th>
                      <th>Subject Group</th>
                      <th>Subject</th>
                      <th>Homework Date</th>
                      <th>Submission Date</th>
                      <th>Evaluation Date</th>
                      <th>Created By</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($home as $list)
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $list->class }}</td>
                      <td>{{ $list->section }}</td>
                      <td>{{ $list->subject_group }}</td>
                      <td>{{ $list->subject }}</td>
                      <td>{{ date('d-M-Y', strtotime($list->homework_date)) }}</td>
                      <td>{{ date('d-M-Y', strtotime($list->sub_date)) }}</td>
                      <td>{{ date('d-M-Y', strtotime($list->evalu_date)) }}</td>
                      <td>{{ $list->teacher }} (Teacher)</td>
                      <td>
                        <div class="d-flex">
                          <a data-toggle="modal" data-target="#addhomewor{{ $list->id }}" class="btn btn-light ml-1"><i class="fa fa-pencil"></i></a>
                          <a href="{{ route('SCHOOL.HomeWork.Delete',['id'=>$list->id]) }}" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-trash"></i></a>
                        </div>
                      
                      </td>
                    </tr>

                    <div class="modal fade" id="addhomewor{{ $list->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="applyleaveModalLabel">Add Homework</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('SCHOOL.Update.HomeWork',['id'=>$list->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                          <div class="row">
                            @php
                                $user = auth()->user();
                            @endphp
                            <input type="hidden" name="teacher" value="{{ $user->name }}">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label><b>Class</b></label>
                                <!-- <h6 class="p-2" style="font-size: 14px;">Class</h6> -->
                                <div class="">
                                    <select name="class" class="form-control" required>
                                        <option>{{ $list->class }}</option>
                                        @foreach ($class as $cls)
                                            <option>{{ $cls->class }}</option>
                                        @endforeach
                                      </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                              <div class="form-group1 text-left">
                                <label><b>Section</b></label>
                                <!-- <h6 class="p-2" style="font-size: 14px;">Section</h6> -->
                                <div class="">
                                    <select name="section" class="form-control" required>
                                        <option>{{ $list->section }}</option>
                                        @foreach ($sec as $se)
                                            <option>{{ $se->section }}</option>
                                        @endforeach
                                      </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label><b>Subject Group</b></label>
                                <!-- <h6 class="p-2" style="font-size: 14px;">Subject Group</h6> -->
                                <div class="">
                                    <select name="subject_group" class="form-control" required>
                                        <option>{{ $list->subject_group }}</option>
                                        @foreach ($subject_group as $sgr)
                                            <option>{{ $sgr->name }}</option>
                                        @endforeach
                                      </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label><b>Subject</b></label>
                                <!-- <h6 class="p-2" style="font-size: 14px;">Subject</h6> -->
                                <div class="">
                                    <select name="subject" class="form-control" required>
                                        <option>{{ $list->subject }}</option>
                                        @foreach ($subject as $subj)
                                            <option>{{ $subj->name }}</option>
                                        @endforeach
                                      </select>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="Phone"><b>Homework Date</b></label>
                                <input type="date" class="form-control" name="homework_date" value="{{ $list->homework_date }}" required>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="Phone"><b>Submission Date</b></label>
                                <input type="date" class="form-control" name="sub_date" value="{{ $list->sub_date }}" required>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="Phone"><b>Evaluation Date</b></label>
                                <input type="date" class="form-control" name="evalu_date" value="{{ $list->evalu_date }}">
                              </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="number"><b>Attach Document</b></label>
                                <input type="file" name="document" class="form-control" accept = "application/pdf,.csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                                @if($list->document)
                                    {{ $list->document }}
                                @else
                                No File
                                @endif
                              </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <div class="form-group1 text-left">
                                <label for="Phone"><b>Description</b></label>
                                <textarea type="text" id="myTextarea" class="form-control" name="desc">{{ $list->desc }}</textarea>
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <div class="form-group1 text-right mt-3">
                                <button type="submit" class="btn btn-info">Save</button>
                              </div>
                            </div>

                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                    @endforeach    

                  </tbody>
                </table>

              </div>
      </section>
    </div>

  </main><!-- End #main -->
@endsection