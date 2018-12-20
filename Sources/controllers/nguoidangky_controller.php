<?php
// session_start();
// include_once 'models/nguoidangky_model.php';
/**
 * 
 */
include 'models/pagination.php';
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
		$nhommau = $_GET['nhommau'];
		$quanhuyen = $_GET['quanhuyen'];
		$bang = $nguoidangky->chon_hienmau($nhommau, $quanhuyen);
		return array('bang'=>$bang);
	}

	public function hienthi_hienmau_phantrang()
    {
		$nguoidangky = new M_nguoidangky();
		
        $bang = $nguoidangky->chon_tatca_hienmau();
		$nhommau = (isset($_REQUEST['nhommau'])) ? $_REQUEST['nhommau'] : "";
		$quanhuyen = (isset($_REQUEST['quanhuyen'])) ? $_REQUEST['quanhuyen'] : "";
        $bang_hientai = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $pagination = new pagination(count($bang), $bang_hientai, 5, 3);
        $paginationHTML = $pagination->showPagination();
        $limit = $pagination->_nItemOnPage;
        $vitri = ($bang_hientai - 1) * $limit;
        $bang = $nguoidangky->chon_tatca_hienmau($vitri,$limit,$nhommau);
        return array('bang'=>$bang, 'paginationHTML'=>$paginationHTML);
	}
	
	public function hienthi_nhanmau_phantrang()
    {
        $nguoidangky = new M_nguoidangky();
        $bang = $nguoidangky->chon_tatca_nhanmau();

        $bang_hientai = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $pagination = new pagination(count($bang), $bang_hientai, 5, 3);
        $paginationHTML = $pagination->showPagination();
        $limit = $pagination->_nItemOnPage;
        $vitri = ($bang_hientai - 1) * $limit;
        $bang = $nguoidangky->chon_tatca_hienmau($vitri,$limit);
        return array('bang'=>$bang, 'paginationHTML'=>$paginationHTML);
    }

}
?>