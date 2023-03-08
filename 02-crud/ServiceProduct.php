<?php

class ServiceProduct
{
    private $db;
    private $product;

    public function __construct(IConn $db, IProduct $product)
    {
        $this->db = $db->connect();
        $this->product = $product;
    }

    public function list()
    {
        $query = "SELECT * from `products`";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function save()
    {
        $query = "INSERT into `products` (`name`, `desc`) VALUES (:name, :desc)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":name", $this->product->getName());
        $stmt->bindValue(":desc", $this->product->getDesc());
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}
