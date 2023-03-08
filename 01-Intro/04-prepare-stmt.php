<?php

try {
    $conn = new \PDO("mysql:host=localhost;dbname=test_oo", "root", "");
    $query = "SELECT * from `products` WHERE idproducts=:id";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();

    print_r($stmt->fetchAll());
} catch (PDOException $erro) {
    echo "Error! Message: " . $erro->getMessage() . " Code: " . $erro->getCode();
}
