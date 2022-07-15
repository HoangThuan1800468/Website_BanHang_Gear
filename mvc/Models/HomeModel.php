<?php
class HomeModel extends DB{
    
    public function loai(){
        $qr = "Select * from loaihanghoa";
        return mysqli_query($this->con,$qr);
    }
    
}
?>