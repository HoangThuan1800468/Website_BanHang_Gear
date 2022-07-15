<?php
    $MaLoaiHang = $data['MaLoaiHang'];
    $teo = $this->model("Admin_qlloaihh_model");
    $teo -> xoaloaihang($MaLoaiHang);
    header("Location: ../../Admin_controler/QuanLyLoaiHangHoa");
?>