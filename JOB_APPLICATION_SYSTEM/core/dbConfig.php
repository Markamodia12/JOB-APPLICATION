<?php  
$host = "localhost";
$user = "root";
$password = "";
$dbname = "Amodia4";
$dsn = "mysql:host={$host};dbname={$dbname}";
$pdo = new PDO($dsn, $user, $password);
?>