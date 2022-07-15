
    <div class="container-fluid">
        <h1 class="helvetica-font">Quản lý khách hàng</h1>
    </div>
    <!-- DATA -->
    <div class="container-fluid mt-3">
        <?php
        $teo = $this->model("Admin_qlkh_model");
        $result = $teo -> getKH();
        ?>
        <table class="table table-secondary table-hover table-bordered">
            <thead class="table-danger">
                <tr>
                    <th scope="col">MSKH</th>
                    <th scope="col">Họ tên khách hàng</th>
                    <th scope="col">Tên công ty</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Số Fax</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">username</th>
                    <th scope="col">password</th>
                    <th scope="col">Tùy chọn</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)){?>
                <tr>
                    <td><?php echo $row['MSKH'];?></td>
                    <td><?php echo $row['HoTenKH'];?></td>
                    <td><?php echo $row['TenCongTy'];?></td>
                    <td><?php echo $row['SoDienThoai'];?></td>
                    <td><?php echo $row['SoFax'];?></td>
                    <td><?php echo $row['DiaChi'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td>
                        <a class="text-decoration-none" href="../Admin_controler/QuanLyKhachHang_modunle/remove/<?php echo $row['MSKH'] ?>"><button type="button" class="btn btn-sm btn-danger">Xóa</button></a>                        
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
