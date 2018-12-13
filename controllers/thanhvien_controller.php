<?php 
/**
 * 
 */
include 'models/thanhvien_model.php';
class C_thanhvien
{	
	public function dangky()
	{
		
		$thanhvien = new M_thanhvien();
		if(isset($_POST['btnDangkyTV'])){
			$hoTen = $_POST['hoTen'];
			$tenDangNhap = $_POST['tenDangNhap'];
			$email = $_POST['email'];
			$matKhau = $_POST['matKhau'];
			$xn_matKhau = $_POST['xn_matKhau'];
			$maKichHoat = md5(rand());
			if($matKhau != $xn_matKhau){
				echo "<script>alert('Xác nhận mật khẩu không khớp không khớp')</script>";
			}
			else {
				$dangki = $thanhvien->them_thanhvien($hoTen, $tenDangNhap, $email,password_hash($matKhau, PASSWORD_BCRYPT), $maKichHoat);
				if($dangki){
					// $url = 'http://localhost/blood-bank/';
   					// $to = $email;
					// $subject = "Ngân Hàng Máu Trực Tuyến - Xác nhận email đăng ký thành viên";
					// $txt = "Mời bạn vào liên kết sau để xác nhận email:" . $url . 'email_xacthuc.php?makichhoat=' . $makichhoat;

					// $headers = "From: longnhp62@wru.vn";
					// if(mail($to,$subject,$txt,$headers)){
					// 	header('location: ');
					// } else {
					// 	header('location: ');					
					// }
					echo "<script>alert('Đăng ký thành công')</script>";
				}
			}
		}
	}
	public function dangnhap()
	{
		$thanhvien = new M_thanhvien();
		if(isset($_POST['btnDangnhap'])){
			$tenDangNhap = $_POST['tenDangNhap'];
			$matKhau = $_POST['matKhau'];
			$kq = $thanhvien->tim_theo_tdn_mk($tenDangNhap, $matKhau);
			if($kq){
				$_SESSION['sessionid'] =rand(); 
				$_SESSION['tenDangNhap'] = $tenDangNhap;
				header('location: aaa.php');
			} else {
				echo "<script>alert('Thông tin đăng nhập không chính xác')</script>";
			}
		}
	}
	public function dangxuat()
    {
        session_destroy();
        header('Location: ../index.php');
    }
	
}
?>