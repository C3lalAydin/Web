<?php
                        
if($_POST){

    include_once("../../xcore/db.php");
    ob_start();
    session_start();
    $_SESSION["id"] ="";
                            $username= $_POST["username"];
                            $password= $_POST["password"];
                            
                        
                            $kullanıcı_kontrol = $pdo->prepare("select * from users where username=?;"); 
                            $kullanıcı_kontrol ->execute(array($username));
                            $sonuc = $kullanıcı_kontrol->fetch();
                        
                            if ($sonuc==true) {
                                echo "Bu Kullanıcı Adı Zaten Kayıtlı";
                            }else {

                                $ekle=$pdo->prepare("insert into users set username=?,password=?");
                                $ekle -> execute(array($username,$password));
                                if($ekle){
                                    echo "Kayıt Başarılı";
                                }else {
                                    echo "Bir Hata Oluştu Kayıt Başarısız";
                                    
                                }
                            }
                            
                            ob_end_flush();
                            
                        
}
                        
?>