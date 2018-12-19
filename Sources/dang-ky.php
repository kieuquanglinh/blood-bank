<?php
include 'controllers/thanhvien_controller.php';
$thanhvien = new C_thanhvien();
$thanhvien->dangky();
include 'views/dangky.php';
?>