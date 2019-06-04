</div>
</div>
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-3"><a class="footer__logo" href="index.php" title="Tsuoq.com"><img src="<?php echo $img; ?>logo/logo-white.svg" alt="Tsuoq.com"></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit perferendis numquam quia pariatur ullam autem corporis possimus, sunt eos nisi nobis voluptates illum quas iure nesciunt? In minus vel officia.</p>
				<ul class="footer__social">
					<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
					<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
					<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
				</ul>
			</div>
			<div class="col-6 col-md-3">
				<div class="footer__content">
					<p class="footer__content-title">site map</p>
					<ul class="footer__content-list">
						<li class="footer__content-single"><a href="#">home</a></li>
						<li class="footer__content-single"><a href="#">about us</a></li>
						<li class="footer__content-single"><a href="#">business services</a></li>
						<li class="footer__content-single"><a href="#">profissional services</a></li>
						<li class="footer__content-single"><a href="#">medical services</a></li>
						<li class="footer__content-single"><a href="#">contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-6 col-md-3">
				<div class="footer__content">
					<p class="footer__content-title">services</p>
					<ul class="footer__content-list">
						<li class="footer__content-single"><a href="#">plumbers</a></li>
						<li class="footer__content-single"><a href="#">carpenters</a></li>
						<li class="footer__content-single"><a href="#">upholstered</a></li>
						<li class="footer__content-single"><a href="#">dentists</a></li>
						<li class="footer__content-single"><a href="#">children doctors</a></li>
						<li class="footer__content-single"><a href="#">car fixing</a></li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-md-3">
				<div class="footer__content">
					<p class="footer__content-title">newsletter</p>
					<div class="footer__content-form">
						<form action="#" method="POST">
							<div class="form-row">
								<div class="col-12 mb-2">
									<input class="form-control rounded-0" type="email" name="" placeholder="Email Address">
								</div>
								<div class="col-12 d-flex justify-content-end">
									<button class="btn btn-primary" type="submit">subscribe now</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="modal animated fadeIn fast" id="loginAsProvider" role="dialog" aria-hidden="true" aria-labelledby="loginAsProviderLabel" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title text-capitalize" id="loginAsProviderLabel">Choose service type</h6>
				<button class="close" data-dismiss="modal" type="button" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="card-service-icon"><a href="registeration-commerce-first.php"></a>
								<div class="card-body"><span class="icon-online-shop"></span>
									<h6 class="card-title">Lorem, ipsum.</h6>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-service-icon"><a href="registeration-medical-first.php"></a>
								<div class="card-body"><span class="icon-doctor"></span>
									<h6 class="card-title">Lorem, ipsum.</h6>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-service-icon"><a href="registeration-worker-first.php"></a>
								<div class="card-body"><span class="icon-worker"></span>
									<h6 class="card-title">Lorem, ipsum.</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo $js; ?>jquery.rateyo.js"></script>
<script>
	$(function() {

		$(".rateYo").rateYo({
			normalFill: "#EEE",
			ratedFill: "#f2c200",
			starWidth: "25px",
			rtl: true
		});

	});

	$(document).ready(function() {
		// Get current page URL
		var url = window.location.href;
		// remove # from URL
		url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
		// remove parameters from URL
		url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
		// select file name
		url = url.substr(url.lastIndexOf("/") + 1);
		// If file name not avilable
		if (url == '') {
			url = 'index.php';
		}
		// Loop all menu items
		$('nav li').each(function() {
			// select href
			var href = $(this).find('a').attr('href');
			// Check filename
			if (url == href) {
				// Add active class
				$(this).addClass('active');
			}
		});
	});
</script>