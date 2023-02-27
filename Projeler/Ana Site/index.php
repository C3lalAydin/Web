<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("xcore/db.php");
ob_start();
session_start();
 
if(isset($_SESSION["login"])){
    $username=$_SESSION["username"];
    $giris_user= '<li><b>'.$username.'</b></li><li></li>
    <li><a class="" id="cikis_btn">Çıkış Yap</a></li>';
}else {
    $giris_user= '<li><a href="login.php">Giriş Yap</a></li>
    <li><a href="login.php">Kayıt Ol</a></li>';
}



?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css?v=<?=time()?>">
    <link rel="stylesheet" href="assets/css/weather-icons.min.css?v=<?=time()?>">
    <title>Document</title>
</head>

<body>
    <div id="navbar" class="header">
        <div class="container">
            <div class="">

                <span id="header-logo" class="">
                    <a href="#" id="logo" class="h2">LOGO</a>
                    <a id="menu-btn" class="icon-false"> <i class="fa-solid fa-bars"></i></a>
                </span>
                <br class="display_none">
                <ul class="header-list">
                    <li><a href="index.php">Anasayfa</a></li>
                    <li><a href="dosyalar.php">Dosyalar</a></li>
                    <?php echo $giris_user ?>
                </ul>
            </div>

        </div>
    </div>


    <div class="index-page-img">

        <h1>BAŞLIK</h1>

        <img style="width:100%;" src="assets/img/bg.jpg" alt="">
    </div>




    <section class="text">
        <div class="container mb-16">
            <div class="body-baslik">
                <div id="baslik_hava_durumu">
                    <h2>HAVA DURUMU</h2>
                </div>
            </div>

            <div class="hava">
                <div class="icon" id="icon">

                </div>



                <div id="sehir2">
                    <?php include_once("assets/script/script.php") ?>
                </div>


                <div class="bilgi">
                    <div id="derece"></div>
                    <div id="havadurumu"></div>
                    <div id="sehir"></div>
                </div>
            </div>


        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/script/script.js?v=<?=time()?>"></script>
    <script src="assets/script/header.js?v=<?=time()?>"></script>
</body>

</html>