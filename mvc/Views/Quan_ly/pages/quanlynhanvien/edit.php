
    <?php
    $teo = $this->model("Admin_qlnv_model");
        if(isset($data['MSNV'])){
            $id = $data['MSNV'];
            $result = $teo -> thongtinNV($id);
            $row = $result->fetch_array();
            $MSNV = $row['MSNV'];
            $HoTenNV = $row['HoTenNV'];
            $ChucVu = $row['ChucVu'];
            $DiaChi = $row['DiaChi'];
            $SoDienThoai = $row['SoDienThoai'];
            $username = $row['username'];
            $password = $row['password'];
        }
        if(isset($_POST['edit'])){
            $newHoTenNV = $_POST['HoTenNV'];
            $newChucVu = $_POST['ChucVu'];
            $newDiaChi = $_POST['DiaChi'];
            $newSoDienThoai = $_POST['SoDienThoai'];
            $newpassword = $_POST['password'];
            $teo -> UpdatethongtinNV($newHoTenNV,$newChucVu,$newDiaChi,$newSoDienThoai,$newpassword,$data['MSNV']);
            echo '<script type="text/javascript">alert("Cập nhật thông tin nhân viên thành công!");window.location="../../../Admin_controler/QuanLyNhanVien";</script>';
        }
    ?>
    <div class="container-fluid">
        <form method="POST" action="">
            <fieldset disabled>
            <div class="mt-3 mb-3">
                <label for="MSNV" class="form-label">Mã nhân viên</label>
                <input name="MSNV" class="form-control" value="<?php echo $MSNV;?>">
            </div>
            </fieldset>
            <div class="mt-3 mb-3">
                <label for="HoTenNV" class="form-label">Họ tên nhân viên</label>
                <input name="HoTenNV" class="form-control" value="<?php echo $HoTenNV;?>">
            </div>
            <div class="mt-3 mb-3">
                <label for="ChucVu" class="form-label">Chức vụ</label>
                <input name="ChucVu" class="form-control" value="<?php echo $ChucVu;?>">
            </div>
            <div class="mt-3 mb-3">
                <label for="DiaChi" class="form-label">Địa Chỉ</label>
                <input name="DiaChi" class="form-control" value="<?php echo $DiaChi;?>">
            </div>
            <div class="mt-3 mb-3">
                <label for="SoDienThoai" class="form-label">Số điện thoại</label>
                <input name="SoDienThoai" class="form-control" value="<?php echo $SoDienThoai;?>">
            </div>
            <fieldset disabled>
            <div class="mt-3 mb-3">
                <label for="username" class="form-label">Username</label>
                <input name="username" class="form-control" value="<?php echo $username;?>">
            </div>
            </fieldset>
            <div class="mt-3 mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" class="form-control" value="<?php echo $password;?>">
            </div>
            <button type= "submit" class="btn btn-success" name="edit">Lưu thay đổi</button>
        </form>
    </div>
