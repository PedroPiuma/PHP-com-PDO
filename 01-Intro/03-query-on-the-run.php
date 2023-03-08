<?php

try {
    $conn = new \PDO("mysql:host=localhost;dbname=test_oo", "root", "");
    $query = "SELECT * from `products` ORDER BY idproducts desc";
    $conn->query($query);
    foreach ($conn->query($query) as $product) {
        echo $product['name'];
        echo "<br>";
    }
} catch (PDOException $erro) {
    echo "Error! Message: " . $erro->getMessage() . " Code: " . $erro->getCode();
}
