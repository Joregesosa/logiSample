<?php
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'login';
$port = 3306;

try {

    $mysqli = new mysqli($host, $user, $pass, $db, $port );
 
} catch (mysqli_sql_exception $e) {

     echo $e;
     
}

