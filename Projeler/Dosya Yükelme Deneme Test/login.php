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


                    <form name="giris-form" id="giris-form">





                        <div>

                            <input type="text" class="form-control duz-font text_input" name="username"> <br>
                            <label class="input_label_kullaniciad" for="">Kullanıcı Adı</label>


                            <label class="input_label_sifre" for="">Şifre</label>
                            <input type="text" class="form-control duz-font text_input mt-4" name="password">
                        </div>

                        <div class="mt-2 text-danger" id="giris-yanlis">

                        </div>

                        <input class="button" value="Giriş Yap" type="submit">
                    </form>




                    <form name="kayit-form" id="kayit-form">


                        <div>
                            <input type="text" class="form-control duz-font text_input" name="username"><br>
                            <label class="input_label_kullaniciad" for="">Kullanıcı Adı</label>


                            <label class="input_label_sifre" for="">Şifre</label>
                            <input type="text" class="form-control duz-font text_input mt-4" name="password">
                        </div>

                        <div class="mt-2 text-danger" id="kayit-sonuc">

                        </div>

                        <button class="button" name="kayit" type="submit">Kayıt Ol</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        $('form[name=giris-form]').on('submit', function(e) {

            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: 'assets/php/ajax_giris.php',
                method: 'post',
                processData: false,
                contentType: false,
                cache: false,
                data: formData,
                success: function(response) {
                    if (response == "true") {
                        location.href = "index.php";
                    }
                    if (response == "false") {
                        $("#giris-yanlis").html("Kullanıcı Adı ya da Parola Yanlış veya Boş");
                    }
                }
            });
        });


        $('form[name=kayit-form]').on('submit', function(e) {

            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: 'assets/php/ajax_kayit.php',
                method: 'post',
                processData: false,
                contentType: false,
                cache: false,
                data: formData,
                success: function(response) {
                    $("#kayit-sonuc").html(response);
                }
            });
        });


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