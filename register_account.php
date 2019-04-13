<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Homestay &mdash;Liên hệ đăng homestay</title>
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
    <!-- <script type="text/javascript">
        function validateForm() {
            // Bước 1: Lấy dữ liệu để check
            var taikhoan = document.getElementById("txtTaiKhoan").value;
            var matkhau = document.getElementById("txtMatkhau").value;

            // Bước 2: Kiểm tra dữ liệu hợp lệ hay không?
            if (taikhoan == "") {
                alert("Bạn chưa nhập tên tài khoản");
            } else if (matkhau == "") {
                alert("Bạn chưa nhập mật khẩu");
            } else {
                return true;
            }
            return false;
        }

    </script> -->

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
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/banner_bien.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
				   					<h1>Gửi yêu cầu đăng homestay</h1>
										<h2>Bạn cần cho thuê phòng, bạn muốn tăng doanh thu một cách nhanh nhất, hãy liên hệ với chúng tôi<a href="http://qbootstrap.com/" target="_blank">Bookingvietnam.tk</a></h2>
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

		<div id="qbootstrap-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Thông Tin Liên Hệ</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location-2"></i></span> Số 12 Chùa Bộc, Q. Đống Đa , <br> Tp. Hà Nội</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 84988950408</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">infobookingvietnam@gmail.com</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="https://qbootstrap.com/">Bookingvietnam.tk</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Yêu cầu đăng homestay</h3>
                        <form name="txtDangKi" class="login_form row" method="post" action="register_account_process.php"> 
                            <div class="row form-group">
								<div class="col-md-6">
									<label for="fname">Tài Khoản</label>
									<input type="text" name="txtTaiKhoan" class="form-control" placeholder="Họ tên">
								</div>
                            </div>
                            <div class="row form-group">
								<div class="col-md-6">
									<label for="fname">Mật Khẩu</label>
									<input type="text" name="txtMatKhau" class="form-control" placeholder="Mật khẩu">
								</div>
                            </div>
                            <div class="row form-group">
								<div class="col-md-6">
									<label for="fname">Nhập lại mật khâu</label>
									<input type="text" name="txtNhacLaiMatKhau" class="form-control" placeholder="Nhắc lại mật khẩu">
								</div>
                            </div>
                            <div class="row form-group">
								<div class="col-md-6">
									<label for="fname">Họ tên</label>
									<input type="text" name="txtHoTen" class="form-control" placeholder="Họ tên">
								</div>
                            </div>
                            <div class="row form-group">
								<div class="col-md-6">       
                                <td>
                                    <table>
                                    <label for="fname">Ngày Sinh</label>
                                    </table>
                               
                                </td>   
                                   <td>                                       
                                       <table>                                   
                                       <select name="day">
                                       <option value="ngay">Ngày</option>
                                       <?php
                                           for($i=1;$i<31;$i++)
                                           {
                                              echo"<option value='$i'>$i</option>";
                                           }
                                       ;?>
                                       </select>
                                       <select name="month">
                                           <option value="thang">Tháng</option>
                                           <?php
                                               $thang=array(1=>"Jan","Feb","Mar","Apr","May","Jun"."Aug","Sep","Oct","Nov","Dec");
                                               foreach($thang as $key=>$tam)
                                               {
                                                   echo"<option value='$key'>$tam</option>";
                                               }
                                           ;?>
                                       </select>
                                       <select name="year">
                                           <option value="nam">Năm</option>
                                               <?php
                                               for($j=1950;$j<=date("Y");$j++)
                                               {
                                                   echo"<option value='$j'>$j</option>";
                                               }
                                               ;?>
                                       </select>
                                       </table>
                                   </td>
								</div>
                            </div>
                        <div class="col-md-2">
                      
		                  <div class="row form-group">
                          <label for="fname">Giới Tính</label>
		                    <div class="form-field">
		                      <select name="gioitinh" id="people" class="form-control">
		                        <option value="1">Nam</option>
		                        <option value="2">Nu</option>
		                      </select>
		                    </div>
		                  </div>
		                </div>
                            <div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="text" name="txtEmail" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Số điện thoại</label>
									<input type="text" name="txtDienThoai" class="form-control" placeholder="Số điện thoại">
								</div>
                            </div>
                            <div class="row form-group">
								<div class="col-md-12">
									<label for="email">Chứng minh thư(ảnh chụp hai mặt cmt)</label>
									<input type="file" name="txtCMT" class="form-control" placeholder="Chứng minh thư">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Địa chỉ</label>
									<input type="text" name="txtDiaChi" class="form-control" placeholder="Địa chỉ">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
                                    <label for="message">Nội dung yêu cầu</label>
                                    <input type="text" name="txtNoiDung" class="form-control" placeholder="Nội dung">
									<!-- <textarea  name="txtNoiDung" cols="30" rows="10" class="form-control" placeholder="Nội dung yêu cầu"></textarea> -->
								</div>
							</div>
							<div class="form-group text-center">
								<input type="submit" value="Gửi Yêu Cầu" class="btn btn-primary">
							</div>

						</form>		
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
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

