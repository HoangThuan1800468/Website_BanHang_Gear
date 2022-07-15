<?php
    $teo = $this->model("CartModel");
    $MSHH = $data['MSHH'];
    $username = $_SESSION['login_guest'];
    $teo -> truHH($MSHH,$username);
    header("Location: ../../CartInfor");
?>