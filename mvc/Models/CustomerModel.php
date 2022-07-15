<?php
class CustomerModel extends DB{
    
    public function thongtin($username){
        $qr = "SELECT * FROM khachhang inner join diachikh on khachhang.MSKH=diachikh.MSKH WHERE username='$username'";
        return mysqli_query($this->con,$qr);
    }
    public function donhang($MSKH){
        $qr = "SELECT * FROM dathang WHERE MSKH='$MSKH'";
        return mysqli_query($this->con,$qr);
    }
    public function chtietdonhang($id){
        $qr = "SELECT * FROM chitietdathang inner join hanghoa on chitietdathang.MSHH = hanghoa.MSHH WHERE SoDonDH='$id'";
        return mysqli_query($this->con,$qr);
    }
}
?>