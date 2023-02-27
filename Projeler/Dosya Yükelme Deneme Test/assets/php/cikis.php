<?php
 
session_start();
 
ob_start();
 
session_destroy();
 
echo "Çıkış Yaptınız. Giriş Sayfasına Yönlendiriliyorsunuz";
 
header("Refresh: 2; url=login.php");
 
?>