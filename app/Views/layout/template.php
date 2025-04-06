<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title><?php $title ?></title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="ratu/assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="ratu/assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="ratu/assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="ratu/assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="ratu/assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="ratu/assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="ratu/assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="ratu/assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="ratu/assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="ratu/assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="index">Home</a></li>
								<li><a href="menu">Menu</a></li>
								<li><a href="faq">FAQ</a></li>
								<li><a href="about">About</a></li>
								<li></li>
							</ul>
						</nav>
						<div class="mobile-menu"></div>
						<!-- menu end -->

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

    <?= $this->renderSection('content'); ?>
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2025 - <a href="https://instagram.com/khansawasright">Ratu Inayah khansa</a>,  All Rights Reserved</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="ratu/assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="ratu/assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="ratu/assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="ratu/assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="ratu/assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="ratu/assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="ratu/assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="ratu/assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="ratu/assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="ratu/assets/js/main.js"></script>

</body>
</html>