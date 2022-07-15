<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- css -->
    <link rel="stylesheet" href="./mvc/Views/css/Khach_hang_css/main.css">
    <link rel="stylesheet" href="./mvc/Views/css/Khach_hang_css/product-slider.css">
    <link rel="stylesheet" href="./mvc/Views/css/Khach_hang_css/nav-card.css">
    <link rel="stylesheet" href="./mvc/Views/css/Khach_hang_css/product-category.css">
    <link rel="stylesheet" href="./mvc/Views/css/Khach_hang_css/about.css">
    <link rel="stylesheet" href="../mvc/Views/css/Khach_hang_css/cart.css">
    <!-- Import font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Pacifico&display=swap" rel="stylesheet">
    <!-- Import Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Import icon -->
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <!-- Import Bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</head>
<body>
    <?php require_once "./mvc/Views/Khach_hang/pages/".$data["Page"].".php" ?>
    
    <?php Include "./mvc/Views/Khach_hang/pages/footer.php" ?>
</body>
</html> 
