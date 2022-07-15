<?php
  $teo = $this->model("Admin_qlloaihh_model");
  if(isset($_POST['add'])){
    $tenloaihang = $_POST["tenloaihang"];
    $anh = $_FILES["anh"]["name"];
    $anh_temp = $_FILES["anh"]["tmp_name"];
    if(isset($tenloaihang)&&isset($anh)){
      $teo -> themloaiHH($tenloaihang,$anh);
      move_uploaded_file($anh_temp, './mvc/Views/media/image/category/'.$anh);
      echo '<script type="text/javascript">alert("Thêm loại hàng hóa mới thành công!");window.location="../Admin_controler/QuanLyLoaiHangHoa";</script>';
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
      <title>Thêm loại hàng hóa</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</head>
<body>
<div class="container-fluid">
<form method="POST" action=""enctype="multipart/form-data">
  <div class="mt-3 mb-3">

    <label for="tenloaihang" class="form-label">Tên loại hàng</label>
    <input name="tenloaihang" class="form-control" required>

    <label for="anh" class="form-label">Hình ảnh</label>
    <input type="file" name="anh" id="anh" class="form-control" required>

  </div>
  <a class="btn btn-danger" href="../Admin_controler/QuanLyLoaiHangHoa" role="button">Hủy</a>
  <button type="submit" class="btn btn-success" name="add">Thêm</button>
</form>
</div>
</body>
</html>

