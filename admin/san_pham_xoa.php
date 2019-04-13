<?php 
	// session_start();
	// if (($_SESSION['level']!=2)) {
	//   header("Location: ../trang_chu.php");
	// }
	// Lấyid từ trên đường dẫn
	$id = $_GET['id'];

	// Xóa bài viết có id trong bảng tbl_tin_tuc
	// Bước 1: Kết nối đến CSDL 
	include("../config/dbconfig.php");
	$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

	// Bước 2: Xóa dữ liệu trong bảng Tin tức		i
	$sql = "DELETE FROM `tbl_san_pham` WHERE `id` = '".$id."'";

	// Xem câu lệnh SQL viết có đúng hay không?
	// echo $sql;

	// Cho thực thi câu lệnh SQL trên
	mysqli_query($ketnoi, $sql);
	echo '
		<script type="text/javascript">
			alert("Xóa sản phẩm thành công!!!");
			window.location.href="san_pham_quan_tri.php";
		</script>';
;?>