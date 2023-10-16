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
		<link rel="stylesheet" type="text/css" href="{{ url('public/teacher/vendors/styles/core.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ url('public/teacher/vendors/styles/icon-font.min.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ url('public/teacher/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ url('public/teacher/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ url('public/teacher/vendors/styles/style.css') }}" />
	
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
					{{-- <img src="{{ url('public/logobt.png') }}" style="max-height: 100%;width: 100%;" alt=""> --}}

					<img src="{{ url('public/teacher/vendors/images/login-page-img.png') }}" alt="" />
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h1 class="text-center text-primary animate-charcter">Student Sign In</h1>
							
						</div>
                        @if ($message = Session::get('error_sws'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        @if ($message = Session::get('success_msg'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                        </div>
                        @endif
						<form method="post" action="{{ route('Student.Login.Data') }}">
							@csrf
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror"  name="email" placeholder="E-mail" />
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-email"></i></span>
								</div>
							</div>
                            @if ($errors->has('email'))
                            <span class="text-danger"><strong>{{ $errors->first('email') }}</strong></span>
                             @endif
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="**********" name="password" />
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
                            @if ($errors->has('password'))
                            <span class="text-danger"><strong>{{ $errors->first('password') }}</strong></span>
                             @endif
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" checked disabled class="custom-control-input" id="customCheck1" />
										{{-- <label class="custom-control-label" for="customCheck1">Remember</label> --}}
									</div>
								</div>
								<div class="col-6">
									<div class="forgot-password">
										<a href="{{ route('student.Froget.pass') }}">Forgot Password</a>
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
	<script src="{{ url('public/teacher/vendors/scripts/core.js') }}"></script>
	<script src="{{ url('public/teacher/vendors/scripts/script.min.js') }}"></script>
	<script src="{{ url('public/teacher/vendors/scripts/process.js') }}"></script>
	<script src="{{ url('public/teacher/vendors/scripts/layout-settings.js') }}"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
			style="display: none; visibility: hidden"></iframe></noscript>





{{-- forget password --}}

































	







	
<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  ...
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div>
	  </div>
	</div>
  </div>
 --}}
</body>

</html>