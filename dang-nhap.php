<?php
include 'controllers/thanhvien_controller.php';
$thanhvien = new C_thanhvien();
$thanhvien->dangnhap();
include 'views/dangnhap.php';