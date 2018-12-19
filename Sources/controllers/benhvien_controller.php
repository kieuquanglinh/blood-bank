<?php
session_start();
include 'models/benhvien_model.php';
include 'models/pagination.php';


class C_benhvien{
    public function hienthi_phantrang()
    {
        $benhvien = new M_benhvien();
        $bang = $benhvien->chon_tatca();

        $bang_hientai = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $pagination = new pagination(count($bang), $bang_hientai, 5, 3);
        $paginationHTML = $pagination->showPagination();
        $limit = $pagination->_nItemOnPage;
        $vitri = ($bang_hientai - 1) * $limit;
        $bang = $benhvien->chon_tatca($vitri,$limit);
        return array('bang'=>$bang, 'paginationHTML'=>$paginationHTML);
    }

    public function hienthi_index(){
        $benhvien = new M_benhvien();
        $bang = $benhvien->chon_tatca(0,4);
        return array('bang'=>$bang);
    }
}
?>