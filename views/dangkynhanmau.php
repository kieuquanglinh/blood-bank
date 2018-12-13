<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
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
          <a class="navbar-brand d-none d-md-block" href="#">
            <i class="fa d-inline fa-lg fa-circle"></i>
            <b> Ngân Hàng Máu</b>
          </a>
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"> <a class="nav-link" href="#">Trang Chủ<br></a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">Điểm Hiến Máu Trong Tuần<br></a> </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hiến Máu</a>
              <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown" style="color: white">
                <a class="dropdown-item" href="#">Danh sách</a>
                <a class="dropdown-item" href="#">Đăng Ký Hiến Máu</a>
              </div>
            </li>

            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nhận Máu</a>
              <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Danh sách</a>
                <a class="dropdown-item" href="#">Đăng Ký Nhận Máu</a>
              </div>
            </li>
            <li class="nav-item"> <a class="nav-link" href="#">Liên Hệ</a> </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" href="./dangnhap.html">Đăng Nhập</a> </li>
            <li class="nav-item"> <a class="nav-link text-primary" href="./dangky.html">Đăng Ký</a> </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài Khoản</a>
              <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Thông Tin</a>
                <a class="dropdown-item" href="#">Đăng Xuất</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="blood-donator mb-3" style="background-color: rgba(0,0,0,.6); color: white">
      <div class="py-5 text-center">
        <div class="container">
          <div class="row" style="">
            <div class="mx-auto col-lg-6 col-10" style="">
              <h1 contenteditable="true">Đăng Ký Nhận Máu</h1>
              <form class="text-left">
                <div class="form-group">
                  <label for="receiver_full_name" contenteditable="true">Họ Tên</label>
                  <input type="text" class="form-control" id="receiver_full_name" placeholder="Nguyễn Văn An" name="receiver_full_name"
                    required="required">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="receiver_dob">Ngày Sinh</label>
                    <input type="date" class="form-control" id="receiver_dob" required="required" name="receiver_dob">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="receiver_sex">Giới Tinh</label>
                    <select class="custom-select" id="receiver_sex" name="receiver_sex" required="required">
                      <option>1</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="receiver_blood_group">Nhóm Máu</label>
                    <select class="custom-select" id="receiver_blood_group" name="receiver_blood_group" required="required">
                      <option>Chọn nhóm máu</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="form20">Lượng Máu Cần(đơn vi: đv máu)</label>
                    <select class="custom-select" id="receiver_blood_group" name="receiver_blood_group" required="required">
                      <option>Chọn nhóm máu</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="receiver_address">Địa Chỉ</label>
                    <input type="text" class="form-control" id="receiver_address" placeholder="số 175, đường Tây Sơn, Trung Liệt"
                      name="receiver_address" required="required">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="receiver_district">Quận Huyện</label>
                    <select class="custom-select" id="receiver_district" name="receiver_district" required="required">
                      <option>Chọn quận huyện</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="receiver_email">Email</label>
                    <input type="email" class="form-control" id="receiver_email" placeholder="annv123@gmail.com" name="receiver_email"
                      required="required">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="receiver_tel">Điện Thoại</label>
                    <input type="text" class="form-control" id="receiver_tel" placeholder="0123456789" name="receiver_tel"
                      required="required">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="form21" value="on">
                    <label class="form-check-label" for="form21"> I Agree with <a href="#">Term and Conditions</a> of
                      the service </label>
                  </div>
                </div> <button type="submit" class="btn btn-danger" id="register_donate">Đăng Ký</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-info p-4">
      <div class="container">
        <div class="row">
          <div class="p-0 col-lg-4 col-md-6">
            <img class="img-fluid" src="https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyDW8nO9JhT_pEjebobq9pgUF2cEp0EUb1I&amp;markers=folsom+Ave+san+francisco&amp;center=folsom+Ave+san+francisco&amp;zoom=16&amp;size=640x450&amp;sensor=false&amp;scale=2">
          </div>
          <div class="col-md-5 align-self-center p-4 offset-md-1">
            <h4>Heading</h4>
            <p class="mb-4 text-primary">795 Folsom Ave, Suite 600 <br>San Francisco, CA 94107 <br> <abbr title="Phone">P:</abbr>
              (123) 456-7890 </p>
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>