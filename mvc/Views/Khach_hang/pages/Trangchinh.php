<?php

    $teo = $this->model("HomeModel");
    $rowloai = $teo -> loai();
    $rowloai2 = $teo -> loai();
    
    if(isset($_GET['logout']) && $_GET['logout']=='logoutclient'){
        unset($_SESSION['login_guest']);
        header('location: Home');
    }
?>
<?php Include "./mvc/Views/Khach_hang/pages/nav_trangchinh.php" ?>
    
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <video class="img-fluid" autoplay loop muted>
                <source src="./mvc/Views/media/video/video1.mp4" type="video/mp4" />
            </video>
            <div class="carousel-caption container-md position-absolute top-50 start-50 translate-middle carousel-text">
                <h1>Trải nghiệm không giới hạn với G435</h1>
                <p>Chơi game, phát âm nhạc và chơi đùa cùng bạn bè. Tai nghe chơi game G435 kết nối với máy tính, điện thoại và các thiết bị khác của bạn thông qua công nghệ không dây LIGHTSPEED cấp độ chơi game và Bluetooth®. Nó đem lại âm thanh mạnh mẽ và rõ ràng, đồng thời các mic tạo chùm giúp giảm tạp âm nền. Nó cũng được làm từ tối thiểu 22% nhựa tái chế hậu tiêu dùng. Chơi không dứt với G435.</p>
                <button type="button" class="btn btn-info btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Tìm hiểu thêm</button>
            </div>
        </div>
        <div class="carousel-item">
            <video class="img-fluid" autoplay loop muted>
                <source src="./mvc/Views/media/video/video_kishi.mp4" type="video/mp4" />
            </video>
            <div class="carousel-caption container-md position-absolute top-50 start-50 translate-middle carousel-text">
                <h1>RAZER Kishi</h1>
                <p>Mang theo tựa game A-tier của bạn bất kì lúc nào, bất kì đâu.</p>
                <button type="button" class="btn btn-info btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Tìm hiểu thêm</button>
            </div>
        </div>
        <div class="carousel-item">
            <video class="img-fluid" autoplay loop muted>
                <source src="./mvc/Views/media/video/video_razerbook.mp4" type="video/mp4" />
            </video>
            <div class="carousel-caption d-none d-md-block carousel-text text-dark">
                <h1>RAZER Blade 15</h5>
                <p>Nay với bộ xử lý Intel Gen 11th.</p>
                <button type="button" class="btn btn-light btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Tìm hiểu thêm</button>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Giới thiệu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
        G435<br><br>
        Trọng lượng: 165 gram / Kích thước: 163×170×71 mm / Màng loa âm thanh: 40 mm / Độ nhạy tần số: 20 Hz-20 KHz / Trở kháng: 45 ôm (bị động) / Độ nhạy: 83,1 dB SPL/mW / Âm lượng tối đa: 100 dB với bộ giới hạn tùy chọn ở 85 dB.
        Chơi game, phát âm nhạc và chơi đùa cùng bạn bè. Tai nghe chơi game G435 kết nối với máy tính, điện thoại và các thiết bị khác của bạn thông qua công nghệ không dây LIGHTSPEED cấp độ chơi game và Bluetooth®. 
        Nó đem lại âm thanh mạnh mẽ và rõ ràng, đồng thời các mic tạo chùm giúp giảm tạp âm nền. Nó cũng được làm từ tối thiểu 22% nhựa tái chế hậu tiêu dùng. Chơi không dứt với G435.<br><hr><br>

        Razer Kishi<br><br>
        Công nghệ: Clickable Analog Thumbsticks / Universal Fit / Ultra-Low Latency Gameplay.<br>
        Mang theo trò chơi của bạn mọi lúc, mọi nơi. Bộ điều khiển chơi game di động đa năng phù hợp với hầu hết các thiết bị điện thoại thông minh, được thiết kế để mang lại khả năng điều khiển ở cấp độ cao cho việc chơi game khi đang di chuyển của bạn. 
        Với bộ điều khiển này bên cạnh bạn, dù bạn đi đâu, chiến thắng sẽ theo sau.<br><hr><br>

        RAZER Blade 15<br><br>
        Windows 11 Home / 12th Gen Intel® Core™ i9 Processor (14-core) / GeForce RTX™ 3080 Ti / FHD 360Hz, QHD 240Hz or 4K 144Hz / 1TB PCIe,Extra M.2 PCIe Slot / 16GB or 32GB RAM (DDR5 4800MHz) / Vapor Chamber / Per-key RGB / SD Card Reader / As thin as 0.67” / 16.99 mm.<br>
        Đúng khi bạn nghĩ một chiếc máy tính xách tay chơi game không thể thú vị hơn — giới thiệu Razer Blade 15 mới, hiện có sẵn bộ xử lý Intel® Core ™ thế hệ thứ 12 mới nhất (14 lõi) và GPU Máy tính xách tay NVIDIA® GeForce RTX ™ 30 cho đồ họa máy tính xách tay chơi game mạnh mẽ nhất từ ​​trước đến nay. 
        Với sự lựa chọn của bạn về màn hình Full HD 360Hz, QHD 240Hz (G-SYNC) hoặc UHD 144Hz mới, hãy tận hưởng hiệu suất vô song được đóng gói trong khung máy tính xách tay chơi game 15 ”RTX mỏng nhất từ ​​trước đến nay.<br>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>

<!-- Content -->
<div class="container-fluid product-category">
    <div class="product-category-text text-center mt-lg-5">
        <h1>THIẾT BỊ CHƠI GAME TIÊN TIẾN</h1>
        <p>Chơi với phong độ đỉnh cao với những thiết bị chơi game hiệu suất từ GEAR!</p>
    </div>
    <div class="product-category-nav">
        <div class="container-fluid">
        <main class="card-container bd-grid mx-auto">
            <?php while($row = mysqli_fetch_array($rowloai2)){ ?>
                <a href="Product/ListProduct/<?php echo $row['MaLoaiHang'] ?>/productname">
                <article class="nav-card-item bg-color-gradient">
                    <div class="card__img">
                        <img src="./mvc/Views/media/image/category/<?php echo $row['anh'] ?>" alt="">
                    </div>
                    <div class="card__name">
                        <p><?php echo $row['TenLoaiHang'] ?></p>
                    </div>
                </article>
                </a>
            <?php } ?>
        </main>
    </div>
    </div>
</div>
<div class="container-fluid about-us position-relative">
    <div class="position-absolute top-50 start-50 translate-middle">
        <h1>"<span>GEAR!</span> Chiến thắng trong mọi cuộc chiến"</h1>
        <p>Tự hào là nhà phân phối hàng đầu Việt Nam </p>
    </div>
</div>
<div class="container-fluid player-quote position-relative">
    <div class="position-absolute top-50 start-50 translate-middle highlight-quote">
    <h1><span>GEAR!</span> - For gamer, for winner!</h1>
</div>
</div>

