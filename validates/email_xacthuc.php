<?php 
	
	include('../models/connection.php');

	$report = '';

	if(isset($_GET['makichhoat'])){

		$activation_code = $_GET['makichhoat'];
		$sql = 'select * from thanhvien where makichhoat = "' . $makichhoat . '" and kichhoat = '. 0;

		$result = mysqli_query($conn, $sql);

		$rows = mysqli_num_rows($result);
		if($rows) {
			while ($sub_result = mysqli_fetch_assoc($result)) {
				$idtv = $sub_result['idtv'];
				$update_sql = '
						UPDATE thanhvien
						SET kichhoat = 1
						WHERE idtv = "'.$idtv.'"';
				// $update = mysqli_query($conn, $update_sql);
				// $sub_rows = mysqli_num_rows($update);
				if($update = mysqli_query($conn, $update_sql)){
					$report = '<h2>Xác nhận email thành công. Bây giờ bận có thể đăng nhập <a href="../views/dangnhap.php">tại đây</a></h2>';
				}	
			}	
		} else {
			$report = '<h2>Bạn đã xác nhận email trước đó</h2>';
		}

	} else {
		$report = '<h2>Liên kết không hợp lệ</h2>';
	}

?>

<?php 
	echo $report;
?>