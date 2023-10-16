	
    <script src="<?php echo e(url('public/toster/js/jquery.min.js')); ?>"></script>

	<link rel="stylesheet" type="text/css" 
     href="<?php echo e(url('public/toster/css/toastr.min.css')); ?>">
	
    <script src="<?php echo e(url('public/toster/js/toastr.js')); ?>"></script>

    <script>
  <?php if(Session::has('success')): ?>
  toastr.options =
  {
     "closeButton" : true,
     // "progressBar" : true
  }
          toastr.success("<?php echo e(session('success')); ?>");
  <?php endif; ?>

  <?php if(Session::has('error')): ?>
  toastr.options =
  {
     "closeButton" : true,
     // "progressBar" : true
  }
          toastr.error("<?php echo e(session('error')); ?>");
  <?php endif; ?>

  <?php if(Session::has('info')): ?>
  toastr.options =
  {
     "closeButton" : true,
     // "progressBar" : true
  }
          toastr.info("<?php echo e(session('info')); ?>");
  <?php endif; ?>

  <?php if(Session::has('warning')): ?>
  toastr.options =
  {
     "closeButton" : true,
     // "progressBar" : true
  }
          toastr.warning("<?php echo e(session('warning')); ?>");
  <?php endif; ?>
</script><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/layouts/toster.blade.php ENDPATH**/ ?>