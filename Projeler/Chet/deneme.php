<?php
    include_once("xcore/db.php");
    ob_start();
    session_start();
    

    $deneme = $pdo->prepare("SELECT * FROM message ORDER BY id");
    $deneme->execute();
    while($row= $deneme->fetch()){
        if($row["username"]==$_SESSION["username"]){
            $username="BEN";
        }else {
            $username=$row["username"];
        }

        echo '
        <div class="mesaj-grup">
            <h6><span>'.$username.'</span></h6>
            <div class="mesaj"><p>'.$row["mesaj"].' <span class="saat text-muted">'.$row["saat"].'</span></p></dib>
        </div>
        ';
    }
    echo '<div class="son-mesaj"></div>';
?>