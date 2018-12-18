<?php  
include_once 'connection.php';

class M_benhvien extends Database {
    public function chon_tatca($vitri=-1, $limit=-1)
    {
        $sql = "SELECT * FROM benhvien";
        if($vitri >= 0 &&  $limit > 1){
            $sql .= " LIMIT $vitri, $limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

}

?>