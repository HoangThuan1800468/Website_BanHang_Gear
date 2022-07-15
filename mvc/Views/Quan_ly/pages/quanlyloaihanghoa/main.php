<?php
    $teo = $this->model("Admin_qlloaihh_model");
    $result = $teo -> getloaiHH();
?>
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
        <h1 class="helvetica-font">Quản lý loại hàng hóa</h1>
    </div>
    <div class="container-fluid add-wrapper">
        <a class="btn btn-primary" href="../Admin_controler/QuanLyLoaiHangHoa_add">
            Thêm loại hàng hóa
        </a>
    </div>
    <!-- DATA -->
    <div class="container-fluid mt-3">
        
        <table class="table table-secondary table-hover table-bordered">
            <thead class="table-danger">
                <tr>
                    <th scope="col">Mã loại hàng</th>
                    <th scope="col">Tên loại hàng</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($result)){?>
                <tr>
                    <td><?php echo $row['MaLoaiHang'];?></td>
                    <td><?php echo $row['TenLoaiHang'];?></td>
                    <td>
                        <img class="product-image" src="../mvc/Views/media/image/category/<?php echo $row['anh'];?>" alt="">
                    </td>
                    <td>
                        <a class="text-decoration-none" href="../Admin_controler/QuanLyLoaiHangHoa_remove/<?php echo $row['MaLoaiHang'] ?>"><button type="button" class="btn btn-sm btn-danger">Xóa</button></a>
                        <a class="text-decoration-none" href="../Admin_controler/QuanLyLoaiHangHoa_edit/<?php echo $row['MaLoaiHang'] ?>"><button type="button" class="btn btn-sm btn-warning">Sửa</button></a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>