<?php
class CartModel extends DB{
    
    public function layhhtugiohang($username){
        $qr = "SELECT * FROM hanghoa inner join cart on hanghoa.MSHH = cart.MSHH WHERE username = '$username'";
        return mysqli_query($this->con,$qr);
    }
    public function layhhtugiohang1($username){
        $qr = "SELECT * FROM hanghoa inner join cart on hanghoa.MSHH = cart.MSHH WHERE username = '$username'";
        return mysqli_query($this->con,$qr);
    }
    public function thongtindathang($username){
        $qr = "SELECT * FROM khachhang inner join diachikh on khachhang.MSKH = diachikh.MSKH WHERE username = '$username'";
        return mysqli_query($this->con,$qr);
    }
    public function getAmountQuery($MSHH,$username){
        $qr = "SELECT * FROM cart WHERE MSHH=$MSHH AND username='$username'";
        return mysqli_query($this->con,$qr);
    }
    public function addQuerydaco($MSHH,$username){
        $qr = "UPDATE cart SET quantity = quantity + 1 WHERE MSHH=$MSHH AND username='$username'";
        return mysqli_query($this->con,$qr);
    }
    public function addQuerychuaco($MSHH,$username){
        $qr = "INSERT INTO cart (username, MSHH, quantity) VALUES ('$username', $MSHH, 1)";
        return mysqli_query($this->con,$qr);
    }
    public function truHH($MSHH,$username){
        $qr = "UPDATE cart SET quantity = quantity - 1 WHERE MSHH=$MSHH AND username='$username'";
        return mysqli_query($this->con,$qr);
    }
    public function xoaHH($MSHH,$username){
        $qr = "DELETE FROM cart WHERE MSHH=$MSHH AND username='$username'";
        return mysqli_query($this->con,$qr);
    }
    public function themHH($MSHH,$username){
        $qr = "UPDATE cart SET quantity = quantity + 1 WHERE MSHH=$MSHH AND username='$username'";
        return mysqli_query($this->con,$qr);
    }
    public function kiemtrasoluongtronggio($MSHH,$username){
        $qr = "SELECT `quantity` FROM `cart` WHERE MSHH = $MSHH and username='$username' ";
        return mysqli_query($this->con,$qr);
    }
    public function laymahoadon(){
        $qr = "SELECT `AUTO_INCREMENT`
        FROM  INFORMATION_SCHEMA.TABLES
        WHERE TABLE_SCHEMA = 'quanlydathang'
        AND   TABLE_NAME   = 'dathang';";
        return mysqli_query($this->con,$qr);
    }
    public function dathang($MSKH){
        $qr = "INSERT INTO dathang (MSKH, MSNV, NgayDH, NgayGH, TrangThaiDH) VALUES ('$MSKH', null, CURRENT_TIMESTAMP, null, 'pending')";
        return mysqli_query($this->con,$qr);
    }
    public function chitietdathang($value_autoIncrement, $MSHH, $SoLuong,$Gia){
        $qr = "INSERT INTO `chitietdathang`(`SoDonDH`, `MSHH`, `SoLuong`, `GiaDatHang`, `GiamGia`) 
                VALUES ('$value_autoIncrement','$MSHH','$SoLuong','$Gia','0')";
        return mysqli_query($this->con,$qr);
    }
    public function clearcart($username){
        $qr = "DELETE FROM cart where username='$username'";
        return mysqli_query($this->con,$qr);
    }
    public function laysoluonghang($MAHH){
        $qr = "SELECT `SoLuongHang` FROM `hanghoa` WHERE MSHH = $MAHH";
        return mysqli_query($this->con,$qr);
    }
    public function capnhatsoluonghanghoa($MAHH,$soluong){
        $qr = "UPDATE `hanghoa` SET `SoLuongHang`= $soluong WHERE MSHH = $MAHH";
        return mysqli_query($this->con,$qr);
    }
}
?>