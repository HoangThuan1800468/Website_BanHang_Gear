<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
        <h1 class="helvetica-font">Quản lý đơn hàng</h1>
    </div>
    <!-- DATA -->
    <div class="container-fluid mt-3">
        <?php
         $teo = $this->model("Admin_qldathang_model");
         $result = $teo -> getdonhang();

        ?>
        <table class="table table-secondary table-hover table-bordered">
            <thead class="table-danger">
                <tr>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Họ tên khách hàng</th>
                    <th scope="col">Username khách</th>
                    <th scope="col">Ngày đặt hàng</th>
                    <th scope="col">Trạng thái đơn hàng</th>
                    <th scope="col">Tùy chọn</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)){?>
                <tr>
                    <td><?php echo $row['SoDonDH'];?></td>
                    <td><?php echo $row['HoTenKH'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['NgayDH'];?></td>
                    <td><?php echo $row['TrangThaiDH'];?></td>
                    <td>
                        <a class="text-decoration-none" href="../Admin_controler/QuanLyDonHang_chitiet/<?php echo $row['SoDonDH'] ?>"><button type="button" class="btn btn-sm btn-success">Chi tiết đơn hàng</button></a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>