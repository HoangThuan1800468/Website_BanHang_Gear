<?php
    $teo = $this->model("Admin_qlkh_model");
    $teo -> xoaKH1($data['MSKH']);
    $teo -> xoaKH2($data['MSKH']);
    header("Location: ../../../Admin_controler/QuanLyKhachHang");
?>