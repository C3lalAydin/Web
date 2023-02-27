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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<style>
.upload-img img {
    width: 100%;
    padding: 1.5rem;
    padding-bottom: 0;
}

.upload-img p {
    text-align: center;
}
</style>

<body>

    <div class="container">

    <?php
    $kullanici_ad = $username;
    ?>


        <div class="mt-5">
            <h2 style="display:inline;"><?php echo $kullanici_ad?></h2>
            <button class="btn btn-danger float-end" id="cikis_btn">Çıkış Yap</button>
        </div>  
        


        <div class="mt-2" id="sonuc"></div>

        <form name="yukle" enctype="multipart/form-data">
            <input type="text" name="klasorName" value="<?php echo $kullanici_ad?>" style="display:none;">
            <input type="file" name="selectFile[]" id="" multiple>
            <input type="submit" value="Yükle" id="YukleBtn">
        </form>

        <div class="card mt-5">
            <div class="row">
                <?php
                            $dosyalar = glob('uploads/'.$kullanici_ad.'/*');
                            
                            if (count($dosyalar) == 0) {

                                echo '
                                <div class="col-md-12 text-center">
                                   <p>Bu Kullanıcının Hiç Bir Dosyası Yok </p>
                                </div>';
                            }
                            $i = 1;
                            foreach ($dosyalar as $dosya) {
                                

                                $dosya_ad = str_replace('uploads/'.$kullanici_ad.'/', "", $dosya);
                        
                            echo '
                            <div class="col-md-2">
                                <div class="upload-img text-center">
                                    <img src="'.$dosya.'" alt="">
                                    <a id="DownloadBtn'.$i.'" href="'.$dosya.'" target="_blank"><p>'.$dosya_ad.'</p></a>
                                    <a kimlik="'.$i.'" class="btn btn-danger mb-2 DeleteBtn">X</a>
                                    <a href="'.$dosya.'" download class="btn btn-primary mb-2">İndir</a>
                                </div>
                            </div>';

                            $i++;
                        
                            }
                ?>

                <!--
                <div class="col-md-2">
                    <div class="upload-img">
                        <img src="uploads/deneme/679478.jpg" alt="">
                        <p>Aa</p>
                    </div>
                </div>
                        -->
            </div>
        </div>




    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".DeleteBtn").click(function(e) {
            $deletebtn = $(this).attr("kimlik");

            $kimlik = "#DownloadBtn" + $deletebtn;

            $downloadbtn = $($kimlik).attr("href");

            $path = $downloadbtn;

            $.ajax({
                url: 'assets/php/file_delete.php',
                type: 'post',
                data: {
                    path: $path
                },
                success: function(response,path) { 
                    location.reload();
                    
                }
            });
        });



        $('form[name=yukle]').on('submit', function(e) {

            e.preventDefault();
            var formData = new FormData(this); 

            $.ajax({
                url: 'assets/php/upload.php',
                type: 'post',
                cache:false,
                contentType: false,
                processData: false,
                data: formData,
                success: function(response,path) {

                    $("#sonuc").html(response);
 
                    location.reload();
                    
                }
            });
        });



        $("#cikis_btn").click(function (e) { 
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "assets/php/cikis.php",
                data: "data",
                dataType: "dataType",
            });
            window.location.reload()
            
        });

    });
    </script>
</body>

</html>