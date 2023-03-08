<?php
require_once('IConn.php'); // Apenas interface
require_once('Conn.php'); // Retorna a conexão \PDO
require_once('IProduct.php'); // Apenas interface
require_once('Product.php'); // Classe Product sem construtor, possui getters and setters
require_once('ServiceProduct.php'); // Serviço de CRUD

$db = new Conn('localhost', 'test_oo', 'root', '');
$product = new Product;
$service = new ServiceProduct($db, $product);

print_r($service->list());
