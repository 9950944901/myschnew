@extends('layouts.app')
@section('content')



<style>
  .adm-import {
      margin-top: 30px;
  }

  .adm-export {
      margin-top: 30px;
  }

  @media (max-width: 425px) {
    .adm-export {
      margin-top: 10px;
  }

  }

</style>



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Student Admission</li>
                </ol>
            </nav>
        </div>

        {{-- <a href="{{route('import-view')}}" class="btn btn-sm btn-info">CSV</a> --}}

        <div class="dashboard ">
            <section class="section dashboard">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card info-card sales-card mt-3" style="padding: 10px;">
                            <div class="row ">
                                <div class="col-lg-5 col-md-12 sol-sm-12 ">
                                    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-2">

                                            @if (Session::has('import_error'))
                                                @foreach (Session::get('import_error') as $failure)
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $failure->errors()[0] }} at line No.. {{ $failure->row() }}
                                                    </div>
                                                @endforeach
                                            @endif
                                            <div class="row adm-import">
                                                <div class="col-lg-8 col-md-6 col-sm-12">
                                                    <div class="custom-file">
                                                        <span>Choose file</span>
                                                        <input type="file" name="filecsv" class="custom-file-input"
                                                            id="customFile">
                                                        <label class="custom-file-label" for="customFile">Choose
                                                            file</label>

                                                        <span class="text-danger">
                                                            @error('filecsv')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <button class="btn btn-primary w-100">Import </button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                 
                                {{-- <div class="col-lg-5 col-md-12 sol-sm-12 ">
                                    <form action="{{ route('update_import') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-2">

                                            @if (Session::has('import_error_update'))
                                                @foreach (Session::get('import_error_update') as $failure1)
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $failure1->errors()[0] }} at line No.. {{ $failure1->row() }}
                                                    </div>
                                                @endforeach
                                            @endif
                                            <div class="row adm-import">
                                                <div class="col-lg-8 col-md-6 col-sm-12">
                                                    <div class="custom-file">
                                                        <span>Choose file</span>
                                                        <input type="file" name="filecsv2" class="custom-file-input"
                                                            id="customFile2">
                                                        <label class="custom-file-label" for="customFile2">Update CSV</label>

                                                        <span class="text-danger">
                                                            @error('filecsv2')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <button class="btn btn-primary w-100">Edit <i class="fa fa-edit"></i> </button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div> --}}


                                <div class="col-lg-7 col-md-12 sol-sm-12 ">
                                    <form action="{{ route('export-users') }}" method="get" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-2">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="csv1">
                                                        <label for="">Class</label>
                                                        <select name="classcsv" id="" class="form-control"
                                                            required>
                                                            <option value="">select</option>
                                                            @foreach ($data as $class1)
                                                                <option>{{ $class1->class }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="csv2">
                                                        <label for="">section</label>
                                                        <select name="sectioncsv" id="" class="form-control"
                                                            required>
                                                            <option value="">select</option>
                                                            @foreach ($show as $section1)
                                                                <option>{{ $section1->section }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="adm-export">
                                                        <button class="btn btn-success w-100">Export </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <a class="btn btn-success" href="{{ route('export-users') }}">Export Users</a> --}}
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="card info-card sales-card">
                                <form action="{{ route('SCHOOL.Student.Admission') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="d-flex justify-content-between p-2">
                                            <h5 class="mt-3" style="font-size: 17px;">Student Admission</h5>
                                            {{-- <a href="{{ route('SCHOOL.student-admission-import') }}" class="btn btn-info">
                      <i class="fa fa-upload"></i> Import Student
                    </a> --}}
                                            {{-- <a href="{{route('import-view')}}" class="btn btn-info">
                      <i class="fa fa-upload"></i> Import Student
                    </a> --}}
                                        </div>
                                        <hr>
                                        <div class="col-lg-3 col-md-3 sol-sm-12">
                                            <span class="text-danger">
                                                @error('admission_no')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            <h6 class="p-2" style="font-size: 14px;"><span class="text-danger">*</span>
                                                Admission No.</h6>
                                            <div class="">

                                                <input type="text" pattern="['0-9']*" required class="form-control neha-text"
                                                    name="admission_no" value="{{ old('admission_no') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <span class="text-danger">
                                                @error('roll_no')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            <h6 class="p-2" style="font-size: 14px;"><span class="text-danger">*</span>
                                                Roll No.</h6>
                                            <div class="">

                                                <input type="text" pattern="['0-9']*" required class="form-control neha-text" name="roll_no"
                                                    value="{{ old('roll_no') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span class="text-danger">*</span>
                                                First Name</h6>
                                            <div class="">
                                                <input type="text" required class="form-control neha-text"
                                                    value="{{ old('first_name') }}" name="first_name"
                                                    oninput="this.value = this.value.replace(/[^a-z . A-Z.]/g, ' ').replace(/(\..*)\./g, '$1');">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span class="text-danger">*</span>
                                                Last Name</h6>
                                            <div class="">
                                                <input required type="text"
                                                    oninput="this.value = this.value.replace(/[^a-z . A-Z.]/g, ' ').replace(/(\..*)\./g, '$1');"
                                                    class="form-control neha-text" value="{{ old('last_name') }}"
                                                    name="last_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Class</h6>
                                            <div class="">
                                                <select required name="class" class="form-control neha-text">
                                                    <option value="">Select</option>
                                                    @foreach ($data as $value)
                                                        <option>{{ $value->class }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Section</h6>
                                            <div class="">
                                                <select required name="section" class="form-control neha-text">
                                                    <option value="">Select</option>
                                                    @foreach ($show as $value)
                                                        <option>{{ $value->section }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Gender</h6>
                                            <div class="">
                                                <select required name="gender" class="form-control neha-text">
                                                    <option value="">Select</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Date of Birth</h6>
                                            <div class="">
                                                <input required type="date" class="form-control neha-text"
                                                    value="{{ old('dob') }}" name="dob">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Category</h6>
                                            <div class="">
                                                <select name="category" class="form-control neha-text">
                                                    <option value="">Select</option>
                                                    <option>Student</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Religion</h6>
                                            <div class="">
                                                <input type="text" name="religion" value="{{ old('religion') }}"
                                                    class="form-control neha-text">
                                            </div>
                                        </div>

                                        {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Caste</h6>
                    <div class="">
                      <input type="text" name="caste" value="{{ old('caste') }}" class="form-control neha-text">
                    </div>
                  </div> --}}

                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Email</h6>
                                            <div class="">
                                                <input required type="text" name="email"
                                                    value="{{ old('email') }}" class="form-control neha-text">
                                            </div>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Password</h6>
                                            <div class="">
                                                <input required type="password" name="password"
                                                    class="form-control neha-text">
                                            </div>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Confirm Password</h6>
                                            <div class="">
                                                <input required type="password" name="conform_password"
                                                    class="form-control neha-text">
                                            </div>
                                            @if ($errors->has('conform_password'))
                                                <span class="text-danger">{{ $errors->first('conform_password') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Admission Date</h6>
                                            <div class="">
                                                <input required type="date" name="admission_date"
                                                    value="{{ old('admission_date') }}" class="form-control neha-text">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Aadhaar Number</h6>
                                            <div class="">
                                                <input type="text" pattern="['0-9']*" maxlength="12" minlength="12"
                                                    class="form-control neha-text" name="aadhaar" required>
                                            </div>
                                            <span class="text-danger">
                                                @error('aadhaar')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Address</h6>
                                            <div class="">
                                                <input type="text" value="{{ old('stu_address') }}"
                                                    class="form-control neha-text" name="stu_address">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"> Student Photo/png, jpg/jpeg </h6>
                                            <div class="">
                                                <input type="file" name="student_image" class="form-control-file"
                                                    id="addImage" accept="image/png, image/jpeg">
                                            </div>
                                        </div>

                                        {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Blood Group</h6>
                    <div class="">
                      <select name="blood_group" class="form-control neha-text">
                        <option value="">Select</option>
                        <option>A+</option>
                        <option>O+</option>
                        <option>B+</option>
                        <option>AB+</option>
                        <option>A-</option>
                        <option>O-</option>
                        <option>B-</option>
                        <option>AB-</option>
                      </select>
                    </div>
                  </div> --}}

                                        {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Height</h6>
                    <div class="">
                      <input type="text" value="{{old('height')}}"  maxlength="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control neha-text" name="height">
                    </div>
                  </div> --}}

                                        {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Weight</h6>
                    <div class="">
                      <input type="text"  value="{{old('weight')}}" maxlength="3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control neha-text" name="weight">
                    </div>
                  </div> --}}

                                        {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">As on Date</h6>
                    <div class="">
                      <input type="date" class="form-control neha-text" name="as_on_date">
                    </div>
                  </div> --}}

                                        {{-- <div class="col-lg-12 col-md-12 sol-sm-12">
                    <div class="text-right mt-3">
                      <a href="button" class="" data-toggle="modal" data-target="#addsiblingaddModal"><i
                          class="fa fa-plus"></i> Add Sibling</a>
                      <!-- Modal -->
                      <div class="modal fade" id="addsiblingaddModal" tabindex="-1" role="dialog"
                        aria-labelledby="addsiblingaddModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="leaverequestModalLabel">Sibling</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                  <div class="form-group1 text-left">
                                    <label for="Name">Class</label>
                                    <div class="">
                                      <select name="source" class="form-control neha-text" value=""="">
                                        <option value="Select">Select</option>
                                        <option value="Verified">Class-1</option>
                                        <option value="Unverified">Class-2</option>
                                        <option value="Unverified">Class-3</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                  <div class="form-group1 text-left">
                                    <label for="Name">Section</label>
                                    <div class="">
                                      <select name="source" class="form-control neha-text" value=""="">
                                        <option value="Select">Select</option>
                                        <option value="Verified">Section-A</option>
                                        <option value="Unverified">Section-B</option>
                                        <option value="Unverified">Section-C</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                  <div class="form-group1 text-left">
                                    <label for="Name">Student</label>
                                    <div class="">
                                      <select name="source" class="form-control neha-text" value=""="">
                                        <option value="Select">Select</option>
                                        <option value="Verified">A</option>
                                        <option value="Unverified">B</option>
                                        <option value="Unverified">C</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-info"><i class="fa fa-user"></i> Add</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}

                                        <hr>
                                    </div>

                                    <div class="row">
                                        <h5 class="mt-3" style="font-size: 17px;">Parent's Details</h5>
                                        <div class="col-lg-3 col-md-3 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"> Father's Name</h6>
                                            <div class="">
                                                <input type="text"
                                                    oninput="this.value = this.value.replace(/[^a-z . A-Z.]/g, ' ').replace(/(\..*)\./g, '$1');"
                                                    value="{{ old('father_name') }}" class="form-control neha-text"
                                                    name="father_name">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"> Mother's Name</h6>
                                            <div class="">
                                                <input type="text"
                                                    oninput="this.value = this.value.replace(/[^a-z . A-Z.]/g, ' ').replace(/(\..*)\./g, '$1');"
                                                    value="{{ old('mother_name') }}" class="form-control neha-text"
                                                    name="mother_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"><span
                                                    class="text-danger">*</span> Parent's Mobile No.</h6>
                                            <div class="">
                                                <input required type="text" minlength="10" maxlength="10"
                                                    pattern="['0-9']*" name="mobile_no" value="{{ old('mobile_no') }}"
                                                    class="form-control neha-text">
                                            </div>
                                        </div>

                                        {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;"> Father's Phone</h6>
                    <div class="">
                      <input type="text" minlength="10" value="{{old('father_mobile')}}" maxlength="10"  pattern="[0-9]*" class="form-control neha-text" name="father_mobile">
                    </div>
                  </div> --}}

                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;"> Father's Occupation</h6>
                                            <div class="">
                                                <input type="text" value="{{ old('father_occupation') }}"
                                                    class="form-control neha-text" name="father_occupation">
                                            </div>
                                        </div>

                                        {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Father's Photo/jpg,png,jpeg</h6>
                    <div class="">
                      <input type="file" name="father_photo" accept="image/png, image/jpeg, image/jpg" class="form-control-file" id="addImage">
                    </div>
                  </div> --}}

                                        {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;"> Mother's Phone</h6>
                    <div class="">
                      <input type="text" minlength="10" value="{{old('mother_phone')}}" maxlength="10" pattern="['0-9']*" class="form-control neha-text" name="mother_phone">
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Mother's Occupation</h6>
                    <div class="">
                      <input type="text" value="{{old('mother_occu')}}" class="form-control neha-text" name="mother_occu">
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Mother's Photo/png/jpg/jpeg</h6>
                    <div class="">
                      <input type="file"  name="mother_photo" accept="image/png, image/jpeg, image/jpg" class="form-control-file" id="addImage">
                    </div>
                  </div> --}}

                                        <div class="col-lg-12 col-md-12 sol-sm-12">
                                            <h5 class="mt-3" style="font-size: 17px;">Guardian's Details</h5>
                                            {{-- <div class="row">
                      <div class="col-md-4">
                        <div class="checkbox">
                          <input type="radio" value="Father" name="guardian">
                          <label for="op1">Father's</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="checkbox">
                          <input type="radio" value="Mother" name="guardian">
                          <label for="op2">Mother's</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="checkbox">
                          <input type="radio" value="Other" name="guardian">
                          <label for="op3">Other</label>
                        </div>
                      </div>
                    </div> --}}
                                        </div>

                                        <div class="col-lg-3 col-md-3 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Guardian's Name</h6>
                                            <div class="">
                                                <input type="text" value="{{ old('gur_name') }}"
                                                    class="form-control neha-text" name="gur_name">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Guardian's Relation</h6>
                                            <div class="">
                                                <input type="text" value="{{ old('gur_relation') }}"
                                                    class="form-control neha-text" name="gur_relation">
                                            </div>
                                        </div>

                                        {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Guardian's Email</h6>
                    <div class="">
                      <input type="email" value="{{old('gur_email')}}" class="form-control neha-text" name="gur_email">
                    </div>
                  </div> --}}

                                        {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Guardian's Photo/png,jpg/jpeg</h6>
                    <div class="">
                      <input type="file" accept="image/png, image/jpeg, image/jpg" name="gur_photo" class="form-control-file" id="addImage">
                    </div>
                  </div> --}}

                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Guardian's Phone</h6>
                                            <div class="">
                                                <input type="text" value="{{ old('gur_phone') }}" pattern="['0-9']*"
                                                    minlength="10" maxlength="10" class="form-control neha-text"
                                                    name="gur_phone">
                                            </div>
                                        </div>

                                        {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Guardian's Occupation</h6>
                    <div class="">
                      <input type="text" value="{{old('gur_occu')}}" class="form-control neha-text" name="gur_occu">
                    </div>
                  </div> --}}

                                        <div class="col-lg-3 col-md-6 sol-sm-12">
                                            <h6 class="p-2" style="font-size: 14px;">Guardian's Address</h6>
                                            <div class="">
                                                <input type="text" value="{{ old('gur_address') }}"
                                                    class="form-control neha-text" name="gur_address">
                                            </div>
                                        </div>

                                        <hr>
                                    </div>

                                    <div class="row">
                                        <div class="text-center p-3">
                                            <button type="submit" class="btn btn-info">Save</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
        </div>

    </main>
@endsection
