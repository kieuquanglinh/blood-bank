<?php
include '../controllers/benhvien_controller.php';
$benhvien = new C_benhvien();
$noi_dung = $benhvien->hienthi_phantrang();
$bang = $noi_dung['bang'];
$pagination = $noi_dung['paginationHTML'];
// print_r($bang);
include '../views/danhsachbenhvien.php';