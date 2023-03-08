<?php
// Classe de conexão: Responsável por retornar um PDO
class Conn implements IConn
{
    private $host;
    private $dbname;
    private $user;
    private $pass;

    public function __construct($host, $dbname, $user, $pass)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect()
    {
        try {
            return new \PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );
        } catch (PDOException $erro) {
            echo "Error! Message: " . $erro->getMessage() . " Code: " . $erro->getCode();
        }
    }
}
