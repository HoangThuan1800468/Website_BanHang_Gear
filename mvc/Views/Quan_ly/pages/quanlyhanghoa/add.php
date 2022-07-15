<?php
$teo = $this->model("Admin_qlhh_model");
$query_loaihanghoa = $teo -> getLoaiHH();

$query_autoIncrement = $teo -> autoIncrement();
$fetch_autoIncrement = mysqli_fetch_assoc($query_autoIncrement);
$value_autoIncrement = $fetch_autoIncrement['AUTO_INCREMENT'];

  if(isset($_POST['add'])){
      $TenHH = $_POST["TenHH"];
      $QuyCach = $_POST["QuyCach"];
      $Gia = $_POST["Gia"];
      $SoLuongHang = $_POST["SoLuongHang"];
      $ChiTietHang = $_POST["ChiTietHang"];
      
      $MaLoaiHang = $_POST["MaLoaiHang"];
      $TenHinh = $_FILES["TenHinh"]["name"];
      $TenHinh_temp = $_FILES["TenHinh"]["tmp_name"];

      if(isset($TenHH)&&isset($QuyCach)&&isset($Gia)&&isset($SoLuongHang)&&isset($ChiTietHang)&&isset($MaLoaiHang)&&isset($TenHinh)){
            $teo -> themHH($TenHH,$QuyCach,$Gia,$SoLuongHang,$MaLoaiHang,$ChiTietHang);
            $teo -> themHinhHH($TenHinh,$value_autoIncrement);
            move_uploaded_file($TenHinh_temp, './mvc/Views/media/image/product-image/'.$TenHinh);
            echo '<script type="text/javascript">alert("Thêm hàng hóa mới thành công!");window.location="../../Admin_controler/QuanLyHangHoa_action/add";</script>';
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
      <title>Thêm hàng hóa</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</head>
<body>
      <br>
      <h1> Thêm hàng hóa </h1>
      <div class="container-fluid">
            <form method="POST" action="" enctype="multipart/form-data">
                  <div class="mt-3 mb-3">
                  <fieldset disabled>
                  <label for="MaHH" class="form-label">Mã hàng hóa</label>
                  <input name="MaHH" class="form-control" value = '<?php echo $value_autoIncrement; ?>'  required>
                  </fieldset>
                  <label for="TenHH" class="form-label">Tên hàng hóa</label>
                  <input name="TenHH" class="form-control" required>

                  <label for="QuyCach" class="form-label">Quy cách</label>
                  <input name="QuyCach" class="form-control" required>
                  
                  <label for="Gia" class="form-label">Giá</label>
                  <input name="Gia" class="form-control" required>

                  <label for="SoLuongHang" class="form-label">Số lượng hàng</label>
                  <input name="SoLuongHang" class="form-control" type='text' required>

                  <label for="ChiTietHang" class="form-label">Chi tiết hàng</label>
                  <div class="input-group">
                        <textarea name="ChiTietHang" class="form-control" aria-label="With textarea"></textarea>
                  </div>

                  <label for="MaLoaiHang" class="form-label">Loại hàng</label>
                  <select class="form-control" name="MaLoaiHang" id="">
                        <option selected>Chọn loại hàng</option>
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
                  <button type="submit" class="btn btn-success" name="add">Thêm</button>
                  
            </form>
      </div>
</body>
</html>





