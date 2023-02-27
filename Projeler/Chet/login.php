<?php

include_once("xcore/db.php");
ob_start();
session_start();
$_SESSION["id"] ="";
$yanlis=false;
$bu_kullanici_var=false;
$kayit_olundu=false;
$kayit_basarisiz=false;

?>

<!DOCTYPE html>
<html lang="en" class="html_body">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Giriş Sayfası</title>
</head>

<body class="html_body">
    <div class="containerr ortala">
        <div class="card">
            <div class="card-body">

                <div class="container text-center">
                    <!--<img class="logo img-fluid" src="https://via.placeholder.com/300x100" alt="">-->
                    <img class="logo img-fluid" src="assets/img/logo.png" alt="">

                    <div class="text-white mt-3" id="kayit-buton">
                        <h3>Giriş Yap</h3>
                        <p>Kayıtlı Değilseniz Kayıt Olmak İçin <a class="link kayit">Tıklayınız</a></p>
                    </div>
                    <div class="text-white mt-3" id="giris-buton">
                        <h3>Kayıt Ol</h3>
                        <p>Giriş Yapmak İçin <a class="link giris">Tıklayınız</a></p>
                    </div>


                    <form action="login.php" id="giris-form" method="post">

                        <?php
                        
                        if(isset($_POST["giris"])){
                            $username= $_POST["username"];
                            $password= $_POST["password"];
                            
                        
                            $kullanıcı = $pdo->prepare("select * from users where username=? and password=?;"); 
                            $kullanıcı ->execute(array($username,$password));
                            $islem = $kullanıcı->fetch();
                        
                            if ($islem==true) {
                                $_SESSION["login"] = "true";
                                $_SESSION["username"] = $username;
                                $_SESSION["password"] = $password;
                        
                                header("Location:index.php");
                            }else {
                                $yanlis=true;
                                
                                /*header("Refresh: 2; url=../login.php");*/
                            }
                            
                            ob_end_flush();
                            
                        
                        }
                        
                        ?>



                        <div>
                            <input type="text" class="form-control duz-font text_input" name="username"
                                placeholder="Kullanıcı Adı">
                            <input type="text" class="form-control duz-font text_input mt-2" name="password"
                                placeholder="Şifre">
                        </div>

                        <div class="mt-2 text-danger" id="yanlıs">
                            <?php
                            if($yanlis) {
                                echo "Kullanıcı Adı ya da Parola Yanlış veya Boş";
                            }
                            
                            ?>
                        </div>

                        <button class="button" name="giris" type="submit">Giriş Yap</button>
                    </form>




                    <form action="login.php" id="kayit-form" method="post">

                        <?php
                        
                        if(isset($_POST["kayit"])){
                            $username= $_POST["username"];
                            $password= $_POST["password"];
                            
                        
                            $kullanıcı_kontrol = $pdo->prepare("select * from users where username=?;"); 
                            $kullanıcı_kontrol ->execute(array($username));
                            $sonuc = $kullanıcı_kontrol->fetch();
                        
                            if ($sonuc==true) {
                                echo '<script>alert("Bu Kullanıcı Adı Zaten Kayıtlı")</script>';
                            }else {

                                $ekle=$pdo->prepare("insert into users set username=?,password=?");
                                $ekle -> execute(array($username,$password));
                                if($ekle){
                                    echo '<script>alert("Kayıt Başarılı")</script>';
                                }else {
                                    echo '<script>alert("Bir Hata Oluştu Kayıt Başarısız")</script>';
                                    
                                }
                            }
                            
                            ob_end_flush();
                            
                        
                        }
                        
                        ?>

                        <div>
                            <input type="text" class="form-control duz-font text_input" name="username"
                                placeholder="Kullanıcı Adı Belirleyin">
                            <input type="text" class="form-control duz-font text_input mt-2" name="password"
                                placeholder="Şifre Belirleyin">
                        </div>

                        <div class="mt-2 text-danger">
                        </div>

                        <button class="button" name="kayit" type="submit">Kayıt Ol</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        var yukseklik = $(window).height()
        var kayit_form = $("#kayit-form")
        var giris_form = $("#giris-form")
        var html_body = $(".html_body")
        var kayit_buton = $("#kayit-buton")
        var giris_buton = $("#giris-buton")

        kayit_form.hide();
        giris_buton.hide();




        html_body.css({
            height: yukseklik
        });

        var interval = 0;
        setInterval(function() {
            interval++;
            var yukseklik = $(window).height()
            if (yukseklik > 768) {
                var yukseklik = $(window).height()
                var html_body = $(".html_body")
                html_body.css({
                    height: yukseklik
                });
            }


        }, 5);


        $(".giris").click(function() {
            kayit_form.hide(500);
            giris_form.show(1000);
            giris_buton.hide(500);
            kayit_buton.show(1000);
        });
        $(".kayit").click(function() {
            giris_form.hide(500);
            kayit_form.show(1000);
            kayit_buton.hide(500);
            giris_buton.show(1000);

        });
    });
    </script>
</body>

</html>