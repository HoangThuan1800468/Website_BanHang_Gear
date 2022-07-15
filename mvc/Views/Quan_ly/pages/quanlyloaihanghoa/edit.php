<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin</title>
    <!-- Import Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        $teo = $this->model("Admin_qlloaihh_model");
        if(isset($data['MaLoaiHang'])){
            $id = $data['MaLoaiHang'];
            $result = $teo -> getloaihang($id);
            $row = mysqli_fetch_assoc($result);
            $MaLoaiHang = $row['MaLoaiHang'];
            $TenLoaiHang = $row['TenLoaiHang'];
        }
        if(isset($_POST['MaLoaiHang'])){
            $newTenLoaiHang = $_POST['TenLoaiHang'];
            $newTenHinh = $_FILES["TenHinh"]["name"];
            $newTenHinh_temp = $_FILES["TenHinh"]["tmp_name"];
            if(isset($newTenLoaiHang)&&isset($newTenHinh)){
                $teo -> capnhatloaihang($id,$newTenLoaiHang,$newTenHinh);
                move_uploaded_file($newTenHinh_temp, './mvc/Views/media/image/category/'.$newTenHinh);
                echo '<script type="text/javascript">alert("Cập nhât loại hàng hóa thành công!");window.location="../../Admin_controler/QuanLyLoaiHangHoa";</script>';
            }else{
                echo '<script type="text/javascript">alert("Không thành công!");</script>';
            }
        }
    ?>
    <div class="container-fluid">
        <form method="POST" action=""enctype="multipart/form-data">
            <fieldset disabled>
            <div class="mt-3 mb-3">
                <label for="MaLoaiHang" class="form-label">Mã loại hàng</label>
                <input name="MaLoaiHang" class="form-control" value="<?php echo $MaLoaiHang;?>">
            </div>
            </fieldset>
            <div class="mt-3 mb-3">
                <label for="TenLoaiHang" class="form-label">Tên loại hàng</label>
                <input name="TenLoaiHang" class="form-control" value="<?php echo $TenLoaiHang;?>" required>

                <label for="TenHinh" class="form-label">Hình ảnh</label>
                <input type="file" name="TenHinh" id="TenHinh" class="form-control" required>

            </div>
            <a class="btn btn-danger" href="../../Admin_controler/QuanLyLoaiHangHoa" role="button">Hủy</a>
            <button type= "submit" class="btn btn-success" name="MaLoaiHang">Lưu thay đổi</button>
        </form>
    </div>
</body>
</html>
