
<footer id="qbootstrap-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-md-4 qbootstrap-widget">
						<h4>Về chúng tôi</h4>
						<p>Công ty chúng tôi chuyên cung cấp dịch vụ tư vấn chọn nơi nghỉ ngơi lý tưởng cho bạn trong mỗi lần du lịch.</p>
						<p>
							<small class="block">&copy; 2019 Bản quyền. All Rights Reserved.</small> 
							<small class="block">Designed by <a href="https://qbootstrap.com/" target="_blank">Booking.com</a> Nhóm 7: <a href="http://unsplash.co/" target="_blank">Bùi Ba(NT)</a></small>
						</p>
						<p>
							<ul class="qbootstrap-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-4 col-md-push-1">
						<h4>Chính sách</h4>
						<ul class="qbootstrap-footer-links">
						<?php
										//URL hiện tại của trang. cart_update.php sẽ chuyển lại trang này.
									
										include("./config/dbconfig.php");
                       					$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
										$sql="SELECT * 
										FROM tbl_tin_tuc
										where loai_tin_tuc_id=6";
										$dulieu = mysqli_query($ketnoi,$sql);
										$i=0;
										while ($row = mysqli_fetch_array($dulieu)){
											$i++;
										;?>
								<ul class="footer-links">
									<li><a href="news_detail.php?id=<?php echo $i;?>"><?php echo $row["tieu_de"];?></a></li>
								</ul>
								<?php
								}
								;?>
						</ul>
					</div>

					<div class="col-md-4 col-md-push-1">
						<h4>Thông tin liên hệ</h4>
						<ul class="qbootstrap-footer-links">
							<li>Ngõ 12 Chùa bộc, Đống đa <br> Hà Nội</li>
							<li><a href="tel://1234567920">+ 84 988 950 408</a></li>
							<li><a href="mailto:info@yoursite.com">infobooking@email.com</a></li>
							<li><a href="http://qbootstrap.com">booking.com</a></li>
						</ul>
					</div>

				</div>
			</div>
		</footer>