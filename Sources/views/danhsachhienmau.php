<?php include 'head.php' ?>

<div class="bg-dark">

    <div class="ml-3 pr-3">
        <div class="form-row">

            <div class="form-group col-lg-2">
                <select class="custom-select custom-select-sm mt-3 select-hienmau-nhommau" 
                        id="select-hienmau-nhommau">
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
                <select class="custom-select custom-select-sm mt-3 select-hienmau-quanhuyen" 
                        id="select-hienmau-quanhuyen">
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
            <button id="btn-loc">Loc</button>
        </div>
    </div>
</div>

<div class="hospital-list">
     <table class="table table-striped table-dark ">
        <thead>
          <tr>
            <th scope="col">Họ Tên</th>
            <th scope="col">Giới Tính</th>
            <th scope="col">Nhóm Máu</th>
            <th scope="col">Quận Huyện</th>
            <th scope="col">Liên hệ</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          for($i=0; $i < count($bang_hienmau); $i++) { 
        ?>  
            <tr>
              <th scope="row"><?php echo $bang_hienmau[$i]->hoTen ?></th>
              <td><?php echo $bang_hienmau[$i]->gioiTinh ?></td>
              <td><?php echo $bang_hienmau[$i]->tenNhom ?></td>
              <td><?php echo $bang_hienmau[$i]->tenQH ?></td>
              <td><?php echo $bang_hienmau[$i]->dienThoai ?></td>
            </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
    <?php echo $pagination; ?>
</div>
<?php include 'foot.php' ?>