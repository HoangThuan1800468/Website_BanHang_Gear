<?php 
    class Login extends Controller{
        function Customer(){
            $this->view("Khach_hang/Login");
        }
        function Admin(){
            $this->view("Quan_ly/Login");
        }
        
    }
?>