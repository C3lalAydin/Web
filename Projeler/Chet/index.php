<?php

include("xcore/db.php");
ob_start();
session_start();
$username=$_SESSION["username"];
 
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="">

        <div class="header">
            <i class="fa-solid fa-user"></i>
            <span style="margin-left: 5px;font-weight: bold;"><?php echo $username;?></span>
            <button class="btn btn-danger float-end" id="cikis_btn">Çıkış Yap</button>
        </div>


        <div class="body container text-start" id="userlar">

        </div>
        


        <div class="footer">
            <form action="" id="gonder_form" method="post">
                <div class="input-group container">
                <input class="form-control " name="mesaj" placeholder="Mesajınızı Girin..." id="mesaj_input" type="text">
                <button class="btn btn-primary">Gönder</button>
                </div>
            </form>
        </div>

        <!--<form action="sil.php" method="post">
            <button class="btn btn-danger" type="submit">Çıkış Yap</button>
        </form>-->
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

$('html,body').animate({ scrollTop: 9999999 });


    $(document).ready(function() {
        $("#userlar").load("deneme.php");
        var refreshId = setInterval(function() {
            $("#userlar").load('deneme.php?randval=' + Math.random());
        }, 500);

        $("#cikis_btn").click(function (e) { 
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "sil.php",
                data: "data",
                dataType: "dataType",
            });
            window.location.reload()
            
        });
    });


    $(document).on("submit", "#gonder_form", function(event){ //infoForm id li form post edildiğinde
        
	    event.preventDefault();
        $.ajax({
            url: "gonder.php", 
            type: "POST",             
            data: new FormData(this),
            dataType: "json",
            contentType: false,       
            cache: false,             
            processData:false, 
            success: function(data) {
                alert(data["result"]); //post sonucunu yazdir
                console.log(data['data']); //girilen verileri console ekranina yazdır
            }
        });
        $("#mesaj_input").val("");
        $('html,body').animate({ scrollTop: 9999999 });
    });

    </script>
</body>

</html>