<?php

require_once 'src/Models/Product.php';

class ProductDaoMySql {

    private $pdo;

    public function __construct(PDO $driver) {
        $this->pdo = $driver;
    }

    public function add(Product $p) {

        $sql = $this->pdo->prepare("INSERT INTO produtos (nome, preco, categoria) VALUES (?, ?, ?)");
        $sql->execute([$p->getName(), $p->getPrice(), $p->getCategory()]);

    }

    public function FindAll() {
        $array = [];
        $sql = $this->pdo->query("SELECT * FROM produtos");

        if($sql->rowCount() > 0) {
            $data = $sql->fetchAll();
            foreach($data as $item) {
                $p = new Product();
                $p->setId($item['id']);
                $p->setName($item['nome']);
                $p->setPrice($item['preco']);
                $p->setRegistrationDate($item['categoria']);
                $p->setRegistrationDate($item['data_cadastro']);

                $array[] = $p;
            }
        }
        
        return $array;

    }

    public function FindById($id) {

    }

    public function update(Product $p) {

    }

    public function delete($id) {

    }
}