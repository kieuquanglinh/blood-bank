<?php 
include 'controllers/benhvien_controller.php';
include 'controllers/nhommau_controller.php';
include 'controllers/quanhuyen_controller.php';
$benhvien = new C_benhvien();
$noi_dung = $benhvien->hienthi_index();
$bang = $noi_dung['bang'];


$nhommau = new C_nhommau();
$nd_nhommau = $nhommau->hienthi_index();
$bang_nhommau = $nd_nhommau['bang']; // bảng nhóm máu
// print_r ($nd_nhommau);

$quanhuyen = new C_quanhuyen();
$nd_quanhuyen = $quanhuyen->hienthi_index();
$bang_quanhuyen = $nd_quanhuyen['bang'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="logo.ico">
  <title>Ngân hàng máu trực tuyến</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-4.1.3.css">
  <link rel="stylesheet" type="text/css" href="./public/style.css">
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="./public/js/ajax.hienmau.js"></script>
  
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
          <i class="fas fa-heartbeat"></i>
            <b> Ngân Hàng Máu</b>
          </a>
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"> <a class="nav-link" href="index.php">Trang Chủ<br></a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">Điểm Hiến Máu Trong Tuần<br></a> </li>
            <li class="nav-item dropdown"> 
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" 
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hiến Máu</a> 
              <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown" style="color: white">
                <a class="dropdown-item" href="danh-sach-hien-mau.php">Danh sách</a>
                <a class="dropdown-item" href="dang-ky-hien-mau.php">Đăng Ký Hiến Máu</a>
              </div>
            </li>

            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nhận Máu</a> 
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
    <div class="bg-dark">
      <p class="title-donor ml-5">Tìm người hiến máu</p>
      <div class="ml-3 pr-3">
        <div class="form-row">
          <div class="form-group col-lg-2">
            <select class="custom-select custom-select-sm mt-3 sl_nhommau" id="sl_nhommau">
              <option value="" selected>Chọn nhóm Máu</option>
              <?php 
                for($i=0; $i < count($bang_nhommau); $i++) { 
              ?>  
                <option value="<?=$bang_nhommau[$i]->maNhom ?>"><?=$bang_nhommau[$i]->tenNhom ?></option>
                </tr>
              <?php
                }
              ?>
            </select>
          </div>
          <div class="form-group col-lg-2">
            <select class="custom-select custom-select-sm mt-3 sl_quanhuyen" id="sl_quanhuyen">
              <option value="" selected>Chọn quận huyện</option>
              <?php 
                for($i=0; $i < count($bang_quanhuyen); $i++) { 
              ?>  
                <option value="<?=$bang_quanhuyen[$i]->maQH ?>"><?=$bang_quanhuyen[$i]->tenQH ?></option>
                </tr>
              <?php
                }
              ?>
            </select>
          </div>
          <div class="form-group col-lg-2">
              <button class="btn btn-light" type="submit" id="timkiem_hienmau" name="timkiem_hienmau">Tìm Kiếm</button>
          </div>
        </div>
      </div>
      <!-- Hiển thị tìm kiếm người hiến máu -->
      <div class="bg-dark mt-2" id="bang_timkiem_hienmau"></div>

    </div>
    <div class="bg-dark mt-3">
      <p class="title-hospital">Danh sách lượng máu của các bệnh viện (đơn vị: đv máu)</p>
      <div class="content-hospital">
        <table class="table table-striped table-dark ">
        <thead>
          <tr>
            <th scope="col">Tên Bệnh Viện</th>
            <th scope="col">Nhóm A</th>
            <th scope="col">Nhóm B</th>
            <th scope="col">Nhóm O</th>
            <th scope="col">Nhóm AB</th>
            <th scope="col">Liên hệ</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          for($i=0; $i < count($bang); $i++) { 
        ?>  
            <tr>
              <th scope="row"><?php echo $bang[$i]->tenBV ?></th>
              <td><?php echo $bang[$i]->nhomA ?></td>
              <td><?php echo $bang[$i]->nhomB ?></td>
              <td><?php echo $bang[$i]->nhomO ?></td>
              <td><?php echo $bang[$i]->nhomAB ?></td>
              <td><?php echo $bang[$i]->lienHe ?></td>
            </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
      </div>
      <p><a href="danh-sach-benh-vien.php">Xem chi tiết>></a></p>
    </div>
  <div>
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-6 mb-3">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">Địa Điểm Hiến Máu Trong Tuần</a>
            <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
            <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item list-group-item-action disabled">Xem thêm</a>
          </div>
        </div> -->
        <div class="col-md-12 mb-3">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">Bạn Đọc</a>
            <a href="#" class="list-group-item list-group-item-action">Thông tin cơ bản về máu</a>
            <a href="#" class="list-group-item list-group-item-action">Hiến máu có hại không</a>
            <a href="#" class="list-group-item list-group-item-action">Quyền lợi của người hiến máu</a>
            <a href="#" class="list-group-item list-group-item-action">Cặn dăn của thầy thuốc đối với người hiến máu</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-info p-4">
      <div class="container">
        <div class="row">
          <div class="p-0 col-lg-4 col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.1935868127466!2d105.78926020216767!3d21.02493875151984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4984052283%3A0x405da29983542b07!2zVmnhu4duIEh1eeG6v3QgSOG7jWMgLSBUcnV54buBbiBNw6F1IFRydW5nIMawxqFuZw!5e0!3m2!1svi!2s!4v1545230272218" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-md-5 align-self-center p-4 offset-md-1">
            <h4>Ngân Hàng Máu Trực Tuyến Hà Nội</h4>
            <p class="mb-4 text-primary">795 Folsom Ave, Suite 600 <br>San Francisco, CA 94107 <br> <abbr title="Phone">P:</abbr>
              (123) 456-7890 </p>
            <div class="row text-center">
              <div class="col-md-2 col-3">
                <a href="#" target="_blank"><i class="fab fa-facebook-f fa-2x"></i></a>
              </div>
              <div class="col-md-2 col-3">
                <a href="#" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
              </div>
              <div class="col-md-2 col-3">
                <a href="#" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
              </div>
              <div class="col-md-2 col-3">
                <a href="#" target="_blank"><i class="fab fa-pinterest fa-2x"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-dark py-3">
      <div class="container">
        <div class="row d-flex justify-content-between">
          <div class="col-lg-4 col-md-6">
            <p class="text-secondary mb-0">Copyright - longnhp62@wru.vn</p>
          </div>
          <div class="col-lg-4 col-md-6">
            <p class="text-secondary mb-0">2018 - www.nganhangmauhn.org</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- -<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>