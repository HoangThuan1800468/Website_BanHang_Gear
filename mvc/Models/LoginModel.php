<?php
class LoginModel extends DB{
    
    public function login($username){
        $qr = "SELECT password FROM khachhang WHERE username='$username'";
        return mysqli_query($this->con,$qr);
    }
    public function Adminlogin($username){
        $qr = "SELECT password FROM nhanvien WHERE username='$username'";
        return mysqli_query($this->con,$qr);
    }
    
}
?>