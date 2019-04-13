<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Booking Homestay &mdash; trang web đặt phòng homestay</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by QBOOTSTRAP.COM" />
	<meta name="keywords" content="đặt phòng homestay, free bootstrap, html5, css3, mobile first, responsive" />
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
		

	<div id="page">
		
		<nav class="qbootstrap-nav" role="navigation">
		<?php
		include("source/top.php");
		;?>
		</nav>

		<aside id="qbootstrap-hero">
		<?php
			include("source/slide.php");
		;?>
		</aside>
		<?php
			include("source/filter.php");
		;?>
		<?php
			include("source/service.php");
		;?>
		<div id="qbootstrap-rooms" class="qbootstrap-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Danh Sách Phòng</h2>
						<p>Với danh sách phòng phong phú, khách hàng hoàn toàn có thể ưng ý với những sự lựa chọn khác nhau tuỳ thuộc vào nhu cầu</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="owl-carousel owl-carousel2">
							<div class="item">
								<a href="images/room-1.jpg" class="room image-popup-link" style="background-image: url(images/phong_don.png);"></a>
								<div class="desc">
									<h3><a href="rooms-suites.html">Phòng Đơn</a></h3>
									<p class="price">
										<span class="currency">đ</span>
										<span class="price-room">1.192.000</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
									<li><i class="icon-check"></i> Hoàn hảo cho ai muốn riêng tư</li>
										<li><i class="icon-check"></i> Bao gồm ăn sáng</li>
										<li><i class="icon-check"></i> Giá chưa bao gồm VAT&amp; phí dịch vụ</li>
									</ul>
									<p><a class="btn btn-primary" href="detailhomestay.php">Đặt Phòng Ngay!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="images/room-2.jpg" class="room image-popup-link" style="background-image: url(images/phong_doi.jpg);"></a>
								<div class="desc">
									<h3><a href="rooms-suites.html">Phòng Đôi</a></h3>
									<p class="price">
										<span class="currency">đ</span>
										<span class="price-room">2.000.000</span>
										<span class="per">/ mỗi đêm</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Hoàn hảo cho các cặp vợ chồng trẻ</li>
										<li><i class="icon-check"></i> Bao gồm ăn sáng</li>
										<li><i class="icon-check"></i> Giá chưa bao gồm VAT&amp; phí dịch vụ</li>
									</ul>
									<p><a class="btn btn-primary">Đặt Phòng Ngay!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="images/room-3.jpg" class="room image-popup-link" style="background-image: url(images/phong_gia_dinh.jpg);"></a>
								<div class="desc">
									<h3><a href="rooms-suites.html">Phòng Gia Đình</a></h3>
									<p class="price">
										<span class="currency">đ</span>
										<span class="price-room">2.500.000</span>
										<span class="per">/ mỗi đêm</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Hai Phòng Tắm</li>
										<li><i class="icon-check"></i> Giữ trẻ miễn phí</li>
										<li><i class="icon-check"></i> 3 Phòng Ngủ</li>
									</ul>
									<p><a class="btn btn-primary">Đặt Phòng Ngay!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="images/room-4.jpg" class="room image-popup-link" style="background-image: url(images/room-4.jpg);"></a>
								<div class="desc">
									<h3><a href="rooms-suites.html">Classic Double Room</a></h3>
									<p class="price">
										<span class="currency">$</span>
										<span class="price-room">179</span>
										<span class="per">/ mỗi đêm</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Only 10 rooms are available</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary">Book now!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="images/room-5.jpg" class="room image-popup-link" style="background-image: url(images/room-5.jpg);"></a>
								<div class="desc">
									<h3><a href="rooms-suites.html">Superior Double Room</a></h3>
									<p class="price">
										<span class="currency">$</span>
										<span class="price-room">270</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Perfect for traveling couples</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary">Book now!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="images/room-6.jpg" class="room image-popup-link" style="background-image: url(images/room-6.jpg);"></a>
								<div class="desc">
									<h3><a href="rooms-suites.html">Superior Family Room</a></h3>
									<p class="price">
										<span class="currency">$</span>
										<span class="price-room">270</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Perfect for traveling couples</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary">Book now!</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div id="qbootstrap-dining-bar" class="diningbar-flex">
			<div class="half animate-box">
				<h2 class="title-head">Gợi Ý Điểm Đến Thú Vị</h2>
				<ul class="nav nav-tabs text-center" role="tablist">
					<li role="presentation" class="active"><a href="#mains" aria-controls="mains" role="tab" data-toggle="tab">Miền Bắc</a></li>
					<li role="presentation"><a href="#desserts" aria-controls="desserts" role="tab" data-toggle="tab">Miền Trung</a></li>
					<li role="presentation"><a href="#drinks" aria-controls="drinks" role="tab" data-toggle="tab">Miền Nam</a></li>
				</ul>
            <!-- Tab panes -->
            <div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="mains">
						<div class="row">
							<div class="col-md-12">
								<ul class="menu-dish">
				              <li>
				                <figure class="image"><img src="images/menu-1.jpg" alt="Free Bootstrap Template by QBootstrap.com"></figure>
				                <div class="text">
				                  <span class="price">Có 763 homestay</span>
				                  <h3>Đà Nẵng</h3>
				                  <p>Biển / Hải Sản / Khu Vui Chơi</p>
				                </div>
				              </li>
				              <li>
				                <figure class="image"><img src="images/menu-2.jpg" alt="Free Bootstrap Template by QBootstrap.com"></figure>
				                <div class="text">
				                  <span class="price">Có 569 homestay</span>
				                  <h3>Nha Trang</h3>
				                  <p>Biển / Hải Sản / Khu Vui Chơi</p>
				                </div>
				              </li>
				              <li>
				                <figure class="image"><img src="images/menu-3.jpg" alt="Free Bootstrap Template by QBootstrap.com"></figure>
				                <div class="text">
				                  <span class="price">Có 591 homestay</span>
				                  <h3>Đà Lạt</h3>
				                  <p>Núi / Cáp Treo / Phong Cảnh Đẹp</p>
				                </div>
				              </li>
				              <li>
				                <figure class="image"><img src="images/menu-4.jpg" alt="Free Bootstrap Template by QBootstrap.com"></figure>
				                <div class="text">
				                  <span class="price">Có 553 homestay</span>
				                  <h3>Hội An</h3>
				                  <p>Phố Cổ / Ẩm Thực / Văn Hoá</p>
				                </div>
				              </li>
				            </ul>
							</div>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane" id="desserts">
						<div class="row">
							<div class="col-md-12">
								<ul class="menu-dish">
				              <li>
				                <figure class="image"><img src="images/menu-1.jpg" alt="Free Bootstrap Template by QBootstrap.com"></figure>
				                <div class="text">
				                  <span class="price">$30.50</span>
				                  <h3>Fried Potatoes with Garlic</h3>
				                  <p>Viggies / Potatoes / Rice</p>
				                </div>
				              </li>
				              <li>
				                <figure class="image"><img src="images/menu-3.jpg" alt="Free Bootstrap Template by QBootstrap.com"></figure>
				                <div class="text">
				                  <span class="price">$30.50</span>
				                  <h3>Tuna Roast Source</h3>
				                  <p>Tuna / Potatoes / Rice</p>
				                </div>
				              </li>
				              <li>
				                <figure class="image"><img src="images/menu-3.jpg" alt="Free Bootstrap Template by QBootstrap.com"></figure>
				                <div class="text">
				                  <span class="price">$30.50</span>
				                  <h3>Roast Beef (4 sticks)</h3>
				                  <p>Crab / Potatoes / Rice</p>
				                </div>
				              </li>
				              <li>
				                <figure class="image"><img src="images/menu-4.jpg" alt="Free Bootstrap Template by QBootstrap.com"></figure>
				                <div class="text">
				                  <span class="price">$30.50</span>
				                  <h3>Salted Fried Chicken</h3>
				                  <p>Crab / Potatoes / Rice</p>
				                </div>
				              </li>
				            </ul>
							</div>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane" id="drinks">
						<div class="row">
							<div class="col-md-12">
								<ul class="menu-dish">
				              <li>
				                <figure class="image"><img src="images/menu-8.jpg" alt="Free Bootstrap Template by QBootstrap.com"></figure>
				                <div class="text">
				                  <span class="price">$30.50</span>
				                  <h3>Fried Potatoes with Garlic</h3>
				                  <p>Viggies / Potatoes / Rice</p>
				                </div>
				              </li>
				              <li>
				                <figure class="image"><img src="images/menu-7.jpg" alt="Free Bootstrap Template by QBootstrap.com"></figure>
				                <div class="text">
				                  <span class="price">$30.50</span>
				                  <h3>Tuna Roast Source</h3>
				                  <p>Tuna / Potatoes / Rice</p>
				                </div>
				              </li>
				              <li>
				                <figure class="image"><img src="images/menu-3.jpg" alt="Free Bootstrap Template by QBootstrap.com"></figure>
				                <div class="text">
				                  <span class="price">$30.50</span>
				                  <h3>Roast Beef (4 sticks)</h3>
				                  <p>Crab / Potatoes / Rice</p>
				                </div>
				              </li>
				              <li>
				                <figure class="image"><img src="images/menu-4.jpg" alt="Free Bootstrap Template by QBootstrap.com"></figure>
				                <div class="text">
				                  <span class="price">$30.50</span>
				                  <h3>Salted Fried Chicken</h3>
				                  <p>Crab / Potatoes / Rice</p>
				                </div>
				              </li>
				            </ul>
							</div>
						</div>
					</div>
            </div>
         </div><!-- end half -->
         <div class="half diningbar-img" style="background-image: url(images/danang.jpg);"></div><!-- end half -->
		</div>

		
		<div id="qbootstrap-blog" class="blog-flex">
			<div class="featured-blog" style="background-image: url(images/kinhnghiem_dulich.jpg);">
				<div class="desc-t">
					<div class="desc-tc">
						<span class="featured-head">Có Thể Bạn Chưa Biết</span>
						<h3><a href="#">9 Việc Cần Làm Để Có Một Chuyến Du Lịch Thành Công</a></h3>
						<span><a href="#" class="read-button">Xem Chi Tiết <i class="icon-arrow-right3"></i></a></span>
					</div>
				</div>
			</div>
			<div class="blog-entry">
				<div class="row animate-box">
					<div class="col-md-12">
						<h2 class="title-head">Tin Mới Nhất</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<a href="blog.html" class="blog-post">
							<span class="img" style="background-image: url(images/blog-1.jpg);"></span>
							<div class="desc">
								<span class="date">August 24, 2017</span>
								<h3>Hướng dẫn bí quyết trải nghiệm địa điểm du lịch</h3>
								<span class="cat">Chi tiết</span>
							</div>
						</a>
					</div>
					<div class="col-md-12 animate-box">
						<a href="blog.html" class="blog-post">
							<span class="img" style="background-image: url(images/blog-2.jpg);"></span>
							<div class="desc">
								<span class="date">August 24, 2017</span>
								<h3>9 điều cần làm để có một chuyến du lịch vui vẻ</h3>
								<span class="cat">Chi tiết</span>
							</div>
						</a>
					</div>
					<div class="col-md-12 animate-box">
						<a href="blog.html" class="blog-post">
							<span class="img" style="background-image: url(images/blog-3.jpg);"></span>
							<div class="desc">
								<span class="date">August 24, 2017</span>
								<h3>9 điều cần làm để có một chuyến du lịch vui vẻ</h3>
								<span class="cat">Activities</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div id="qbootstrap-testimony" class="qbootstrap-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Đối tác của chúng tôi</h2>
						<p>Chúng tôi luôn sẵn sàng hợp tác với những đơn vị cũng úng homestay với phương trâm hợp tác cùng phát triển.</p>
					</div>
				</div>
				<div class="row">
				<div class="col-md-4 animate-box">
					<div class="testimony text-center">
						<span class="img-user" style="background-image: url(images/person2.jpg);"></span>
						<span class="user">Booking.com</span>
						<blockquote>
							<p><i class="icon-quotes-left"></i>Chia sẻ dữ liệu</p>
						</blockquote>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="testimony text-center">
						<span class="img-user" style="background-image: url(images/person1.jpg);"></span>
						<span class="user">Traveloka</span>
						<blockquote>
							<p><i class="icon-quotes-left"></i>Cung cấp vé máy bay</p>
						</blockquote>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="testimony text-center">
						<span class="img-user" style="background-image: url(images/person3.jpg);"></span>
						<span class="user">Travel</span>
						<blockquote>
							<p><i class="icon-quotes-left"></i> Gợi ý địa điểm du lịchß.</p>
						</blockquote>
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

