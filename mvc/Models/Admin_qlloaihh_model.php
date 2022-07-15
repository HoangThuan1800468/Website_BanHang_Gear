<?php
class Admin_qlloaihh_model extends DB{
    public function getloaiHH(){
        $qr = "SELECT * FROM loaihanghoa";
        return mysqli_query($this->con,$qr);
    }
    public function themloaiHH($TenLoaiHang,$anh){
        $qr = "INSERT INTO `loaihanghoa`(`MaLoaiHang`, `TenLoaiHang`, `anh`) VALUES (null,'$TenLoaiHang','$anh')";
        return mysqli_query($this->con,$qr);
    }
    public function getloaihang($MaLoaiHang){
        $qr = "SELECT * FROM loaihanghoa WHERE MaLoaiHang = $MaLoaiHang";
        return mysqli_query($this->con,$qr);
    }
    public function capnhatloaihang($MaLoaiHang,$newTenLoaiHang,$newanh){
        $qr = "UPDATE loaihanghoa SET TenLoaiHang = '$newTenLoaiHang',anh='$newanh' WHERE MaLoaiHang=$MaLoaiHang";
        return mysqli_query($this->con,$qr);
    }
    public function xoaloaihang($MaLoaiHang){
        $qr = "DELETE FROM loaihanghoa WHERE MaLoaiHang=$MaLoaiHang";
        return mysqli_query($this->con,$qr);
    }
}
?>