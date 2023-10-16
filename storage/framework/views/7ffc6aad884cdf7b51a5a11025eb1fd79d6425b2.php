
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Add Expense</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard" >
      <section class="section dashboard">
        <div class="row">

          <!-- left side columns -->
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body" style="padding: 0 20px 0px 20px;">
                <h5 class="card-title" style="padding: 15px 0 0px 0; float: inherit;">Add Expense </h5>
                <hr>
                <div class="activity">
                  <form action="<?php echo e(route('ADD.Expense.Data')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                  <div class="row">
                   
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Expense Head</label>
                        <select name="expense_head" class="form-control neha-text" required>
                          <option value="">Select</option>
                          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option><?php echo e($info->name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Name</label>
                        <input type="text" class="form-control neha-text" id="date1" name="name" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Invoice No.</label>
                        <input type="text" class="form-control neha-text" id="date1"name="invoice_no" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Date</label>
                        <input type="date" class="form-control neha-text" id="date1" name="date" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Amount</label>
                        <input type="text" class="form-control neha-text" id="date1" name="amount" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Attach Document</label>
                        <input type="file" name="document" class="form-control-file" id="addImage"  accept=".doc, .docx,.ppt, .pptx,.txt,.pdf" />
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group1 text-left mb-2">
                        <label for="Phone">Description</label>
                        <textarea name="desc" class="form-control neha-text" rows="2"
                        ></textarea>
                      </div>
                    </div>


                    <hr>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-info">Save</button>
                    </div>

                  </div>
                </form>
                </div>
              </div>
            </div>

          </div><!-- End left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-8">
            <div class="row">
              <div class="card">
                <h5 class="mt-3" style="font-size: 17px;">Expense List</h5>
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="" style="font-size: 13px; color: #012970; ">
                      <th>S No.</th>
                      <th>Name</th>
                      <th>Invoice No.</th>
                      <th>Date</th>
                      <th>Expense Head</th>
                      <th>Amount</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                      <td><?php echo e($loop->iteration); ?></td>
                      <td><?php echo e($value->name); ?></td>
                      <td><?php echo e($value->invoice_no); ?></td>
                      <td><?php echo e($value->date); ?></td>
                      <td><?php echo e($value->expense_head); ?></td>
                      <td>₹<?php echo e($value->amount); ?></td>
                      <td><?php echo e($value->desc); ?></td>
                      <td>
                        <div class="d-flex">
                          <a data-bs-toggle="modal" data-bs-target="#editinca<?php echo e($value->id); ?>" data-bs-whatever="@mdo" class="btn btn-light ml-1"><i class="fa fa-pencil"></i></a>
                          <a href="<?php echo e(route('Expense.Data.Delete',['id'=>$value->id])); ?>" class="btn btn-light ml-1 delete-confirm"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>
                    <div class="modal fade" id="editinca<?php echo e($value->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Expense</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo e(route('Update.Expense.Data',['id'=>$value->id])); ?>" enctype="multipart/form-data">
                              <?php echo csrf_field(); ?>
                              <div class="mb">
                                <label for="Phone">Expense Head</label>
                                <select name="expense_head" class="form-control neha-text" required>
                                  <option><?php echo e($value->expense_head); ?></option>
                                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option><?php echo e($aa->name); ?></option>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                               </div>
                              <div class="mb">
                                <label for="recipient-name" class="col-form-label">Name.</label>
                                <input type="text" class="form-control" name="name" value="<?php echo e($value->name); ?>" id="recipient-name" required>
                              </div>
                              <div class="mb">
                                <label for="Phone">Invoice No.</label>
                                <input type="text" class="form-control neha-text" id="date1" name="invoice_no" value="<?php echo e($value->invoice_no); ?>" required>
                                </div>
                              <div class="mb">
                                <label for="Phone">Date</label>
                                <input type="date" class="form-control neha-text" id="date1" name="date" value="<?php echo e($value->date); ?>" required>
                              </div>
                              <div class="mb">
                                <label for="Phone">Amount</label>
                              <input type="text" class="form-control neha-text" id="date1" name="amount" value="<?php echo e($value->amount); ?>" required>
                              </div>
                              <div class="mb">
                                <label for="Phone">Attach Document</label>
                                <input type="file" name="document" class="form-control-file" id="addImage"  accept=".doc, .docx,.ppt, .pptx,.txt,.pdf" />
                              </div>
                              <div class="mb-2">
                                <label for="message-text" class="col-form-label">Description:</label>
                                <textarea class="form-control" id="message-text" name="desc"><?php echo e($value->desc); ?></textarea>
                              </div>
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div><!-- End Right side columns -->

        </div>
      </section>
    </div>

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/school/expenses/index.blade.php ENDPATH**/ ?>