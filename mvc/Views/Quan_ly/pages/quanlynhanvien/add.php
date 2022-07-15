
<?php
  if(isset($_POST['add'])){
    $HoTenNV = $_POST['HoTenNV'];
    $ChucVu = $_POST['ChucVu'];
    $DiaChi = $_POST['DiaChi'];
    $SoDienThoai = $_POST['SoDienThoai'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $teo = $this->model("Admin_qlnv_model");
    $teo -> addNV($HoTenNV,$ChucVu,$DiaChi,$SoDienThoai,$username,$password);
    echo '<script type="text/javascript">alert("Thêm nhân viên mới thành công!");</script>';
  }
?>
<form method="POST" action="">
  <div class="mt-3 mb-3">
      <label for="HoTenNV" class="form-label">Họ tên nhân viên</label>
      <input name="HoTenNV" class="form-control" required>
  </div>
  <div class="mt-3 mb-3">
      <label for="ChucVu" class="form-label">Chức vụ</label>
      <input name="ChucVu" class="form-control" required>
  </div>
  <div class="mt-3 mb-3">
      <label for="DiaChi" class="form-label">Địa Chỉ</label>
      <input name="DiaChi" class="form-control" required>
  </div>
  <div class="mt-3 mb-3">
      <label for="SoDienThoai" class="form-label">Số điện thoại</label>
      <input name="SoDienThoai" class="form-control" required>
  </div>
  <div class="mt-3 mb-3">
      <label for="username" class="form-label">Username</label>
      <input name="username" class="form-control" required>
  </div>
  <div class="mt-3 mb-3">
      <label for="password" class="form-label">Password</label>
      <input name="password" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-success" name="add">Thêm</button>
</form>

