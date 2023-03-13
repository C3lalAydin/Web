<?php

$host = 'localhost';
$db   = 'chet';
$user = 'root';
$pass = '';
      
/*
$host = ' ';
$db   = ' ';
$user = ' ';
$pass = ' ';
*/  
$sql = "mysql:host=$host;dbname=$db";
try {
     $pdo = new PDO($sql, $user, $pass);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
