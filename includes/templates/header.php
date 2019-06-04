<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="Tsuoq.com" content="">
	<meta name="Tsuoq.com" content="">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php getTitle() ?></title>
	<link rel="icon" type="image/ico" href="<?php echo $img; ?>favicons/fav.ico" sizes="16x16">
	<link href="<?php echo $css; ?>main_rtl.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $css; ?>custom.css" rel="stylesheet" type="text/css">
	<!-- scripts-->
	<script src="<?php echo $js; ?>app.min.js" type="text/javascript"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAceZt91hCfdVh6oFAXQfNVRRdlXNJJgLs&amp;libraries=places&amp;language=en" type="text/javascript"></script>
</head>

<body>
	<div class="preloader d-flex">
		<div class="preloader-container"><img class="preloader-image" src="<?php echo $img; ?>preloader.gif" title="preloader image"></div>
	</div>
	<div class="side-open"></div>
	<nav class="navbar">
		<div class="navbar__top">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-6">
						<div class="your-country">
							Your Country Is <span> <img src="<?php echo $img; ?>icons/egypt.png" alt=""> </span>
						</div>
					</div>
					<div class="col-sm-4 col-6">
						<ul class="navbar__social">
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						</ul>
					</div>
					<div class="col-sm-4 col-12">
						<ul class="navbar__contacts">
							<li><a href="#" target="_blank"><small>+696 873663525</small><i class="fas fa-phone"></i></a></li>
							<li><a href="#" target="_blank"><small>Info@tasweek.com</small><i class="fas fa-envelope"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar__main">
			<div class="container">
				<div class="row">
					<div class="col-4 col-sm-2"><a class="navbar__logo" href="index.php" title="Tsuoq.com"><img src="./<?php echo $img; ?>logo/logo-color.svg" alt="Tsuoq.com"></a></div>
					<div class="col-7 d-none d-lg-flex">
						<ul class="navbar__pages">
							<li><a class="active" href="index.html">الرئيسية</a></li>
							<li><a href="#">about us</a></li>
							<li><a href="#">business services</a></li>
							<li><a href="#">profissional services</a></li>
							<li><a href="#">medical services</a></li>
							<li><a href="#">contact us</a></li>
						</ul>
					</div>
					<div class="col-4 offset-4 col-sm-2 offset-lg-0 p-l-r-5">
						<!-- <div class="navbar__login">
							<a class="btn btn-primary btn-sm btn-block" href="login.html">login</a>
						</div> -->
						<div class="navbar__login my-account">
							<div class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<img src="<?php echo $img; ?>avatars/avatar-2.jpg" alt="" class="account-img">
									حسابي
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">حسابي</a>
									<a class="dropdown-item" href="#">تسجيل خروج</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-1 p-l-r-5">
						<ul class="addons">
							<li>
								<a href="#" class="cart">
									<img src="<?php echo $img; ?>icons/shop-cart-logo.png" alt="">
								</a>
							</li>
							<li>
								<a href="#" class="lang-flag"> <img src="<?php echo $img; ?>icons/egypt.png" alt=""> </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<div class="overlay"><i class="menu-close material-icons">clear</i></div>

	<!-- Start Alerts
	<div class="alerts-wrapper">
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<h6 class="alert-heading">success</h6>
			<p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
			<button class="close" data-dismiss="alert" type="button" aria-label="Close"><i class="material-icons" aria-hidden="true">close</i></button>
		</div>
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<h6 class="alert-heading">warning</h6>
			<p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
			<button class="close" data-dismiss="alert" type="button" aria-label="Close"><i class="material-icons" aria-hidden="true">close</i></button>
		</div>
		<div class="alert alert-info alert-dismissible fade show" role="alert">
			<h6 class="alert-heading">info</h6>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere excepturi perferendis consequatur, veritatis eligendi similique fugit inventore nesciunt dolor fugiat incidunt temporibus eaque quibusdam debitis voluptates assumenda sequi, dolore error.</p>
			<button class="close" data-dismiss="alert" type="button" aria-label="Close"><i class="material-icons" aria-hidden="true">close</i></button>
		</div>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<h6 class="alert-heading">error</h6>
			<p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
			<button class="close" data-dismiss="alert" type="button" aria-label="Close"><i class="material-icons" aria-hidden="true">close</i></button>
		</div>
	</div>
	//End Alerts -->

	<div class="inner" id="login-page">
		<div class="inner__wrapper">