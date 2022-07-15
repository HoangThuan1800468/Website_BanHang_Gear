<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../mvc/Views/css/Quan_Ly_css/main.css">
    <link rel="stylesheet" href="../mvc/Views/css/Quan_Ly_css/navigation.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
<?php
    if(!isset($_SESSION['login_admin'])){
        header('location: ../Login/Admin');
    }
?>
    <?php 
         require_once "./mvc/Views/Quan_ly/pages/nav.php";
        
        require_once "./mvc/Views/Quan_ly/pages/".$data["Page"].".php" ;
        
    ?>
    
    
</body>
</html>