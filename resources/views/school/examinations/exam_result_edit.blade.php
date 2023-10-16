@extends('layouts.app')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Student Result</li>
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
                                {{-- <form action="{{ route('SCHOOL.Student.result.up',['id'=>$data->res_id]) }}" method="post"> --}}
                                <form action="{{ route('SCHOOL.Student.result.up',['id'=>$data->id]) }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="d-flex justify-content-between p-2">
                                            <h5 class="mt-3" style="font-size: 17px;">Student Result</h5>
                                            <span class="text-danger">@error('roll_no') {{$message}} @enderror</span>

                                            {{-- @if ($errors->has('roll_no'))
                                            <span class="text-danger">{{ $errors->first('roll_no') }}</span>
                                            @endif --}}
                                            {{-- <a href="{{ route('SCHOOL.student-admission-import') }}" class="btn btn-info">
                                                <i class="fa fa-upload"></i> Import Student
                                            </a> --}}
                                        </div>
                                        <hr>
                                        <div class="col-lg-3 col-md-3 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Session</h6>
                                            <div class="">
                                                <select name="session" class="form-control neha-text" required>
                                                    <option>{{$data->session}}</option>
                                                    <option selected>2022-2023</option>
                                                    <option>2023-2024</option>
                                                    <option>2024-2025</option>
                                                    <option>2025-2026</option>
                                                    <option>2026-2027</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Exam Group</h6>
                                            <div class="">
                                                <select name="exam_group" class="form-control neha-text" required>
                                                    <option>{{$data->exam_group}}</option>
                                                    @foreach ($exam_group as $exg)
                                                        <option>{{ $exg->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Class</h6>
                                            <div class="">
                                                <select name="class"  class="form-control neha-text">
                                                    <option>{{$data->class}}</option>
                                                    @foreach ($class as $cls)
                                                        <option value="{{ $cls->id }}">{{ $cls->class }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Section</h6>
                                            <div class="">
                                                <select name="section" class="form-control neha-text">
                                                    <option>{{$data->section}}</option>
                                                    @foreach ($sec as $se)
                                                        <option>{{ $se->section }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Exam Roll No.</h6>
                                            <div class="">
                                                <select name="roll_no" id="" class="form-control neha-text">
                                                    <option>{{$data->roll_no}}</option> 
                                                    @foreach ($Stu_Admiss as $se239)
                                                    <option>{{ $se239->roll_no }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Admission No.</h6>
                                            <div class="">
                                                <select name="add_no" id="" class="form-control neha-text">
                                                    <option>{{$data->add_no}}</option> 
                                                    @foreach ($Stu_Admiss as $se23)
                                                    <option>{{ $se23->admission_no }}</option>
                                                @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Student Name</h6>
                                            <div class="">
                                                <select name="sname" id="student" class="form-control neha-text">
                                                    <option value="{{$data->sname}}">Select</option> 
                                                </select>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Strang</h6>
                                            <div class="">
                                                <input type="text" name="strang" class="form-control neha-text">
                                            </div>
                                        </div> --}}

                                        <br>
                                        <h5 class="mt-3">Subject</h5>

                                        <div class="mt-2">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#tabs-11"
                                                        role="tab" style="color: #012970;">Half Yearly Examination.</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tabs-22" role="tab"
                                                        style="color: #012970;">Annual Examination.</a>
                                                </li>
                                                {{-- <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tabs-23" role="tab"
                                                        style="color: #012970;">Sess.</a>
                                                </li> --}}
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabs-11" role="tabpanel">
                                                    <section class="featured-job-area mt-3">
                                                        <div class="container">

                                                            <h5 class="mt-3">Half Yearly Examination</h5>
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">English
                                                                    </h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*" class="form-control neha-text" maxlength="100"   required name="half_english" value="{{$data->half_english}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Hindi</h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="half_hindi" value="{{$data->half_hindi}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">
                                                                        Mathematics</h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="half_math" value="{{$data->half_math}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Science
                                                                    </h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="half_science" value="{{$data->half_science}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Social
                                                                        Science</h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="half_social" value="{{$data->half_social}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Sanskrit</h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="half_sanskrit" value="{{$data->half_sanskrit}}">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </section>
                                                </div>

                                                <div class="tab-pane" id="tabs-22" role="tabpanel">
                                                    <section class="featured-job-area mt-3">
                                                        <div class="container">

                                                            <h5 class="mt-3">Annual Examination.</h5>
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">English
                                                                    </h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="anul_english" value="{{$data->anul_english}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Hindi</h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="anul_hindi" value="{{$data->anul_hindi}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">
                                                                        Mathematics</h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="anul_math" value="{{$data->anul_math}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Science
                                                                    </h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="anul_science" value="{{$data->anul_science}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Social
                                                                        Science</h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="anul_social" value="{{$data->anul_social}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Sanskrit</h6>
                                                                    <div class="">
                                                                        <input type="text" pattern="['0-9']*"
                                                                            class="form-control neha-text" maxlength="100" name="anul_sanskrit" value="{{$data->anul_sanskrit}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                          </div>
                                                    </section>
                                                </div>

                                                <div class="tab-pane" id="tabs-23" role="tabpanel">
                                                    <section class="featured-job-area mt-3">
                                                        <div class="container">

                                                            <h5 class="mt-3">Sess.</h5>
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">English
                                                                    </h6>
                                                                    <div class="">
                                                                        <input type="text"
                                                                            class="form-control neha-text" name="st_english" value="{{$data->st_english}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Hindi</h6>
                                                                    <div class="">
                                                                        <input type="text"
                                                                            class="form-control neha-text" name="st_hindi" value="{{$data->st_hindi}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">
                                                                        Mathematics</h6>
                                                                    <div class="">
                                                                        <input type="text"
                                                                            class="form-control neha-text" name="st_math" value="{{$data->st_math}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Science
                                                                    </h6>
                                                                    <div class="">
                                                                        <input type="text"
                                                                            class="form-control neha-text" name="st_science" value="{{$data->st_science}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Social
                                                                        Science</h6>
                                                                    <div class="">
                                                                        <input type="text"
                                                                            class="form-control neha-text" name="st_social" value="{{$data->st_social}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Sanskrit</h6>
                                                                    <div class="">
                                                                        <input type="text"
                                                                            class="form-control neha-text" name="st_sanskrit" value="{{$data->st_sanskrit}}">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-3 col-md-6 sol-sm-12">
                                                                    <h6 class="p-2" style="font-size: 14px;">Result</h6>
                                                                    <div class="">
                                                                        <input type="text"
                                                                            class="form-control neha-text" name="result">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                          </div>
                                                    </section>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="text-center p-3">
                                                <div class="float-right">
                                                    <button type="submit" class="btn btn-info">
                                                        <i class="fa fa-plus"></i> Add
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </section>
                </div>
            </main><!-- End #main -->



    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#packge').change(function() {
                let cid = jQuery(this).val();
                jQuery.ajax({
                    url: '{{ route('school.rollnumber') }}',
                    type: 'post',
                    data: 'cid=' + cid + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        jQuery('#selectcourse').html(result)
                    }

                });
            });
        });
    </script>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#selectcourse').change(function() {
                let cid = jQuery(this).val();
                jQuery.ajax({
                    url: '{{ route('school.admission') }}',
                    type: 'post',
                    data: 'cid=' + cid + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        jQuery('#admission').html(result)
                    }

                });
            });
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#admission').change(function() {
                let cid = jQuery(this).val();
                jQuery.ajax({
                    url: '{{ route('school.student') }}',
                    type: 'post',
                    data: 'cid=' + cid + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        jQuery('#student').html(result)
                    }

                });
            });
        });
    </script>
     --}}
@endsection
