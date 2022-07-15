<?php 
    class Cart  extends Controller{
        function CartInfor(){
            $this->view("Khach_hang/Customer",[
                "Page" =>"Cart"
            ]);
        }
        function CartModunles($pheptinh,$MSHH){
            $this->view("Khach_hang/Customer",[
                "Page" =>"cart-modules/$pheptinh",
                "MSHH" => $MSHH
            ]);
        }
        function CheckOutSucces(){
            $this->view("Khach_hang/Customer",[
                "Page" =>"checkout-success"
            ]);
        }
    }
?>