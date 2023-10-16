<!DOCTYPE html>
<html>


	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>School</title>
	
		<!-- Site favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
		<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png" />
		<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png" />
	
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet" />
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo e(url('public/teacher/vendors/styles/core.css')); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo e(url('public/teacher/vendors/styles/icon-font.min.css')); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo e(url('public/teacher/src/plugins/datatables/css/dataTables.bootstrap4.min.css')); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo e(url('public/teacher/src/plugins/datatables/css/responsive.bootstrap4.min.css')); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo e(url('public/teacher/vendors/styles/style.css')); ?>" />
	
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());
	
			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>

<body class="login-page">

	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					

					<img src="<?php echo e(url('public/teacher/vendors/images/login-page-img.png')); ?>" alt="" />
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h1 class="text-center text-primary animate-charcter">Student Sign In</h1>
							
						</div>
                        <?php if($message = Session::get('error_sws')): ?>
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong><?php echo e($message); ?></strong>
                        </div>
                        <?php endif; ?>
                        <?php if($message = Session::get('success_msg')): ?>
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong><?php echo e($message); ?></strong>
                        </div>
                        <?php endif; ?>
						<form method="post" action="<?php echo e(route('Student.Login.Data')); ?>">
							<?php echo csrf_field(); ?>
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  name="email" placeholder="E-mail" />
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-email"></i></span>
								</div>
							</div>
                            <?php if($errors->has('email')): ?>
                            <span class="text-danger"><strong><?php echo e($errors->first('email')); ?></strong></span>
                             <?php endif; ?>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="**********" name="password" />
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
                            <?php if($errors->has('password')): ?>
                            <span class="text-danger"><strong><?php echo e($errors->first('password')); ?></strong></span>
                             <?php endif; ?>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" checked disabled class="custom-control-input" id="customCheck1" />
										
									</div>
								</div>
								<div class="col-6">
									<div class="forgot-password">
										<a href="<?php echo e(route('student.Froget.pass')); ?>">Forgot Password</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
										<button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<style>
		.animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 5s linear infinite;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
	</style>
	<!-- js -->
	<script src="<?php echo e(url('public/teacher/vendors/scripts/core.js')); ?>"></script>
	<script src="<?php echo e(url('public/teacher/vendors/scripts/script.min.js')); ?>"></script>
	<script src="<?php echo e(url('public/teacher/vendors/scripts/process.js')); ?>"></script>
	<script src="<?php echo e(url('public/teacher/vendors/scripts/layout-settings.js')); ?>"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
			style="display: none; visibility: hidden"></iframe></noscript>







































	







	
<!-- Button trigger modal -->

</body>

</html><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/student/pages/index.blade.php ENDPATH**/ ?>