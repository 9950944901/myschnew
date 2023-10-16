@extends('layouts.teacher')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('Teacher.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Exam Result</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card">
                <form action="{{ route('Teacher.exam-result') }}" method="get">
                  @csrf
                <div class="row">
                  <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Exam Group</h6>
                    <div class="">
                      <select name="exam_group" class="form-control neha-text" required>
                        <option value="">Select</option>
                        @foreach ($exam_group as $exg)
                        <option>{{ $exg->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Session</h6>
                    <div class="">
                      <select name="session" class="form-control neha-text" required>
                        <option value="">Select</option>
                        <option>2022-2023</option>
                        <option>2023-2024</option>
                        <option>2024-2025</option>
                        <option>2025-2026</option>
                        <option>2026-2027</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="class" class="form-control neha-text" required>
                        <option value="">Select</option>
                        @foreach ($class as $cls)
                        <option>{{ $cls->class }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="section" class="form-control neha-text" required>
                        <option value="">Select</option>
                        @foreach ($sec as $se)
                        <option>{{ $se->section }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="p-2 mt-4">
                      <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>
                </div>
              </form>
              </div>

              <div class="d-flex justify-content-between p-2 mb-2">
                <h5 class="" style="font-size: 17px;">Exam Result</h5>

                {{-- Add exam result --}}

                {{-- <a data-toggle="modal" data-target="#approveModal" class="btn btn-info"><i class="fa fa-plus"></i> Add</a> --}}
                
                {{-- Add exam result --}}
            
              </div>


              <div class="modal fade" id="approveModal" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Exam Result</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ route('TAdd.Exam.Result') }}" method="post" enctype="multipart/form-data">
                      @csrf
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Session</label>
                          <select name="session" class="form-control neha-text" required>
                            <option value="">Select</option>
                            <option selected>2022-2023</option>
                            <option>2023-2024</option>
                            <option>2024-2025</option>
                            <option>2025-2026</option>
                            <option>2026-2027</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Exam Group</label>
                          <select name="exam_group" class="form-control neha-text" required>
                            <option value="">Select</option>
                            @foreach ($exam_group as $exg)
                            <option>{{ $exg->name }}</option>
                            @endforeach
                              
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Class</label>
                        <select name="class" class="form-control neha-text" required>
                        <option value="">Select</option>
                        @foreach ($class as $cls)
                        <option>{{ $cls->class }}</option>
                        @endforeach
                      </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group1 text-left">
                          <label for="Name">Section</label>
                          <select name="section" class="form-control neha-text" required>
                            <option value="">Select</option>
                            @foreach ($sec as $se)
                            <option>{{ $se->section }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    

                    
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="Address">Admission No.</label>
                          <input type="text" class="form-control neha-text" name="add_no" required>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="Address">Exam Roll No.</label>
                          <input type="text" class="form-control neha-text" name="roll_no" required>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="number">Total Marks</label>
                          <input type="number" id="value1" class="form-control neha-text" name="total_marks" value="600" required>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="number">Receive Marks</label>
                          <input type="number" id="value2" class="form-control neha-text" name="rec_marks" required>
                        </div>
                      
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="number">Percent %</label>
                          <input type="text" id="sum"  class="form-control percent" readonly name="percent" required>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group1 text-left">
                          <label for="number">Result</label>
                          <div>
                            <label for=""><input type="radio" name="result" value="Pass" required> Pass</label>
                            <label for=""><input type="radio" name="result" value="Fail" required> Fail</label>
                            <label for=""><input type="radio" name="result" value="By Grace" required> By Grace</label>
                            <label for=""><input type="radio" name="result" value="Supp." required> Supp.</label>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group1 text-left" style="float: right;">
                          <button type="submit" class="btn btn-info mt-4">Save</button>
                        </div>
                      </div>

                    </div>
                  </form>

                  </div>
                </div>
              </div>
            </div>


              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Admission No.</th>
                    <th>Roll No.</th>
                    <th>Session</th>
                    <th>Class/Section</th>
                    <th>Student</th>
                    <th>Performance</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($data as $value)

                  @php
                  $half = 0;
                  $half = $half+$value->half_hindi+$value->half_math+$value->half_english+$value->half_science+$value->half_social+$value->half_sanskrit;
    
                  $anul = 0;
                  $anul = $anul+$value->anul_hindi+$value->anul_math+$value->anul_english+$value->anul_science+$value->anul_social+$value->anul_sanskrit;
                //  $strang = 0;
                // $strang = $strang+$value->st_hindi+$value->st_math+$value->st_english+$value->st_science+$value->st_social+$value->st_sanskrit;
              @endphp

                  {{-- {{dd($data);}} --}}
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->add_no }}</td>
                    <td>{{ $value->roll_no }}</td>

                    <td>{{ $value->session }}</td>
                    <td>{{ $value->class }} <br> <span class="w-100 d-block">{{$value->section}}</span></td>
                    <td>
                      <span class="text-bold">Name: </span><span>{{ $value->first_name }} {{ $value->last_name }}</span><br>
                      <span class="text-bold">F.Name: </span><span>{{ $value->father_name }} </span><br>
                      <span class="text-bold">Mobile: </span><span>+91-{{ $value->mobile_no }} </span><br>
                      </td>
                 <td><span class="text-bold">Percentage: {{ Number_format(($half+$anul)*100/600,2)}}%</span> <br>
                      <span class=" text-bold">Result: 
                        @php
                        $result = number_format(($half+$anul)*100/600,2);
                    @endphp
                        @if ($result >= 33 && $result <= 44) 
                        3rd division
                        @elseif($result >= 45 && $result <= 59) 
                        2nd division
                        @elseif($result >= 60 && $result <= 74) 
                        1st division
                        @elseif($result >= 75 && $result <= 100) 
                        Distinction                              
                        @else
                        <span class="text-danger">Fail</span>
                        @endif 
                      
                      </span><br>

                    </td>
                    <td>
                      <div class="d-flex">
                        {{-- <a data-toggle="modal" data-target="#approve{{ $value->id }}" class="btn btn-light"><i class="fa fa-pencil"></i></a>
                        <a href="{{ route('TExam.Result.Delete',['id'=>$value->id]) }}" class="btn btn-light ml-2 delete-confirm"><i class="fa fa-trash"></i></a> --}}

                        <a href="{{ route('Student.report_card',['id'=>$value->student_id]) }}" class="btn btn-sm btn-light ml-2"><i class="fa fa-eye text-info"></i></a>
                      </div>
                    </td>
                  </tr>
                  <div class="modal fade" id="approve{{ $value->id }}" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Edit {{ $value->first_name }} {{ $value->last_name }} Exam Result</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="{{ route('TUpdate.Exam.Result',['id'=>$value->id]) }}" method="post" enctype="multipart/form-data">
                          @csrf
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group1 text-left">
                              <label for="Name">Session</label>
                              <select name="session" class="form-control neha-text" required>
                                <option>{{ $value->session }}</option>
                                <option>2022-2023</option>
                                <option>2023-2024</option>
                                <option>2024-2025</option>
                                <option>2025-2026</option>
                                <option>2026-2027</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group1 text-left">
                              <label for="Name">Exam Group</label>
                              <select name="exam_group" class="form-control neha-text" required>
                                <option>{{ $value->exam_group }}</option>
                                @foreach ($exam_group as $exg)
                                <option>{{ $exg->name }}</option>
                                @endforeach
                                  
                              </select>
                            </div>
                          </div>
    
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group1 text-left">
                              <label for="Name">Class</label>
                            <select name="class" class="form-control neha-text" required>
                            <option>{{ $value->class }}</option>
                            @foreach ($class as $cls)
                            <option>{{ $cls->class }}</option>
                            @endforeach
                          </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group1 text-left">
                              <label for="Name">Section</label>
                              <select name="section" class="form-control neha-text" required>
                                <option>{{ $value->section }}</option>
                                @foreach ($sec as $se)
                                <option>{{ $se->section }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                        
    
                        
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Address">Admission No.</label>
                              <input type="text" class="form-control neha-text" name="add_no" value="{{ $value->add_no }}" required>
                            </div>
                          </div>
    
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Address">Exam Roll No.</label>
                              <input type="text" class="form-control neha-text" name="roll_no" value="{{ $value->roll_no }}" required>
                            </div>
                          </div>
    
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="number">Total Marks</label>
                              <input type="number" id="value12" class="form-control neha-text" name="total_marks" value="{{ $value->total_marks }}"  required>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="number">Receive Marks</label>
                              <input type="number" id="value22" class="form-control neha-text" name="rec_marks" value="{{ $value->rec_marks }}" required>
                            </div>
                          
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="number">Percent %</label>
                              <input type="text" id="sum2"  class="form-control" readonly name="percent" value="{{ $value->percent }}"  required>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="number">Result</label>
                              <div>
                                <label for=""><input type="radio" name="result" value="Pass" {{ ($value->result=="Pass")? "checked" : "" }} required> Pass</label>
                                <label for=""><input type="radio" name="result" value="Fail" {{ ($value->result=="Fail")? "checked" : "" }} required> Fail</label>
                                <label for=""><input type="radio" name="result" value="By Grace" {{ ($value->result=="By Grace")? "checked" : "" }} required> By Grace</label>
                                <label for=""><input type="radio" name="result" value="Supp." {{ ($value->result=="Supp.")? "checked" : "" }} required> Supp.</label>
                              </div>
                            </div>
                          </div>
    
                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group1 text-left" style="float: right;">
                              <button type="submit" class="btn btn-info mt-4">Update</button>
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

<script>
$(function(){
            $('#value1, #value2').keyup(function(){
               var value1 = parseFloat($('#value1').val()) || 0;
               var value2 = parseFloat($('#value2').val()) || 0;
               $('#sum').val((value2 / value1 * 100).toFixed(2) + "%");
            });
         });
</script>
<script>
$(function(){
            $('#value12, #value22').keyup(function(){
               var value12 = parseFloat($('#value12').val()) || 0;
               var value22 = parseFloat($('#value22').val()) || 0;
               $('#sum2').val((value22 / value12 * 100).toFixed(2) + "%");
            });
         });
</script>


@endsection

