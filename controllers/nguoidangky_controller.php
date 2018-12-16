<?php
session_start();
include 'models/nguoidangky_model.php';
/**
 * 
 */
class C_nguoidangky
{
	public function hienmau()
	{
		$nguoidangky = new M_nguoidangky();
		if(isset($_POST['btnHienmau'])){
			$hoTen = $_POST['hoTen'];
			$ngaySinh = $_POST['ngaySinh'];
			$gioiTinh = $_POST['gioiTinh'];
			$maNhom = $_POST['maNhom'];
			$maQH = $_POST['maQH'];
			$diaChi = $_POST['diaChi'];
			$dienThoai = $_POST['dienThoai'];
			$email = $_POST['email'];
			$dangky = $nguoidangky->dangkyhienmau($hoTen, $ngaySinh, $gioiTinh, $maNhom, $maQH, $diaChi, $dienThoai, $email);
			if($dangky){
				echo "Đăng ký thành công";
			} else {
				echo "Đăng ký không thành công. Xin thử lại!";
			}
		}
	}

	public function nhanmau()
	{
		$nguoidangky = new M_nguoidangky();
		if(isset($_POST['btnNhanmau'])){
			$hoTen = $_POST['hoTen'];
			$ngaySinh = $_POST['ngaySinh'];
			$gioiTinh = $_POST['gioiTinh'];
			$maNhom = $_POST['maNhom'];
			$soLuong = $_POST['soLuong'];
			$maQH = $_POST['maQH'];
			$diaChi = $_POST['diaChi'];
			$dienThoai = $_POST['dienThoai'];
			$email = $_POST['email'];
			$dangky = $nguoidangky->dangkynhanmau($hoTen,$ngaySinh, $gioiTinh, $maNhom, $soLuong, $maQH,$diaChi, $dienThoai,$email);
			if($dangky){
				echo "Đăng ký thành công";
			} else {
				echo "Đăng ký không thành công. Xin thử lại!";
			}
		}
	}

}
?>