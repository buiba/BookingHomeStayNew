<?php 
	// Lấy các dữ liệu bên trang đăng nhập
		$taikhoan = $_POST['txtTaiKhoan'];
		$matkhau = $_POST['txtMatKhau'];
		$nhaclaimatkhau =  $_POST['txtNhacLaiMatKhau'];
		$hoten = $_POST['txtHoTen'];
    	$email = $_POST['txtEmail'];
		$gioitinh = $_POST['gioitinh'];
		$email = $_POST['txtEmail'];
		$dienthoai = $_POST['txtDienThoai'];
		$cmt = $_POST['txtCMT'];
		$diachi = $_POST['txtDiaChi'];
		$noidung = $_POST['txtNoiDung'];
		$day=$_POST['day'];
		$month=$_POST['month'];
		$year=$_POST['year'];
	// Bước 1: Kết nối đến CSDL 
	include("./config/dbconfig.php");
	$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
	if($matkhau== $nhaclaimatkhau)
 		 {
				$sql = "
				SELECT *
				FROM `tbl_nguoidung` 
				WHERE `tai_khoan` = '".$taikhoan."' 
				";
			$result = mysqli_query($ketnoi, $sql);
				if (mysqli_num_rows($result) != 0) {
					echo '
							<script type="text/javascript">
								alert("Người dùng đã tồn tại!!!");
								window.location.href="register_account.php";
							</script>';
					} 
				else {
						$sql = "
							INSERT INTO `tbl_nguoidung` (
								`id_nguoidung`, 
								`tai_khoan`,
								`mat_khau`, 
								`ho_ten`, 
								`ngay_sinh`,
								`gioi_tinh`,
								`email`, 
								`sdt`, 
								`cmnd`, 
								`dia_chi`, 
								`trang_thai`, 
								`yeu_cau`) 
							VALUES (
								NULL, 
								'".$taikhoan."',
								'".$matkhau."',
								'".$hoten."',
								'$year-$month-$day',
								'".$gioitinh."',
								'".$email."',
								'".$dienthoai."',
								'".$cmt."',
								'".$diachi."',
								'1',
								'".$noidung."')";
							}
							mysqli_query($ketnoi, $sql);
							
								echo '
								<script type="text/javascript">
									alert("Gửi yêu cầu thành công!!!");
									window.location.href="register_account.php";
								</script>';
	
	   }
	   else{
		echo '
			<script type="text/javascript">
				alert("Mật khẩu không khớp!!!");
				window.location.href="register_account.php";
			</script>';

	   }
;?>