<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ngân Hàng Máu Trực Tuyến HN</title>
  
  <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-4.1.3.css">
  <link rel="stylesheet" type="text/css" href="public/style.css">
</head>

<body>

  <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
        <div class="container">
          <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar12">
            <a class="navbar-brand d-none d-md-block" href="index.php">
              <i class="fa d-inline fa-lg fa-circle"></i>
              <b> Ngân Hàng Máu</b>
            </a>
            <ul class="navbar-nav mx-auto">
              <li class="nav-item"> <a class="nav-link" href="index.php">Trang Chủ<br></a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">Điểm Hiến Máu Trong Tuần<br></a> </li>
              <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hiến Máu</a>
                <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown" style="color: white">
                  <a class="dropdown-item" href="#">Danh sách</a>
                  <a class="dropdown-item" href="dang-ky-hien-mau.php">Đăng Ký Hiến Máu</a>
                </div>
              </li>

              <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nhận Máu</a>
                <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Danh sách</a>
                  <a class="dropdown-item" href="dang-ky-nhan-mau.php">Đăng Ký Nhận Máu</a>
                </div>
              </li>
              <li class="nav-item"> <a class="nav-link" href="#">Liên Hệ</a> </li>
            </ul>
            <?php if(!( isset($_SESSION['sessionid'] ))){ ?>
          <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" href="dang-nhap.php">Đăng Nhập</a> </li>
            <li class="nav-item"> <a class="nav-link text-primary" href="dang-ky.php">Đăng Ký</a> </li>
          </ul>
          <?php } else { ?>
          <ul class="navbar-nav">
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài Khoản</a> 
              <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Thông Tin</a>
                <a class="dropdown-item" href="dang-xuat.php">Đăng Xuất</a>
              </div>
            </li>
          </ul>
          <?php } ?>
          </div>
        </div>
      </nav>