<?php

class ProductRepository extends Repository
{
    public function __construct(PDO $dbConnection)
    {
        parent::__construct($dbConnection);
    }

    public function getProducts($shopId){
        $statement = $this->connection->prepare("
            SELECT * FROM Products WHERE ShopId = :shopId
        ");

        $statement->execute([
            'shopId' => $shopId
        ]);

        $products_serialized = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $products_serialized;
    }
}