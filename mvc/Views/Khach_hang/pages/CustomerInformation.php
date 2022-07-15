<?php
    $username = $_SESSION['login_guest'];

    $teo = $this->model("CustomerModel");
    $rowcustomer = $teo -> thongtin($username);

    
    $row = mysqli_fetch_assoc($rowcustomer);
    $MSKH = $row['MSKH'];
    $result_order = $teo -> donhang($MSKH);
    
?>
<main>
    <h1><?php echo $row['HoTenKH'];?></h1>
    <p class="fs-5 col-md-8 m-0"><strong>Company: </strong><?php echo $row['TenCongTy'];?></p>
    <p class="fs-5 col-md-8 m-0"><strong>Phone: </strong><?php echo $row['SoDienThoai'];?></p>
    <p class="fs-5 col-md-8 m-0"><strong>Fax: </strong><?php echo $row['SoFax'];?></p>
    <p class="fs-5 col-md-8 m-0"><strong>Address: </strong><?php echo $row['DiaChi'];?></p>
    <hr class="col-3 col-md-2 mb-5">

    <h1 class="pb-4"><strong>Đơn hàng của tôi</strong></h1>
    <?php while($row_order = mysqli_fetch_assoc($result_order)){?>
        <div class="row g-5">
          <div class="col-md-6">
            <h2>Order num #<?php echo $row_order['SoDonDH'];?></h2>
            <p>Trạng thái đơn hàng: <?php echo $row_order['TrangThaiDH'];?></p>
            <ul class="icon-list">
              <li>Ngày đặt hàng: <?php echo $row_order['NgayDH'];?></li>
              <li>Ngày giao hàng dự kiến: Đang cập nhật</li>
            </ul>
          </div>
          <div class="col-md-6">
            <h2>Danh sách sản phẩm</h2>
            <ul class="icon-list">
              <?php
                $id = $row_order['SoDonDH'];
                $result_order_detail = $teo -> chtietdonhang($id);
              ?>
              <?php $sum = 0; while($row_order_detail = mysqli_fetch_assoc($result_order_detail)){?>
              <li><?php echo $row_order_detail['TenHH'];?> x<?php echo $row_order_detail['SoLuong']; $sum = $sum+ $row_order_detail['SoLuong']*$row_order_detail['Gia']?></li>
              <?php }?>
              <li><p>Tổng: <strong><?php echo number_format($sum);?>đ</strong></p></li>
            </ul>
          </div>
        </div>
        <hr class="mb-3">
      <?php }?>
    </div>
  </main>