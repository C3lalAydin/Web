<?php
                        
if($_POST){

    include_once("../../xcore/db.php");
ob_start();
session_start();
$_SESSION["id"] ="";

                            $username= $_POST["username"];
                            $password= $_POST["password"];
                            
                        
                            $kullanıcı = $pdo->prepare("select * from users where username=? and password=?;"); 
                            $kullanıcı ->execute(array($username,$password));
                            $islem = $kullanıcı->fetch();
                        
                            if ($islem==true) {
                                $_SESSION["login"] = "true";
                                $_SESSION["username"] = $username;
                                $_SESSION["password"] = $password;
                        
                                /*header("Location:index.php");*/
                                echo "true";
                            }else {
                                echo "false";
                                
                                /*header("Refresh: 2; url=../login.php");*/
                            }
                            
                            ob_end_flush();
                            
                        
    }
                        
?>