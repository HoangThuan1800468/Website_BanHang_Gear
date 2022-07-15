<?php
class ProductModel extends DB{
    
    public function showlist($MaLoaiHang,$tenhanghoa){
        if($tenhanghoa != 'productname'){
            if($MaLoaiHang == -1){
                $qr = "SELECT * FROM (hanghoa inner join hinhhanghoa on hanghoa.MSHH = hinhhanghoa.MSHH) WHERE TenHH Like '%$tenhanghoa%' ";
            }else{
                $qr = "SELECT * FROM (hanghoa inner join hinhhanghoa on hanghoa.MSHH = hinhhanghoa.MSHH) WHERE MaLoaiHang = $MaLoaiHang AND TenHH Like '%$tenhanghoa%' ";
            }
        }else{
            if($MaLoaiHang == -1){
                $qr = "SELECT * FROM (hanghoa inner join hinhhanghoa on hanghoa.MSHH = hinhhanghoa.MSHH)";
            }else{
                $qr = "SELECT * FROM (hanghoa inner join hinhhanghoa on hanghoa.MSHH = hinhhanghoa.MSHH) WHERE MaLoaiHang = $MaLoaiHang";
            }
        }
        
        return mysqli_query($this->con,$qr);
    }
    public function showloai($MaLoaiHang){
        $qr = "SELECT `TenLoaiHang` FROM `loaihanghoa` WHERE MaLoaiHang = $MaLoaiHang";
        return mysqli_query($this->con,$qr);
    }
    public function loai(){
        $qr = "SELECT * FROM `loaihanghoa`";
        return mysqli_query($this->con,$qr);
    }
    public function thongtinhanghoa($MSHH){
        $qr = "SELECT * FROM (hanghoa inner join hinhhanghoa on hanghoa.MSHH = hinhhanghoa.MSHH) WHERE hanghoa.MSHH = $MSHH";
        return mysqli_query($this->con,$qr);
    }
    
}
?>