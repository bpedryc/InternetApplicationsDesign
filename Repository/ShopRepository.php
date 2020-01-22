<?php


class ShopRepository extends Repository
{
    public function __construct(PDO $dbConnection)
    {
        parent::__construct($dbConnection);
    }

    public function getShops(){

        $statement = $this->connection->prepare("
           SELECT * FROM Shops 
        ");
        $statement->execute();

        $shops_serialized = $statement->fetchAll(PDO::FETCH_ASSOC);

        $shops = array();
        foreach ($shops_serialized as $shop_serialized){
            $shop = new Shop(
                $shop_serialized['Name'],
                $shop_serialized['AddressId'],
                $shop_serialized['Photo'],
                $shop_serialized['Id']
            );
            array_push($shops, $shop);
        }

        return $shops;
    }
}