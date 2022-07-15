<?php 
    class Product  extends Controller{
    
        function ListProduct($mahang,$seach){
            $chuoi = explode('=', $seach);
            $mang1 = $chuoi[0];
            if($mang1 == "productname" || $mang1 != 'id_product'){
                $this->view("Khach_hang/Product",[
                    "Page" =>"ListProduct",
                    "maloaihang" =>$mahang,
                    "seach" =>$seach    
                ]);
            }else{
                $mang2 = $chuoi[1];
                $this->view("Khach_hang/Product",[
                    "Page" =>"ProductDetail",
                    "maloaihang" =>$mahang,
                    "mahanghoa" =>$mang2
                ]);
            }
        }
    }
?>