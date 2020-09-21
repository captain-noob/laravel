<!doctype html>
<html lang="en">

<head>
<title>Admin Pannel | AIFL - Assisi Institute of Foregin Langagues</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="/admin/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/admin/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/admin/vendor/linearicons/style.css">
<link rel="stylesheet" href="/admin/vendor/chartist/css/chartist-custom.css">
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

<!-- //PHP CODE TO DISPLAY -->



<body>
<!-- WRAPPER -->
<div id="wrapper">
	<!-- NAVBAR -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="brand">
			<a href="index.php"><img src="/admin/img/aifl.png" alt="Klorofil Logo" class="img-responsive logo"></a>
		</div>
		<div class="container-fluid">
			<div class="navbar-btn">
				<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
			</div>
			
			
			<div id="navbar-menu">
				<ul class="nav navbar-nav navbar-right">
					<!-- <li class="dropdown">
						<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
							<i class="lnr lnr-alarm"></i>
							<span class="badge bg-danger">5</span>
						</a>
						<ul class="dropdown-menu notifications">
							<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
							<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
							<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
							<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
							<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
							<li><a href="#" class="more">See all notifications</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="#">Basic Use</a></li>
							<li><a href="#">Working With Data</a></li>
							<li><a href="#">Security</a></li>
							<li><a href="#">Troubleshooting</a></li>
						</ul>
					</li> -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="/admin/img/user.png" class="img-circle" alt="Avatar"> <span>AiFL Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="/admins/profile"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
							<!-- <li><a href="profile.php"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li> -->
							<!-- <li><a href="profile.php"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li> -->
							<li><a href="/admins/logout" onclick="return confirm('are you sure');"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
						</ul>
					</li>
					<!-- <li>
						<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
					</li> -->
				</ul>
			</div>
		</div>
	</nav>
	<!-- END NAVBAR -->
	<!-- LEFT SIDEBAR -->
	<div id="sidebar-nav" class="sidebar">
		<div class="sidebar-scroll">
			<nav>
				<ul class="nav">
					<li><a href="/admins" class="@yield('dash')"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
					

					<li>
						<a href="#gallery" data-toggle="collapse" class="@yield('gall')"><i class="fa fa-folder"></i> <span>Gallery</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
						<div id="gallery" class="collapse @yield('coll')">
							<ul class="nav">
								<li><a href="/admins/youtube" class=""><i class="fa fa-youtube"></i> <span>Youtube</span></a></li>
								<li><a href="/admins/gallery" class=""><i class="fa fa-file-image-o"></i> <span>Image</span></a></li>
							</ul>
						</div>
					</li>
					

					<li><a href="/admins/news" class="@yield('news')"><i class="lnr lnr-bubble"></i> <span>News</span></a></li>
					
					<li>
						<a href="#updates" data-toggle="collapse" class="collapsed @yield('form')"><i class="fa fa-address-card"></i> <span>Form Updates</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
						<div id="updates" class="collapse @yield('formcoll')">
							<ul class="nav">
								<li><a href="/admins/newslettersubscription" class="">NewsLetter Subscription</a></li>
								<li><a href="/admins/registeredstudent" class="">Registered</a></li>
								<li><a href="/admins/contact" class="">Contact</a></li>
							</ul>
						</div>
					</li>
					<li><a href="/admins/profile" class="@yield('prof')"><i class="fa fa-user-o "></i> <span>Profile</span></a></li>
					<li>
						<a href="#gallery" data-toggle="collapse" class=""><i class="fa fa-folder"></i> <span>Testimonial</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
						<div id="gallery" class="">
							<ul class="nav">
								<li><a href="/admins/testimonial/youtube" class=""><i class="fa fa-youtube"></i> <span>Youtube</span></a></li>
								<li><a href="/admins/testimonial/gallery" class=""><i class="fa fa-file-image-o"></i> <span>Image</span></a></li>
							</ul>
						</div>
					</li>
					<li>
						<a href="#gallery" data-toggle="collapse" class=""><i class="fa fa-folder"></i> <span>document</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
						<div id="gallery" class="">
							<ul class="nav">
								<li><a href="/admins/document/news" class=""><i class="fa fa-youtube"></i> <span>News</span></a></li>
								<li><a href="/admins/document/brosser" class=""><i class="fa fa-file-image-o"></i> <span>Brosser</span></a></li>
							</ul>
						</div>
					</li>

					<!-- <li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Security</span></a></li> -->
					
				</ul>
			</nav>
		</div>
	</div>
	<!-- END LEFT SIDEBAR -->
    @yield('admincontents')
    <div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; AIFL 2020  All Rights Reserved,<a href="#foxiton_url" target="_blank">Developed By Foxiton</a>.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="/admin/vendor/jquery/jquery.min.js"></script>
	<script src="/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/admin/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/admin/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="/admin/vendor/chartist/js/chartist.min.js"></script>
	<script src="/admin/scripts/klorofil-common.js"></script>
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
</body>
</htm>