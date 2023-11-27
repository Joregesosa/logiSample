<?php 


require_once './connPDO.php';

$sql = "SELECT * FROM personas";

try {
    $stm = $pdo->prepare($sql);

    $stm->execute();

    $result = $stm->fetchAll(PDO::FETCH_ASSOC);

    print_r($result);
   
} catch (PDOException $e) {
    echo $e->getMessage();
}