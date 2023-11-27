<?php 

// $dsn = 'mysql:host=localhost;dbname=login';

$host = 'localhost';
$dbname = 'login';
$user = 'root';
$pass = '';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    echo 'Conectado';
} catch (PDOException $e) {
   echo $e->getMessage();
}