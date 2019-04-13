<?php 
 session_start();
 if(($_SESSION['level']!=2)){
   header("Location: ../trang_chu.php");
 }
		// Lấy các dữ liệu bên trang Thêm mới bài viết
		$id = $_POST['txtID'];
		$tensanpham = $_POST['txtTenSanPham'];
		$loaisanpham = $_POST['txtLoaiSanPham'];
		$trangthai = $_POST['txtTrangThai'];
		$giatien = $_POST['txtGiaTien'];
		$giakhuyenmai = $_POST['txtGiaKhuyenMai'];
		$bonho =$_POST['txtBoNho'];
		$soluong = $_POST['txtSoLuong'];
		$mota = $_POST['txtMoTa'];
		$mausac= $_POST['txtMausac'];
		//Upload hình ảnh
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
		if($anhminhhoa==NULL) {		
			$sql = "
			UPDATE `tbl_san_pham` SET 
				`ten_san_pham` = '".$tensanpham."', 
				`loai_san_pham_id` = '".$loaisanpham."', 
				`trang_thai` = '".$trangthai."', 
				`gia_tien` = '".$giatien."', 
				`gia_khuyen_mai` = '".$giakhuyenmai."',
				`bo_nho_id` = '".$bonho."',
				`mau_sac_id` = '".$mausac."',
				`so_luong` = '".$soluong."',
				`mo_ta` = '".$mota."'
			WHERE `id` = '".$id."'
			";
		} else {
			$sql = "
			UPDATE `tbl_san_pham` SET 
				`ten_san_pham` = '".$tensanpham."',  
				`loai_san_pham_id` = '".$loaisanpham."',
				`trang_thai` = '".$trangthai."',  
				`gia_tien` = '".$giatien."', 
				`gia_khuyen_mai` = '".$giakhuyenmai."',
				`bo_nho_id` = '".$bonho."',
				`mau_sac_id` = '".$mausac."',
				`so_luong` = '".$soluong."',
				`mo_ta` = '".$mota."',
				`anh_minh_hoa` = '".$anhminhhoa."'
			WHERE `id` = '".$id."'
			";
		}
		
		// Xem câu lệnh SQL viết có đúng hay không?
		//  echo $sql;
		mysqli_query($ketnoi, $sql);
		// Cho thực thi câu lệnh SQL trên
		echo '
		<script type="text/javascript">
			alert("Sửa sản phẩm thành công!!!");
			window.location.href="san_pham_quan_tri.php";
		</script>';
 ;?>
		
	