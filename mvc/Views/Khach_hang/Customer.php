<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="../mvc/Views/css/Khach_hang_css/main.css">
    <link rel="stylesheet" href="../mvc/Views/css/Khach_hang_css/product-slider.css">
    <link rel="stylesheet" href="../mvc/Views/css/Khach_hang_css/nav-card.css">
    <link rel="stylesheet" href="../mvc/Views/css/Khach_hang_css/product-category.css">
    <link rel="stylesheet" href="../mvc/Views/css/Khach_hang_css/about.css">
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
    <link rel="stylesheet" href="../mvc/Views/css/Khach_hang_css/cart.css">
</head>
<body>
<div class="col-lg-8 mx-auto p-3 py-md-5">
  <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
      <a href="../Home" class="text-dark text-decoration-none">
        <span class="fs-4">Quay về trang chủ</span>
      </a>
  </header>

  <?php require_once "./mvc/Views/Khach_hang/pages/".$data["Page"].".php" ?>

  <div class="mt-5 container-lg">
    <footer class="py-5">
      <div class="row">
        <div class="col-2">
          <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
            <h3 class="mb-0 main-logo">GEAR!</h3>
          </a>
          <p class="text-muted">© 2022</p>
        </div>
        <div class="col-2">
            <h5>Menu</h5>
            <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Về đầu trang</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Giới thiệu</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lịch sử phát triển</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Về chúng tôi</a></li>
            </ul>
        </div>

        <div class="col-4 offset-1">
          <form>
            <h5>Đăng ký để nhận thông báo từ GEAR!</h5>
            <p>GEAR! cam kết không làm phiền bạn, chỉ mang đến thông tin khuyến mãi mà bạn mong chờ.</p>
          </form>
        </div>
      </div>

      <div class="d-flex justify-content-between py-4 my-4 border-top">
        <p>© 2022 GEAR!, Inc. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li><ion-icon class="card__icon ms-3" name="logo-facebook"></ion-icon></li>
          <li><ion-icon class="card__icon ms-3" name="logo-instagram"></ion-icon></li>
          <li><ion-icon class="card__icon ms-3" name="logo-twitter"></ion-icon></li>
          <li><ion-icon class="card__icon ms-3" name="logo-twitch"></ion-icon></li>
        </ul>
      </div>
    </footer>
  </div>
</div>
</body>
</html>