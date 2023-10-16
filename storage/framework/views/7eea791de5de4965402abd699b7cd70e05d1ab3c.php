
<?php $__env->startSection('content'); ?>
<main id="main" class="main">
<?php
    use App\Models\FeesDiscount;
?>
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Collect Fees Action</li>
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
                <h5 class="mt-3">Student Fees</h5>
                <hr>
                <div class="row mb-2">
                  <div class="col-lg-2 col-md-6 col-sm-12">
                    <div>
                      <?php if($show->student_image): ?>
                      <img src="<?php echo e(url('public/uploads/students/'.$show->student_image)); ?>" width="100" height="100">
                      <?php else: ?>
                      <img src="<?php echo e(url('public/no_image.png')); ?>" width="100">
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="ml-1 mr-2">
                      <div class="d-flex justify-content-between">
                        <p class="mb-1"><b>Name</b></p>
                        <p class="mb-1"><?php echo e($show->first_name); ?> <?php echo e($show->last_name); ?></p>
                      </div>

                      <div class="d-flex justify-content-between">
                        <p class="mb-1"><b>Father's Name </b></p>
                        <p class="mb-1"><?php echo e($show->father_name); ?></p>
                      </div>

                      <div class="d-flex justify-content-between">
                        <p class="mb-1"><b>Mobile No.</b></p>
                        <p class="mb-1">+91<?php echo e($show->mobile_no); ?></p>
                      </div>

                      <div class="d-flex justify-content-between">
                        <p class="mb-1"><b>Category</b></p>
                        <p class="mb-1"><?php echo e($show->category); ?></p>
                      </div>
                      
                      <div class="d-flex justify-content-between">
                        <p class="mb-1"><b>Session</b></p>
                        <p class="mb-1"><?php echo e($info->session ?? ''); ?></p>
                      </div>

                    </div>
                  </div>

                  <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="ml-1 mr-2">
                      <div class="d-flex justify-content-between">
                        <p class="mb-1"><b>Class Section</b></p>
                        <p class="mb-1"><?php echo e($show->class); ?> (<?php echo e($show->section); ?>)</p>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="mb-1"><b>Admission No</b></p>
                        <p class="mb-1"><?php echo e($show->admission_no); ?>

                        </p>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="mb-1"><b>Roll Number</b></p>
                        <p class="mb-1"><?php echo e($show->roll_no); ?></p>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="mb-1"><b>Date Of Birth</b></p>
                        <p class="mb-1"><?php echo e(date('d-m-Y', strtotime($show->dob))); ?></p>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="mb-1"><b>Total Fees </b></p>
                        <p class="mb-1 text-bold"><?php echo e(number_format($total_fee->amount ?? '0')); ?></p>
                      </div>
                    </div>
                  </div>
                  <hr>
                </div>
              </div>

              <div class="mt-1 mb-3">
                <a href="button" class="btn btn-info" data-toggle="modal" data-target="#collectfeesModal"><i
                    class="fa fa-money"></i> Collect Fees</a>

                <!-- Modal -->
                <div class="modal fade" id="collectfeesModal" tabindex="-1" role="dialog"
                  aria-labelledby="collectfeesModalLabel" aria-hidden="true">
                  <div class="modal-dialog " role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="leaverequestModalLabel">Collect Fees</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="<?php echo e(route('Collect.Fees.Data')); ?>" method="post">
                          <?php echo csrf_field(); ?>
                        <div class="row">                         
                          <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Name">Date</label>
                              <input type="date" class="form-control neha-text" name="date" required>
                              <input type="hidden" class="form-control neha-text" value="<?php echo e($show->id); ?>" name="stu_id">
                            </div>
                          </div>
                          
                          <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Name">Session</label>
                             <select name="session" class="form-control" required>
                              <option><?php echo e($info->session ?? ''); ?></option>
                              <option>2021-22</option>
                              <option>2022-23</option>
                              <option>2023-24</option>
                              <option>2024-25</option>
                              <option>2025-26</option>
                              <option>2026-27</option>
                             </select>
                            </div>
                          </div>
                          
                          <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Name">Class</label>
                             <select name="class" class="form-control" required>
                              <option><?php echo e($show->class ?? ''); ?></option>
                              <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option><?php echo e($clz->class); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             </select>
                            </div>
                          </div>
                          <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Email">Payment Methods</label>
                              <div>
                                <input type="radio" name="payment_mode" value="Cash" checked> <label>Cash</label> &nbsp;
                                <input type="radio" name="payment_mode" value="Cheque"> <label>Cheque</label> &nbsp;
                                <input type="radio" name="payment_mode" value="DD"> <label>DD</label> &nbsp;
                                <input type="radio" name="payment_mode" value="Bank"> <label>Bank</label> &nbsp;
                                <input type="radio" name="payment_mode" value="UPI"> <label>UPI</label> &nbsp;
                                <input type="radio" name="payment_mode" value="Card"> <label>Card</label>
                              </div>
                            </div>
                          </div>
                          
                          <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Name"><b>Total</b></label>
                              <input type="text" class="form-control neha-text" name="total" required>
                            </div>
                          </div>
                          <div class="col-lg-12 col-md-6 col-sm-12">
                            <button type="submit" class="btn btn-info mt-2"><i class="fa fa-money"></i> Deposit</button>
                          </div>

                        </div>
                      </form>

                      </div>
                      <div class="modal-footer">
                      </div>
                    </div>
                  </div>
                </div>





              </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>S No.</th>
                    <th>Session</th>
                    <th>Class</th>
                    <th>   </th>
                    <th>Date</th>
                    <th>Amount (₹)</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $__currentLoopData = $fees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($info->user_id); ?></td>
                    <td><?php echo e($info->fees_group); ?></td>
                    <td><?php echo e($info->payment_mode); ?></td>
                    <td><?php echo e(date('d-M-Y', strtotime($info->created_at))); ?></td>
                    <td>₹<?php echo e($info->total); ?></td>
                    <td><?php if($info->status==1): ?>
                      Active
                      <?php else: ?>
                      Inactive
                      <?php endif; ?></td>
                      <td>
                        <div class="d-flex">
                          <a data-bs-toggle="modal" data-bs-target="#editfees<?php echo e($info->id); ?>" data-bs-whatever="@mdo" class="btn btn-light ml-1"><i class="fa fa-pencil"></i></a>
                          <a href="<?php echo e(route('Fees.collect.Delete',['id'=>$info->id])); ?>" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                  </tr>
                  <div class="modal fade" id="editfees<?php echo e($info->id); ?>" tabindex="-1" role="dialog"
                  aria-labelledby="collectfeesModalLabel" aria-hidden="true">
                  <div class="modal-dialog " role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="leaverequestModalLabel">Edit Collect Fees</h5>
                        
                       <h5> <a href=""><span aria-hidden="true">&times;</span></a></h5>
                      </div>
                      <div class="modal-body">
                        <form action="<?php echo e(route('Collect.Fees.Update',['id'=>$info->id])); ?>" method="post">
                          <?php echo csrf_field(); ?>
                        <div class="row">                         
                          <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Name">Date</label>
                              <input type="date" class="form-control neha-text" value="<?php echo e($info->date); ?>" name="date" required>
                            </div>
                          </div>
                          
                          
                          <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Email">Payment Mode</label>
                              <div>
                                <input type="radio" name="payment_mode" value="Cash" <?php echo e(($info->payment_mode=="Cash")? "checked" : ""); ?>> <label>Cash</label> &nbsp;
                                <input type="radio" name="payment_mode" value="Cheque" <?php echo e(($info->payment_mode=="Cheque")? "checked" : ""); ?>> <label>Cheque</label> &nbsp;
                                <input type="radio" name="payment_mode" value="DD" <?php echo e(($info->payment_mode=="DD")? "checked" : ""); ?>> <label>DD</label> &nbsp;
                                <input type="radio" name="payment_mode" value="Bank" <?php echo e(($info->payment_mode=="Bank")? "checked" : ""); ?>> <label>Bank</label> &nbsp;
                                <input type="radio" name="payment_mode" value="UPI" <?php echo e(($info->payment_mode=="UPI")? "checked" : ""); ?>> <label>UPI</label> &nbsp;
                                <input type="radio" name="payment_mode" value="Card" <?php echo e(($info->payment_mode=="Card")? "checked" : ""); ?>> <label>Card</label>
                              </div>
                            </div>
                          </div>
                          
                          <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="form-group1 text-left">
                              <label for="Name"><b>Total</b></label>
                              <input type="text" class="form-control neha-text" name="total" value="<?php echo e($info->total); ?>"   required>
                            </div>
                          </div>
                          <div class="col-lg-12 col-md-6 col-sm-12">
                            <button type="submit" class="btn btn-info mt-2"><i class="fa fa-money"></i> Pay</button>
                          </div>

                        </div>
                      </form>

                      </div>
                      <div class="modal-footer">
                      </div>
                    </div>
                  </div>
                </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 
                </tbody>
                <tr class="w-100" style="font-size: 13px; color: #012970;" >
                  <?php $__currentLoopData = $fees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php
                    $amot = 0;  
                  ?>
                      <?php
                        $total_fee = FeesDiscount::where('discount',$item->fees_group)->where('name',$item->user_id)
                        ->first();
                    // {{dd($total_fee);}}

                       $amot = $amot + ($total_fee->amount ?? '0');

                      ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <th></th>
                  <th></th>
                  <th>Total Amount</th>
                  <th>₹<?php echo e(number_format($amot ?? '0')); ?></th>
                  <th>Received Payment</th>
                  <th><span class="text-success " style="font-size: 17px;">₹<?php echo e($sum ?? '0'); ?></span></th>
                  <?php if((int)($amot ?? '0') > $sum ): ?>
                  <th class="text-warning">Pending.</th>
                  <?php elseif((int)($amot ?? '0') == $sum): ?>
                  <th class="text-success">---</th>
                  <?php else: ?>
                  <th class="text-primary">Carry Forward</th>
                  <?php endif; ?>
                  <th>₹<?php echo e($sum - ($amot ?? '0')); ?></th>
                  
                </tr>
              </table>

            </div>
          </div>
        </div>
      </section>
    </div>

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/school/fees-collection/collect-fees-action.blade.php ENDPATH**/ ?>