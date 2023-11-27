<?php

require_once './conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $password = $_POST['password'];
}

$hash = password_hash($password, PASSWORD_DEFAULT);
 

$sql = "INSERT INTO usuarios(`correo`, `password`) VALUE (?, ?)";

try {
    $stm = $mysqli->prepare($sql);
    $stm->bind_param('ss', $correo, $hash);
    $stm->execute();

    header('location: ../index.php');
} catch (mysqli_sql_exception $e) {
    echo $e->getMessage();
}
