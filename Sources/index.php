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
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css"> -->
  <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-4.1.3.css">
  <link rel="stylesheet" type="text/css" href="./public/style.css">
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <!-- <script src="./public/js/ajax.hienmau.js"></script> -->
  
</head>

<body>
  <script>
    $(document).ready(function(){
    $('#timkiem_hienmau').click(function(){
        $nhommau = $('#sl_nhommau :selected').val();
        $quanhuyen = $('#sl_quanhuyen :selected').val();
        $.get("bang-timkiem-hienmau.php",  {nhommau: $nhommau, quanhuyen: $quanhuyen}, function(data){
            $('#bang_timkiem_hienmau').html(data);
            // alert(data);
          });
    })
})
  </script>
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
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hiến Máu</a> 
              <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown" style="color: white">
                <a class="dropdown-item" href="#">Danh sách</a>
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
          <img class="img-fluid" src="https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyDW8nO9JhT_pEjebobq9pgUF2cEp0EUb1I&amp;markers=folsom+Ave+san+francisco&amp;center=folsom+Ave+san+francisco&amp;zoom=16&amp;size=640x450&amp;sensor=false&amp;scale=2"> </div>
        <div class="col-md-5 align-self-center p-4 offset-md-1">
          <h4>Heading</h4>
          <p class="mb-4 text-primary">795 Folsom Ave, Suite 600 <br>San Francisco, CA 94107 <br> <abbr title="Phone">P:</abbr> (123) 456-7890 </p>
          <div class="row text-center">
            <div class="col-md-2 col-3">
              <a href="#" target="_blank"><i class="fa fa-facebook text-primary fa-2x"></i></a>
            </div>
            <div class="col-md-2 col-3">
              <a href="#" target="_blank"><i class="fa fa-twitter text-primary fa-2x"></i></a>
            </div>
            <div class="col-md-2 col-3">
              <a href="#" target="_blank"><i class="fa fa-instagram text-primary fa-2x"></i></a>
            </div>
            <div class="col-md-2 col-3">
              <a href="#" target="_blank"><i class="fa text-primary fa-2x fa-pinterest-p"></i></a>
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
          <p class="text-secondary mb-0">Copyright - Lorem ipsum dolor sit amet</p>
        </div>
        <div class="col-lg-4 col-md-6">
          <p class="text-secondary mb-0">2018 - Lorem ipsum dolor sit amet</p>
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