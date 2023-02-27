<?php

include("xcore/db.php");
ob_start();
session_start();
 
if(!isset($_SESSION["login"])){
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container text-center">
        <div class="alert alert-warning mt-5" role="alert">
            <?php
            $username=$_SESSION["username"];
            $password=$_SESSION["password"];

            echo "Hoşgeldin <b>".$username."</b> Şifreniz: <i>".$password."</i>"
            
            ?>
        </div>
        <form action="sil.php" method="post">
            <button class="btn btn-danger" type="submit">Çıkış Yap</button>
        </form>
    </div>
    
</body>
</html>