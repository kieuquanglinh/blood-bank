<?php
// session_start();
include 'models/nguoidangky_model.php';
/**
 * 
 */
class C_nguoidangky
{
	public function danngky_hienmau()
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

	public function dangky_nhanmau()
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

	public function hienthi_hienmau() {
		$nguoidangky = new M_nguoidangky();
		// if(isset($_POST['timkiem_hienmau'])){
		// 	$nhommau = $_POST['nhommau'];
		// 	$quanhuyen = $_POST['quanhuyen'];
		// 	$bang = $nguoidangky->chon_hienmau($nhommau, $quanhuyen);
		// 	return array('bang'=>$bang);
		// }
		$nhommau = $_GET['nhommau'];
		$quanhuyen = $_GET['quanhuyen'];
		$bang = $nguoidangky->chon_hienmau($nhommau, $quanhuyen);
		return array('bang'=>$bang);
	}

}
?>