<header>
    <nav class="navbar navbar-expand-lg navbar-light " style="position: relative;">
        <div class="container-fluid d-flex justify-content-between pb-3 mb-4 border-bottom">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href='../../../Home'>Trang chính</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav nav-pills  justify-content-end" style="margin-top: 5px;">
            <?php while($row = mysqli_fetch_assoc($result)){?>
              <li class="nav-item">
              <a style="padding-left: 10px;" href="../../../Product/ListProduct/<?php echo $row['MaLoaiHang'] ?>/<?php echo $tensanpham ?>" class="nav-link <?php if($category == $row['MaLoaiHang']){echo "bg-dark active text-light";} else {echo "text-dark";}?>"><?php echo $row['TenLoaiHang'] ?></a>
              </li>
            <?php } ?>
            </ul>
            <form class="d-flex" method="POST" action="">
              <input id="tensanpham" name="tensanpham" type="text" class="form-control" placeholder="Nhập tên sản phẩm!"  aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="submit"  id="seach" name="seach" style="margin-left: 5px;">Tìm</button>
            </form>
            
            <a class="btn btn-warning" href="<?php if(isset($_SESSION['login_guest'])){ echo '../../../Cart/CartInfor';}else{echo '../../../Login/Customer';} ?>"style="margin-left: 5px; padding: 4px 15px">
              <i class="fas fa-shopping-cart fa-fw" style="font-size:20px"></i>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
              <span class="sr-only"></span>
            </a>
          </div>
        </div>
      </nav>
    
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal"></h1>
        <p class="fs-5 text-muted"></p>
    </div>    
    
</header>