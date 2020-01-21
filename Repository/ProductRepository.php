<?php

class ProductRepository extends Repository
{
    public function getProducts($shopId){
        $statement = $this->database->connect()->prepare("
            SELECT * FROM Products WHERE ShopId = :shopId
        ");

        $statement->execute([
            'shopId' => $shopId
        ]);

        $products_serialized = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $products_serialized;
    }
}