<?php
class Admin_qlkh_model extends DB{
    
    public function getKH(){
        $qr = "SELECT * FROM (khachhang inner join diachikh on khachhang.MSKH = diachikh.MSKH)";
        return mysqli_query($this->con,$qr);
    }
    public function xoaKH1($MSKH){
        $qr = "DELETE FROM diachikh WHERE MSKH=$MSKH";
        return mysqli_query($this->con,$qr);
    }
    public function xoaKH2($MSKH){
        $qr = "DELETE FROM khachhang WHERE MSKH=$MSKH";
        return mysqli_query($this->con,$qr);
    }
    public function getNV(){
        $qr = "SELECT * FROM nhanvien";
        return mysqli_query($this->con,$qr);
    }
}
?>