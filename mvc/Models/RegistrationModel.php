<?php
class RegistrationModel extends DB{
    
    public function RegistrationAdd($HoTenKH,$TenCongTy,$SoDienThoai,$SoFax,$username,$password){
        $qr = "INSERT INTO `khachhang`(`MSKH`, `HoTenKH`, `TenCongTy`, `SoDienThoai`, `SoFax`, `username`, `password`) VALUES (null,'$HoTenKH', '$TenCongTy', '$SoDienThoai', '$SoFax', '$username', '$password')";
        return mysqli_query($this->con,$qr);
    }
    public function RegistrationAddLocation($Ma,$Diachi){
        $qral = "INSERT INTO `diachikh`(`MaDC`, `DiaChi`, `MSKH`) VALUES ($Ma,'$Diachi',$Ma)";
        return mysqli_query($this->con,$qral);
    }
    public function RegistrationTest($username){
        $qr = "SELECT * FROM khachhang WHERE username='$username'";
        return mysqli_query($this->con,$qr);
    }
    
}
?>