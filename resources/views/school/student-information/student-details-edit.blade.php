@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('SCHOOL.Home') }}">Home</a></li>
          <li class="breadcrumb-item active">Student Details Edit</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="dashboard " >
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="card info-card sales-card">
                <form action="{{ route('SCHOOL.Student.Admission.Edit',['id'=>$add->id]) }}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="row">
                  <div class="d-flex justify-content-between p-2">
                    <h5 class="mt-3" style="font-size: 17px;">Student Details Edit</h5>
                    {{-- <a href="{{ route('SCHOOL.student-admission-import') }}" class="btn btn-info">
                      <i class="fa fa-upload"></i> Import Student
                    </a> --}}
                  </div>
                  <hr>
                  <div class="col-lg-3 col-md-3 sol-sm-12">
                    <span class="text-danger">@error('admission_no') {{$message}}
                        
                    @enderror</span>
                    <h6 class="p-2" style="font-size: 14px;">Admission No.</h6>
                    <div class="">
                      <input type="number"  class="form-control neha-text" name="admission_no" value="{{ $add->admission_no }}" id="date1"required>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Roll No.</h6>
                    <div class="">
                      <input type="number" class="form-control neha-text" name="roll_no" value="{{ $add->roll_no }}" id="date1" required>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">First Name</h6>
                    <div class="">
                      <input type="text" oninput="this.value = this.value.replace(/[^a-z . A-Z.]/g, ' ').replace(/(\..*)\./g, '$1');" class="form-control neha-text" value="{{ $add->first_name }}" name="first_name"  required>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Last Name</h6>
                    <div class="">
                      {{-- <input type="text" pattern="['A-Z . a-z']*" class="form-control neha-text" value="{{ $add->last_name }}" name="last_name" id="date1" required> --}}
                      <input type="text" oninput="this.value = this.value.replace(/[^a-z . A-Z.]/g, ' ').replace(/(\..*)\./g, '$1');" class="form-control neha-text" value="{{ $add->last_name }}" name="last_name" id="date1" required>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="class" class="form-control neha-text" >
                        <option>{{ $add->class }}</option>
                        @foreach ($data as $value)<option>{{ $value->class }}</option>@endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="section" class="form-control neha-text" >
                        <option>{{ $add->section }}</option>
                        @foreach ($show as $value)
                        <option>{{ $value->section }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Date of Birth</h6>
                    <div class="">
                      <input type="date" class="form-control neha-text" value="{{ $add->dob }}" name="dob" id="date1" required>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Gender</h6>
                    <div class="">
                      <select name="gender" class="form-control neha-text">
                        <option>{{ $add->gender }}</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Email</h6>
                   
                    <div class="">
                      <input type="email" name="email" value="{{ $add->email }}" class="form-control neha-text" id="date1" required>
                      <input  type="hidden" name="oldemail" value="{{ $add->email }}" class="form-control neha-text" id="date1">
                    </div>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    {{-- <span>@error('email') {{$message}} @enderror</span> --}}
                  </div>

                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Password</h6>
                    <div class="">
                      <input type="text" name="password" minlength="6" maxlength="15" value="{{ $add->conform_password }}" class="form-control neha-text"  required>
                    </div>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                  </div>

                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Category</h6>
                    <div class="">
                      <select name="category" class="form-control neha-text" >
                        <option>{{ $add->category }}</option>
                        <option>Student</option>
                        <option>Other</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Religion</h6>
                    <div class="">
                      <input type="text" name="religion" value="{{ $add->religion }}" class="form-control neha-text" id="date1">
                    </div>
                  </div>

                  {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Caste</h6>
                    <div class="">
                      <input type="text" name="caste" value="{{ $add->caste }}" class="form-control neha-text" id="date1">
                    </div>
                  </div> --}}

            
         
             
                  {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Conform Password</h6>
                    <div class="">
                      <input type="text" name="conform_password" value="{{ $add->conform_password }}" class="form-control neha-text" id="date1" required>
                    </div>
                    @if ($errors->has('conform_password'))
                        <span class="text-danger">{{ $errors->first('conform_password') }}</span>
                        @endif
                  </div> --}}
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Admission Date</h6>
                    <div class="">
                      <input type="date" name="admission_date" value="{{ $add->admission_date }}" class="form-control neha-text" id="date1">
                    </div>
                  </div>
               

                  {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Blood Group</h6>
                    <div class="">
                      <select name="blood_group" class="form-control neha-text">
                        <option value="">{{ $add->blood_group }}</option>
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

                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Address</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" maxlength="150" name="stu_address" value="{{ $add->stu_address }}" id="date1">
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Aadhaar Number</h6>
                    <div class="">
                      <input type="text" pattern="['0-9']*" maxlength="12" minlength="12" class="form-control neha-text"  name="aadhaar" value="{{ $add->aadhaar }}">
                    </div>
                    <span class="text-danger">@error('aadhaar') {{$message}}
                        
                    @enderror</span>
                  </div>


                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Student Photo</h6>
                    <div class="">
                      <input type="file" name="student_image" accept="image/png, image/jpeg, image/jpg" class="form-control-file" id="addImage" >
                     @if ($add->student_image)
                     <img src="{{ url('public/uploads/students/'.$add->student_image) }}" height="80" width="100" alt="">
                     @else
                         
                     @endif
                 
                    </div>
                  </div>


                  {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Height</h6>
                    <div class="">
                      <input type="text" minlength="1" maxlength="3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control neha-text" name="height" value="{{ $add->height }}" id="date1">
                    </div>
                  </div> --}}

                  {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Weight</h6>
                    <div class="">
                      <input type="text" minlength="1" maxlength="3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control neha-text" name="weight" value="{{ $add->weight }}" id="date1">
                    </div>
                  </div> --}}
                  {{-- <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">As on Date</h6>
                    <div class="">
                      <input type="date" class="form-control neha-text" name="as_on_date" value="{{ $add->as_on_date }}" id="date1">
                    </div>
                  </div> --}}
                  <hr>
                </div>




                <div class="row">
                
                  <h5 class="mt-3" style="font-size: 17px;">Parent's Details</h5>
                  <div class="col-lg-3 col-md-3 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Father's Name</h6>
                    <div class="">
                      <input type="text" oninput="this.value = this.value.replace(/[^a-z . A-Z.]/g, ' ').replace(/(\..*)\./g, '$1');" class="form-control neha-text" name="father_name" value="{{ $add->father_name }}" >
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Mother's Name</h6>
                    <div class="">
                      <input type="text" oninput="this.value = this.value.replace(/[^a-z . A-Z.]/g, ' ').replace(/(\..*)\./g, '$1');" class="form-control neha-text"  name="mother_name" value="{{ $add->mother_name }}">
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Parent's Mobile No.</h6>
                    <div class="">
                      <input type="text" minlength="10" maxlength="10" pattern="[0-9]*" name="mobile_no" value="{{ $add->mobile_no }}" class="form-control neha-text"  required>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Father's Occupation</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" maxlength="25" name="father_occupation" value="{{ $add->father_occupation }}">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <h5 class="mt-3" style="font-size: 17px;">Guardian's Details</h5>
                  <div class="col-lg-3 col-md-3 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Guardian's Name</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text"  name="gur_name" value="{{ $add->gur_name }}">
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Guardian's Relation</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text"  name="gur_relation" value="{{ $add->gur_relation }}">
                    </div>
                  </div>
                
          
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Guardian's Phone</h6>
                    <div class="">
                      <input type="text" minlength="10" maxlength="10" pattern="['0-9']*" class="form-control neha-text" id="date1" name="gur_phone" value="{{ $add->gur_phone }}">
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6 sol-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Guardian's Address</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" maxlength="150" name="gur_address" value="{{ $add->gur_address }}">
                    </div>
                  </div>
         
          
                </div>



         


















                {{-- <div class="row">
                  <h5 class="mt-3" style="font-size: 17px;">Miscellaneous Details</h5>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Bank Account Number</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="date1" name="bank_no" value="{{ $add->bank_no }}">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Bank Name</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" id="date1" name="bank_name" value="{{ $add->bank_name }}">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">IFSC Code</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" id="date1" name="ifsc" value="{{ $add->ifsc }}">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">National Identification Number</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" id="date1" name="nin_no" value="{{ $add->nin_no }}">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Local Identification Number</h6>
                    <div class="">
                      <input type="text" class="form-control neha-text" id="date1" name="lin_no" value="{{ $add->lin_no }}">
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">RTE</h6>
                    <div class="checkbox">
                      <input type="radio" value="Yes" name="rte" {{ ($add->rte=="Yes")? "checked" : "" }}>
                      <label for="op1">Yes</label>
                    
                      <input type="radio" value="No" name="rte" {{ ($add->rte=="No")? "checked" : "" }}>
                      <label for="op1">No</label>
                    </div>
                  </div>                 
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Previous School Details</h6>
                    <div class="">
                      <textarea class="form-control neha-text" id="date1" name="pre_school">{{ $add->pre_school }}</textarea>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Note</h6>
                    <div class="">
                      <textarea class="form-control neha-text" id="date1" name="notes" >{{ $add->notes }}</textarea>
                    </div>
                  </div>
                  <hr>
                </div> --}}
                <div class="row">
                  <div class="text-center p-3">
                    <button type="submit" class="btn btn-info">Save</button>
                  </div>
                </div>
              </div>
            </form>


            </div>
      </section>
    </div>
 

  </main><!-- End #main -->
@endsection