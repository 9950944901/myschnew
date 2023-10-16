
<?php $__env->startSection('content'); ?>


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
    background-image: url("<?php echo e(url('/')); ?>/public/school/assets/img/schoollogo.jpg");
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

              <?php
              
              $half = 0;
              $half = $half+ $data->half_hindi+$data->half_math+$data->half_english+$data->half_science+$data->half_social+$data->half_sanskrit;

              $anul = 0;
              $anul = $anul+$data->anul_hindi+$data->anul_math+$data->anul_english+$data->anul_science+$data->anul_social+$data->anul_sanskrit;

             $strang = 0;
            $strang = $strang+$data->st_hindi+$data->st_math+$data->st_english+$data->st_science+$data->st_social+$data->st_sanskrit;

            
          ?>

              <div class="progress-card">
                <div class="row">
                  <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <div class="pl-2">
                        <?php if($detals->logoimg ?? ''): ?>
                        <img src="<?php echo e(url('/public/uploads/logoimg/'.$detals->logoimg)); ?>" height="50" width="60">
                            
                        <?php else: ?>
                            
                        <?php endif; ?>
                      </div>
                      <div class="">

                        
                        <h5 class="text-center mt-3"><b><?php echo e($detals->sname ?? ''); ?></b></h5>
                        <p><?php echo e($detals->saddress ?? ''); ?></p>
                      </div>
                      <div class="pr-2">
                        <?php if($data->student_image): ?>
                        <img src="<?php echo e(url('public/uploads/students/'.$data->student_image)); ?>" height="60" width="100">
                        <?php else: ?>
                            
                        <?php endif; ?>
                       
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
                      <p class="mb-0" style="font-size: 13px;">Mob:+91 <?php echo e($detals->smobile ?? ''); ?></p>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="text-center">
                      <p class="mb-0" style="font-size: 13px;">PROGRESS CARD - <?php echo e($detals->ssection ?? ''); ?> </p>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="pr-2">
                      <p class="mb-0" style="font-size: 13px;">Email: <?php echo e($detals->semail ?? ''); ?></p>
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
                            <?php echo e($data->admission_no ?? ''); ?>

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
                            <?php echo e($data->first_name ?? ''); ?> <?php echo e($data->last_name ?? ''); ?>

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
                            <?php echo e($data->father_name ?? ''); ?>

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
                            <?php echo e($data->mother_name ?? ''); ?>

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
                            <?php echo e($data->roll_no ?? ''); ?>

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
                           <?php echo e($data->dob ?? ''); ?>

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
                            +91-<?php echo e($data->mobile_no ?? ''); ?>

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
                            <?php echo e($data->email ?? ''); ?>

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
                            <?php echo e($data->class ?? ''); ?> / <?php echo e($data->section ?? ''); ?>

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
                          
                          
                          <th rowspan="2"><strong>Total Marks</strong></th>
                          
                          <th rowspan="2"><strong></strong></th>
                        </tr>
                        <tr>
                          
                        </tr>

                        <tr>
                          <td>Hindi</td>
                          <td><?php echo e($data->half_hindi); ?></td>
                          <td><?php echo e($data->anul_hindi); ?></td>
                          <td><?php echo e($data->half_hindi + $data->anul_hindi); ?></td>
                          
                          

                          

                          <?php
                              $result = number_format(($half+$anul)*100/600,2);
                          ?>

                          <td rowspan="2"><b>Result:
                              <?php if($result >= 33 && $result <= 44): ?> 
                              3rd division
                              <?php elseif($result >= 45 && $result <= 59): ?> 
                              2nd division
                              <?php elseif($result >= 60 && $result <= 74): ?> 
                              1st division
                              <?php elseif($result >= 75 && $result <= 100): ?> 
                              Distinction                              
                              <?php else: ?>
                              <span class="text-danger">Fail</span>
                              <?php endif; ?> 
                            
                          </b></td>
                        </tr>
                        <tr>
                          <td>Maths</td>
                          <td><?php echo e($data->half_math); ?></td>
                          <td><?php echo e($data->anul_math); ?></td>
                          <td><?php echo e($data->half_math + $data->anul_math); ?></td>
                          
                          
                        </tr>

                        <tr>
                          <td>English </td>
                          <td><?php echo e($data->half_english); ?></td>
                          <td><?php echo e($data->anul_english); ?></td>
                          <td><?php echo e($data->half_english + $data->anul_english); ?></td>
                          
                          
                          <td rowspan="3"><b>Percentage:</b> <br>

                            <?php echo e(Number_format(($half+$anul)*100/600,2)); ?>%
                          </td>
                        </tr>

                        <tr>
                          <td>Science </td>
                          <td><?php echo e($data->half_science); ?></td>
                          <td><?php echo e($data->anul_science); ?></td>
                          <td><?php echo e($data->half_science + $data->anul_science); ?></td>
                          
                          
                        </tr>

                        <tr>
                          <td>Social Science </td>
                          <td><?php echo e($data->half_social); ?></td>
                          <td><?php echo e($data->anul_social ?? ''); ?></td>
                          <td><?php echo e($data->half_social + $data->anul_social); ?></td>
                          
                          
                       
                        </tr>

                        

                        

                        

                        <tr>
                          <td>Sanskrit </td>
                          <td><?php echo e($data->half_sanskrit); ?></td>
                          <td><?php echo e($data->anul_sanskrit); ?></td>
                          <td><?php echo e($data->half_sanskrit+$data->anul_sanskrit); ?></td>
                          
                          
                          <td rowspan="3"><b>Performance</b>
                          </td>
                        </tr>

                        
                 

                        <tr>
                          <td><b>Total</b></td>
                          <td><b><?php echo e($half); ?></b></td>
                          <td><b><?php echo e($anul); ?></b></td>
                          <td><b><?php echo e($half+$anul); ?></b></td>
                          
                          
                        </tr>

                      </tbody>
                    </table>
                  </div>

                  <div class="col-md-12 mt-3">
                    <div class="p-2" style="background: #c6cdda;">
                      <h6 class="text-center mb-0"><b>ATTENDANCE REPORT <?php echo e($detals->ssection ?? ''); ?></b></h6>
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
                          
                        </tr>

                        <tr>
                          <td>Pres</td>
                          <td><?php echo e($march); ?></td>
                          <td><?php echo e($april); ?></td>
                          <td><?php echo e($may); ?></td>
                          <td><?php echo e($jun); ?></td>
                          <td><?php echo e($july); ?></td>
                          <td><?php echo e($augst); ?></td>
                          <td><?php echo e($sept); ?></td>
                          <td><?php echo e($oct); ?></td>
                          <td><?php echo e($nov); ?></td>
                          <td><?php echo e($dec); ?></td>
                          <td><?php echo e($januy); ?></td>
                          <td><?php echo e($febry); ?></td>
                 
                          
                          
                        </tr>

                        

                      </tbody>
                    </table>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="" style="border: 1px solid lightgray; width: 550px; padding: 25px;">
                        <p class="mb-0" style="font-size: 14px;">Class Teacher: <?php echo e($data->teacher_name ?? ''); ?></p>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/school/reportcard/viewreport.blade.php ENDPATH**/ ?>