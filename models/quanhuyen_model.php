<?php  
include_once 'connection.php';

class M_quanhuyen extends Database {
    public function chon_tatca()
    {
        $sql = "SELECT * FROM quanhuyen";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>