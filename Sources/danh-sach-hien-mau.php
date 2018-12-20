<?php
include 'controllers/nhommau_controller.php';
include 'controllers/quanhuyen_controller.php';
include 'models/nguoidangky_model.php';
include 'controllers/nguoidangky_controller.php';

$nguoidangky = new C_nguoidangky();
$noi_dung = $nguoidangky->hienthi_hienmau_phantrang();
$bang_hienmau = $noi_dung['bang'];
$pagination = $noi_dung['paginationHTML'];

$nhommau = new C_nhommau();
$nd_nhommau = $nhommau->hienthi_index();
$bang_nhommau = $nd_nhommau['bang']; // select nhóm máu
// print_r ($nd_nhommau);

$quanhuyen = new C_quanhuyen();
$nd_quanhuyen = $quanhuyen->hienthi_index();
$bang_quanhuyen = $nd_quanhuyen['bang']; // select quận huyện
include 'views/danhsachhienmau.php';
echo 'hello';