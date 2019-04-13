<!DOCTYPE html>
<html>
<head>
	<title>Web Điện Thoại | Thực hiện đăng nhập</title>
</head>
<body>
	<?php
		// Lấy các dữ liệu bên trang Thêm mới bài viết
		$taikhoan = $_POST['txtTaiKhoan'];
		$matkhau = $_POST['txtMatKhau'];

		// Kết nối đến CSDL 
		include("../config/dbconfig.php");
	    $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

		// Chèn dữ liệu vào bảng Liên hệ
		$sql = "
		SELECT *
		FROM `tbl_nguoi_dung` 
		WHERE `tai_khoan` = '".$taikhoan."' AND `mat_khau` = '".$matkhau."'
		";
		
		// Xem câu lệnh SQL viết có đúng hay không?
		// echo $sql;
		

		// Thực thi câu lệnh SQL trên
		$result = mysqli_query($ketnoi, $sql);

		if (mysqli_num_rows($result) == 0) {
			echo '<script type="text/javascript">';
			echo 'alert("Tai khoan hoac mat khau khong chinh xac")';
			echo '</script>';

			header("Location:../dang_nhap.php");

		} else {
			session_start();
			$_SESSION['tai_khoan'] = $taikhoan;
			$data=mysqli_fetch_assoc($result);
			$_SESSION['level']=$data["level"];
			if($_SESSION['level']==2){
				header("Location: trang_quan_tri.php");
				exit();
			}
			else{
			header("Location: ../trang_chu.php");
			exit();
			}
		}
		;?>
	</body>
	</html>