<?php
if(isset($_POST['dangxuat'])){
        unset($_SESSION['login_admin']);
        header('location: ../Login/Admin');
}
?>
 
    <!-- <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mx-auto" href="../Home/ShowAdmin"><span class="main-logo">GEAR!</span><span class="secondary-logo">admin</span></a>
            <form class="text-start mt-5" method="POST" action="">
                <a href="../Login/Admin"><button type="submit" name="dangxuat" class="btn btn-danger">Đăng xuất</button></a>
            <form class="text-start mt-5" method="POST" action="">
        </div>
    </nav>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <form class="container-fluid d-flex justify-content-evenly">
                <a href="../Admin_controler/QuanLyKhachHang"><button type="button" class="btn btn-warning btn-block">Quản lý Khách hàng</button></a>
                <a href="../Admin_controler/QuanLyNhanVien"><button type="button" class="btn btn-warning btn-block">Quản lý Nhân viên</button></a>
                <a href="../Admin_controler/QuanLyHangHoa"><button type="button" class="btn btn-warning btn-block">Quản lý Hàng hóa</button></a>
                <a href="../Admin_controler/QuanLyLoaiHangHoa"><button type="button" class="btn btn-warning btn-block">Quản lý Loại hàng hóa</button></a>
                <a href="../Admin_controler/QuanLyDonHang"><button type="button" class="btn btn-warning btn-block">Quản lý Đơn hàng</button></a>
            </form>
        </div>
    </div> -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand mx-auto" href="../Home/ShowAdmin"><span class="main-logo">GEAR!</span><span class="secondary-logo">admin</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Admin_controler/QuanLyKhachHang"><button type="button" class="btn btn-warning btn-block">Quản lý Khách hàng</button></a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../Admin_controler/QuanLyNhanVien"><button type="button" class="btn btn-warning btn-block">Quản lý Nhân viên</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Admin_controler/QuanLyHangHoa"><button type="button" class="btn btn-warning btn-block">Quản lý Hàng hóa</button></a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../Admin_controler/QuanLyLoaiHangHoa"><button type="button" class="btn btn-warning btn-block">Quản lý Loại hàng hóa</button></a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../Admin_controler/QuanLyDonHang"><button type="button" class="btn btn-warning btn-block">Quản lý Đơn hàng</button></a>
        </li>
      </ul>
      <form class="d-flex" method="POST" action="">
      <a href="../Login/Admin"><button type="submit" name="dangxuat" class="btn btn-danger">Đăng xuất</button></a>
      </form>
    </div>
  </div>
</nav>