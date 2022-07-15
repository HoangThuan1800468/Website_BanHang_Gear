<?php
class Admin_qlnv_model extends DB{
    
    public function addNV($HoTenNV,$ChucVu,$DiaChi,$SoDienThoai,$username,$password){
        $qr = "INSERT INTO nhanvien (HoTenNV, ChucVu, DiaChi, SoDienThoai, username, password) VALUES ('$HoTenNV', '$ChucVu', '$DiaChi', '$SoDienThoai', '$username', '$password')";
        return mysqli_query($this->con,$qr);
    }
    public function getNV(){
        $qr = "SELECT * FROM nhanvien";
        return mysqli_query($this->con,$qr);
    }
    public function xoaNV($MSNV){
        $qr = "DELETE FROM nhanvien WHERE MSNV=$MSNV";
        return mysqli_query($this->con,$qr);
    }
    public function thongtinNV($MSNV){
        $qr = "SELECT * FROM nhanvien WHERE MSNV = $MSNV";
        return mysqli_query($this->con,$qr);
    }
    public function UpdatethongtinNV($newHoTenNV,$newChucVu,$newDiaChi,$newSoDienThoai,$newpassword,$MSNV){
        $qr = "UPDATE nhanvien SET HoTenNV = '$newHoTenNV', ChucVu = '$newChucVu', DiaChi = '$newDiaChi', SoDienThoai = '$newSoDienThoai', password = '$newpassword' WHERE MSNV=$MSNV";
        return mysqli_query($this->con,$qr);
    }
}
?>