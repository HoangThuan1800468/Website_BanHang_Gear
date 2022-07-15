    
    <div class="container-fluid">
        <h1 class="helvetica-font">Quản lý hàng hóa</h1>
    </div>
    <div class="container-fluid add-wrapper">
        <a href="../Admin_controler/QuanLyHangHoa_action/add" class="btn btn-primary">
            Thêm hàng hóa
        </a>
    </div>
    <!-- DATA -->
    <div class="container-fluid mt-3">
        <?php
            $teo = $this->model("Admin_qlhh_model");
            $result = $teo -> getHH();
        ?>
        <table class="table table-secondary table-hover table-bordered">
            <thead class="table-info">
                <tr>
                    <th scope="col">Mã số hàng hóa</th>
                    <th scope="col">Tên hàng hóa</th>
                    <th scope="col">Quy cách</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng hàng</th>
                    <th scope="col">Loại hàng</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)){?>
                <tr>
                    <td><?php echo $row['MSHH'];?></td>
                    <td><?php echo $row['TenHH'];?></td>
                    <td><?php echo $row['QuyCach'];?></td>
                    <td><?php echo $row['Gia'];?></td>
                    <td><?php echo $row['SoLuongHang'];?></td>
                    <td><?php echo $row['TenLoaiHang'];?></td>
                    <td>
                        <img class="product-image" src="../mvc/Views/media/image/product-image/<?php echo $row['TenHinh'];?>" alt="">
                    </td>
                    <td>
                        <a class="text-decoration-none" href="../Admin_controler/QuanLyHangHoa_modunle/remove/<?php echo $row['MSHH'] ?>"><button type="button" class="btn btn-sm btn-danger">Xóa</button></a>
                        <a class="text-decoration-none" href="../Admin_controler/QuanLyHangHoa_edit/<?php echo $row['MSHH'] ?>"><button type="button" class="btn btn-sm btn-warning">Sửa</button></a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>