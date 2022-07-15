<?php 
    class Admin_controler  extends Controller{
        function QuanLyKhachHang(){
            $this->view("Quan_ly/Home",[
                "Page" =>"quanlykhachhang/main"
            ]);
        }
        function QuanLyKhachHang_modunle($action,$MSKH){
            $this->view("Quan_ly/Home",[
                "Page" =>"quanlykhachhang/$action",
                "MSKH" =>$MSKH
            ]);
        }
        function QuanLyNhanVien(){
            $this->view("Quan_ly/Home",[
                "Page" =>"quanlynhanvien/main"
            ]);
        }
        function QuanLyNhanVien_modunle($action,$MSNV){
            $this->view("Quan_ly/Home",[
                "Page" =>"quanlynhanvien/$action",
                "MSNV" =>$MSNV
            ]);
        }
        function QuanLyHangHoa(){
            $this->view("Quan_ly/Home",[
                "Page" =>"quanlyhanghoa/main"
            ]);
        }
        function QuanLyHangHoa_action($action){
            $this->view("Quan_ly/pages/quanlyhanghoa/$action");
        }
        function QuanLyHangHoa_edit($MAHH){
            $this->view("Quan_ly/pages/quanlyhanghoa/edit",[
                "MAHH" =>$MAHH
            ]);
        }
        function QuanLyHangHoa_modunle($action,$MSHH){
            $this->view("Quan_ly/Home",[
                "Page" =>"quanlyhanghoa/$action",
                "MSHH" =>$MSHH
            ]);
        }
        function QuanLyLoaiHangHoa(){
            $this->view("Quan_ly/Home",[
                "Page" =>"quanlyloaihanghoa/main"
            ]);
        }
        function QuanLyLoaiHangHoa_add(){
            $this->view("Quan_ly/pages/quanlyloaihanghoa/add");
        }
        function QuanLyLoaiHangHoa_edit($MaLoaiHang){
            $this->view("Quan_ly/pages/quanlyloaihanghoa/edit",[
                "MaLoaiHang" =>$MaLoaiHang
            ]);
        }
        function QuanLyLoaiHangHoa_remove($MaLoaiHang){
            $this->view("Quan_ly/Home",[
                "Page" =>"quanlyloaihanghoa/remove",
                "MaLoaiHang" =>$MaLoaiHang
            ]);
        }
        function QuanLyDonHang(){
            $this->view("Quan_ly/Home",[
                "Page" =>"quanlydonhang/main"
            ]);
        }
        function QuanLyDonHang_chitiet($id){
            $this->view("Quan_ly/Home",[
                "Page" =>"quanlydonhang/detail",
                "id" =>$id
            ]);
        }
    }
?>