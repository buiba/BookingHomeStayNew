<?php 
// session_start();
// if(($_SESSION['level']!=2)){
//   header("Location: ../trang_chu.php");
// }
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

    <title>K18HTTTC | Trang quản trị bài viết</title>

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
                  <h1>QUẢN TRỊ BÌNH LUẬN</h1>
                  <div>
                    <!-- <p style="text-align: right;"><a href="bai_viet_them_moi.php">Thêm mới <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></p> -->
                   <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Họ Tên</th>
                          <th>Số CMT</th>
                          <th>Địa Chỉ</th>
                          <th>Nội Dung</th>
                          <th>Trang Thái</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      // Bước 1: Kết nối đến CSDL
                      include("../config/dbconfig.php");
                      $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

                      //Bước 2: Hiển thị các dữ liệu trong bảng tblLienHe ra đây
                      $sql = "
                        SELECT * 
                        FROM tbl_nguoidung
                        ORDER BY id_nguoidung DESC";
                      $dulieu = mysqli_query($ketnoi, $sql);
                      $i = 0;
                      while ($row = mysqli_fetch_array($dulieu)) {

                      if($row["trang_thai"]=='1')    
                      {
                        $duyet="Chưa duyệt";
                      }
                      else if($row["trang_thai"]=='2')  
                       {
                        $duyet="Đã duyệt";
                      }
                      else
                      {
                        $duyet="Chưa duyệt";
                      }
                      $i++;
                      ;?>

                        <tr>
                          <th scope="row"><?php echo $i;?></th>
                          <td><?php echo $row["tai_khoan"];?></td>
                          <td><?php echo $row["mat_khau"];?></td>
                          <td><?php echo $row["ho_ten"];?></td>
                          <td><?php echo $row["cmnd"];?></td>
                          <td><?php echo $row["dia_chi"];?></td>
                          <td><?php echo $row["yeu_cau"];?></td>
                          <td><a href="approved_account.php?id=<?php echo $row['id_nguoidung'];?>"><?php echo $duyet;?></a></td>
                         
                          <td><a href="acccount_delete.php?id=<?php echo $row['id_nguoidung'];?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                        </tr>
                      <?php
                      }
                      ;?>
                      </tbody>
                    </table>


                  </div>
                </div>
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