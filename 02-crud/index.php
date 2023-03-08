<?php
require_once('IConn.php'); // Apenas interface
require_once('Conn.php'); // Retorna a conexão \PDO
require_once('IProduct.php'); // Apenas interface
require_once('Product.php'); // Classe Product sem construtor, possui getters and setters
require_once('ServiceProduct.php'); // Serviço de CRUD
/** CRUD: list, save, update e delete
 * $service->list(): Seleciona tudo e retorna uma array associativo - fetchAll(\PDO::FETCH_ASSOC)
 * $service->save(): Salva novo produto e retorna último ID inserido
 */

$db = new Conn('localhost', 'test_oo', 'root', '');
$product = new Product;
$product->setName('HTML course')->setDesc('Aulas de HTML 5');
$service = new ServiceProduct($db, $product);

// print_r($service->save());
// print_r($service->list());


$car = new Product;
$car->setName('Chevrolet Astra')->setDesc('Carro hatch de 4 portas de 127cv');
$carService = new ServiceProduct($db, $car);
// print_r($carService->save());
// print_r($carService->list());

$golBolinha = new Product;
$golBolinha->setName('Volkswagen Gol')->setDesc('Gol bolinha de 40cv')->setId(6);
// print_r($golBolinha);
$golService = new ServiceProduct($db, $golBolinha);
// print_r($golService->update());
print_r($golService->list());
