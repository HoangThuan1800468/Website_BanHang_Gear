<?php 
    class Customer  extends Controller{
        function infor(){
            $this->view("Khach_hang/Customer",[
                "Page" =>"CustomerInformation"
            ]);
        }
    }
?>