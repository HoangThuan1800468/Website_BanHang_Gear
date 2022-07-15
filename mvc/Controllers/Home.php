<?php 
    class Home  extends Controller{
        function Show(){
            $this->view("Khach_hang/Home",[
                "Page" =>"Trangchinh"
            ]);
        }
        function ShowAdmin(){
            $this->view("Quan_ly/Home",[
                "Page" =>"Dasboard"
            ]);
        }
        
    }
?>