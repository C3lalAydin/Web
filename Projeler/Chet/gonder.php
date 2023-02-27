<?php

include_once("xcore/db.php");
ob_start();
session_start();
$username= $_SESSION["username"];

date_default_timezone_set('Europe/Istanbul');
$saat=date('H:i');

if($_POST){
   
    $mesaj= $_POST["mesaj"];
    if($mesaj=="" or $mesaj==" "){
        echo '<script>alert("Mesajınız Boş Olduğu İçin Gönderilemedi");</script>';
    }else {
        $ekle=$pdo->prepare("INSERT into message set username=?,mesaj=?,saat=?");
        $ekle -> execute(array($username,$mesaj,$saat));
    }
    



}
?>