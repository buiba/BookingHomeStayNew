<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>K18HTTTC | Trang đăng nhập</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <script type="text/javascript">
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

    </script>
  </head>
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="dang_nhap_thuc_hien.php" onsubmit="return validateForm()">
              <h1>Đăng nhập</h1>
              <div>
                <input type="text" class="form-control" placeholder="Tài khoản" required="" name="txtTaiKhoan" id="txtTaiKhoan" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Mật khẩu" required="" name="txtMatKhau" id="txtMatKhau" />
              </div>
              <div>
                <button type="submit">Đăng nhập hệ thống</button>
              </div>

              <div class="clearfix"></div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
