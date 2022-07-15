<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">GEAR!</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Danh sách sản phẩm</a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <?php while($row = mysqli_fetch_array($rowloai)){ ?>
                            <li><a class="dropdown-item" href="Product/ListProduct/<?php echo $row['MaLoaiHang'] ?>/productname"><?php echo $row['TenLoaiHang'] ?></a></li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDarkDropdown">
            <ul class="navbar-nav" >
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php 
                            if(!isset($_SESSION['login_guest'])){
                                echo 'Chưa đăng nhập!';
                            }else{
                                echo 'xin chào '.$_SESSION['login_guest'];
                            }
                        ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink" >
                        <li>
                            <?php 
                                if(!isset($_SESSION['login_guest'])){
                                }else{
                                    echo '<a class="dropdown-item" href="Customer/infor">Thông tin khách hàng</a>';
                                }
                            ?>
                        </li>
                        <li>
                            <?php 
                                if(!isset($_SESSION['login_guest'])){
                                    echo '<a class="dropdown-item" href="Login/Customer">Đăng nhập</a>';
                                }else{
                                    echo '<a class="dropdown-item" href="./index.php?logout=logoutclient">Đăng xuất</a>';
                                }
                            ?>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav" >
                <li class="nav-item ">
                    <a class="nav-link " href="<?php if(isset($_SESSION['login_guest'])){ echo 'Cart/CartInfor';}else{echo 'Login/Customer';} ?>" id="navbarDarkDropdownMenuLink" >
                        <button type="button" class="btn btn-warning me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                        </button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>