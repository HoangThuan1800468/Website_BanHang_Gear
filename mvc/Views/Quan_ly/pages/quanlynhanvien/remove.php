<?php
    $MSNV = $data['MSNV'];
    $teo = $this->model("Admin_qlnv_model");
    $teo -> xoaNV($MSNV);
    header("Location: ../../../Admin_controler/QuanLyNhanVien");
?>