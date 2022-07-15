<?php
    $MSHH = $data['MSHH'];
    $teo = $this->model("Admin_qlhh_model");
    $teo -> xoaHH($MSHH);
    $teo -> xoahinhHH($MSHH);
    header("Location: ../../../Admin_controler/QuanLyHangHoa");
?>