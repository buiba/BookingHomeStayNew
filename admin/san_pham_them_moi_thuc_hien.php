<?php 
 
 session_start();
 if(($_SESSION['level']!=2)){
   header("Location: ../trang_chu.php");
 }
		// Lấy các dữ liệu bên trang Thêm mới bài viết
		$tensanpham = $_POST['txtTenSanPham'];
		$loaisanpham = $_POST['txtLoaiSanPham'];
		$trangthai = $_POST['txtTrangThai'];
		$giatien = $_POST['txtGiaTien'];
		$giakhuyenmai = $_POST['txtGiaKhuyenMai'];
		$bonho  = $_POST['txtBoNho'];
		$mota = $_POST['txtMoTa'];
		$soluong = $_POST['txtSoLuong'];
		$mausac = $_POST['txtMauSac'];
		// Upload hình ảnh
		// Upload hình ảnh
		$anhminhhoa = "images/" . basename($_FILES["txtAnhMinhHoa"]["name"]);
		$fileanhtam = $_FILES["txtAnhMinhHoa"]["tmp_name"];
		$result = move_uploaded_file($fileanhtam, $anhminhhoa);
		if(!$result) {
			$anhminhhoa=NULL;
		}

		// Chàn dữ liệu vào bảng tbl_tin_tuc
		// Bước 1: Kết nối đến CSDL 
		include("../config/dbconfig.php");
		$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

		// Bước 2: Chàn dữ liệu vào bảng Liên hệ
		$sql = "
		INSERT INTO `tbl_san_pham` (
			`id`, 
			`ten_san_pham`, 
			`loai_san_pham_id`,
			`trang_thai`,
			`gia_tien`,
			`gia_khuyen_mai`,
			`bo_nho_id`,
			`mau_sac_id`,
			`mo_ta`, 
			`so_luong`,
			`anh_minh_hoa`)
		VALUES (
			NULL, 
			'".$tensanpham."',
			'".$loaisanpham."', 
			'".$trangthai."', 
			'".$giatien."',
			'".$giakhuyenmai."',
			'".$bonho."',
			'".$mausac."',
			'".$mota."',
			'".$soluong."',
			'".$anhminhhoa."')";
		// Xem câu lệnh SQL viết có đúng hay không?
		// echo $sql;

		// Cho thực thi câu lệnh SQL trên
		mysqli_query($ketnoi, $sql);
		echo '
			<script type="text/javascript">
				alert("Thêm mới sản phẩm thành công!!!");
				window.location.href="san_pham_quan_tri.php";
			</script>';
	;?>