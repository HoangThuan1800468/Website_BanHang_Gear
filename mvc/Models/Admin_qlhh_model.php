<?php
class Admin_qlhh_model extends DB{
    
    public function getHH(){
        $qr = "SELECT * FROM ((hanghoa inner join loaihanghoa on hanghoa.MaLoaiHang = loaihanghoa.MaLoaiHang) inner join hinhhanghoa on hanghoa.MSHH = hinhhanghoa.MSHH)";
        return mysqli_query($this->con,$qr);
    }
    public function getLoaiHH(){
        $qr = "SELECT * FROM loaihanghoa";
        return mysqli_query($this->con,$qr);
    }
    public function themHH($TenHH,$QuyCach,$Gia,$SoLuongHang,$MaLoaiHang,$ChiTietHH){
        $qr = "INSERT INTO `hanghoa`(`MSHH`, `TenHH`, `QuyCach`, `Gia`, `SoLuongHang`, `MaLoaiHang`, `ChiTietHH`) 
                VALUES (null,'$TenHH','$QuyCach','$Gia','$SoLuongHang','$MaLoaiHang','$ChiTietHH')";
        return mysqli_query($this->con,$qr);
    }
    public function themHinhHH($TenHinh,$MAHH){
        $qr = "INSERT INTO hinhhanghoa (TenHinh, MSHH) VALUES ('$TenHinh', $MAHH)";
        return mysqli_query($this->con,$qr);
    }
    public function autoIncrement(){
        $qr = "SELECT `AUTO_INCREMENT`
        FROM  INFORMATION_SCHEMA.TABLES
        WHERE TABLE_SCHEMA = 'quanlydathang'
        AND   TABLE_NAME   = 'hanghoa';";
        return mysqli_query($this->con,$qr);
    }
    public function xoaHH($MSHH){
        $qr = "DELETE FROM hinhhanghoa WHERE MSHH=$MSHH";
        return mysqli_query($this->con,$qr);
    }
    public function xoahinhHH($MSHH){
        $qr = "DELETE FROM hanghoa WHERE MSHH=$MSHH";
        return mysqli_query($this->con,$qr);
    }
    public function thongtinhanghoa($MSHH){
        $qr = "SELECT * FROM hanghoa WHERE MSHH = $MSHH";
        return mysqli_query($this->con,$qr);
    }
    public function capnhatthongtinhangthoa($newTenHH,$newQuyCach,$newGia,$newSoLuongHang,$newChiTietHH,$newMaLoaiHang,$MSHH){
        $qr = "UPDATE `hanghoa` 
                SET `TenHH`='$newTenHH',`QuyCach`='$newQuyCach',`Gia`='$newGia',`SoLuongHang`='$newSoLuongHang',`MaLoaiHang`='$newMaLoaiHang',`ChiTietHH`='$newChiTietHH' 
                WHERE `MSHH`='$MSHH'";
        return mysqli_query($this->con,$qr);
    }
    public function capnhathinhHH($newTenHinh,$MSHH){
        $qr = "UPDATE hinhhanghoa SET TenHinh = '$newTenHinh' WHERE MSHH=$MSHH";
        return mysqli_query($this->con,$qr);
    }
}
?>