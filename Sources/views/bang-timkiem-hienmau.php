<?php
include_once '../models/nguoidangky_model.php';
include_once '../controllers/nguoidangky_controller.php';
$nguoihienmau = new C_nguoidangky();
$nd_nguoihienmau = $nguoihienmau->hienthi_hienmau();
$bang_nguoihienmau =  $nd_nguoihienmau['bang']; // bảng người hiến múa
$data = '<table class="table table-striped table-dark ">
        <thead>
        <tr>
            <th scope="col">Họ Tên</th>
            <th scope="col">Nhóm Máu</th>
            <th scope="col">Quận Huyện</th>
            <th scope="col">Liên Hệ</th>
        </tr>
        </thead>
        <tbody>';
 
for($i=0; $i < count($bang_nguoihienmau); $i++) {
    $data .= '<tr><th scope="row">'. $bang_nguoihienmau[$i]->hoTen .'</th>';
    $data .= '<th>'. $bang_nguoihienmau[$i]->tenNhom .'</th>';
    $data .= '<th>'. $bang_nguoihienmau[$i]->tenQH .'</th>';
    $data .= '<th>'. $bang_nguoihienmau[$i]->dienThoai .'</th></tr>';
}
$data .= '</tbody></table>';
echo $data;
?>
  
    