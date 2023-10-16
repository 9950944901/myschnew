
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Admission Enquiry</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row">
            <div class="card info-card sales-card">
              <form action="" method="get">
                <?php echo csrf_field(); ?>
              <div class="row mb-3">
                <h5 class="mt-3" style="font-size: 17px;">Select Criteria</h5>
                <div class="col-lg-3 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Source</h6>
                  <div class="">
                    <select name="create" class="form-control" required>
                      <option value="">Select</option>
                      <option>Self</option>
                      <option>Poster</option>
                      <option>PTET</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Enquiry From Date</h6>
                  <div class="">
                    <input type="date" name="enquiry_from_date" class="form-control" required>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 sol-sm-12">
                  <h6 class="p-2" style="font-size: 14px;">Enquiry To Date</h6>
                  <div class="">
                    <input type="date" name="enquiry_to_date" class="form-control" required>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 sol-sm-12">
                  <div class="p-2 mt-4">
                    <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                  </div>
                </div>
              </div>
            </form>
            </div>

            <div class="d-flex justify-content-between mb-3">
              <h5 class="" style="font-size: 17px;">Admission Enquiry</h5>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal">
                <i class="fa fa-plus"></i> Add
              </button>



              <!-- Modal -->
              <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addModalLabel">Admission Enquiry</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="<?php echo e(route('Admission.Enquiry')); ?>" method="post">
                      <?php echo csrf_field(); ?>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group1 text-left">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" value="<?php echo e(old('name')); ?>" name="name" required placeholder="Enter Name">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group1 text-left">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Enter Email">
                          </div>
                        </div>
            

                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group1 text-left">
                            <label for="Phone">Phone</label>
                            <input type="text"  pattern="['0-9']*" minlength="10" maxlength="10" class="form-control" value="<?php echo e(old('phone')); ?>" name="phone"
                              placeholder=" Enter Phone no.">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group1 text-left">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" value="<?php echo e(old('address')); ?>" name="address" required
                              placeholder="Enter Address">
                          </div>
                        </div>

                        

                    

                        <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="form-group1 text-left">
                            <label for="Phone">Date</label>
                            <input type="date" class="form-control"  name="date" required>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="form-group1 text-left">
                            <label for="Address">Next Follow Up Date</label>
                            <input type="date" class="form-control" name="follow_date">
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="form-group1 text-left">
                            <label for="Address">Assigned</label>
                            <input type="text" class="form-control" value="<?php echo e(old('assigned')); ?>" name="assigned"
                              placeholder=" Enter here..." >
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="form-group1 text-left">
                            <label for="Address">Reference</label>
                            <select name="reference" class="form-control">
                              <option>Select</option>
                              <option>Self</option>
                              <option>Social Media</option>
                              <option>Google</option>
                              <option>Advertisement</option>
                              <option>Relative</option>
                              <option>Friend</option>
                              <option>Other</option>
                            </select>
                          </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="form-group1 text-left">
                            <label for="Address">Class</label>
                            <select name="class" class="form-control" >
                              <option value="">Select</option>
                              <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option><?php echo e($clc->class); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="form-group1 text-left">
                            <label for="number">Number of Child</label>
                            <input type="text" class="form-control" value="<?php echo e(old('number_of_child')); ?>" name="number_of_child">
                          </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="form-group1 text-left">
                            <label for="Address">Note</label>
                            <textarea name="note" class="form-control" rows="2"
                              placeholder="Enter Message..."></textarea>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-info mt-2">Save</button>
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
                  <th>Name</th>
                  <th>Mobile No.</th>
                  
                  <th>Enquiry Date</th>
                  <th>Next Follow Up Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

                <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                  <td><?php echo e($loop->iteration); ?></td>
                  <td><?php echo e($value->name); ?></td>
                  <td><?php echo e($value->phone); ?></td>
                  
                  <td><?php echo e($value->date); ?></td>
                  <td><?php echo e($value->follow_date); ?></td>
                  <td>
                    <?php if($value->status ==1): ?>
                    Active
                    <?php else: ?>
                    Inactive
                    <?php endif; ?>
                  </td>
                  <td>
                    <div class="d-flex">
                      
                      <a data-toggle="modal" data-target="#editmodal<?php echo e($value->id); ?>" class="btn btn-light ml-1"><i
                          class="fa fa-pencil"></i></a>
                      <a href="<?php echo e(route('Admission.Enquiry.Delete',['id'=>$value->id])); ?>" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-times"></i></a>

                    </div>
                  </td>
                </tr>
                  
                  <div class="modal fade" id="editmodal<?php echo e($value->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Admission Enquiry</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="<?php echo e(route('Admission.Update',['id'=>$value->id])); ?>" method="post">
                        <?php echo csrf_field(); ?>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group1 text-left">
                              <label for="Name">Name</label>
                              <input type="text" class="form-control" name="name" value="<?php echo e($value->name); ?>" required placeholder="Enter Name">
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Email">Email</label>
                              <input type="email" class="form-control" name="email" value="<?php echo e($value->email); ?>" placeholder="Enter Email">
                            </div>
                          </div>
  
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Phone">Phone</label>
                              <input type="text" class="form-control" minlength="10" maxlength="10" pattern="['0-9']*" name="phone" value="<?php echo e($value->phone); ?>"
                                placeholder=" Enter Phone no.">
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Address">Address</label>
                              <input type="text" class="form-control" name="address" value="<?php echo e($value->address); ?>" required
                                placeholder="Enter Address">
                            </div>
                          </div>
  
                          
  
                       
  
                          <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Phone">Date</label>
                              <input type="date" class="form-control" name="date" value="<?php echo e($value->date); ?>" required>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Address">Next Follow Up Date</label>
                              <input type="date" class="form-control" name="follow_date" value="<?php echo e($value->follow_date); ?>">
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Address">Assigned</label>
                              <input type="text" class="form-control" name="assigned" value="<?php echo e($value->assigned); ?>"
                                placeholder=" Enter here..." >
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Address">Reference</label>
                              <select name="reference" class="form-control">
                                <?php if($value->reference): ?>
                                <option><?php echo e($value->reference); ?></option>
                                <?php else: ?>
                                <option value="">Select</option>
                                <?php endif; ?>
                                <option>Select</option>
                                <option>Self</option>
                                <option>Social Media</option>
                                <option>Google</option>
                                <option>Advertisement</option>
                                <option>Relative</option>
                                <option>Friend</option>
                                <option>Other</option>
                              </select>
                            </div>
                          </div>
                          
                          <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Address">Class</label>
                              <select name="class" class="form-control" >
                                <?php if($value->class): ?>
                                <option><?php echo e($value->class); ?></option>
                                <?php else: ?>
                                <option value="">Select</option>
                                <?php endif; ?>
                                <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option><?php echo e($clc->class); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="number">Number of Child</label>
                              <input type="number" class="form-control" name="number_of_child" value="<?php echo e($value->number_of_child); ?>">
                            </div>
                          </div>

                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Address">Note</label>
                              <textarea name="note" class="form-control" rows="2"
                                placeholder="Enter Message..."><?php echo e($value->note); ?></textarea>
                            </div>
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="number">Status</label>
                              <div>
                                <input type="radio" name="status" <?php echo e(($value->status=="1")? "checked" : ""); ?> value="1"> <label for="number">Active</label>
                              </div>
                              <div>
                                <input type="radio" name="status" <?php echo e(($value->status=="0")? "checked" : ""); ?> value="0"> <label for="number">Inactive</label>
                              </div>
                            </div>
                          </div>
  
                        </div>
                        <button type="submit" class="btn btn-info mt-2">Update</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </tbody>
            </table>

          </div>
    </section>


  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/school/front-office/index.blade.php ENDPATH**/ ?>