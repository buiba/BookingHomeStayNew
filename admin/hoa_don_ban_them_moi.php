<?php 
 session_start();
 if($_SESSION['level']!=2){
   header("Location: ../trang_chu.php");
 }
;?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

   <title>Web Di Động Việt || Trang thêm mới hoá đơn</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <!-- Tiny mce -->
    <!-- <script src="../js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>		 -->
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <?php include("top.php");?>

            <!-- page content -->
            <div class="right_col" role="main">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <h1>Hoá Đơn Thêm Mới</h1>
                  <form method="post" action="bai_viet_them_moi_thuc_hien.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên nhân viên<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <select name="txtTenNhanVien">
                        <?php
                        // Bước 1: Kết nối đến CSDL
                        include("../config/dbconfig.php");
                        $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

                        //Bước 2: Hiển thị các dữ liệu trong bảng tblLienHe ra đây
                        $sql = "
                          SELECT * 
                          FROM tbl_nhanvien";
                        $dulieu = mysqli_query($ketnoi, $sql);
                        while ($row = mysqli_fetch_array($dulieu)) {
                        ;?>
                            <option value="<?php echo $row["nhan_vien_id"];?>"><?php echo $row["nhan_vien_id"];?></option>
                        <?php
                        }
                        ;?>
                        </select>

                    </div>
                  </div>
                  <br><br><br>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên khách hàng<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <select name="txtTenKhachHang">
                        <?php
                        // Bước 1: Kết nối đến CSDL
                        include("../config/dbconfig.php");
                        $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

                        //Bước 2: Hiển thị các dữ liệu trong bảng tblLienHe ra đây
                        $sql = "
                          SELECT * 
                          FROM tbl_khachhang";
                        $dulieu = mysqli_query($ketnoi, $sql);
                        while ($row = mysqli_fetch_array($dulieu)) {
                        ;?>
                            <option value="<?php echo $row["khach_hang_id"];?>"><?php echo $row["khach_hang_id"];?></option>
                        <?php
                        }
                        ;?>
                        </select>
                    </div>
                  </div>
                  <br><br><br>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên hàng<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <select name="txtTenKhachHang">
                        <?php
                        // Bước 1: Kết nối đến CSDL
                        include("../config/dbconfig.php");
                        $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

                        //Bước 2: Hiển thị các dữ liệu trong bảng tblLienHe ra đây
                        $sql = "
                          SELECT * 
                          FROM tbl_khachhang";
                        $dulieu = mysqli_query($ketnoi, $sql);
                        while ($row = mysqli_fetch_array($dulieu)) {
                        ;?>
                            <option value="<?php echo $row["khach_hang_id"];?>"><?php echo $row["khach_hang_id"];?></option>
                        <?php
                        }
                        ;?>
                        </select>
                    </div>
                  </div>
                  <br><br><br>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả bài viết</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <textarea name="txtMoTa" class="form-control col-md-7 col-xs-12"></textarea>
                    </div>
                  </div>
                  <br><br><br><br>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội dung bài viết</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <textarea name="txtNoiDung" class="form-control col-md-7 col-xs-12"></textarea>
                    </div>
                  </div>
                  <br><br><br><br>

                  <div class="form-group" style="float: right;">
                    <button type="submit">Thêm mới bài viết</button>
                  </div>
                  <br>

                </div>
                </form>
              </div>
            </div>
            <!-- /page content -->

            <?php include("bottom.php");?>
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  
  </body>
</html>