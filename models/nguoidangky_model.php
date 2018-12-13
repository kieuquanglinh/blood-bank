<?php 
include ('connection.php');
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
}

?>