<?php
    $teo = $this->model("CartModel");
    $MSHH = $data['MSHH'];
    $username = $_SESSION['login_guest'];
    $teo -> themHH($MSHH,$username);
    header("Location: ../../CartInfor");
    
?>