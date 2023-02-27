<?php
/*
$host = 'localhost';
$db   = 'login_test';
$user = 'root';
$pass = '';
*/

$host = 'sql309.epizy.com';
$db   = 'epiz_32077589_test';
$user = 'epiz_32077589';
$pass = '2nNJe9ZpgZGi';

$sql = "mysql:host=$host;dbname=$db";
try {
     $pdo = new PDO($sql, $user, $pass);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>