<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>

<body>
  <div class="py-5 text-center" style="background-image: url(public/body-bg.jpg); background-size: cover; display: flex; align-items: center; justify-content: center; height: 100vh">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-6 col-10 p-5" style="background-color: rgba(0,0,0,.6); color: white; border-radius: 10px; box-shadow: 0 2px 3px rgba(0,0,0,.3);">
          <h1>Đăng Ký Thành Viên</h1>
          <p class="mb-3">Chào mừng bạn đến với Ngân Hàng Máu Trực Tuyến Hà Nội</p>
          <form class="text-left" action="" method="POST">
            <div class="form-group">
              <label for="hoTen">Họ Tên</label>
              <input type="text" class="form-control" id="hoTen" placeholder="Nguyễn Văn An" required="required" name="hoTen">
            </div>
            <div class="form-group">
              <label for="tenDangNhap">Tên Đăng Nhập</label>
              <input type="text" class="form-control" id="tenDangNhap" placeholder="nguyenvanan123" required="required"
                name="tenDangNhap">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="annv123@gmail.com" required="required"
                name="email">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="matKhau">Mật Khẩu</label>
                <input type="password" class="form-control" id="matKhau" placeholder="••••••" required="required" name="matKhau">
              </div>
              <div class="form-group col-md-6">
                <label for="xn_matKhau">Xác Nhận Mật Khẩu</label>
                <input type="password" class="form-control" id="xn_matKhau" placeholder="••••••" required="required"
                  name="xn_matKhau">
              </div>
            </div>
            <button type="submit" class="btn btn-secondary" name="btnDangkyTV">Đăng Ký</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>