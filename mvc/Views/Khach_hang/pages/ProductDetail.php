<?php
    $teo = $this->model("ProductModel");
    $hell = $this->model("CartModel");
    $result3 = $teo -> thongtinhanghoa($data["mahanghoa"]);
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
<?php while($row3 = mysqli_fetch_assoc($result3)){?>
<div class="mt-5 container-lg">
    <div class="row">
        <div class="col-md-5">
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"><img class="img-thumbnail w-100 d-block" src="../../../mvc/Views/media/image/product-image/<?php echo $row3['TenHinh'] ?>" alt="Slide Image" loading="lazy"></div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <h4><?php echo $row3['TenHH'] ?></h4>
            <div class="price"><span class="mr-2"><i class="fa fa-rupee text-success"></i>&nbsp;<?php echo number_format($row3['Gia']) ?> VNĐ</div>
            <div class="d-flex flex-row">
                <div class="icons mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></div><span><h4><?php if($row3['SoLuongHang'] > 0){ echo "Còn ".$row3['SoLuongHang']." sản phẩm";} else { echo "Đã hết hàng"; } ?></h4></span>
            </div>
            <div class="d-flex align-items-center mt-4 offers mb-1"><i class="fa fa-check-square-o mt-1"></i><span class="ml-1 font-weight-bold"></span><span class="ml-1"><?php echo $row3['ChiTietHH'] ?><br></span></div>
            <div class="d-flex align-items-center mt-5 delivery"><i class="fa fa-map-marker"></i><span class="ml-2">Bảo hành 1 năm<br></span><span class="ml-2 mr-2">|<br></span><span class="ml-2 mr-2 text-success"> Miễn phí<br></span></div>
            <hr>
            <div><span class="font-weight-bold">Đơn vị phân phối:</span><span class="ml-2"> Gear!</span></div>
            <form action="" method="POST">
                <input type="hidden"  id="MSHH"  name="MSHH" class="form-control" value="<?php echo $row3['MSHH'];?>">
                <input type="hidden" id="SoLuongHang" name="SoLuongHang" class="form-control" value="<?php echo $row3['SoLuongHang'];?>">
              <button class="btn btn-success" type="submit" name="add">Thêm vào giỏ hàng  <ion-icon name="cart-outline"></ion-icon></button>
            </form> 
            

        </div>
    </div>
</div>
<?php } ?>