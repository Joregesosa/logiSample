<?php

require_once './conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
}


$query = "SELECT * FROM usuarios Where `correo` = ?";

try {

    $stm = $mysqli->prepare($query);

    $stm->bind_param('s', $username);

    $stm->execute();

    $result = $stm->get_result();

    $data = $result->fetch_assoc();

    $hash = $data['password'];

    if (password_verify($password, $hash)) {

        session_start();

        $_SESSION['usuarios'] = $data;

        header('location: ../table.php');
    } else {

        echo 'Credeciales incorrectas';
    }
} catch (mysqli_sql_exception $e) {
    echo  $e;
}
