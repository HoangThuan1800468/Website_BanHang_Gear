
<?php
        $teo = $this->model("Admin_qlhh_model");

        $query_loaihanghoa = $teo -> getLoaiHH();

        if(isset($data['MAHH'])){
            $MSHH = $data['MAHH'];
            $result = $teo -> thongtinhanghoa($MSHH);

            $row = mysqli_fetch_assoc($result);
            $TenHH = $row['TenHH'];
            $QuyCach = $row['QuyCach'];
            $Gia = $row['Gia'];
            $ChiTietHH = $row['ChiTietHH'];
            $SoLuongHang = $row['SoLuongHang'];
            $MaLoaiHang = $row['MaLoaiHang'];
        }
        if(isset($_POST['edit'])){
            $newTenHH = $_POST['TenHH'];
            $newQuyCach = $_POST['QuyCach'];
            $newGia = $_POST['Gia'];
            $newSoLuongHang = $_POST['SoLuongHang'];
            $newChiTietHH = $_POST['ChiTietHang'];
            $newMaLoaiHang = $_POST['MaLoaiHang'];
            $newTenHinh = $_FILES["TenHinh"]["name"];
            $newTenHinh_temp = $_FILES["TenHinh"]["tmp_name"];
            if(isset($newTenHH)&&isset($newQuyCach)&&isset($newGia)&&isset($newSoLuongHang)&&isset($newChiTietHH)&&isset($newMaLoaiHang)&&isset($newTenHinh)){
                $teo -> capnhatthongtinhangthoa($newTenHH,$newQuyCach,$newGia,$newSoLuongHang,$newChiTietHH,$newMaLoaiHang,$MSHH);
                $teo -> capnhathinhHH($newTenHinh,$MSHH);
                move_uploaded_file($newTenHinh_temp, './mvc/Views/media/image/product-image/'.$newTenHinh);
                echo '<script type="text/javascript">alert("Cập nhât hàng hóa thành công!");window.location="../../Admin_controler/QuanLyHangHoa";</script>';
            }else{
                echo '<script type="text/javascript">alert("Không thành công!");</script>';
            }
            
            
        }
    ?>
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
<br>
      <h1> Chỉnh sửa hàng hóa </h1>
    <div class="container-fluid">
        <form method="POST" action="" enctype="multipart/form-data">
            <fieldset disabled>
            <div class="mt-3 mb-3">
                <label for="MSHH" class="form-label">Mã số hàng hóa</label>
                <input name="MSHH" class="form-control" value="<?php echo $MSHH;?>" required>
            </div>
            </fieldset>
            <div class="mt-3 mb-3">
                <label for="TenHH" class="form-label">Tên hàng hóa</label>
                <input name="TenHH" class="form-control" value="<?php echo $TenHH;?>" required>

                <label for="QuyCach" class="form-label">Quy cách</label>
                <input name="QuyCach" class="form-control" value="<?php echo $QuyCach;?>" required>
                
                <label for="Gia" class="form-label">Giá</label>
                <input name="Gia" class="form-control" value="<?php echo $Gia;?>" required>

                <label for="SoLuongHang" class="form-label">Số lượng hàng</label>
                <input name="SoLuongHang" class="form-control" value="<?php echo $SoLuongHang;?>" required>

                <label for="ChiTietHang" class="form-label">Chi tiết hàng</label>
                  <div class="input-group">
                        <textarea name="ChiTietHang" class="form-control" aria-label="With textarea"><?php echo $ChiTietHH;?></textarea>
                  </div>

                <label for="MaLoaiHang" class="form-label">Loại hàng</label>
                <select class="form-control" name="MaLoaiHang" id="">
                <option selected><?php echo $MaLoaiHang ?></option>
                <?php
                    while($row_loaihanghoa = mysqli_fetch_assoc($query_loaihanghoa)){?>
                        <option value = "<?php echo $row_loaihanghoa['MaLoaiHang']?>"><?php echo $row_loaihanghoa['MaLoaiHang']?> - <?php echo $row_loaihanghoa['TenLoaiHang']?></option>
                    <?php }
                ?>
                </select>

                <label for="TenHinh" class="form-label">Hình ảnh</label>
                <input type="file" name="TenHinh" id="TenHinh" class="form-control" required>
            </div>
            <a class="btn btn-danger" href="../../Admin_controler/QuanLyHangHoa" role="button">Hủy</a>
            <button type="submit" class="btn btn-success" name="edit">Sửa</button>
        </form>
    </div>
</body>
</html>
