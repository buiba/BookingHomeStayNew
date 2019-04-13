<?php 
	session_start();
	if($_SESSION['level']!=2){
	  header("Location: ../trang_chu.php");
	}
	// Lấy các dữ liệu bên trang Thêm mới bài viết
	$tencongviec = $_POST['txtTenCongViec'];
    $day=$_POST['day'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $day1=$_POST['day1'];
    $month1=$_POST['month1'];
    $year1=$_POST['year1'];
	// Chàn dữ liệu vào bảng tbl_tin_tuc
	// Bước 1: Kết nối đến CSDL 
	include("../config/dbconfig.php");
	$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
	// Bước 2: Chàn dữ liệu vào bảng tin tức
	$sql = "
	INSERT INTO `tbl_cong_viec` (
		`cong_viec_id`, 
		`ten_cong_viec`,
		`ngay_bat_dau`, 
		`ngay_ket_thuc`) 
	VALUES (
		NULL, 
		'".$tencongviec."',
        '$year-$month-$day',
        '$year1-$month1-$day1')";
	
	// Xem câu lệnh SQL viết có đúng hay không?
	// echo $sql;

	// Cho thực thi câu lệnh SQL trên
	mysqli_query($ketnoi, $sql);
	echo '
		<script type="text/javascript">
			alert("Thêm mới công việc thành công!!!");
			window.location.href="trang_quan_tri.php";
		</script>';
;?>