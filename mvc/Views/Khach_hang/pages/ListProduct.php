<?php
    $teo = $this->model("ProductModel");
    $hell = $this->model("CartModel");
    $result = $teo -> showlist($data["maloaihang"],$data["seach"]);
    $result2 = $teo -> showloai($data["maloaihang"]);
    $row_loaihanghoa = mysqli_fetch_assoc($result2);
    
?>
<?php
    if(isset($_POST['add'])){
        if(isset($_SESSION['login_guest'])){
            $SoLuongHang = $_POST["SoLuongHang"];
            $MSHH = $_POST["MSHH"];
            $username = $_SESSION['login_guest'];
            $getAmountQuery = $hell -> getAmountQuery($MSHH,$username);
            $ktsl = $hell -> kiemtrasoluongtronggio($MSHH,$username);
            $kt = mysqli_fetch_array($ktsl);
            if (mysqli_num_rows($getAmountQuery)>0 and $SoLuongHang>0) {
                if($SoLuongHang <= $kt['quantity']){
                    echo '<script type="text/javascript">alert("Số lượng sản phẩm trong giỏ hàng đã đạt giới hạn!");</script>';
                }else{
                    $addQuery = $hell -> addQuerydaco($MSHH,$username);
                    echo '<script type="text/javascript">alert("Sản phẩm đã có trong giỏ hàng và tăng thêm 1!");</script>';
                }
            } else {
                if($SoLuongHang>0){
                    $addQuery = $hell -> addQuerychuaco($MSHH,$username);
                    echo '<script type="text/javascript">alert("Sản phẩm đã được thêm vào giỏ hàng!");</script>';
                }else{
                    echo '<script type="text/javascript">alert("Sản phẩm đã hết hàng!");</script>';
                }
            } 
        }else{
            echo '<script type="text/javascript">alert("Vui lòng đăng nhập trước khi mua hàng!");window.location="../../../Login/Customer";</script>';
        }
        
    }
  ?>
<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal"><?php if(isset($data["seach"]) && $data["seach"] != 'productname'){ echo 'Kết quả tìm kiếm '.$row_loaihanghoa['TenLoaiHang'].' cho  '.$data["seach"];}else{echo $row_loaihanghoa['TenLoaiHang']; }?></h1>
    <p class="fs-5 text-muted">Tuyển chọn bởi GEAR! Khi tốc độ quyết định chiến thắng.</p>
</div>
<main class="main bd-grid product-grid">
    <?php while($row = mysqli_fetch_assoc($result)){?>
    <article class="card">
        <div class="card__img">
            <a href="../../ListProduct/<?php echo $data["maloaihang"] ?>/id_product=<?php echo $row['MSHH'] ?>">
                <img src="../../../mvc/Views/media/image/product-image/<?php echo $row['TenHinh'] ?>" alt="">
            </a>
        </div>
        <div class="card__name">
            <p><?php echo $row['TenHH'];?></p>
        </div>
        <div class="card__precis">
            
            <div>
                <span class="card__preci card__preci--before"><?php if($row['SoLuongHang']>0){echo "Còn hàng";}else{echo "Hết hàng";}?></span>
                <span class="card__preci card__preci--now"><?php echo number_format($row['Gia']);?></span>
            </div>
            <form action="" method="POST">
              <input type="hidden" name="MSHH" class="form-control" value="<?php echo $row['MSHH'];?>">
              <input type="hidden" name="SoLuongHang" class="form-control" value="<?php echo $row['SoLuongHang'];?>">
              <a href="" class="card__icon"><button class="btn btn-primary-outline btn-lg p-0 mb-1" type="submit" name="add"><ion-icon name="cart-outline"></ion-icon></button></a>
            </form>
        </div>
    </article>
    <?php }?>
  </main>