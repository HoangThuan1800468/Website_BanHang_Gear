<?php
     $category = $data["maloaihang"];
     $teo = $this->model("ProductModel");
     $result = $teo -> loai();
     $tensanpham ='productname';
    if(isset($_POST['seach'])){
      if(isset($_POST['tensanpham']) && $_POST['tensanpham'] != null){
        $tensanpham = $_POST['tensanpham'];
      }
      header('location: ../../ListProduct/'.$category.'/'.$tensanpham.'');
    }
    
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
    <!-- Import Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- import css -->
    <link rel="stylesheet" href="../../../mvc/Views/css/Khach_hang_css/product/product.css">
</head>
<body>
<?php Include "./mvc/Views/Khach_hang/pages/header.php" ?>
<?php Include "./mvc/Views/Khach_hang/pages/".$data["Page"].".php" ?>
<?php Include "./mvc/Views/Khach_hang/pages/footer.php" ?>
  <!-- ICONS -->
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>