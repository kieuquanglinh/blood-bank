<?php
include 'models/nhommau_model.php';

class C_nhommau {
    public function hienthi_index(){
        $nhommau = new M_nhommau();
        $bang = $nhommau->chon_tatca();
        return array('bang'=>$bang);
    }
}