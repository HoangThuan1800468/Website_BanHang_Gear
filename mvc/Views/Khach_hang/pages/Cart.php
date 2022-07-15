<?php 
    $teo = $this->model("CartModel");
    
    $sum_cart = 0;
    $username = $_SESSION['login_guest'];

    $result_hanghoa = $teo -> layhhtugiohang($username);
    
    
    $result_user = $teo -> thongtindathang($username);
    $row_info = mysqli_fetch_assoc($result_user);
    $MSKH = $row_info['MSKH'];

    $query_autoIncrement = $teo -> laymahoadon();
    $fetch_autoIncrement = mysqli_fetch_assoc($query_autoIncrement);
    $value_autoIncrement = $fetch_autoIncrement['AUTO_INCREMENT'];

    

    if(isset($_POST['check-out'])){
        $result_checkout = $teo -> dathang($MSKH); 
        $result_hanghoa1 = $teo -> layhhtugiohang1($username);
        while($row_checkout = mysqli_fetch_assoc($result_hanghoa1)){
          $MSHH = $row_checkout['MSHH'];
          $SoLuong = $row_checkout['quantity'];
          $Gia = $row_checkout['Gia'];
          $sotien = $Gia*$SoLuong;
          $teo -> chitietdathang($value_autoIncrement, $MSHH, $SoLuong,$sotien);
        //   ------------------
            $laysoluonghang = $teo -> laysoluonghang($MSHH);
            $row_laysoluonghang = mysqli_fetch_assoc($laysoluonghang);
            $sl_con = $row_laysoluonghang['SoLuongHang'];
            $soluong = $sl_con - $SoLuong;
            $teo -> capnhatsoluonghanghoa($MSHH,$soluong);
        }
        $teo ->  clearcart($username);
        echo "<script>window.location='../Cart/CheckOutSucces'</script>";
      }
?>
<div class="container py-4">
    <div class="p-5 mb-4 rounded-3 payment-greeting">
        <div class="container-fluid py-5 payment-greeting-text">
            <h1 class="display-5 fw-bold">Thanh toán</h1>
            <p class="col-md-8 fs-4">Hi vọng bạn đã có một trải nghiệm mua hàng tuyệt vời tại GEAR!</p>
        </div>
    </div>
    <main>
        <div class="row g-5">
            <!-- Cart -->
            <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                  <span class="text-primary">Giỏ hàng</span>
            </h4>
            <ul class="list-group mb-3">
                <?php while($row = mysqli_fetch_assoc($result_hanghoa)){?>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0"><?php echo $row['TenHH'];?></h6>
                            <small class="text-muted">
                                <a class="change text-decoration-none" href="../Cart/CartModunles/<?php if($row['quantity']>1){ echo "decrease"."/".$row['MSHH'];}else{echo "delete"."/".$row['MSHH'];} ?>">-</a>
                                    <?php echo $row['quantity'];?>
                                <a class="change text-decoration-none" href="<?php if($row['quantity']<$row['SoLuongHang']){echo "../Cart/CartModunles/increase"."/".$row['MSHH'];}else{ echo '../Cart/CartInfor';} ?>">+</a>
                            </small>
                        </div>
                        <span class="text-muted">
                            <?php echo number_format($row['Gia']*$row['quantity']); $sum_cart+=$row['Gia']*$row['quantity']?>
                            <a class="text-decoration-none text-red-500" href="../Cart/CartModunles/<?php echo "delete"."/".$row['MSHH']; ?>">x</a>
                        </span>
                    </li>
                <?php }?>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Tổng</span>
                        <strong><?php echo number_format($sum_cart)?>đ</strong>
                    </li>
            </ul>
            <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code">
                    <button type="submit" class="btn btn-secondary" disabled>Redeem</button>
                </div>
            </form>
        </div>
              <!-- Information -->
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Billing address</h4>
                <form method="POST" action="" enctype="multipart/form-data">
                  <div class="row g-3">
                    <div class="col-12">
                        <label for="HoTenKH" class="form-label">Họ tên</label>
                        <input type="text" class="form-control" name="HoTenKH" value="<?php echo $row_info['HoTenKH'];?>" required="">
                    </div>
    
                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" class="form-control" name="username" value="<?php echo $username?>" disabled>
                      </div>
                    </div>
        
                    <div class="col-12">
                      <label for="address" class="form-label">Địa chỉ</label>
                      <input type="text" class="form-control" name="DiaChi" required value="<?php echo $row_info['DiaChi'];?>">
                    </div>
        
                    <div class="col-12">
                      <label for="address2" class="form-label">Số điện thoại</label>
                      <input type="text" class="form-control" name="SoDienThoai" value = "<?php echo $row_info['SoDienThoai'];?>">
                    </div>

                    <div class="col-12">
                      <label for="address2" class="form-label">Số Fax</label>
                      <input type="text" class="form-control" name="SoFax" value = "<?php echo $row_info['SoFax'];?>">
                    </div>

                    <div class="col-12">
                      <label for="address2" class="form-label">Tên công ty</label>
                      <input type="text" class="form-control" name="TenCongTy" value = "<?php echo $row_info['TenCongTy'];?>">
                    </div>

                    <hr class="my-4">
                    
                        <button class="w-100 btn btn-primary btn-lg" name="check-out" data-bs-toggle="tooltip" data-bs-placement="right" type="submit" title="Xác nhận thanh toán!">Continue to checkout</button>
                    
                    
                </form>
            </div>
            </div>
    </main>
    <div class="row align-items-md-stretch mt-5">
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
                <h2>Quyền riêng tư</h2>
                <p>Chúng tôi luôn tôn trọng quyền riêng tư của khách hàng. Vì chúng ta ai cũng cần được bảo mật thông tin!</p>
                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Chính sách riêng tư của GEAR!</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
                <h2>Giao hàng</h2>
                <p>GEAR! là đối tác của các công ty vận chuyển lớn hàng đầu Việt Nam. Chúng tôi luôn khắt khe trong việc đóng gói sản phẩm đến bạn một cách chuyên nghiệp nhất. Vì sản phẩm xứng đáng được nâng niu đến tay bạn!</p>
                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Chính sách giao hàng của GEAR!</button>
            </div>
        </div>
    </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">GEAR!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                    Tại Apple, chúng tôi tin tưởng mạnh mẽ vào các quyền riêng tư cơ bản và việc áp dụng đồng nhất các quyền cơ bản đó cho dù bạn đang sống ở đâu trên thế giới. Đó là lý do chúng tôi coi mọi dữ liệu liên quan đến một cá nhân đã xác định hoặc có thể xác định danh tính, hoặc dữ liệu mà Apple đã liên kết hoặc có thể liên kết với cá nhân ấy, là “dữ liệu cá nhân”, bất kể người đó sống ở đâu. Điều này có nghĩa là cả dữ liệu trực tiếp xác định danh tính của bạn – chẳng hạn như tên bạn – và dữ liệu không trực tiếp xác định danh tính của bạn nhưng có thể dùng theo cách hợp lý để xác định danh tính của bạn – chẳng hạn như số sê-ri của thiết bị – đều là dữ liệu cá nhân. Với các mục đích của Chính sách quyền riêng tư này, số liệu tổng hợp được coi là dữ liệu phi cá nhân.<br><br>
                    Chính sách quyền riêng tư này đề cập đến cách Apple hoặc một công ty liên kết của Apple (gọi chung là “Apple”) xử lý dữ liệu cá nhân, cho dù bạn tương tác với chúng tôi trên trang web, thông qua các ứng dụng của Apple (chẳng hạn như Apple Music hoặc Wallet) hay bằng hình thức trực tiếp (bao gồm qua điện thoại hoặc khi bạn đến các cửa hàng bán lẻ của chúng tôi). Apple cũng có thể liên kết tới các bên thứ ba khi cung cấp dịch vụ hoặc cho phép tải về các ứng dụng của bên thứ ba trên App Store. Chính sách quyền riêng tư của Apple không áp dụng cho cách các bên thứ ba định nghĩa về dữ liệu cá nhân hoặc cách họ sử dụng dữ liệu đó. Chúng tôi khuyến khích bạn đọc chính sách quyền riêng tư của họ và hiểu rõ các quyền riêng tư dành cho mình trước khi tương tác với họ. 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary"data-bs-dismiss="modal">Tôi đã đọc và hiểu rõ</button>
                </div>
            </div>
        </div>
    </div>
</div>