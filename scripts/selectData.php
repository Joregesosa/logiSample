<?php
require_once './conn.php';
$query = "SELECT * FROM `personas`";

try {

    $stm = $mysqli->prepare($query);

    $stm->execute();

    $result = $stm->get_result();

    $data = $result->fetch_all(MYSQLI_ASSOC);

    session_start();
    
    $_SESSION['listaUsuarios'] = $data;

    header('location: ../table.php');
    
} catch (mysqli_sql_exception $e) {
    echo  $e;
}
