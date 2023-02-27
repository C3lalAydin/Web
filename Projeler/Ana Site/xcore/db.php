<?php

$host = 'localhost';
$db   = 'chet';
$user = 'root';
$pass = '';
      
/*
$host = 'sql303.epizy.com';
$db   = 'epiz_31295600_login_test';
$user = 'epiz_31295600';
$pass = 'S5ZMNviU5F';
*/  
$sql = "mysql:host=$host;dbname=$db";
try {
     $pdo = new PDO($sql, $user, $pass);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>