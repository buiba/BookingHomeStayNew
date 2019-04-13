<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Homestay &mdash; Đặt homestay</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by QBOOTSTRAP.COM" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="QBOOTSTRAP.COM" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by QBOOTSTRAP.COM
		
	Website: 		http://qbootstrap.com/
	Email: 			info@qbootstrap.com
	Twitter: 		http://twitter.com/Q_bootstrap
	Facebook: 		https://www.facebook.com/Qbootstrap

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="qbootstrap-loader"></div>

	<div id="page">
		<nav class="qbootstrap-nav" role="navigation">
		<?php
		include("source/top.php");
		;?>
		</nav>
		<aside id="qbootstrap-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/banner_phuquoc.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
				   					<h1>Homestay &amp; Địa Điểm</h1>
										<h2>Cùng Khám Phá Những Địa Điểm Thú Vị Tại Việt Nam <a href="http://qbootstrap.com/" target="_blank">Bookinghomestay.tk</a></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<?php
		include("source/filter.php");
		;?>
		<div id="qbootstrap-rooms">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Điểm đến hot nhất</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-1.jpg" class="room image-popup-link" style="background-image: url(images/menu-1.jpg);"></a>
						<div class="desc">
							<h3><a href="rooms-suites.html">Đà Nẵng</a></h3>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room price-menu">25.00</span>
							</p>
							<p>Một kỳ nghĩ đáng nhớ của 2 vợ chồng. Homestay nằm đối diện bờ biễn Mỹ Khê, đi bộ ra là đến. Nhân viên phục vụ nhiệt tình, ân cần. Phòng ốc sạch sẽ, buffet sáng ngon, đa dạng. Rất đáng để ở</p>
							<p><a class="btn btn-primary">Xem homestay còn phòng</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-2.jpg" class="room image-popup-link" style="background-image: url(images/menu-2.jpg);"></a>
						<div class="desc">
							<h3><a href="rooms-suites.html">Nha Trang</a></h3>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room price-menu">30.00</span>
							</p>
							<p>Một kỳ nghĩ đáng nhớ của 2 vợ chồng. Homestay nằm đối diện bờ biễn Mỹ Khê, đi bộ ra là đến. Nhân viên phục vụ nhiệt tình, ân cần. Phòng ốc sạch sẽ, buffet sáng ngon, đa dạng. Rất đáng để ở</p>
							<p><a class="btn btn-primary">Xem homestay còn phòng</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-3.jpg" class="room image-popup-link" style="background-image: url(images/menu-3.jpg);"></a>
						<div class="desc">
							<h3><a href="rooms-suites.html">Phú Quốc</a></h3>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room price-menu">20.00</span>
							</p>
							<p>Một kỳ nghĩ đáng nhớ của 2 vợ chồng. Homestay nằm đối diện bờ biễn Mỹ Khê, đi bộ ra là đến. Nhân viên phục vụ nhiệt tình, ân cần. Phòng ốc sạch sẽ, buffet sáng ngon, đa dạng. Rất đáng để ở</p>
							<p><a class="btn btn-primary">Xem homestay còn phòng</a></p>
						</div>
					</div>
				</div>

				<div class="row row-pb-lg">
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-4.jpg" class="room image-popup-link" style="background-image: url(images/menu-4.jpg);"></a>
						<div class="desc">
							<h3><a href="rooms-suites.html">Vũng Tàu</a></h3>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room price-menu">25.00</span>
							</p>
							<p>Một kỳ nghĩ đáng nhớ của 2 vợ chồng. Homestay nằm đối diện bờ biễn Mỹ Khê, đi bộ ra là đến. Nhân viên phục vụ nhiệt tình, ân cần. Phòng ốc sạch sẽ, buffet sáng ngon, đa dạng. Rất đáng để ở</p>
							<p><a class="btn btn-primary">Xem homestay còn phòng</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-5.jpg" class="room image-popup-link" style="background-image: url(images/menu-5.jpg);"></a>
						<div class="desc">
							<h3><a href="rooms-suites.html">Hà Nội</a></h3>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room price-menu">30.00</span>
							</p>
							<p>Một kỳ nghĩ đáng nhớ của 2 vợ chồng. Homestay nằm đối diện bờ biễn Mỹ Khê, đi bộ ra là đến. Nhân viên phục vụ nhiệt tình, ân cần. Phòng ốc sạch sẽ, buffet sáng ngon, đa dạng. Rất đáng để ở</p>
							<p><a class="btn btn-primary">Xem homestay còn phòng</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-6.jpg" class="room image-popup-link" style="background-image: url(images/menu-6.jpg);"></a>
						<div class="desc">
							<h3><a href="rooms-suites.html">Đà Lạt</a></h3>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room price-menu">20.00</span>
							</p>
							<p>Một kỳ nghĩ đáng nhớ của 2 vợ chồng. Homestay nằm đối diện bờ biễn Mỹ Khê, đi bộ ra là đến. Nhân viên phục vụ nhiệt tình, ân cần. Phòng ốc sạch sẽ, buffet sáng ngon, đa dạng. Rất đáng để ở</p>
							<p><a class="btn btn-primary">Xem homestay còn phòng</a></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Homestay Giá Tốt</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-1.jpg" class="room image-popup-link" style="background-image: url(images/menu-1.jpg);"></a>
						<div class="desc">
							<h3><a href="rooms-suites.html">Homestay Đà Nẵng</a></h3>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room price-menu">25.00</span>
							</p>
							<p>Một kỳ nghĩ đáng nhớ của 2 vợ chồng. Homestay nằm đối diện bờ biễn Mỹ Khê, đi bộ ra là đến. Nhân viên phục vụ nhiệt tình, ân cần. Phòng ốc sạch sẽ, buffet sáng ngon, đa dạng. Rất đáng để ở</p>
							<p><a class="btn btn-primary">Xem homestay còn phòng</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-2.jpg" class="room image-popup-link" style="background-image: url(images/menu-2.jpg);"></a>
						<div class="desc">
							<h3><a href="rooms-suites.html">Homestay Nha Trang</a></h3>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room price-menu">30.00</span>
							</p>
							<p>Một kỳ nghĩ đáng nhớ của 2 vợ chồng. Homestay nằm đối diện bờ biễn Mỹ Khê, đi bộ ra là đến. Nhân viên phục vụ nhiệt tình, ân cần. Phòng ốc sạch sẽ, buffet sáng ngon, đa dạng. Rất đáng để ở</p>
							<p><a class="btn btn-primary">Xem homestay còn phòng</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-3.jpg" class="room image-popup-link" style="background-image: url(images/menu-3.jpg);"></a>
						<div class="desc">
							<h3><a href="rooms-suites.html">Homestay Đà Lạt</a></h3>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room price-menu">20.00</span>
							</p>
							<p>Một kỳ nghĩ đáng nhớ của 2 vợ chồng. Homestay nằm đối diện bờ biễn Mỹ Khê, đi bộ ra là đến. Nhân viên phục vụ nhiệt tình, ân cần. Phòng ốc sạch sẽ, buffet sáng ngon, đa dạng. Rất đáng để ở</p>
							<p><a class="btn btn-primary">Xem homestay còn phòng</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
			include("source/subscrice.php");
		;?>
		<?php
			include("source/footer.php");
		;?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

