<?php  
include_once 'connection.php';

class M_nhommau extends Database {
    public function chon_tatca()
    {
        $sql = "SELECT * FROM nhommau";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

}

?>