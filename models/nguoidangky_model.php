<?php 
include_once ('connection.php');
/**
 * 
 */
class M_nguoidangky extends Database
{
    public function dangkyhienmau($hoTen, $ngaySinh, $gioiTinh, $maNhom, $maQH, $diaChi, $dienThoai, $email)
    {
        $sql = 'INSERT INTO hienmau(hoTen, ngaySinh, gioitinh, maNhom, maQH, diaChi, dienThoai, email) 
                VALUES (?,?,?,?,?,?,?,?)';
        $this->setQuery($sql);
        $param=array($hoTen, $ngaySinh, $gioiTinh, $maNhom, $maQH, $diaChi, $dienThoai, $email);
        return $this->execute($param);
        
    }

    public function dangkynhanmau($hoTen,$ngaySinh, $gioiTinh, $maNhom, $soLuong, $maQH,$diaChi, $dienThoai,$email)
    {
        $sql = 'INSERT INTO nhanmau(hoTen, ngaySinh, gioiTinh, maNhom, soLuong, maQH, diaChi, dienThoai, email) 
                VALUES (?,?,?,?,?,?,?,?,?)';
        $param=array($hoTen,$ngaySinh, $gioiTinh, $maNhom, $soLuong, $maQH,$diaChi, $dienThoai,$email);
        return $this->execute($param);
    }

    public function chon_hienmau($nhommau, $quanhuyen)
    {
        $sql = 'SELECT hienmau.hoTen, hienmau.gioitinh, nhommau.tenNhom, quanhuyen.tenQH, hienmau.dienThoai
                FROM hienmau, nhommau, quanhuyen
                WHERE hienmau.maNhom = nhommau.maNhom
                AND hienmau.maQH = quanhuyen.maQH ';
        if($nhommau != ""){
            $sql .= 'AND hienmau.maNhom = "' . $nhommau. '"'; 
        }
        if($quanhuyen != ""){
            $sql .= 'AND hienmau.maQH = "'. $quanhuyen .'"'; 
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function chon_nhanmau()
    {
        $sql = 'SELECT * FROM nhanmau';
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

}

?>