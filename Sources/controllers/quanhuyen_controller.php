<?php
include 'models/quanhuyen_model.php';

class C_quanhuyen {
    public function hienthi_index(){
        $quanhuyen = new M_quanhuyen();
        $bang = $quanhuyen->chon_tatca();
        return array('bang'=>$bang);
    }
}