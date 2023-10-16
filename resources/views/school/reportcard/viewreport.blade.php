@extends('layouts.app')
@section('content')


<style>
  table {
    border-collapse: collapse;
    width: 100%;
  }

  td,
  th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 6px 13px;
    font-size: 13px;
  }

  tr th {
    border: 1px solid #dddddd;
    font-size: 13px;
  }

  tr:hover {
    /* background-color: #dddddd; */
    /* cursor: pointer; */
  }

  .content td,
  .content th {
    border-top: 1px solid transparent;
    padding: 2px 10px 2px 15px;
  }
</style>
<style>
  .progress-card {
    background-image: url("{{url('/')}}/public/school/assets/img/schoollogo.jpg");
    background-repeat: no-repeat;}
</style>


<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
     <button class="btn btn-primary btn-sm"  onclick="createPDF()"> PDF </button>
  </div><!-- End Page Title -->

  <section class="section dashboard" id="element-to-print">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
          <div class="card-body p-3">
            <div class="" style="border: 1px solid lightgray;">
              <!-- <h5 class="text-center mt-3"><b>Demo Public School</b></h5> -->

              @php
              
              $half = 0;
              $half = $half+ $data->half_hindi+$data->half_math+$data->half_english+$data->half_science+$data->half_social+$data->half_sanskrit;

              $anul = 0;
              $anul = $anul+$data->anul_hindi+$data->anul_math+$data->anul_english+$data->anul_science+$data->anul_social+$data->anul_sanskrit;

             $strang = 0;
            $strang = $strang+$data->st_hindi+$data->st_math+$data->st_english+$data->st_science+$data->st_social+$data->st_sanskrit;

            
          @endphp

              <div class="progress-card">
                <div class="row">
                  <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <div class="pl-2">
                        @if ($detals->logoimg ?? '')
                        <img src="{{url('/public/uploads/logoimg/'.$detals->logoimg)}}" height="50" width="60">
                            
                        @else
                            
                        @endif
                      </div>
                      <div class="">

                        {{-- {{dd($detals->sname);}} --}}
                        <h5 class="text-center mt-3"><b>{{$detals->sname ?? ''}}</b></h5>
                        <p>{{$detals->saddress ?? ''}}</p>
                      </div>
                      <div class="pr-2">
                        @if ($data->student_image)
                        <img src="{{url('public/uploads/students/'.$data->student_image)}}" height="60" width="100">
                        @else
                            
                        @endif
                       
                      </div>
                    </div>
                  </div>

                  <!-- <div class="col-md-12">
                    <div class="d-flex justify-content-between">
                      <div class="" style="font-size: 14px;">
                        <span class="title-color">Mob: 9012345678</span>
                      </div>
                      <div class="">
                        <span class="title-color">PROGRESS CARD - 2023 - 2024 </span>
                      </div>
                      <div class="">
                        <span class="title-color">Email: info@brixcodetechnologies.com </span>
                      </div>
                    </div>
                  </div> -->

                  <div class="col-md-3">
                    <div class="pl-2">
                      <p class="mb-0" style="font-size: 13px;">Mob:+91 {{$detals->smobile ?? ''}}</p>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="text-center">
                      <p class="mb-0" style="font-size: 13px;">PROGRESS CARD - {{$detals->ssection ?? ''}} </p>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="pr-2">
                      <p class="mb-0" style="font-size: 13px;">Email: {{$detals->semail ?? ''}}</p>
                    </div>
                  </div>

                  <div class="col-md-12 mt-1">
                    <div class="p-2" style="background: #c6cdda;">
                      <h6 class="text-center mb-0"><b>STUDENT'S PROFILE</b></h6>
                    </div>
                  </div>

                  <div class="col-md-6" style="padding-right: 0px;">
                    <div class="" style="border: 1px solid lightgray; padding: 10px;">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            <span class="title-color"><b>ADMISSION NO. : </b>
                            </span>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            {{$data->admission_no ?? ''}}
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            <span class="title-color"><b>STUDENTS'S NAME :</b>
                            </span>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            {{$data->first_name ?? ''}} {{$data->last_name ?? ''}}
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            <span class="title-color"><b>FATHER'S NAME :</b>
                            </span>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            {{$data->father_name ?? ''}}
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            <span class="title-color"><b>MOTHER'S NAME :</b>
                            </span>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            {{$data->mother_name ?? ''}}
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            <span class="title-color"><b>ADDRESS :</b>
                            </span>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            Jaipur
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="col-md-6" style="padding-left: 0px;">
                    <div class="" style="border: 1px solid lightgray; padding: 10px;">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            <span class="title-color"><b>Roll NO. :</b>
                            </span>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            {{$data->roll_no ?? ''}}
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            <span class="title-color"><b>D.O.B. :</b>
                            </span>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                           {{$data->dob ?? ''}}
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            <span class="title-color"><b>MOBILE NO. :</b>
                            </span>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            +91-{{$data->mobile_no ?? ''}}
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            <span class="title-color"><b>Email :</b>
                            </span>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            {{$data->email ?? ''}}
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            <span class="title-color"><b>CLASS : </b>
                            </span>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="" style="font-size: 14px; line-height: 30px;">
                            {{$data->class ?? ''}} / {{$data->section ?? ''}}
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 mt-3">
                    <div class="p-2" style="background: #c6cdda;">
                      <h6 class="text-center mb-0"><b>ACADEMIC PERFORMANCE - SCHOLASTIC AREA</b></h6>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <table>
                      <tbody>
                        <tr>
                          <th rowspan="2"><strong>Subject</strong></th>
                          <th colspan="1"><strong>Half Yearly Examination</strong></th>
                          <th colspan="1"><strong>Annual Examination</strong></th>
                          {{-- <th rowspan="2"><strong>Obtained Marks</strong></th> --}}
                          {{-- <th rowspan="2"><strong>Strang</strong></th> --}}
                          <th rowspan="2"><strong>Total Marks</strong></th>
                          {{-- <th rowspan="2"><strong>Grade</strong></th> --}}
                          <th rowspan="2"><strong></strong></th>
                        </tr>
                        <tr>
                          {{-- <th>20</th>
                          <th>80</th> --}}
                        </tr>

                        <tr>
                          <td>Hindi</td>
                          <td>{{$data->half_hindi}}</td>
                          <td>{{$data->anul_hindi}}</td>
                          <td>{{$data->half_hindi + $data->anul_hindi}}</td>
                          {{-- <td>{{$data->st_hindi}}</td> --}}
                          {{-- <td>{{$data->half_hindi + $data->anul_hindi}}</td> --}}

                          {{-- {{ Number_format(($half+$anul)*100/600,2)}}% --}}

                          @php
                              $result = number_format(($half+$anul)*100/600,2);
                          @endphp

                          <td rowspan="2"><b>Result:
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
                            
                          </b></td>
                        </tr>
                        <tr>
                          <td>Maths</td>
                          <td>{{$data->half_math}}</td>
                          <td>{{$data->anul_math}}</td>
                          <td>{{$data->half_math + $data->anul_math}}</td>
                          {{-- <td>{{$data->st_math}}</td> --}}
                          {{-- <td>{{$data->half_math + $data->anul_math}}</td> --}}
                        </tr>

                        <tr>
                          <td>English </td>
                          <td>{{$data->half_english}}</td>
                          <td>{{$data->anul_english}}</td>
                          <td>{{$data->half_english + $data->anul_english}}</td>
                          {{-- <td>{{$data->st_english}}</td> --}}
                          {{-- <td>{{$data->half_english + $data->anul_english}}</td> --}}
                          <td rowspan="3"><b>Percentage:</b> <br>

                            {{ Number_format(($half+$anul)*100/600,2)}}%
                          </td>
                        </tr>

                        <tr>
                          <td>Science </td>
                          <td>{{$data->half_science}}</td>
                          <td>{{$data->anul_science}}</td>
                          <td>{{$data->half_science + $data->anul_science}}</td>
                          {{-- <td>{{$data->st_science}}</td> --}}
                          {{-- <td>{{$data->half_science+$data->anul_science}}</td> --}}
                        </tr>

                        <tr>
                          <td>Social Science </td>
                          <td>{{$data->half_social}}</td>
                          <td>{{$data->anul_social ?? ''}}</td>
                          <td>{{$data->half_social + $data->anul_social}}</td>
                          {{-- <td>{{$data->st_social}}</td> --}}
                          {{-- <td>{{$data->half_social + $data->anul_social}}</td> --}}
                       
                        </tr>

                        {{-- <tr>
                          <td>GK</td>
                          <td>45</td>
                          <td>40</td>
                          <td>85</td>
                          <td>100</td>
                          <td>-</td>
                        </tr> --}}

                        {{-- <tr>
                          <td>Drawing</td>
                          <td>40</td>
                          <td>45</td>
                          <td>85</td>
                          <td>100</td>
                          <td>-</td>
                        </tr> --}}

                        {{-- <tr>
                          <td>Environment </td>
                          <td>40</td>
                          <td>35</td>
                          <td>75</td>
                          <td>100</td>
                          <td>-</td>
                        </tr> --}}

                        <tr>
                          <td>Sanskrit </td>
                          <td>{{$data->half_sanskrit}}</td>
                          <td>{{$data->anul_sanskrit}}</td>
                          <td>{{$data->half_sanskrit+$data->anul_sanskrit}}</td>
                          {{-- <td>{{$data->st_sanskrit}}</td> --}}
                          {{-- <td>{{$data->half_sanskrit+$data->anul_sanskrit}}</td> --}}
                          <td rowspan="3"><b>Performance</b>
                          </td>
                        </tr>

                        {{-- <tr>
                          <td>Physical Education </td>
                          <td>30</td>
                          <td>48</td>
                          <td>78</td>
                          <td>100</td>
                          <td>-</td>
                        </tr> --}}
                 

                        <tr>
                          <td><b>Total</b></td>
                          <td><b>{{$half}}</b></td>
                          <td><b>{{$anul}}</b></td>
                          <td><b>{{$half+$anul}}</b></td>
                          {{-- <td><b>{{$strang}}</b></td> --}}
                          {{-- <td><b>{{$half+$anul}}</b></td> --}}
                        </tr>

                      </tbody>
                    </table>
                  </div>

                  <div class="col-md-12 mt-3">
                    <div class="p-2" style="background: #c6cdda;">
                      <h6 class="text-center mb-0"><b>ATTENDANCE REPORT {{$detals->ssection ?? ''}}</b></h6>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <table>
                      <thead>
                        <tr>
                          <!-- <th>S No.</th>
                          <th>HSN No.</th>
                          <th>Tax Category</th>
                          <th>Items</th>
                          <th>Quantity</th>
                          <th>Pack Type</th>
                          <th>Rate (Rs.)</th>
                          <th>Value (Rs.)</th> -->
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>T. Day</td>
                          <td>March</td>
                          <td>April</td>
                          <td>May</td>
                          <td>Jun</td>
                          <td>July</td>
                          <td>Aug</td>
                          <td>Sep</td>
                          <td>Oct</td>
                          <td>Nov</td>
                          <td>Dec</td>
                          <td>Junuary</td>
                          <td>February</td>
                          {{-- <td>Tot. Days</td>
                          <td>Att. %</td> --}}
                        </tr>

                        <tr>
                          <td>Pres</td>
                          <td>{{$march}}</td>
                          <td>{{$april}}</td>
                          <td>{{$may}}</td>
                          <td>{{$jun}}</td>
                          <td>{{$july}}</td>
                          <td>{{$augst}}</td>
                          <td>{{$sept}}</td>
                          <td>{{$oct}}</td>
                          <td>{{$nov}}</td>
                          <td>{{$dec}}</td>
                          <td>{{$januy}}</td>
                          <td>{{$febry}}</td>
                 
                          {{-- <td>245</td> --}}
                          {{-- <td rowspan="2">77.5%</td> --}}
                        </tr>

                        {{-- <tr>
                          <td>Pres. Day</td>
                          <td>15</td>
                          <td>20</td>
                          <td>28</td>
                          <td>25</td>
                          <td>15</td>
                          <td>28</td>
                          <td>25</td>
                          <td>16</td>
                          <td>18</td>
                          <td>190</td>
                        </tr> --}}

                      </tbody>
                    </table>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="" style="border: 1px solid lightgray; width: 550px; padding: 25px;">
                        <p class="mb-0" style="font-size: 14px;">Class Teacher: {{$data->teacher_name ?? ''}}</p>
                      </div>
                      <div class=""
                        style="border: 1px solid lightgray; width: 550px; padding: 25px; text-align: right;">
                        <p class="mb-0" style="font-size: 14px;"><b>Prinicipal</b></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- End Left side columns -->

      



          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdn.bootcss.com/html2pdf.js/0.9.1/html2pdf.bundle.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.min.js"></script>
         
    
          <script>
               function createPDF() {
                  var element = document.getElementById('element-to-print');
                  html2pdf(element, {
                      margin:1,
                      padding:0,
                      filename: 'myfile.pdf',
                      image: { type: 'jpeg', quality: 1 },
                      html2canvas: { scale: 2,  logging: true },
                      jsPDF: { unit: 'in', format: 'A2', orientation: 'P' },
                      class: createPDF
                  });
              };
              // function exportHTML(){
              //     var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
              //             "xmlns:w='urn:schemas-microsoft-com:office:word' "+
              //             "xmlns='http://www.w3.org/TR/REC-html40'>"+
              //             "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
              //     var footer = "</body></html>";
              //     var sourceHTML = header+document.getElementById("element-to-print").innerHTML+footer;
                  
              //     var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
              //     var fileDownload = document.createElement("a");
              //     document.body.appendChild(fileDownload);
              //     fileDownload.href = source;
              //     fileDownload.download = 'document.doc';
              //     fileDownload.click();
              //     document.body.removeChild(fileDownload);
              // }
              
          </script>

    </div>
  </section>

</main><!-- End #main -->

@endsection