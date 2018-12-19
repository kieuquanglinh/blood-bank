<?php 
include 'controllers/nhommau_controller.php';
$nhommau = new C_nhommau();
$nd_nhommau = $nhommau->hienthi_index();
$bang_nhommau = $nd_nhommau['bang'];
print_r ($nd_nhommau);
?>