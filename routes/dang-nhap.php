<?php
include '../controllers/dangnhap_controller.php';
$dangnhap = new C_dangnhap();
$dangnhap->dangnhap();
include '../views/dangnhap.php';