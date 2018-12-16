<?php include 'head.php' ?>
    <div class="blood-donator mb-3" style="background-color: rgba(0,0,0,.6); color: white">
      <div class="py-5 text-center">
        <div class="row" style="">
          <div class="mx-auto col-lg-6 col-10" style="">
            <h1>Đăng Ký Hiến Máu Tình Nguyện</h1>
            <form class="text-left">
              <div class="form-group"> <label for="form16" contenteditable="true">Họ Tên</label> <input type="text"
                  class="form-control" id="hoTen" placeholder="Nguyễn Văn An" name="hoTen"
                  required="required"> </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="ngaySinh">Ngày Sinh</label>
                  <input type="date" class="form-control" id="ngaySinh" required="required" name="ngaySinh">
                </div>
                <div class="form-group col-md-4">
                  <label for="gioiTinh">Giới Tinh</label>
                  <select class="custom-select" id="gioiTinh" name="gioiTinh" required="required">
                    <option>Chọn giới tính</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="form20">Nhóm Máu</label>
                  <select class="custom-select" id="nhomMau" name="nhomMau" required="required">
                    <option>Chọn nhóm máu</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-8">
                  <label for="diaChi">Địa Chỉ</label>
                  <input type="text" class="form-control" id="diaChi" placeholder="số 175, đường Tây Sơn, Trung Liệt"
                    name="diaChi" required="required">
                </div>
                <div class="form-group col-md-4">
                  <label for="form20">Quận Huyện</label>
                  <select class="custom-select" id="quanHuyen" name="quanHuyen" required="required">
                    <option>Chọn quận huyện</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="donator_email">Email</label>
                  <input type="email" class="form-control" id="donator_email" placeholder="annv123@gmail.com" name="donator_email"
                    required="required">
                </div>
                <div class="form-group col-md-6">
                  <label for="dienThoai">Điện Thoại</label>
                  <input type="text" class="form-control" id="dienThoai" placeholder="0123456789" name="dienThoai"
                    required="required">
                </div>
              </div>
              <div class="form-group">
              </div> <button type="submit" class="btn btn-danger" id="btnHienmau">Đăng Ký</button>
            </form>
          </div>
        </div>
      </div>
    </div>
<?php include 'foot.php' ?>