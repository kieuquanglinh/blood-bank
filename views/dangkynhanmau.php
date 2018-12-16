<?php include 'head.php' ?>
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

<?php include 'foot.php' ?>