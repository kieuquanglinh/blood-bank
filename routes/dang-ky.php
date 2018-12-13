<?php
include '../controllers/dangky_controller.php';
$dangky = new C_dangky();
$dangky->dangky();
include '../views/dangky.php';
?>