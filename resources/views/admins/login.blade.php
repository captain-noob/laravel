<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="/admin/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/admin/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/admin/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="/admin/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="/admin/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="/admin/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/admin/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="/admin/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead">Login to your account</p>
								@if($message=Session::get('message'))
                                  <div class="alert alert-success alert-block">
                                  <button type="button" class="close" data-dismiss="alert">x</button>
                                  <strong>{{$message}}</strong>
                                  </div>
                                 @endif
							</div>
							<form class="form-auth-small" action="adminlogin" method="POST">
							@csrf
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="email" name="email" class="form-control" id="signin-email"  placeholder="Email">
									@error('email')
									<p class="alert alert-danger alert-block">{{$errors->first('email')}}</p>
									@enderror
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password"  name="password" class="form-control" id="signin-password"  placeholder="Password">
									@error('password')
									<p class="alert alert-danger alert-block">{{$errors->first('password')}}</p>
									@enderror
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Assisi  Institute Of Foregin Langagues</h1>
							<p>Admin Pannel</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>
<script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/superfish/superfish.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <!--<script src="assets/vendor/aos/aos.js"></script>-->
    
    
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/superfish/superfish.min.js"></script>
    <script src="assets/vendor/jquery-touchswipe/jquery.touchSwipe.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <script src="assets/js/script.js"></script>

</html>

