<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>WellCare Pharmacy</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('login_page/img/favicon.png') }}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('login_page/css/bootstrap.min.css') }}">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset('login_page/css/fontawesome-all.min.css') }}">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="{{ asset('login_page/font/flaticon.css') }}">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('login_page/style.css') }}">
</head>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	<section class="fxt-template-animation fxt-template-layout27" data-bg-image="{{ asset('login_page/img/p1.jpg') }}">
		<!-- Animation Start Here -->
		<div id="particles-js"></div>
		<!-- Animation End Here -->
		<div class="fxt-content">
			<div class="fxt-header">
				<a href="#" class="fxt-logo"><img src="{{ asset('login_page/img/logo-welcare.png') }}" alt="Logo"></a>
				{{-- <ul class="fxt-switcher-wrap">
					<li><a href="login_page-27.html" class="switcher-text active">Login</a></li>
					<li><a href="register-27.html" class="switcher-text inline-text">Register</a></li>
					<li><a href="forgot-password-27.html" class="switcher-text">Forgot Password</a></li>
				</ul> --}}
			</div>
			<div class="fxt-form">
				<div class="fxt-transformY-50 fxt-transition-delay-1">
					<p>Login to your account</p>
				</div>
				<form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('admin.dashboard') }}">
                    @csrf
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-2">
							<input type="email" id="email" class="form-control" name="email" placeholder="Email" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-3">
							<input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">
							<i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-4">
							<div class="fxt-checkbox-area">
								<div class="checkbox">
									<input id="checkbox1" type="checkbox">
									<label for="checkbox1">Keep me logged in</label>
								</div>
								<button type="submit" class="fxt-btn-fill">Log in</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			{{-- <div class="fxt-style-line">
				<div class="fxt-transformY-50 fxt-transition-delay-5">
					<h3>Or Login With</h3>
				</div>
			</div>
			<ul class="fxt-socials">
				<li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-6">
					<a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
				</li>
				<li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-7">
					<a href="#" title="twitter"><i class="fab fa-twitter"></i></a>
				</li>
				<li class="fxt-google fxt-transformY-50 fxt-transition-delay-8">
					<a href="#" title="google"><i class="fab fa-google-plus-g"></i></a>
				</li>
				<li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-9">
					<a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a>
				</li>
				<li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-10">
					<a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
				</li>
			</ul> --}}
		</div>
	</section>
	<!-- jquery-->
	<script src="{{ asset('login_page/js/jquery-3.5.0.min.js') }}"></script>
	<!-- Popper js -->
	<script src="{{ asset('login_page/js/popper.min.js') }}"></script>
	<!-- Bootstrap js -->
	<script src="{{ asset('login_page/js/bootstrap.min.js') }}"></script>
	<!-- Imagesloaded js -->
	<script src="{{ asset('login_page/js/imagesloaded.pkgd.min.js') }}"></script>
	<!-- Particles js -->
	<script src="{{ asset('login_page/js/particles.js') }}"></script>
	<script src="{{ asset('login_page/js/particles-2.js') }}"></script>
	<!-- Validator js -->
	<script src="{{ asset('login_page/js/validator.min.js') }}"></script>
	<!-- Custom Js -->
	<script src="{{ asset('login_page/js/main.js') }}"></script>

</body>

</html>
