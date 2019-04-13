<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hotel &mdash; 100% Free Fully Responsive HTML5 Template by qbootstrap.com</title>
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
			include("./source/top.php");
			;?>
		</nav>
		<aside id="qbootstrap-hero">
		<?php
			include("source/slide.php");
		;?>
		</aside>
		<div id="qbootstrap-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
					<?php 
							// Bước 1: Kết nối đến CSDL 
							include("./config/dbconfig.php");
							$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

							// Bước 2: Lấy dữ liệu từ trên đường đẫn
							$id = $_GET["id"];

							//Bước 3: Hiển thị các dữ liệu trong bảng tbl_tin_tuc ra đây
							if($id==1){
							$sql = "
								SELECT * 
								FROM tbl_tin_tuc
								WHERE loai_tin_tuc_id=6 and tieu_de like '%bảo hành%'";
						
							$dulieu = mysqli_query($ketnoi, $sql);

							$row = mysqli_fetch_array($dulieu)
							;?>
							<div>
								<h2><?php echo $row["tieu_de"];?></h2>

								<h4><?php echo $row["mo_ta"];?></h4>
								<!--  -->
								<p><?php echo $row["noi_dung"];?></p>
							</div>
							<?php
							}
							else if($id==2)
							{
								$sql = "
								SELECT * 
								FROM tbl_tin_tuc
								WHERE loai_tin_tuc_id=6 and tieu_de like '%bán hàng%'";
						
							$dulieu = mysqli_query($ketnoi, $sql);

							$row = mysqli_fetch_array($dulieu)
							;?>
							<div>
								<h2><?php echo $row["tieu_de"];?></h2>

								<h4><?php echo $row["mo_ta"];?></h4>
								<!--  -->
								<p><?php echo $row["noi_dung"];?></p>
							</div>
							<?php
							}
							else if($id==3)
							{
								$sql = "
								SELECT * 
								FROM tbl_tin_tuc
								WHERE loai_tin_tuc_id=6 and tieu_de like '%bảo mật%'";
						
							$dulieu = mysqli_query($ketnoi, $sql);

							$row = mysqli_fetch_array($dulieu)
							;?>
							<div>
								<h2><?php echo $row["tieu_de"];?></h2>

								<h4><?php echo $row["mo_ta"];?></h4>
								<!--  -->
								<p><?php echo $row["noi_dung"];?></p>
							</div>
							<?php
							}
							else if($id==4)
							{
								$sql = "
								SELECT * 
								FROM tbl_tin_tuc
								WHERE loai_tin_tuc_id=6 and tieu_de like '%sử dụng%'";
						
							$dulieu = mysqli_query($ketnoi, $sql);

							$row = mysqli_fetch_array($dulieu)
							;?>
							<div>
								<h2><?php echo $row["tieu_de"];?></h2>

								<h4><?php echo $row["mo_ta"];?></h4>
								<!--  -->
								<p><?php echo $row["noi_dung"];?></p>
							</div>
							<?php
							}
							else if($id==5)
							{
								$sql = "
								SELECT * 
								FROM tbl_tin_tuc
								WHERE loai_tin_tuc_id=6 and tieu_de like '%đổi trả%'";
						
							$dulieu = mysqli_query($ketnoi, $sql);

							$row = mysqli_fetch_array($dulieu)
							;?>
							<div>
								<h2><?php echo $row["tieu_de"];?></h2>

								<h4><?php echo $row["mo_ta"];?></h4>
								<!--  -->
								<p><?php echo $row["noi_dung"];?></p>
							</div>
							<?php
							}
							;?>
					<div class="col-md-4 col-md-push-1">
						<div class="aside animate-box">
							<form method="post" class="qbootstrap-form">
			              	<div class="row">
			                <div class="col-md-12">
			                  <div class="form-group">
			                    <label for="date">Ngày đến:</label>
			                    <div class="form-field">
			                      <i class="icon icon-calendar2"></i>
			                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
			                    </div>
			                  </div>
			                </div>
			                <div class="col-md-12">
			                  <div class="form-group">
			                    <label for="date">Ngày đi:</label>
			                    <div class="form-field">
			                      <i class="icon icon-calendar2"></i>
			                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
			                    </div>
			                  </div>
			                </div>
			                <div class="col-md-6">
			                  <div class="form-group">
			                    <label for="adults">Người Lớn</label>
			                    <div class="form-field">
			                      <i class="icon icon-arrow-down3"></i>
			                      <select name="people" id="people" class="form-control">
			                        <option value="#">1</option>
			                        <option value="#">2</option>
			                        <option value="#">3</option>
			                        <option value="#">4</option>
			                        <option value="#">5+</option>
			                      </select>
			                    </div>
			                  </div>
			                </div>
			                <div class="col-md-6">
			                  <div class="form-group">
			                    <label for="children">Trẻ Em</label>
			                    <div class="form-field">
			                      <i class="icon icon-arrow-down3"></i>
			                      <select name="people" id="people" class="form-control">
			                        <option value="#">1</option>
			                        <option value="#">2</option>
			                        <option value="#">3</option>
			                        <option value="#">4</option>
			                        <option value="#">5+</option>
			                      </select>
			                    </div>
			                  </div>
			                </div>
			                <div class="col-md-12">
			                  <input type="submit" name="submit" id="submit" value="Search" class="btn btn-primary btn-block">
			                </div>
			              </div>
			            </form>
						</div>
						<div class="aside animate-box">
							<h3>Tin Nổi Bật</h3>
							<div class="blog-entry-side">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(images/blog-3.jpg);"></span>
									<div class="desc">
										<span class="date">August 24, 2017</span>
										<h3>Bạn đã bao giờ "sống đúng như người Huế" khi đến Huế chưa? </h3>
										<span class="cat">Chi Tiết</span>
									</div>
								</a>
							</div>
							<div class="blog-entry-side">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(images/blog-2.jpg);"></span>
									<div class="desc">
										<span class="date">August 24, 2017</span>
										<h3>Vườn thanh long đang khiến giới trẻ đứng ngồi không yên ở Bình Thuận </h3>
										<span class="cat">Chi Tiết</span>
									</div>
								</a>
							</div>
							<div class="blog-entry-side">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(images/blog-3.jpg);"></span>
									<div class="desc">
										<span class="date">August 24, 2017</span>
										<h3>Bạn đã chiêm ngưỡng "những điệu nhảy trên nước" của nghề đánh cá chưa? </h3>
										<span class="cat">Chi Tiết</span>
									</div>
								</a>
							</div>
						</div>
						<div class="aside animate-box">
							<h3>Category</h3>
							<ul class="category">
								<li><a href="#">Activities<span>(3)</span></a></li>
								<li><a href="#">Hotel<span>(5)</span></a></li>
								<li><a href="#">Tour<span>(2)</span></a></li>
								<li><a href="#">Travel<span>(3)</span></a></li>
								<li><a href="#">Night<span>(2)</span></a></li>
							</ul>
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
