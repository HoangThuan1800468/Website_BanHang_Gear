
    <div class="container-fluid">
        <h1 class="helvetica-font">Quản lý nhân viên</h1>
    </div>
    <div class="container-fluid add-wrapper">
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Thêm nhân viên
        </a>
        <div class="collapse" id="collapseExample">
            <?php
                include("./mvc/Views/Quan_ly/pages/quanlynhanvien/add.php");
            ?>
        </div>
    </div>
    <!-- DATA -->
    <div class="container-fluid mt-3">
        <?php
        $teo = $this->model("Admin_qlnv_model");
        $result = $teo -> getNV();
        ?>
        <table class="table table-secondary table-hover table-bordered">
            <thead class="table-danger">
                <tr>
                    <th scope="col">MSNV</th>
                    <th scope="col">Họ tên nhân viên</th>
                    <th scope="col">Chức vụ</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">username</th>
                    <th scope="col">password</th>
                    <th scope="col">Tùy chọn</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)){?>
                <tr>
                    <td><?php echo $row['MSNV'];?></td>
                    <td><?php echo $row['HoTenNV'];?></td>
                    <td><?php echo $row['ChucVu'];?></td>
                    <td><?php echo $row['DiaChi'];?></td>
                    <td><?php echo $row['SoDienThoai'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td>
                        <a class="text-decoration-none" href="../Admin_controler/QuanLyNhanVien_modunle/remove/<?php echo $row['MSNV'] ?>"><button type="button" class="btn btn-sm btn-danger">Xóa</button></a>
                        <a class="text-decoration-none" href="../Admin_controler/QuanLyNhanVien_modunle/edit/<?php echo $row['MSNV'] ?>"><button type="button" class="btn btn-sm btn-warning">Sửa</button></a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
