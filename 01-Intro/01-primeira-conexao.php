<?php

try {
    $conn = new \PDO("mysql:host=localhost;dbname=test_oo", "root", "");

    $query = "SELECT * from `products`";
    // $query = "INSERT into `products` (`name`, `desc`) values ('eBook', 'Learn PHP')";
    // $stmt = $conn->exec($query);

    $stmt = $conn->query($query);
    $list = $stmt->fetchAll();
    echo $list[0]['name'];
    // print_r($list);
} catch (PDOException $erro) {
    echo "Error! Message: " . $erro->getMessage() . " Code: " . $erro->getCode();
}
