
<?php $__env->startSection('content'); ?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('Teacher.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Student Information</li>
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
                    <a class="nav-link" onclick="filterSelection('student')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Student Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('guardian')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Guardian Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('history')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Student History</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('login')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Student Login Credential</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " onclick="filterSelection('subject')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Class Subject Report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('admission')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Admission Enquiry Report</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" onclick="filterSelection('profiledata')" style="color: #000;"><i
                        class="fa fa-file-text-o"></i> Student Profile</a>
                  </li>
                  
                  
                  
                </ul>
              </div>
            </div>


            <div class="col-md-12">
              <div class="filterDiv all"></div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv student p-4">
              

                <div class=" mb-3">
                  <h5 class="" style="font-size: 17px;">Student Report</h5>
                </div>
              <div style="overflow-x:auto;">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Admission No.</th>
                      <th>Name</th>
                      <th>Class</th>
                      <th>Section</th>
                      <th>Father Name</th>
                      <th>Date of Birth</th>
                      <th>Gender</th>
                      <th>Category</th>
                      <th>Mobile No.</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                  
                    <tr id="task-1" class="task-list-row test-font text-capitalize" data-task-id="1" data-user="Platinum">
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($value->admission_no); ?></td>
                      <td><?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?></td>
                      <td><?php echo e($value->class); ?></td>
                      <td><?php echo e($value->section); ?></td>
                      <td><?php echo e($value->father_name); ?></td>
                      <td><?php echo e($value->dob); ?></td>
                      <td><?php echo e($value->gender); ?></td>
                      <td><?php echo e($value->category); ?></td>
                      <td>+91-<?php echo e($value->mobile_no); ?></td>
                      <td>
                        <div class="d-flex">
                          <a href="<?php echo e(route('Teacher.student-details-show45',['id'=>$value->id])); ?>" class="btn btn-light ml-1"><i class="fa fa-bars"></i></a>
                          
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
             </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv guardian p-4">
                
                
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Guardian Report</h5>
                </div>
                <div style="overflow-x:auto;">
                <table id="example9" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Class (Section)</th>
                      <th>Admission No.</th>
                      <th>Student Name</th>
                      <th>Mobile Number</th>
                      <th>Guardian Name</th>
                      <th>Guardian Relation</th>
                      <th>Guardian Phone</th>
                      <th>Father Name</th>
                      <th>Father Phone</th>
                      <th>Mother Name</th>
                      <th>Mother Phone</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="task-1" class="task-list-row test-font text-capitalize" data-task-id="1" data-user="Platinum">
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($value->class); ?> (<?php echo e($value->section); ?>)</td>
                      <td><?php echo e($value->admission_no); ?></td>
                      <td><?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?></td>
                      <td>+91-<?php echo e($value->mobile_no); ?></td>
                      <td><?php echo e($value->gur_name); ?></td>
                      <td><?php echo e($value->gur_relation); ?></td>
                      <td>+91-<?php echo e($value->gur_phone); ?></td>
                      <td class=""><?php echo e($value->father_name); ?></td>
                      <td>+91-<?php echo e($value->father_mobile); ?></td>
                      <td><?php echo e($value->mother_name); ?></td>
                      <td>+91-<?php echo e($value->mother_phone); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                </table>
              </div>
             </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv history p-4">
                
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Student History</h5>
                </div>
                <div style="overflow-x:auto;">
                <table id="example10" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Admission No.</th>
                      <th>Student Name</th>
                      <th>Admission Date</th>
                      <th>Class (Start-End)</th>
                      <th>Years</th>
                      <th>Mobile Number</th>
                      <th>Guardian Name</th>
                      <th>Guardian Phone</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="task-1" class="task-list-row test-font text-capitalize" data-task-id="1" data-user="Platinum">
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($value->admission_no); ?></td>
                      <td><?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?></td>
                      <td><?php echo e($value->admission_date); ?></td>
                      <td><?php echo e($value->class); ?></td>
                      <td>
                      <?php
                        $data = date('Y');
                        // dd($data);
                        $time = $data -date('Y', strtotime($value->created_at));
                        // dd($time);
                      ?>
											<?php echo e($time); ?>

                        
                      </td>
                      <td><?php echo e($value->mobile_no); ?></td>
                      <td><?php echo e($value->gur_name); ?></td>
                      <td><?php echo e($value->gur_phone); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv login p-4">
                
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Login Credential Report</h5>
                </div>
                <div style="overflow-x:auto;">
                <table id="example11" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Admission No.</th>
                      <th>Class</th>
                      <th>Section</th>
                      <th>DOB</th>
                      <th>Student Name</th>
                      <th>E-mail</th>
                      <th>Password</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                    <?php $__currentLoopData = $data_show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($val->admission_no); ?></td>
                      <td><?php echo e($val->class); ?></td>
                      <td><?php echo e($val->section); ?></td>
                      <td><?php echo e(date('d-M-Y', strtotime($value->dob))); ?></td>
                      <td class="text-capitalize"><?php echo e($val->first_name); ?> <?php echo e($val->last_name); ?></td>
                      <td><?php echo e($val->email); ?></td>
                      <td><?php echo e($val->conform_password); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                </table>
              </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv subject p-4">
                
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Class-Subject Report</h5>
                </div>
                <div style="overflow-x:auto;">
                <table id="example18" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Class</th>
                      <th>Section</th>
                      <th>Subject</th>
                      <th>Subject Group</th>
                      <th>Time</th>
                      <th>Room Number</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $__currentLoopData = $data_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($info->class); ?></td>
                      <td><?php echo e($info->section); ?></td>
                      <td><?php echo e($info->subject); ?></td>
                      <td><?php echo e($info->subject_group); ?></td>
                      <td><?php echo e(date('h:i A', strtotime($info->start_time ))); ?> - <?php echo e(date('h:i A', strtotime($info->end_time ))); ?></td>
                      <td><?php echo e($info->room_no); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                </table>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv admission p-4">
                
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Admission Enquiry Report</h5>
                </div>
                <div style="overflow-x:auto;">
                <table id="example12" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Contact No.</th>
                      <th>Class</th>
                      <th>Source</th>
                      <th>Reference</th>
                      <th>Date</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $__currentLoopData = $data_enqiry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enqiry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($enqiry->name); ?></td>
                      <td><?php echo e($enqiry->email); ?></td>
                      <td><?php echo e($enqiry->phone); ?></td>
                      <td><?php echo e($enqiry->class); ?></td>
                      <td><?php echo e($enqiry->source); ?></td>
                      <td><?php echo e($enqiry->reference); ?></td>
                      <td><?php echo e(date('d-M-Y', strtotime($enqiry->date ))); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                </table>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv sibling p-4">
                <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
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
                      <select name="source" class="form-control" value="" required="">
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
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Sibling Report</h5>
                </div>
                
                <table id="example13" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Father Name</th>
                      <th>Mother Name</th>
                      <th>Guardian Name</th>
                      <th>Guardian phone</th>
                      <th>Student Name (Sibling)</th>
                      <th>Class</th>
                      <th>Admission Date</th>
                      <th>Gender</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>RK Mehta</td>
                      <td>Ruchi</td>
                      <td>-</td>
                      <td>-</td>
                      <td>Jacky</td>
                      <td>Class-1</td>
                      <td>12-12-2020</td>
                      <td>Male</td>
                    </tr>

                  </tbody>
                </table>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv profiledata p-4">
                
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Student Profile</h5>
                </div>
                <div style="overflow-x:auto;">
                <table id="example14" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Admission No.</th>
                      <th>Roll No.</th>
                      <th>Class </th>
                      <th>Section</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Gender</th>
                      <th>Date of Birth</th>
                      <th>Category</th>
                      <th>Religion</th>
                      <th>Caste</th>
                      <th>Mobile Number</th>
                      <th>Email</th>
                      <th>Admission Date</th>
                      <th>Blood Group</th>
                      <th>Student House</th>
                      <th>Height</th>
                      <th>Weight</th>
                      <th>As on Date</th>
                      <th>Father Name</th>
                      <th>Father Phone</th>
                      <th>Father Occupation</th>
                      <th>Mother Name</th>
                      <th>Mother Phone</th>
                      <th>Mother Occupation</th>
                      <th>If Guardian Is</th>
                      <th>Guardian Name</th>
                      <th>Guardian Relation</th>
                      <th>Guardian Phone</th>
                      <th>Guardian Occupation</th>
                      <th>Guardian Email</th>
                      <th>Guardian Address</th>
                      <th>Permanent Address</th>
                      <th>Bank Account Number</th>
                      <th>Bank Name</th>
                      <th>IFSC Code</th>
                      <th>National Identification Number</th>
                      <th>Local Identification Number</th>
                      <th>RTE</th>
                      <th>Previous School Details</th>
                      <th>Note</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($value->admission_no); ?></td>
                      <td><?php echo e($value->roll_no); ?></td>
                      <td><?php echo e($value->class); ?></td>
                      <td><?php echo e($value->section); ?></td>
                      <td><?php echo e($value->first_name); ?></td>
                      <td><?php echo e($value->last_name); ?></td>
                      <td><?php echo e($value->gender); ?></td>
                      <td><?php echo e(date('d-M-Y', strtotime($value->dob ))); ?></td>
                      <td><?php echo e($value->category); ?></td>
                      <td><?php echo e($value->religion); ?></td>
                      <td><?php echo e($value->caste); ?></td>
                      <td><?php echo e($value->mobile_no); ?></td>
                      <td><?php echo e($value->email); ?></td>
                      <td><?php echo e(date('d-M-Y', strtotime($value->admission_date ))); ?></td>
                      <td><?php echo e($value->blood_group); ?></td>
                      <td><?php echo e($value->stu_house); ?></td>
                      <td><?php echo e($value->height); ?></td>
                      <td><?php echo e($value->weight); ?></td>
                      <td>
                        <?php if($value->as_on_date): ?>
                        <?php echo e(date('d-M-Y', strtotime($value->as_on_date ))); ?>

                        <?php else: ?>
                        <?php endif; ?>
                      </td>
                      <td><?php echo e($value->father_name); ?></td>
                      <td><?php echo e($value->father_mobile); ?></td>
                      <td><?php echo e($value->father_accu); ?></td>
                      <td><?php echo e($value->mother_name); ?></td>
                      <td><?php echo e($value->mother_phone); ?></td>
                      <td><?php echo e($value->mother_occu); ?></td>
                      <td><?php echo e($value->guardian); ?></td>
                      <td><?php echo e($value->gur_name); ?></td>
                      <td><?php echo e($value->gur_relation); ?></td>
                      <td><?php echo e($value->gur_phone); ?></td>
                      <td><?php echo e($value->gur_occu); ?></td>
                      <td><?php echo e($value->gur_email); ?></td>
                      <td><?php echo e($value->gur_address); ?></td>
                      <td><?php echo e($value->stu_house); ?></td>
                      <td><?php echo e($value->bank_name); ?></td>
                      <td><?php echo e($value->bank_no); ?></td>
                      <td><?php echo e($value->ifsc); ?></td>
                      <td><?php echo e($value->nin_no); ?></td>
                      <td><?php echo e($value->lin_no); ?></td>
                      <td><?php echo e($value->rte); ?></td>
                      <td><?php echo e($value->pre_school); ?></td>
                      <td><?php echo e($value->pre_school); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                </table>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv evaluation p-4">
                <h5 class="" style="font-size: 17px;">Select Criteria</h5>
                <div class="row ">
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Class</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Class 1</option>
                        <option value="Unverified">Class 2</option>
                        <option value="Unverified">Class 3</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Section</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Section-A</option>
                        <option value="Unverified">Section-B</option>
                        <option value="Unverified">Section-C</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Subject Group</h6>
                    <div class="">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">A</option>
                        <option value="Unverified">B</option>
                        <option value="Unverified">C</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <h6 class="p-2" style="font-size: 14px;">Subject</h6>
                    <div class="mb-3">
                      <select name="source" class="form-control" value="" required="">
                        <option value="Select">Select</option>
                        <option value="Verified">Maths</option>
                        <option value="Unverified">English</option>
                      </select>
                    </div>
                    <div class="p-2 mt-2" style="float: right;">
                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i>
                        Search</button>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Evaluation Report</h5>
                </div>
                <table id="example15" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Subject</th>
                      <th>Homework Date</th>
                      <th>Submission Date</th>
                      <th>Complete/Incomplete</th>
                      <th>Complete (%)</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>Maths</td>
                      <td>01-12-2022</td>
                      <td>08-12-2022</td>
                      <td>Complete</td>
                      <td>95%</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv gender p-4">
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Student Gender Ratio Report</h5>
                </div>
                <table id="example16" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Class (Section)</th>
                      <th>Total Boys</th>
                      <th>Total Girls</th>
                      <th>Total Students</th>
                      <th>Boys-Girls Ratio</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>Class 1 (Section-A)</td>
                      <td>3</td>
                      <td>0</td>
                      <td>3</td>
                      <td>1:0</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-md-12">
              <div class="filterDiv teacher p-4">
                <div class="mb-3">
                  <h5 class="" style="font-size: 17px;">Students Teacher Ratio Report</h5>
                </div>
                <table id="example17" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Class (Section)</th>
                      <th>Total Students</th>
                      <th>Total Assigned Teachers</th>
                      <th>Student-Teacher Ratio</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td>1</td>
                      <td>Class 1 (Section-A)</td>
                      <td>3</td>
                      <td>0</td>
                      <td>1:0</td>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school\resources\views/teacher/reports/index.blade.php ENDPATH**/ ?>