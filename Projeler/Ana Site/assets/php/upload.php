<?php

if ($_POST) {

            $dosya_sayisi=count($_FILES["selectFile"]["name"]);
            $klasorName = $_POST["klasorName"];

            if (file_exists("../../uploads/".$klasorName)) {
                $uploaddir = "../../uploads/".$klasorName."/";
            }else {
                mkdir("../../uploads/".$klasorName);
                $uploaddir = "../../uploads/".$klasorName."/";
            }

            for($i=0;$i<$dosya_sayisi;$i++) {
                $uploadfile = $uploaddir . basename($_FILES["selectFile"]["name"][$i]);
                $gelen_dosya = $_FILES["selectFile"]["name"][$i];
            
            
                if (move_uploaded_file($_FILES["selectFile"]["tmp_name"][$i],$uploadfile)) {
                    echo 'başarılı <br />';
                }else {
                    echo "başarısız";
                }
            }



        
}


?>