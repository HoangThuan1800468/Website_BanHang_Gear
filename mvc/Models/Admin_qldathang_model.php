<?php
class Admin_qldathang_model extends DB{
    public function getdonhang(){
        $qr = "SELECT * FROM (dathang inner join khachhang on dathang.MSKH = khachhang.MSKH)";
        return mysqli_query($this->con,$qr);
    }
    public function chitietdonhang($id){
        $qr = "SELECT * FROM ((dathang inner join chitietdathang on dathang.SoDonDH = chitietdathang.SoDonDH) inner join hanghoa on chitietdathang.MSHH = hanghoa.MSHH) WHERE dathang.SoDonDH = '$id'";
        return mysqli_query($this->con,$qr);
    }
    public function tiepnhandonhang($id){
        $qr = "UPDATE dathang SET TrangThaiDH = 'Đã xác nhận' WHERE SoDonDH = '$id'";
        return mysqli_query($this->con,$qr);
    }
}
?>